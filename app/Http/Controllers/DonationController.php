<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['create', 'store']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('donation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //dd(request());

        $this->validate(request(), [
            'stripeToken' => 'required',
            'name' => 'required',
            'amount' => 'required|regex:/^\d*(\.\d{1,2})?$/',
            'email' => 'required|email',
            'comments' => '',
        ]);
        
        //\Stripe\Stripe::setApiKey("sk_test_pkUBnMZ0EEuUhIWsJGeyVNuX");
	\Stripe\Stripe::setApiKey("sk_live_nZcSFL3SnsvRX5Hq0ukaLloz");
        $token = \Stripe\Token::retrieve(request('stripeToken'));
        
        if($token) {

            try {

                \Stripe\Charge::create(array(
                    "amount" => request('amount') * 100,
                    "currency" => "usd",
                    "source" => $token->id,
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
}
