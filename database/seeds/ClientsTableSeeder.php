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
    }
}
