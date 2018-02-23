<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
	$this->call([
	    UsersTableSeeder::class,
	    CountriesTableSeeder::class,
	    ProvincesTableSeeder::class,
	    AccountsTableSeeder::class,
	    CustomersTableSeeder::class,
	    DomainsTableSeeder::class,
	    WebsitesTableSeeder::class,
    	    AliasesTableSeeder::class,
	    InvoicesTableSeeder::class,
	    PagesTableSeeder::class,
	    PostsTableSeeder::class,
   	    CommentsTableSeeder::class,
	    TutorialsTableSeeder::class,
	    ChannelsTableSeeder::class,
	    ForumsTableSeeder::class,
	    ThreadsTableSeeder::class,
	    AuthorsTableSeeder::class,
	    SeriesTableSeeder::class,
	    BooksTableSeeder::class,
	    ClientsTableSeeder::class,
	    CasesTableSeeder::class,
	    CaseNotesTableSeeder::class,
	    CaseTypesTableSeeder::class,
	]);
    }
}
