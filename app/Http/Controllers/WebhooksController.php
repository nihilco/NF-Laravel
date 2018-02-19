<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Stripe\Event as StripeEvent;
use Illuminate\Routing\Controller;
use Symphony\Component\HttpFoundation\Response;
use App\Models\Customer;

class WebhooksController extends Controller
{
    //
    public function handleWebhook(Request $request)
    {
        $payload = json_decode($request->getContent(), true);

	if(! $this->isInTestingEnvironment() && ! $this->eventExistsOnStripe($payload['id'])) {
	    return;
	}

	$method = 'handle' . studly_case(str_replace('.', '_', $payload['type']));

	if(method_exists($this, $method)) {
	    return $this->{$method}($payload);
	} else {
	    return $this->missingMethod();
	}
    }

    //
    protected function handleCustomerSubscriptionDeleted(array $payload)
    {
        $customer = $this->getCustomerByStripeId($payload['data']['object']['customer']);

	if($customer) {
	    $customer->subscriptions->filter(function ($subscription) use ($payload) {
	    return $subscription->stripe_id === $payload['data']['object']['id'];
	    })->each(function ($subscription) {
	        $subscription->markAsCancelled();
	    });
	}

	return new Response('Webhook Handled', 200);
    }

    protected function getCustomerByStripeId($sid)
    {
        return Customer::where('stripe_id', $sid)->first();
    }

    protected function eventExistsOnStripe($id)
    {
        try {
	    return ! is_null(StripeEvent::retrieve($id, Stripe::getApiKey()));
	} catch (Exception $e) {
	    return false;
	}
    }

    protected function isInTestingEnvironment()
    {
        return getenv('STRIPE_MODE') === 'test';
    }

    public function missingMethod($params = [])
    {
        return new Response;
    }
}
