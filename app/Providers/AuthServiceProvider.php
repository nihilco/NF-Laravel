<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
    	\App\Models\Author::class => \App\Policies\AuthorPolicy::class,
	\App\Models\Book::class => \App\Policies\BookPolicy::class,
	\App\Models\Client::class => \App\Policies\ClientPolicy::class,
	\App\Models\ClientCase::class => \App\Policies\ClientCasePolicy::class,
	\App\Models\CaseNote::class => \App\Policies\CaseNotePolicy::class,
	\App\Models\Country::class => \App\Policies\CountryPolicy::class,
	\App\Models\Customer::class => \App\Policies\CustomerPolicy::class,
	\App\Models\Province::class => \App\Policies\ProvincePolicy::class,
        \App\Models\Reply::class => \App\Policies\ReplyPolicy::class,
	\App\Models\Thread::class => \App\Policies\ThreadPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
	Gate::before(function ($user) {
	    if($user->id == 1) {
	        return true;
	    }
	});
    }
}
