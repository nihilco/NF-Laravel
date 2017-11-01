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
	    ClientsTableSeeder::class,
	    DomainsTableSeeder::class,
	    WebsitesTableSeeder::class,
	    PagesTableSeeder::class,
	    PostsTableSeeder::class,
	    TutorialsTableSeeder::class,
	    AuthorsTableSeeder::class,
	    SeriesTableSeeder::class,
	    BooksTableSeeder::class,
	]);
    }
}
