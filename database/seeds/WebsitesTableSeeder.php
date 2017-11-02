<?php

use Illuminate\Database\Seeder;

class WebsitesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	$domains = \App\Models\Domain::all();

	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'nihil.co')->first()->id,
	    'hostname' => 'www.nihil.co',
	    'title' => 'The NIHIL Corporation',
	]);

	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'nihilframework.com')->first()->id,
	    'hostname' => 'www.nihilframework.com',
	    'title' => 'NIHIL Framework',
	]);

	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'nihil.co')->first()->id,
	    'hostname' => 'jupiter.nihil.co',
	    'title' => 'The NIHIL Corporation',
	]);

	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'uclemmer.com')->first()->id,
	    'hostname' => 'www.uclemmer.com',
	    'title' => 'uclemmer',
	]);

	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'shirlock.org')->first()->id,
	    'hostname' => 'www.shirlock.org',
	    'title' => 'The Shirlock Foundation',
	]);

	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'nurses4change.org')->first()->id,
	    'hostname' => 'www.nurses4change.org',
	    'title' => 'Nurses 4 Change',
	]);

	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'cclemmer.com')->first()->id,
	    'hostname' => 'www.cclemmer.com',
	    'title' => 'cclemmer',
	]);

	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'crosbyjeepclub.com')->first()->id,
	    'hostname' => 'www.crosbyjeepclub.com',
	    'title' => 'Crosby Jeep Club',
	]);

	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'utkdelts.org')->first()->id,
	    'hostname' => 'www.utkdelts.org',
	    'title' => 'UTK Delts',
	]);

	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'taraloka.org')->first()->id,
	    'hostname' => 'www.taraloka.org',
	    'title' => 'The Taraloka Foundation',
	]);

	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'chattitup.com')->first()->id,
	    'hostname' => 'www.chattitup.com',
	    'title' => 'Chattitup',
	]);

	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'duespay.com')->first()->id,
	    'hostname' => 'www.duespay.com',
	    'title' => 'DuesPay',
	]);

	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'antiquarians.co')->first()->id,
	    'hostname' => 'www.antiquarians.co',
	    'title' => 'The Antiquarians',
	]);

	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'myrun-mycause.org')->first()->id,
	    'hostname' => 'www.myrun-mycause.org',
	    'title' => 'My Run, My Cause',
	]);

	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'throughhike.org')->first()->id,
	    'hostname' => 'www.throughhike.org',
	    'title' => 'Through Hike',
	]);

	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'unclebucksrednecks.com')->first()->id,
	    'hostname' => 'www.unclebucksrednecks.com',
	    'title' => 'Uncle Bucks Red Necks',
	]);

	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'outofmorbidcuriosity.com')->first()->id,
	    'hostname' => 'www.outofmorbidcuriosity.com',
	    'title' => 'Out of Morbid Curiosity',
	]);

	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'laundr.co')->first()->id,
	    'hostname' => 'www.laundr.co',
	    'title' => 'Laundr',
	]);

	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'occurens.co')->first()->id,
	    'hostname' => 'www.occurens.co',
	    'title' => 'Occurens',
	]);

	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'reddo.online')->first()->id,
	    'hostname' => 'www.reddo.online',
	    'title' => 'Reddo Online',
	]);

	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'thirddate.online')->first()->id,
	    'hostname' => 'www.thirddate.online',
	    'title' => 'Third Date Online',
	]);

	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'tornaddict.com')->first()->id,
	    'hostname' => 'www.tornaddict.com',
	    'title' => 'Torn Addict',
	]);

	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'twilliamsclass.org')->first()->id,
	    'hostname' => 'www.twilliamsclass.org',
	    'title' => 'Tim Williams Class',
	]);

	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'ternioncrossfit.com')->first()->id,
	    'hostname' => 'www.ternioncrossfit.com',
	    'title' => 'Ternion Crossfit',
	]);

	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'ternionathletics.com')->first()->id,
	    'hostname' => 'www.ternionathletics.com',
	    'title' => 'Ternion Athletics',
	]);

	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'lexanderfarms.com')->first()->id,
	    'hostname' => 'www.lexander.com',
	    'title' => 'Lexander Farms',
	]);

	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'coasttocoastcollegefair.com')->first()->id,
	    'hostname' => 'www.coasttocoastcollegefair.com',
	    'title' => 'Coast-to-Coast College Fair',
	]);

	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'sweetenscovegolfclub.com')->first()->id,
	    'hostname' => 'www.sweetenscovegolfclub.com',
	    'title' => 'Swettens Cove Golf Club',
	]);

	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'bluespringshistoricalassociation.org')->first()->id,
	    'hostname' => 'www.bluespringshistoricalassociation.org',
	    'title' => 'Blue Springs Historical Association',
	]);

	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'laqhia.com')->first()->id,
	    'hostname' => 'www.laqhia.com',
	    'title' => 'La Qhia',
	]);

	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'mazestonelaw.com')->first()->id,
	    'hostname' => 'www.mazestonelaw.com',
	    'title' => 'Maze & Stone',
	]);

	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'mazestonelaw.com')->first()->id,
	    'hostname' => 'dev.mazestonelaw.com',
	    'title' => 'Maze & Stone',
	]);
    }
}
