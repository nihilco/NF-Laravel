<?php

use Illuminate\Database\Seeder;

class FundraisersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Uriah Clemmer
        factory(\App\Models\Fundraiser::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'name' => 'Solar Panel Fundraiser',
            'slug' => 'solar-panel-fundraiser',
            'description' => '',
            'goal' => 600000,
            'actual' => 5000,
        ]);
    }
}
