<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'DefaultController@index')->name('home');

Route::get('/login', 'SessionsController@create')->name('login');
Route::post('/login', 'SessionsController@store');
Route::post('/logout', 'SessionsController@destroy')->name('logout');
Route::get('/register', 'RegistrationController@create')->name('register');
Route::get('/signup', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/profile', 'ProfileController@index')->name('profile');

Route::model('client', App\Models\Customer::class);

Route::resource('accounts', 'AccountsController');
Route::resource('activities', 'ActivitiesController');
Route::resource('addresses', 'AddressesController');
Route::resource('authors', 'AuthorsController');
Route::resource('blog', 'BlogController');
Route::resource('books', 'BooksController');
Route::resource('channels', 'ChannelsController');
Route::resource('clients', 'CustomersController');
Route::resource('contact', 'ContactController');
Route::resource('contacts', 'ContactsController');
Route::resource('countries', 'CountriesController');
Route::resource('currencies', 'CurrenciesController');
Route::resource('customers', 'CustomersController');
Route::resource('default', 'DefaultController');
Route::resource('devices', 'DevicesController');
Route::resource('domains', 'DomainsController');
Route::resource('exceptions', 'ExceptionsController');
Route::delete('/favorites', 'FavortitesController@destroy');
Route::resource('favorites', 'FavoritesController');
Route::resource('follows', 'FollowsController');
Route::resource('forums', 'ForumsController');
Route::post('/forums/{forum}/threads', 'ThreadsController@store');
Route::resource('invoices', 'InvoicesController');
Route::resource('issues', 'IssuesController');
Route::post('/issues/{issue}/replies', 'RepliesController@store');
Route::resource('links', 'LinksController');
Route::get('/notifications/list', 'NotificationsController@list');
Route::resource('notifications', 'NotificationsController');
Route::resource('orders', 'OrdersController');
Route::resource('organizations', 'OrganizationsController');
Route::resource('pages', 'PagesController');
Route::resource('payments', 'PaymentsController');
Route::resource('phone-numbers', 'PhoneNumbersController');
Route::resource('plans', 'PlansController');
Route::resource('posts', 'PostsController');
Route::post('/posts/{post}/replies', 'RepliesController@store');
Route::resource('priorities', 'PrioritiesController');
Route::resource('provinces', 'ProvincesController');
Route::resource('publishers', 'PublishersController');
Route::resource('ratings', 'RatingsController');
Route::resource('receipts', 'ReceiptsController');
Route::resource('records', 'RecordsController');
Route::get('/replies/list', 'RepliesController@list');
Route::resource('replies', 'RepliesController');
Route::resource('resolutions', 'ResolutionsController');
Route::resource('resources', 'ResourcesController');
Route::resource('series', 'SeriesController');
Route::resource('sessions', 'SessionsController');
Route::resource('sources', 'SourcesController');
Route::resource('statuses', 'StatusesController');
Route::resource('steps', 'StepsController');
Route::resource('subscriptions', 'SubscriptionsController');
Route::resource('threads', 'ThreadsController');
Route::post('/threads/{thread}/replies', 'RepliesController@store');
Route::resource('timelines', 'TimelinesController');
Route::resource('tutorials', 'TutorialsController');
Route::resource('types', 'TypesController');
Route::resource('users', 'UsersController');
Route::resource('views', 'ViewsController');
Route::resource('votes', 'VotesController');
Route::resource('websites', 'WebsitesController');
Route::resource('zones', 'ZonesController');

Route::get('/mailable', function () {
  $user = App\Models\User::first();
  return new App\Mail\RegistrationComplete($user);
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('send_test_email', function(){
    Mail::raw('Sending emails with Mailgun and Laravel is easy!', function($message) {
        $message->to('mclemmer@gmail.com', 'Matt Clemmer');
	$message->from('no-reply@dev.mazestonelaw.com', 'No-Reply | Maze & Stone');
	$message->subject('Mailgun and Laravel Test');
      });
});

Route::get('/{page}', 'PagesController@show');
