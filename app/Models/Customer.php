<?php

namespace App\Models;

class Customer extends Base
{
    //
    public function path()
    {
        return '/customers/' . $this->id;
    }

    public function getclassAttribute()
    {
        return get_class($this);
    }

    public function timelines()
    {
	return $this->hasMany('App\Models\Timeline')->orderBy('created_at', 'desc');
    }

    public function createStripeCustomer()
    {
    	    $sc = \Stripe\Customer::create([
	        'email' => $this->owner->email,
	        'description' => $this->description,
		'metadata' => [
		    'account_id' => $this->account_id,
		    'customer_id' => $this->id,
		],
	    ], 'sk_test_pkUBnMZ0EEuUhIWsJGeyVNuX');
	    $this->stripe_id = $sc->id;
	    $this->save();
    }
}
