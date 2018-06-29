<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\User;
use Mail;
use App\Mail\FundraiserMonitors;
use App\Mail\FundraiserReceipt;
use Carbon\Carbon;

class FundraiserRequest extends FormRequest
{
    public $token;
    public $charge;
    public $fundraiser;
    
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
            'comments' => 'string|max:500',
        ];
    }

    public function persist($fundraiser)
    {
        $this->fundraiser = $fundraiser;
        
        $this->getStripeApiKey();

        $this->sanitize();

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
                        'email' => request('email'),
                        'comments' => request('comments'),
                    ],
                    //'receipt_email' => request('email'),
                ), array(
                    "stripe_account" => "acct_17OfNeG8vwHYcmsJ"
                ));

                //
                $this->fundraiser->actual += (request('amount') * 100);
        
                $this->fundraiser->save();

                $monitors = [
                    'Uriah' => 'uriah@nihil.co',
                    'Tim' => 'tim@taraloka.org',
                ];
                
                Mail::to($monitors)->send(new FundraiserMonitors($this));	
                Mail::to([$this->name => $this->email])->send(new FundraiserReceipt($this));

                return true;
                
            } catch(\Stripe\Error\Card $e) {
                // Since it's a decline, \Stripe\Error\Card will be caught
                $body = $e->getJsonBody();
                $err  = $body['error'];
                //dd($err);
                print('Status is:' . $e->getHttpStatus() . "\n");
                print('Type is:' . $err['type'] . "\n");
                print('Code is:' . $err['code'] . "\n");
                // param is '' in this case
                print('Param is:' . $err['param'] . "\n");
                print('Message is:' . $err['message'] . "\n");
                abort(500, 'Card Error.');
            } catch (\Stripe\Error\RateLimit $e) {
                // Too many requests made to the API too quickly
                abort(500, 'Rate Limit Error.');
            } catch (\Stripe\Error\InvalidRequest $e) {
                // Invalid parameters were supplied to Stripe's API
                abort(500, 'Invalid Request Error.');
            } catch (\Stripe\Error\Authentication $e) {
                // Authentication with Stripe's API failed
                // (maybe you changed API keys recently)
                abort(500, 'Authenticaion Error.');
            } catch (\Stripe\Error\ApiConnection $e) {
                // Network communication with Stripe failed
                abort(500, 'API Error.');
            } catch (\Stripe\Error\Base $e) {
                // Display a very generic error to the user, and maybe send
                // yourself an email
                abort(500, 'Stripe Error.');
            } catch (Exception $e) {
                // Something else happened, completely unrelated to Stripe
                abort(500, 'Exception Error.');
            }
            
        }

    }

    private function getStripeApiKey()
    {
        if(env('STRIPE_MODE') == 'live') {
	    $key = env('STRIPE_PLATFORM_LIVE_SECRET');
        }else{
            $key = env('STRIPE_PLATFORM_TEST_SECRET');
        }
	
	\Stripe\Stripe::setApiKey($key);
    }

    private function sanitize()
    {
        $input = $this->all();

        //$input['name'] = filter_var($input['name'], FILTER_SANITIZE_STRING);
        $input['name'] = filter_var($input['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        //$input['comments'] = filter_var($input['comments'], FILTER_SANITIZE_STRING);
        $input['comments'] = filter_var($input['comments'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        $this->replace($input);
    }
    
}
