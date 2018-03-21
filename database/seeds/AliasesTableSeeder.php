<?php

use Illuminate\Database\Seeder;

class AliasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $domains = \App\Models\Domain::all();
        $types = \App\Models\Type::all();

        //
        factory(\App\Models\Alias::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'domain_id' => $domains->where('tld', 'nihil.co')->first()->id,
            'type_id' => $types->where('name', 'Email Alias')->first()->id,
            'source' => 'uriah@nihil.co',
            'destination' => 'uriah.clemmer@nihil.co',
        ]);
        
        //
        factory(\App\Models\Alias::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'domain_id' => $domains->where('tld', 'nihil.co')->first()->id,
            'type_id' => $types->where('name', 'Email Alias')->first()->id,
            'source' => 'uclemmer@nihil.co',
            'destination' => 'uriah.clemmer@nihil.co',
        ]);
    }
}
