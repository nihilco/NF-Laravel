<?php

use Illuminate\Database\Seeder;

class CaseTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\CaseType::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'name' => 'Personal Injury',
            'description' => '',
            'color' => 'primary',
        ]);
        
        factory(App\Models\CaseType::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'name' => 'Divorce',
            'description' => '',
            'color' => 'success',
        ]);
        
        factory(App\Models\CaseType::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'name' => 'Bankruptcy',
            'description' => '',
            'color' => 'danger',
        ]);
        
        factory(App\Models\CaseType::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'name' => 'Criminal',
            'description' => '',
            'color' => 'warning',
        ]);
        
        factory(App\Models\CaseType::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'name' => 'DUI',
            'description' => '',
            'color' => 'info',
        ]);
    }
}
