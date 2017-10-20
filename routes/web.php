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

Route::get('/', function () {
    return view('default.index');
});

Route::resource('accounts', 'accountsAccountsController');
Route::resource('activities', 'ActivitiesController');
Route::resource('addresses', 'AddressesController');
Route::resource('authors', 'AuthorsController');
Route::resource('books', 'BooksController');
Route::resource('clients', 'ClientsController');
Route::resource('comments', 'CommentsController');
Route::resource('contact', 'ContactController');
Route::resource('contacts', 'ContactsController');
Route::resource('countries', 'CountriesController');
Route::resource('currencies', 'CurrenciesController');
Route::resource('customers', 'CustomersController');
Route::resource('default', 'DefaultController');
Route::resource('devices', 'DevicesController');
Route::resource('domains', 'DomainsController');
Route::resource('exceptions', 'ExceptionsController');
Route::resource('forums', 'ForumsController');
Route::resource('invoices', 'InvoicesController');
Route::resource('issues', 'IssuesController');
Route::resource('links', 'LinksController');
Route::resource('orders', 'OrdersController');
Route::resource('pages', 'PagesController');
Route::resource('payments', 'PaymentsController');
Route::resource('plans', 'PlansController');
Route::resource('posts', 'PostsController');
Route::resource('provinces', 'ProvincesController');
Route::resource('publishers', 'PublishersController');
Route::resource('ratings', 'RatingsController');
Route::resource('receipts', 'ReceiptsController');
Route::resource('records', 'RecordsController');
Route::resource('replies', 'RepliesController');
Route::resource('resources', 'ResourcesController');
Route::resource('sessions', 'SessionsController');
Route::resource('sources', 'SourcesController');
Route::resource('steps', 'StepsController');
Route::resource('subscriptions', 'SubscriptionsController');
Route::resource('threads', 'ThreadsController');
Route::resource('tutorials', 'TutorialsController');
Route::resource('types', 'TypesController');
Route::resource('users', 'UsersController');
Route::resource('views', 'ViewsController');
Route::resource('votes', 'VotesController');
Route::resource('websites', 'WebsitesController');
Route::resource('zones', 'ZonesController');

