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
    	\App\Models\Account::class => \App\Policies\AccountPolicy::class,
        \App\Models\Activity::class => \App\Policies\ActivityPolicy::class,
        \App\Models\Address::class => \App\Policies\AaddressPolicy::class,
        \App\Models\Alias::class => \App\Policies\AliasPolicy::class,
        \App\Models\Author::class => \App\Policies\AuthorPolicy::class,
        \App\Models\Book::class => \App\Policies\BookPolicy::class,
        \App\Models\Calendar::class => \App\Policies\CalendarPolicy::class,
        \App\Models\CaseNote::class => \App\Policies\CaseNotePolicy::class,
        \App\Models\CaseType::class => \App\Policies\CaseTypePolicy::class,
        \App\Models\Cateogry::class => \App\Policies\CategoryPolicy::class,
        \App\Models\Channel::class => \App\Policies\ChannelPolicy::class,
        \App\Models\ClientCase::class => \App\Policies\ClientCasePolicy::class,
        \App\Models\Client::class => \App\Policies\ClientPolicy::class,
        \App\Models\Contact::class => \App\Policies\ContactPolicy::class,
        \App\Models\Country::class => \App\Policies\CountryPolicy::class,
        \App\Models\Currency::class => \App\Policies\CurrencyPolicy::class,
        \App\Models\Customer::class => \App\Policies\CustomerPolicy::class,
        \App\Models\Device::class => \App\Policies\DevicePolicy::class,
        \App\Models\Domain::class => \App\Policies\DomainPolicy::class,
        \App\Models\Email::class => \App\Policies\EmailPolicy::class,
        \App\Models\Exception::class => \App\Policies\ExceptionPolicy::class,
        \App\Models\Favorite::class => \App\Policies\FavoritePolicy::class,
        \App\Models\Follow::class => \App\Policies\FollowPolicy::class,
        \App\Models\Fundraiser::class => \App\Policies\FundraiserPolicy::class,
        \App\Models\Group::class => \App\Policies\GroupPolicy::class,
        \App\Models\Invoice::class => \App\Policies\InvoicePolicy::class,
        \App\Models\Issue::class => \App\Policies\IssuePolicy::class,
        \App\Models\LineItem::class => \App\Policies\LineItemPolicy::class,
        \App\Models\Link::class => \App\Policies\LinkPolicy::class,
        \App\Models\Media::class => \App\Policies\MediaPolicy::class,
        \App\Models\Order::class => \App\Policies\OrderPolicy::class,
        \App\Models\Organization::class => \App\Policies\OrganizationPolicy::class,
        \App\Models\Page::class => \App\Policies\PagePolicy::class,
        \App\Models\PhoneNumber::class => \App\Policies\PhoneNumberPolicy::class,
        \App\Models\Plan::class => \App\Policies\PlanPolicy::class,
        \App\Models\Post::class => \App\Policies\PostPolicy::class,
        \App\Models\Priority::class => \App\Policies\PriorityPolicy::class,
        \App\Models\Product::class => \App\Policies\ProductPolicy::class,
        \App\Models\Province::class => \App\Policies\ProvincePolicy::class,
        \App\Models\Publisher::class => \App\Policies\PublisherPolicy::class,
        \App\Models\Rating::class => \App\Policies\RatingPolicy::class,
        \App\Models\Record::class => \App\Policies\RecordPolicy::class,
        \App\Models\Reply::class => \App\Policies\ReplyPolicy::class,
        \App\Models\Resolution::class => \App\Policies\ResolutionPolicy::class,
        \App\Models\Resource::class => \App\Policies\ResourcePolicy::class,
        \App\Models\Series::class => \App\Policies\SeriesPolicy::class,
        \App\Models\Server::class => \App\Policies\ServerPolicy::class,
        \App\Models\Session::class => \App\Policies\SessionPolicy::class,
        \App\Models\Setting::class => \App\Policies\SettingPolicy::class,
        \App\Models\Source::class => \App\Policies\SourcePolicy::class,
        \App\Models\Status::class => \App\Policies\StatusPolicy::class,
        \App\Models\Step::class => \App\Policies\StepPolicy::class,
        \App\Models\Subscription::class => \App\Policies\SubscriptionPolicy::class,
        \App\Models\Tag::class => \App\Policies\TagPolicy::class,
        \App\Models\Task::class => \App\Policies\TaskPolicy::class,
        \App\Models\Thread::class => \App\Policies\ThreadPolicy::class,
        \App\Models\Topic::class => \App\Policies\TopicPolicy::class,
        \App\Models\Transaction::class => \App\Policies\TransactionPolicy::class,
        \App\Models\Tutorial::class => \App\Policies\TutorialPolicy::class,
        \App\Models\Type::class => \App\Policies\TypePolicy::class,
        \App\Models\User::class => \App\Policies\UserPolicy::class,
        \App\Models\View::class => \App\Policies\ViewPolicy::class,
        \App\Models\Vote::class => \App\Policies\VotePolicy::class,
        \App\Models\Website::class => \App\Policies\WebsitePolicy::class,
        \App\Models\Zone::class => \App\Policies\ZonePolicy::class,
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
