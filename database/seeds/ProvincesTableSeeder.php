<?php

use Illuminate\Database\Seeder;

class ProvincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	$countries = \App\Models\Country::all();
	
        //
	factory(App\Models\Province::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'abbr' => 'AL',
	    'name' => 'Alabama',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'abbr' => 'AK',
	    'name' => 'Alaska',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'abbr' => 'AZ',
	    'name' => 'Arizona',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'abbr' => 'AR',
	    'name' => 'Arkansas',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'abbr' => 'CA',
	    'name' => 'California',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'abbr' => 'CO',
	    'name' => 'Colorado',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'abbr' => 'CT',
	    'name' => 'Connecticut',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'abbr' => 'DE',
	    'name' => 'Deleware',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'abbr' => 'FL',
	    'name' => 'Florida',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'abbr' => 'GA',
	    'name' => 'Georgia',
	]);

        //
	factory(App\Models\Province::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'abbr' => 'HI',
	    'name' => 'Hawaii',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'abbr' => 'ID',
	    'name' => 'Idaho',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'abbr' => 'IL',
	    'name' => 'Illinois',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'abbr' => 'IN',
	    'name' => 'Indiana',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'abbr' => 'IA',
	    'name' => 'Iowa',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'abbr' => 'KS',
	    'name' => 'Kansas',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'abbr' => 'KY',
	    'name' => 'Kentucky',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'abbr' => 'LA',
	    'name' => 'Louisiana',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'abbr' => 'ME',
	    'name' => 'Maine',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'abbr' => 'MD',
	    'name' => 'Maryland',
	]);

        //
	factory(App\Models\Province::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'abbr' => 'MA',
	    'name' => 'Masachusetts',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'abbr' => 'MI',
	    'name' => 'Michigan',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'abbr' => 'MN',
	    'name' => 'Minnesota',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'abbr' => 'MS',
	    'name' => 'Mississippi',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'abbr' => 'MO',
	    'name' => 'Missouri',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'abbr' => 'MT',
	    'name' => 'Montana',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'abbr' => 'NE',
	    'name' => 'Nebraska',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'abbr' => 'NV',
	    'name' => 'Nevada',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'abbr' => 'NH',
	    'name' => 'New Hampshire',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'abbr' => 'NJ',
	    'name' => 'New Jersey',
	]);

        //
	factory(App\Models\Province::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'abbr' => 'NM',
	    'name' => 'New Mexico',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'abbr' => 'NY',
	    'name' => 'New York',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'abbr' => 'NC',
	    'name' => 'North Carolina',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'abbr' => 'ND',
	    'name' => 'North Dakota',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'abbr' => 'OH',
	    'name' => 'Ohio',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'abbr' => 'OK',
	    'name' => 'Oklahoma',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'abbr' => 'OR',
	    'name' => 'Oregon',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'abbr' => 'PA',
	    'name' => 'Pennsylvania',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'abbr' => 'RI',
	    'name' => 'Rhode Island',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'abbr' => 'SC',
	    'name' => 'South Carolina',
	]);

        //
	factory(App\Models\Province::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'abbr' => 'SD',
	    'name' => 'South Dakota',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'abbr' => 'TN',
	    'name' => 'Tennessee',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'abbr' => 'TX',
	    'name' => 'Texas',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'abbr' => 'UT',
	    'name' => 'Utah',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'abbr' => 'VT',
	    'name' => 'Vermont',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'abbr' => 'VA',
	    'name' => 'Virginia',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'abbr' => 'WA',
	    'name' => 'Washington',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'abbr' => 'WV',
	    'name' => 'West Virginia',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'abbr' => 'WI',
	    'name' => 'Wisconsin',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'abbr' => 'WY',
	    'name' => 'Wyoming',
	]);
    }
}
