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
        //factory(App\Models\CaseType::class)->create([
        //    'creator_id' => 1,
        //    'owner_id' => 1,
        //    'name' => 'Personal Injury',
        //    'description' => '',
        //    'color' => 'primary',
        //]);
        
        //factory(App\Models\CaseType::class)->create([
        //    'creator_id' => 1,
        //    'owner_id' => 1,
        //    'name' => 'Divorce',
        //    'description' => '',
        //    'color' => 'success',
        //]);
        
        //factory(App\Models\CaseType::class)->create([
        //    'creator_id' => 1,
        //    'owner_id' => 1,
        //    'name' => 'Bankruptcy',
        //    'description' => '',
        //    'color' => 'danger',
        //]);
        
        //factory(App\Models\CaseType::class)->create([
        //    'creator_id' => 1,
        //    'owner_id' => 1,
        //    'name' => 'Criminal',
        //    'description' => '',
        //    'color' => 'warning',
        //]);
        
        //factory(App\Models\CaseType::class)->create([
        //    'creator_id' => 1,
        //    'owner_id' => 1,
        //    'name' => 'DUI',
        //    'description' => '',
        //    'color' => 'info',
        //]);

        factory(App\Models\CaseType::class)->create([
            "id" => 1,
            "creator_id" => 1,
            "owner_id" => 1,
            "name" => "Personal Injury",
            "description" => "",
            "color" => "primary",
            "deleted_at" => null,
            "created_at" => "2018-04-13 14:26:50",
            "updated_at" => "2018-04-13 14:26:50",
        ]);

        factory(App\Models\CaseType::class)->create([
            "id" => 2,
            "creator_id" => 1,
            "owner_id" => 1,
            "name" => "Divorce",
            "description" => "",
            "color" => "success",
            "deleted_at" => null,
            "created_at" => "2018-04-13 14:26:50",
            "updated_at" => "2018-04-13 14:26:50",
        ]);

        factory(App\Models\CaseType::class)->create([
            "id" => 3,
            "creator_id" => 1,
            "owner_id" => 1,
            "name" => "Bankruptcy",
            "description" => "",
            "color" => "danger",
            "deleted_at" => null,
            "created_at" => "2018-04-13 14:26:50",
            "updated_at" => "2018-04-13 14:26:50",
        ]);

        factory(App\Models\CaseType::class)->create([            
            "id" => 4,
            "creator_id" => 1,
            "owner_id" => 1,
            "name" => "Criminal",
            "description" => "",
            "color" => "warning",
            "deleted_at" => null,
            "created_at" => "2018-04-13 14:26:50",
            "updated_at" => "2018-04-13 14:26:50",
        ]);

        factory(App\Models\CaseType::class)->create([            
            "id" => 5,
            "creator_id" => 1,
            "owner_id" => 1,
            "name" => "DUI",
            "description" => "",
            "color" => "info",
            "deleted_at" => null,
            "created_at" => "2018-04-13 14:26:50",
            "updated_at" => "2018-04-13 14:26:50",
        ]);

        factory(App\Models\CaseType::class)->create([            
            "id" => 6,
            "creator_id" => 3,
            "owner_id" => 3,
            "name" => "MVA",
            "description" => "",
            "color" => null,
            "deleted_at" => null,
            "created_at" => "2018-04-13 15:48:15",
            "updated_at" => "2018-04-13 15:48:15",
        ]);

        factory(App\Models\CaseType::class)->create([            
            "id" => 7,
            "creator_id" => 3,
            "owner_id" => 3,
            "name" => "Slip and Fall",
            "description" => "",
            "color" => null,
            "deleted_at" => null,
            "created_at" => "2018-04-18 11:20:36",
            "updated_at" => "2018-04-18 11:20:36",
        ]);

        factory(App\Models\CaseType::class)->create([            
            "id" => 8,
            "creator_id" => 3,
            "owner_id" => 3,
            "name" => "SAF",
            "description" => "",
            "color" => null,
            "deleted_at" => null,
            "created_at" => "2018-04-18 11:29:57",
            "updated_at" => "2018-04-18 11:29:57",
        ]);

        factory(App\Models\CaseType::class)->create([            
            "id" => 9,
            "creator_id" => 3,
            "owner_id" => 3,
            "name" => "House fire/products liability case",
            "description" => "",
            "color" => null,
            "deleted_at" => null,
            "created_at" => "2018-04-18 12:01:29",
            "updated_at" => "2018-04-18 12:01:29",
        ]);

        factory(App\Models\CaseType::class)->create([            
            "id" => 10,
            "creator_id" => 3,
            "owner_id" => 3,
            "name" => "PI",
            "description" => "",
            "color" => null,
            "deleted_at" => null,
            "created_at" => "2018-04-18 12:20:20",
            "updated_at" => "2018-04-18 12:20:20",
        ]);

        factory(App\Models\CaseType::class)->create([
            "id" => 11,
            "creator_id" => 4,
            "owner_id" => 4,
            "name" => "WC",
            "description" => "",
            "color" => null,
            "deleted_at" => null,
            "created_at" => "2018-05-02 13:17:22",
            "updated_at" => "2018-05-02 13:17:22",
        ]);

        factory(App\Models\CaseType::class)->create([            
            "id" => 12,
            "creator_id" => 4,
            "owner_id" => 4,
            "name" => "WC?wrongful discharge",
            "description" => "",
            "color" => null,
            "deleted_at" => null,
            "created_at" => "2018-05-02 13:38:46",
            "updated_at" => "2018-05-02 13:38:46",
        ]);

        factory(App\Models\CaseType::class)->create([            
            "id" => 13,
            "creator_id" => 4,
            "owner_id" => 4,
            "name" => "Felony - Criminal",
            "description" => "",
            "color" => null,
            "deleted_at" => null,
            "created_at" => "2018-05-02 14:11:28",
            "updated_at" => "2018-05-02 14:11:28",
        ]);

        factory(App\Models\CaseType::class)->create([            
            "id" => 14,
            "creator_id" => 4,
            "owner_id" => 4,
            "name" => "Misdemeanor - Criminal",
            "description" => "",
            "color" => null,
            "deleted_at" => null,
            "created_at" => "2018-05-02 14:22:20",
            "updated_at" => "2018-05-02 14:22:20",
        ]);
                                                                
    }
}
