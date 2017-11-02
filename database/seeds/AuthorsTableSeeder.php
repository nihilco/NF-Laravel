<?php

use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a1 = factory('App\Models\Author')->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
            'first_name' => 'David',
            'last_name' => 'Baldacci',
        ]);

        $a2 = factory('App\Models\Author')->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
            'first_name' => 'Nick',
            'last_name' => 'Bilton',
        ]);

        $a3 = factory('App\Models\Author')->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
            'first_name' => 'Peter',
            'middle_name' => 'V.',
            'last_name' => 'Brett',
        ]);

        $a4 = factory('App\Models\Author')->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
            'first_name' => 'Jim',
            'last_name' => 'Butcher',
        ]);

        $a5 = factory('App\Models\Author')->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
            'first_name' => 'Lincoln',
            'last_name' => 'Child',
        ]);

        $a6 = factory('App\Models\Author')->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
            'first_name' => 'Jared',
            'last_name' => 'Diamond',
        ]);

        $a7 = factory('App\Models\Author')->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
            'first_name' => 'John',
            'last_name' => 'Grisham',
        ]);

        $a8 = factory('App\Models\Author')->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
            'first_name' => 'Harper',
            'last_name' => 'Lee',
        ]);

        $a9 = factory('App\Models\Author')->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
            'first_name' => 'J.R.',
            'last_name' => 'Moehringer',
        ]);

        $a10 = factory('App\Models\Author')->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
            'first_name' => 'Garth',
            'last_name' => 'Nix',
        ]);

        $a11 = factory('App\Models\Author')->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
            'first_name' => 'Douglas',
            'last_name' => 'Preston',
        ]);

        $a12 = factory('App\Models\Author')->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
            'first_name' => 'Brandon',
            'last_name' => 'Sanderson',
        ]);

        $a13 = factory('App\Models\Author')->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
            'first_name' => 'James',
            'last_name' => 'Patterson',
        ]);

        $a14 = factory('App\Models\Author')->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
            'first_name' => 'Ernest',
           'last_name' => 'Cline',
        ]);

        $a15 = factory('App\Models\Author')->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
            'first_name' => 'James',
            'last_name' => 'Dashner',
        ]);

        $a16 = factory('App\Models\Author')->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
            'first_name' => 'Terry',
            'last_name' => 'Goodkind',
        ]);

        $a17 = factory('App\Models\Author')->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
            'first_name' => 'John',
            'last_name' => 'Scalzi',
        ]);

        $a18 = factory('App\Models\Author')->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
            'first_name' => 'Joe',
            'last_name' => 'Abercrombie',
        ]);

        $a19 = factory('App\Models\Author')->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
            'first_name' => 'Amor',
            'last_name' => 'Towels',
        ]);

        $a20 = factory('App\Models\Author')->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
            'first_name' => 'Stephen',
            'last_name' => 'King',
        ]);

        $a21 = factory('App\Models\Author')->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
            'first_name' => 'Khaled',
            'last_name' => 'Hosseini',
        ]);
    }
}
