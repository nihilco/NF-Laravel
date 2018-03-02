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

	// 1
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'nihil.co')->first()->id,
	    'hostname' => 'www.nihil.co',
	    'title' => 'The NIHIL Corporation',
	]);

	// 2
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'nihil.co')->first()->id,
	    'hostname' => 'dev.nihil.co',
	    'title' => 'The NIHIL Corporation',
	]);

	// 3
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'nihil.co')->first()->id,
	    'hostname' => '*.nihil.co',
	    'title' => 'The NIHIL Corporation',
	]);

	// 4
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'nihilframework.com')->first()->id,
	    'hostname' => 'www.nihilframework.com',
	    'title' => 'NIHIL Framework',
	]);

	// 5
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'nihilframework.com')->first()->id,
	    'hostname' => 'dev.nihilframework.com',
	    'title' => 'NIHIL Framework',
	]);

	// 5
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'chattitup.com')->first()->id,
	    'hostname' => 'www.chattitup.com',
	    'title' => 'Chattitup',
	]);

	// 6
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'chattitup.com')->first()->id,
	    'hostname' => 'dev.chattitup.com',
	    'title' => 'Chattitup',
	]);

	// 7
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'duespay.com')->first()->id,
	    'hostname' => 'www.duespay.com',
	    'title' => 'DuesPay',
	]);

	// 8
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'duespay.com')->first()->id,
	    'hostname' => 'dev.duespay.com',
	    'title' => 'DuesPay',
	]);

	// 9
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'laundr.co')->first()->id,
	    'hostname' => 'www.laundr.co',
	    'title' => 'Laundr',
	]);

	// 10
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'laundr.co')->first()->id,
	    'hostname' => 'dev.laundr.co',
	    'title' => 'Laundr',
	]);

	// 11
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'myrun-mycause.org')->first()->id,
	    'hostname' => 'www.myrun-mycause.org',
	    'title' => 'My Run, My Cause',
	]);

	// 12
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'myrun-mycause.org')->first()->id,
	    'hostname' => 'dev.myrun-mycause.org',
	    'title' => 'My Run, My Cause',
	]);

	// 13
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'outofmorbidcuriosity.com')->first()->id,
	    'hostname' => 'www.outofmorbidcuriosity.com',
	    'title' => 'Out of Morbid Curiosity',
	]);

	// 14
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'outofmorbidcuriosity.com')->first()->id,
	    'hostname' => 'dev.outofmorbidcuriosity.com',
	    'title' => 'Out of Morbid Curiosity',
	]);

	// 15
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'throughhike.org')->first()->id,
	    'hostname' => 'www.throughhike.org',
	    'title' => 'Through Hike',
	]);

	// 16
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'throughhike.org')->first()->id,
	    'hostname' => 'dev.throughhike.org',
	    'title' => 'Through Hike',
	]);

	// 17
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'unclebucksrednecks.com')->first()->id,
	    'hostname' => 'www.unclebucksrednecks.com',
	    'title' => 'Uncle Bucks Red Necks',
	]);

	// 18
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'unclebucksrednecks.com')->first()->id,
	    'hostname' => 'dev.unclebucksrednecks.com',
	    'title' => 'Uncle Bucks Red Necks',
	]);

	// 19
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'thirddate.online')->first()->id,
	    'hostname' => 'www.thirddate.online',
	    'title' => 'Third Date Online',
	]);

	// 20
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'thirddate.online')->first()->id,
	    'hostname' => 'dev.thirddate.online',
	    'title' => 'Third Date Online',
	]);

	// 21
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'occurens.co')->first()->id,
	    'hostname' => 'www.occurens.co',
	    'title' => 'Occurens',
	]);

	// 22
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'occurens.co')->first()->id,
	    'hostname' => 'dev.occurens.co',
	    'title' => 'Occurens',
	]);

	// 23
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'reddo.online')->first()->id,
	    'hostname' => 'www.reddo.online',
	    'title' => 'Reddo Online',
	]);

	// 24
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'reddo.online')->first()->id,
	    'hostname' => 'dev.reddo.online',
	    'title' => 'Reddo Online',
	]);

	// 25
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'uclemmer.com')->first()->id,
	    'hostname' => 'www.uclemmer.com',
	    'title' => 'uclemmer',
	]);

	// 26
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'uclemmer.com')->first()->id,
	    'hostname' => 'dev.uclemmer.com',
	    'title' => 'uclemmer',
	]);

	// 27
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'tornaddict.com')->first()->id,
	    'hostname' => 'www.tornaddict.com',
	    'title' => 'Torn Addict',
	]);

	// 28
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'tornaddict.com')->first()->id,
	    'hostname' => 'dev.tornaddict.com',
	    'title' => 'Torn Addict',
	]);

	// 29
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'shirlock.org')->first()->id,
	    'hostname' => 'www.shirlock.org',
	    'title' => 'The Shirlock Foundation',
	]);

	// 30
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'shirlock.org')->first()->id,
	    'hostname' => 'dev.shirlock.org',
	    'title' => 'The Shirlock Foundation',
	]);

	// 31
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'nurses4change.org')->first()->id,
	    'hostname' => 'www.nurses4change.org',
	    'title' => 'Nurses 4 Change',
	]);

	// 32
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'nurses4change.org')->first()->id,
	    'hostname' => 'dev.nurses4change.org',
	    'title' => 'Nurses 4 Change',
	]);

	// 33
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'cclemmer.com')->first()->id,
	    'hostname' => 'www.cclemmer.com',
	    'title' => 'cclemmer',
	]);

	// 34
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'cclemmer.com')->first()->id,
	    'hostname' => 'dev.cclemmer.com',
	    'title' => 'cclemmer',
	]);

	// 35
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'crosbyjeepclub.com')->first()->id,
	    'hostname' => 'www.crosbyjeepclub.com',
	    'title' => 'Crosby Jeep Club',
	]);

	// 36
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'crosbyjeepclub.com')->first()->id,
	    'hostname' => 'dev.crosbyjeepclub.com',
	    'title' => 'Crosby Jeep Club',
	]);

	// 37
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'utkdelts.org')->first()->id,
	    'hostname' => 'www.utkdelts.org',
	    'title' => 'UTK Delts',
	]);

	// 38
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'utkdelts.org')->first()->id,
	    'hostname' => 'dev.utkdelts.org',
	    'title' => 'UTK Delts',
	]);

	// 39
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'taraloka.org')->first()->id,
	    'hostname' => 'www.taraloka.org',
	    'title' => 'The Taraloka Foundation',
	]);

	// 40
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'taraloka.org')->first()->id,
	    'hostname' => 'dev.taraloka.org',
	    'title' => 'The Taraloka Foundation',
	]);

	// 41
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'antiquarians.co')->first()->id,
	    'hostname' => 'www.antiquarians.co',
	    'title' => 'The Antiquarians',
	]);

	// 42
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'antiquarians.co')->first()->id,
	    'hostname' => 'dev.antiquarians.co',
	    'title' => 'The Antiquarians',
	]);

	// 43
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'gahickory.com')->first()->id,
	    'hostname' => 'www.gahickory.com',
	    'title' => 'Georgia Hickory',
	]);

	// 44
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'gahickory.com')->first()->id,
	    'hostname' => 'dev.gahickory.com',
	    'title' => 'Georgia Hickory',
	]);

	// 45
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'twilliamsclass.org')->first()->id,
	    'hostname' => 'www.twilliamsclass.org',
	    'title' => 'Tim Williams Class',
	]);

	// 46
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'twilliamsclass.org')->first()->id,
	    'hostname' => 'dev.twilliamsclass.org',
	    'title' => 'Tim Williams Class',
	]);

	// 47
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'homeapothecarie.com')->first()->id,
	    'hostname' => 'www.homeapothecarie.com',
	    'title' => 'Home Apothecarie',
	]);

	// 48
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'homeapothecarie.com')->first()->id,
	    'hostname' => 'dev.homeapothecarie.com',
	    'title' => 'Home Apothecarie',
	]);

	// 49
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'tisdaleconstructioninc.com')->first()->id,
	    'hostname' => 'www.tisdaleconstructioninc.com',
	    'title' => 'Tisdale Construction',
	]);

	// 50
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'tisdaleconstructioninc.com')->first()->id,
	    'hostname' => 'dev.tisdaleconstructioninc.com',
	    'title' => 'Tisdale Construction',
	]);

	// 51 
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'ternionathletics.com')->first()->id,
	    'hostname' => 'www.ternionathletics.com',
	    'title' => 'Ternion Athletics',
	]);

	// 52 
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'ternionathletics.com')->first()->id,
	    'hostname' => 'dev.ternionathletics.com',
	    'title' => 'Ternion Athletics',
	]);

	// 53
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'lexanderfarm.com')->first()->id,
	    'hostname' => 'www.lexanderfarm.com',
	    'title' => 'Lexander Farm',
	]);

	// 54
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'lexanderfarm.com')->first()->id,
	    'hostname' => 'dev.lexanderfarm.com',
	    'title' => 'Lexander Farm',
	]);

	// 55
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'coasttocoastcollegefair.com')->first()->id,
	    'hostname' => 'www.coasttocoastcollegefair.com',
	    'title' => 'Coast-to-Coast College Fair',
	]);

	// 56
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'coasttocoastcollegefair.com')->first()->id,
	    'hostname' => 'dev.coasttocoastcollegefair.com',
	    'title' => 'Coast-to-Coast College Fair',
	]);

	// 57
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'sweetenscovegolfclub.com')->first()->id,
	    'hostname' => 'www.sweetenscovegolfclub.com',
	    'title' => 'Swettens Cove Golf Club',
	]);

	// 58
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'sweetenscovegolfclub.com')->first()->id,
	    'hostname' => 'dev.sweetenscovegolfclub.com',
	    'title' => 'Swettens Cove Golf Club',
	]);

	// 59
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'bluespringshistoricalassociation.org')->first()->id,
	    'hostname' => 'www.bluespringshistoricalassociation.org',
	    'title' => 'Blue Springs Historical Association',
	]);

	// 60
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'bluespringshistoricalassociation.org')->first()->id,
	    'hostname' => 'dev.bluespringshistoricalassociation.org',
	    'title' => 'Blue Springs Historical Association',
	]);

	// 61
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'laqhia.com')->first()->id,
	    'hostname' => 'www.laqhia.com',
	    'title' => 'La Qhia',
	]);

	// 62
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'laqhia.com')->first()->id,
	    'hostname' => 'dev.laqhia.com',
	    'title' => 'La Qhia',
	]);

	// 63
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'mazestonelaw.com')->first()->id,
	    'hostname' => 'www.mazestonelaw.com',
	    'title' => 'Maze & Stone',
	]);

	// 64
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'mazestonelaw.com')->first()->id,
	    'hostname' => 'dev.mazestonelaw.com',
	    'title' => 'Maze & Stone',
	]);

	// 65
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'nihil.co')->first()->id,
	    'hostname' => 'chedburn.nihil.co',
	    'title' => 'Ella Chedburn',
	]);

	// 66
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'nihil.co')->first()->id,
	    'hostname' => 'dev.chedburn.nihil.co',
	    'title' => 'Ella Chedburn',
	]);

	// 67
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'butterflyoutdoors.com')->first()->id,
	    'hostname' => 'www.butterflyoutdoors.com',
	    'title' => 'Butterfly Outdoors',
	]);

	// 68
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'butterflyoutdoors.com')->first()->id,
	    'hostname' => 'dev.butterflyoutdoors.com',
	    'title' => 'Butterfly Outdoors',
	]);

	// 70
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'chattanoogaantiques.com')->first()->id,
	    'hostname' => 'www.chattanoogaantiques.com',
	    'title' => 'Chattanooga Antiques',
	]);

	// 71
	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'chattanoogaestatesales.com')->first()->id,
	    'hostname' => 'www.chattanoogaestatesales.com',
	    'title' => 'Chattanooga Estate Sales',
	]);

	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'hollerbach-tompkins.com')->first()->id,
	    'hostname' => 'www.hollerbach-tompkins.com',
	    'title' => 'Hollerbach & Tompkins LLC.',
	]);

	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'woodleatherawesome.com')->first()->id,
	    'hostname' => 'www.woodleatherawesome.com',
	    'title' => 'Wood, Leather, Awesome',
	]);

	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'virtuosolo.com')->first()->id,
	    'hostname' => 'www.virtuosolo.com',
	    'title' => 'Virtuosolo',
	]);

	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'virtuosolo.com')->first()->id,
	    'hostname' => 'dev.virtuosolo.com',
	    'title' => 'Virtuosolo',
	]);

	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'coldstorage.solutions')->first()->id,
	    'hostname' => 'www.coldstorage.solutions',
	    'title' => 'Cold Storage Solutions',
	]);

	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'coldstorage.solutions')->first()->id,
	    'hostname' => 'dev.coldstorage.solutions',
	    'title' => 'Cold Storage Solutions',
	]);

	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'uclemmer.net')->first()->id,
	    'hostname' => 'www.uclemmer.net',
	    'title' => 'uclemmer',
	]);

	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'fisherscholarship.com')->first()->id,
	    'hostname' => 'www.fisherscholarship.com',
	    'title' => 'Fisher Scholarship',
	]);

	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'fisherscholarship.com')->first()->id,
	    'hostname' => 'dev.fisherscholarship.com',
	    'title' => 'Fisher Scholarship',
	]);

	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'hollerbach.co')->first()->id,
	    'hostname' => 'www.hollerbach.co',
	    'title' => 'Hollerbach',
	]);

	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'goodbyemonstercookies.com')->first()->id,
	    'hostname' => 'www.goodbyemonstercookies.com',
	    'title' => 'Goodbye Monster Cookies',
	]);

	factory(App\Models\Website::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'domain_id' => $domains->where('tld', 'goodbyemonstercookies.com')->first()->id,
	    'hostname' => 'dev.goodbyemonstercookies.com',
	    'title' => 'Goodbye Monster Cookies',
	]);
    }
}
