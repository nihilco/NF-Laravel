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
	    CustomersTableSeeder::class,
	    DomainsTableSeeder::class,
	    WebsitesTableSeeder::class,
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
	]);
    }
}
