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
	$customers = \App\Models\Customer::all();
	
	//
	factory(App\Models\Domain::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'customer_id' => $customers->where('name', 'The NIHIL Corporation')->first()->id,
	    'tld' => 'nihil.co',
	]);

	factory(App\Models\Domain::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'customer_id' => $customers->where('name', 'The NIHIL Corporation')->first()->id,
	    'tld' => 'nihilframework.com',
	]);

	factory(App\Models\Domain::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'customer_id' => $customers->where('name', 'Uriah M. Clemmer IV')->first()->id,
	    'tld' => 'uclemmer.com',
	]);

	factory(App\Models\Domain::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'customer_id' => $customers->where('name', 'Uriah M. Clemmer IV')->first()->id,
	    'tld' => 'uclemmer.net',
	]);

	factory(App\Models\Domain::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'customer_id' => $customers->where('name', 'The Shirlock Foundation')->first()->id,
	    'tld' => 'shirlock.org',
	]);

	factory(App\Models\Domain::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'customer_id' => $customers->where('name', 'Nancy Clemmer')->first()->id,
	    'tld' => 'nurses4change.org',
	]);

	factory(App\Models\Domain::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'customer_id' => $customers->where('name', 'Chris Clemmer')->first()->id,
	    'tld' => 'cclemmer.com',
	]);

	factory(App\Models\Domain::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'customer_id' => $customers->where('name', 'Chris Clemmer')->first()->id,
	    'tld' => 'crosbyjeepclub.com',
	]);

	factory(App\Models\Domain::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'customer_id' => $customers->where('name', 'UTK Delts')->first()->id,
	    'tld' => 'utkdelts.org',
	]);

	factory(App\Models\Domain::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'customer_id' => $customers->where('name', 'Taraloka Foundation')->first()->id,
	    'tld' => 'taraloka.org',
	]);

	factory(App\Models\Domain::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'customer_id' => $customers->where('name', 'Taraloka Foundation')->first()->id,
	    'tld' => 'taralokafoundation.org',
	]);

	factory(App\Models\Domain::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'customer_id' => $customers->where('name', 'The NIHIL Corporation')->first()->id,
	    'tld' => 'chattitup.com',
	]);

	factory(App\Models\Domain::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'customer_id' => $customers->where('name', 'The NIHIL Corporation')->first()->id,
	    'tld' => 'duespay.com',
	]);

	factory(App\Models\Domain::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'customer_id' => $customers->where('name', 'Antiquarians')->first()->id,
	    'tld' => 'antiquarians.co',
	]);

	factory(App\Models\Domain::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'customer_id' => $customers->where('name', 'The NIHIL Corporation')->first()->id,
	    'tld' => 'myrun-mycause.org',
	]);

	factory(App\Models\Domain::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'customer_id' => $customers->where('name', 'The NIHIL Corporation')->first()->id,
	    'tld' => 'throughhike.org',
	]);

	factory(App\Models\Domain::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'customer_id' => $customers->where('name', 'The NIHIL Corporation')->first()->id,
	    'tld' => 'unclebucksrednecks.com',
	]);

	factory(App\Models\Domain::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'customer_id' => $customers->where('name', 'The NIHIL Corporation')->first()->id,
	    'tld' => 'outofmorbidcuriosity.com',
	]);

	factory(App\Models\Domain::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'customer_id' => $customers->where('name', 'The NIHIL Corporation')->first()->id,
	    'tld' => 'laundr.co',
	]);

	factory(App\Models\Domain::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'customer_id' => $customers->where('name', 'The NIHIL Corporation')->first()->id,
	    'tld' => 'occurens.co',
	]);

	factory(App\Models\Domain::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'customer_id' => $customers->where('name', 'The NIHIL Corporation')->first()->id,
	    'tld' => 'reddo.online',
	]);

	factory(App\Models\Domain::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'customer_id' => $customers->where('name', 'The NIHIL Corporation')->first()->id,
	    'tld' => 'thirddate.online',
	]);

	factory(App\Models\Domain::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'customer_id' => $customers->where('name', 'Uriah M. Clemmer IV')->first()->id,
	    'tld' => 'tornaddict.com',
	]);

	factory(App\Models\Domain::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'customer_id' => $customers->where('name', 'Ben Hollerbach')->first()->id,
	    'tld' => 'gahickory.com',
	]);

	factory(App\Models\Domain::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'customer_id' => $customers->where('name', 'Tim Williams')->first()->id,
	    'tld' => 'twilliamsclass.org',
	]);

	factory(App\Models\Domain::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'customer_id' => $customers->where('name', 'Katharine Freeman')->first()->id,
	    'tld' => 'homeapothecarie.com',
	]);

	factory(App\Models\Domain::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'customer_id' => $customers->where('name', 'Tisdale Construction')->first()->id,
	    'tld' => 'tisdaleconstructioninc.com',
	]);

	factory(App\Models\Domain::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'customer_id' => $customers->where('name', 'Ternion Athletics')->first()->id,
	    'tld' => 'ternioncrossfit.com',
	]);

	factory(App\Models\Domain::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'customer_id' => $customers->where('name', 'Ternion Athletics')->first()->id,
	    'tld' => 'ternionathletics.com',
	]);

	factory(App\Models\Domain::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'customer_id' => $customers->where('name', 'Lexander Farm')->first()->id,
	    'tld' => 'lexanderfarm.com',
	]);

	factory(App\Models\Domain::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'customer_id' => $customers->where('name', 'Coast-to-Coast College Fair')->first()->id,
	    'tld' => 'coasttocoastcollegefair.com',
	]);

	factory(App\Models\Domain::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'customer_id' => $customers->where('name', 'Flagstick Partners')->first()->id,
	    'tld' => 'sweetenscovegolfclub.com',
	]);

	factory(App\Models\Domain::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'customer_id' => $customers->where('name', 'Blue Springs Historical Association')->first()->id,
	    'tld' => 'bluespringshistoricalassociation.org',
	]);

	factory(App\Models\Domain::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'customer_id' => $customers->where('name', 'La Qhia')->first()->id,
	    'tld' => 'laqhia.co',
	]);

	factory(App\Models\Domain::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'customer_id' => $customers->where('name', 'La Qhia')->first()->id,
	    'tld' => 'laqhia.com',
	]);

	factory(App\Models\Domain::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'customer_id' => $customers->where('name', 'Maze & Stone PLLC.')->first()->id,
	    'tld' => 'mazestonelaw.com',
	]);

	factory(App\Models\Domain::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'customer_id' => $customers->where('name', 'Kate Gribbin')->first()->id,
	    'tld' => 'butterflyoutdoors.com',
	]);

	factory(App\Models\Domain::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'customer_id' => $customers->where('name', 'Antiquarians')->first()->id,
	    'tld' => 'chattanoogaantiques.com',
	]);

	factory(App\Models\Domain::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'customer_id' => $customers->where('name', 'Antiquarians')->first()->id,
	    'tld' => 'chattanoogaestatesales.com',
	]);

	factory(App\Models\Domain::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'customer_id' => $customers->where('name', 'Hollerbach & Tompkins LLC.')->first()->id,
	    'tld' => 'hollerbach-tompkins.com',
	]);

	factory(App\Models\Domain::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'customer_id' => $customers->where('name', 'Hollerbach & Tompkins LLC.')->first()->id,
	    'tld' => 'woodleatherawesome.com',
	]);

	factory(App\Models\Domain::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'customer_id' => $customers->where('name', 'The NIHIL Corporation')->first()->id,
	    'tld' => 'virtuosolo.com',
	]);

	factory(App\Models\Domain::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'customer_id' => $customers->where('name', 'The NIHIL Corporation')->first()->id,
	    'tld' => 'coldstorage.solutions',
	]);

	factory(App\Models\Domain::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'customer_id' => $customers->where('name', 'UTK Delts')->first()->id,
	    'tld' => 'fisherscholarship.com',
	]);

	factory(App\Models\Domain::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'customer_id' => $customers->where('name', 'Ben Hollerbach')->first()->id,
	    'tld' => 'hollerbach.co',
	]);

	factory(App\Models\Domain::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'customer_id' => $customers->where('name', 'Jen Clemmer')->first()->id,
	    'tld' => 'goodbyemonstercookies.com',
	]);
    }
}