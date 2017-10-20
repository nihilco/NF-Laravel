<?php

use Illuminate\Database\Seeder;

class DomainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
	$nihil = factory(App\Models\Domain::class)->create([
	    'tld' => 'nihil.co',
	    'host' => 'www.nihil.co',
	    'title' => 'The NIHIL Corporation',	    
	]);

	$nihilframework = factory(App\Models\Domain::class)->create([
	    'tld' => 'nihilframework.com',
	    'host' => 'www.nihilframework.com',
	    'title' => 'NIHIL Framework',	    
	]);

	$nihil = factory(App\Models\Domain::class)->create([
	    'tld' => 'jupiter.nihil.co',
	    'host' => 'jupiter.nihil.co',
	    'title' => 'The NIHIL Corporation',	    
	]);

	$nihil = factory(App\Models\Domain::class)->create([
	    'tld' => 'uclemmer.com',
	    'host' => 'www.uclemmer.com',
	    'title' => 'uclemmer',	    
	]);
    }
}
