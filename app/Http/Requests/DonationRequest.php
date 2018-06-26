<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\User;
use Mail;
use App\Mail\DonationMonitors;
use App\Mail\DonationReceipt;
use Carbon\Carbon;

class DonationRequest extends FormRequest
{
    public $token;
    public $charge;
    
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'stripeToken' => 'required',
            'name' => 'required',
            'amount' => 'required|regex:/^\d*(\.\d{1,2})?$/',
            'email' => 'required|email',
            'comments' => '',
        ];
    }

    public function persist()
    {
        $this->getStripeApiKey();

        $this->token = \Stripe\Token::retrieve(request('stripeToken'));
        
        if($this->token) {
            
            try {
                
                $this->charge = \Stripe\Charge::create(array(
                    "amount" => request('amount') * 100,
                    "currency" => "usd",
                    "source" => $this->token->id,
                    "description" => "General Donation",
                    "metadata" => [
                        'name' => request('name'),
                        'comments' => request('comments'),
                    ],
                    'receipt_email' => request('email'),
                ), array(
                    "stripe_account" => "acct_17OfNeG8vwHYcmsJ"
                ));

                if(request()->expectsJson()) {
                    return response('Success', 200);
                }

                $monitors = [
                    'Uriah' => 'uriah@nihil.co',
                    //'Tim' => 'tim@taraloka.org',
                ];
                
                Mail::to($monitors)->send(new DonationMonitors($this));	
                Mail::to([$this->name => $this->email])->send(new DonationReceipt($this));   

                return view('donation.success');
                
            } catch(\Stripe\Error\Card $e) {
                // Since it's a decline, \Stripe\Error\Card will be caught
                $body = $e->getJsonBody();
                $err  = $body['error'];
                dd($err);
                print('Status is:' . $e->getHttpStatus() . "\n");
                print('Type is:' . $err['type'] . "\n");
                print('Code is:' . $err['code'] . "\n");
                // param is '' in this case
                print('Param is:' . $err['param'] . "\n");
                print('Message is:' . $err['message'] . "\n");
            } catch (\Stripe\Error\RateLimit $e) {
                // Too many requests made to the API too quickly
            } catch (\Stripe\Error\InvalidRequest $e) {
                // Invalid parameters were supplied to Stripe's API
            } catch (\Stripe\Error\Authentication $e) {
                // Authentication with Stripe's API failed
                // (maybe you changed API keys recently)
            } catch (\Stripe\Error\ApiConnection $e) {
                // Network communication with Stripe failed
            } catch (\Stripe\Error\Base $e) {
                // Display a very generic error to the user, and maybe send
                // yourself an email
            } catch (Exception $e) {
                // Something else happened, completely unrelated to Stripe
            }
            
        }

    }

    private function getStripeApiKey()
    {
        if(env('STRIPE_MODE') == 'live') {
            \Stripe\Stripe::setApiKey(env('STRIPE_PLATFORM_LIVE_SECTRET'));
        }else{
            \Stripe\Stripe::setApiKey(env('STRIPE_PLATFORM_TEST_SECRET'));
        }
    }
    
}
