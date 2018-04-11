<?php

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Client::class)->create([
            'creator_id' => 1,
            'owner_id' => 3,
            'name' => 'Shawn Thompson',
            'email' => 'stjffkldsjsfl@email',
            'phone' => '578389893443',
            'address1' => '60 East HWY',
            'city' => 'Owingsville',
            'province_id' => 17,
            'postal_code' => '40360',
            'description' => 'at gas station',
        ]);

        //factory(App\Models\Client::class)->create([
        //    'creator_id' => 1,
        //    'owner_id' => 3,
        //    'name' => 'Powerball',
        //    'email' => 'kaitlyn59@hotmail.com"',
        //    'phone' => '651.208.2071 x652',
        //    'address1' => '9165 Hayes Roads',
        //    'city' => 'Alyssonhaven',
        //    'province_id' => 10,
        //    'postal_code' => '69691-4964',
        //    'description' => 'National Powerball lottery.',
        //]);

        //factory(App\Models\Client::class)->create([
        //    'creator_id' => 1,
        //    'owner_id' => 3,
        //    'name' => 'Mega Millions',
        //    'email' => 'ktorp@kuhn.com',
        //    'phone' => '1-636-997-1169 x6674',
        //    'address1' => '6700 Forrest Hills Suite 163',
        //    'city' => 'Lake Alisa',
        //    'province_id' => 45,
        //    'postal_code' => '26222-7051',
        //    'description' => 'National Mega Millions lottery.',
        //]);
    }
}
