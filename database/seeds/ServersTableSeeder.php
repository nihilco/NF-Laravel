<?php

use Illuminate\Database\Seeder;

class ServersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = \App\Models\Type::all();
        
        factory('App\Models\Server')->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'type_id' => $types->where('name', 'Web Server')->first()->id,
            'name' => 'venus.nihil.co',
            'description' => 'Production web server.',
        ]);

        factory('App\Models\Server')->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'type_id' => $types->where('name', 'Web Server')->first()->id,
            'name' => 'luna.nihil.co',
            'description' => 'Developmental web server.',
        ]);

        factory('App\Models\Server')->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'type_id' => $types->where('name', 'Mail Server')->first()->id,
            'name' => 'iris.nihil.co',
            'description' => 'Developmental email server.',
        ]);
    }

}