<?php

namespace App\Http\Controllers;

use App\Models\Fundraiser;
use Illuminate\Http\Request;

class FundraisersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['show', 'update']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $fundraisers = Fundraiser::all();
        return view('fundraisers.index', compact('fundraisers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('fundraisers.create', compact([]));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fundraiser $fundraiser
     * @return \Illuminate\Http\Response
     */
    public function show(Fundraiser $fundraiser)
    {
        if($fundraiser->id == 1) {
            return view('fundraisers.solar-panel', compact('fundraiser'));
        }
        
        //
        return view('fundraisers.show', compact('fundraiser'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fundraiser $fundraiser
     * @return \Illuminate\Http\Response
     */
    public function edit(Fundraiser $fundraiser)
    {
        //
        return view('fundraisers.edit', compact(['fundraiser']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Fundraiser $fundraiser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fundraiser $fundraiser)
    {
        //
        $this->validate(request(), [
            'stripeToken' => 'required',
            'name' => 'required',
            'amount' => 'required',
            'email' => 'required|email',
            'comments' => '',
        ]);
        
        \Stripe\Stripe::setApiKey("sk_test_pkUBnMZ0EEuUhIWsJGeyVNuX");
        $token = \Stripe\Token::retrieve(request('stripeToken'));
        
        if($token) {

            try {

                \Stripe\Charge::create(array(
                    "amount" => request('amount') * 100,
                    "currency" => "usd",
                    "source" => $token->id,
                    "description" => "Test Charge",
                    "metadata" => [
                        'comments' => request('comments'),
                        'fundraiser' => 'Solar Panel Fundraiser 2018',
                    ],
                    'receipt_email' => request('email'),
                ), array(
                    "stripe_account" => "acct_17OfNeG8vwHYcmsJ"
                ));

                //
                $fundraiser->actual += (request('amount') * 100);
        
                $fundraiser->save();

                if(request()->expectsJson()) {
                    return $fundraiser->load(['creator', 'owner']);
                }

                return redirect($fundraiser->path());
                                
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fundraiser $fundraiser
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fundraiser $fundraiser)
    {
        //
        $this->authorize('delete', $fundraiser);
        
        //
        $fundraiser->delete();
        
        if(request()->wantsJson()) {
            return response([], 204);
        }
        
        return redirect('/fundraisers');
    }
}
