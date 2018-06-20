<?php

use Illuminate\Database\Seeder;

class CaseNotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //foreach(\App\Models\ClientCase::where('account_id', 38)->get() as $case) {
        //    for($i = 1; $i <= rand(3,10); $i++) {
        //        factory(App\Models\CaseNote::class)->create([
        //            'creator_id' => 1,
        //            'owner_id' => rand(1,4),
        //	    'account_id' => 38,
        //	    'case_id' => $case->id,
        //	    'created_at' => \Carbon\Carbon::now()->addSeconds($i),
        //	    'updated_at' => \Carbon\Carbon::now()->addSeconds($i),
        //        ]);
        //    }
        //}

        //$case = \App\Models\ClientCase::find(1);
        
        //factory(App\Models\CaseNote::class)->create([
        //    'creator_id' => $case->creator_id,
        //    'owner_id' => $case->owner_id,
        //    'case_id' => 1,
        //    'content' => 'Pretrial March 5 at 10:00',
        //    'created_at' => \Carbon\Carbon::now()->subDays(5),
        //    'updated_at' => \Carbon\Carbon::now()->subDays(5),
        //]);
        
        factory(App\Models\CaseNote::class)->create([
            "id" => 4,
            "creator_id" => 3,
            "owner_id" => 3,
            "case_id" => 2,
            "content" => "Case created.",
            "deleted_at" => null,
            "created_at" => "2018-04-13 15:48:15",
            "updated_at" => "2018-04-13 15:48:15",
        ]);

        factory(App\Models\CaseNote::class)->create([        
            "id" => 5,
            "creator_id" => 3,
            "owner_id" => 3,
            "case_id" => 3,
            "content" => "Case created.",
            "deleted_at" => null,
            "created_at" => "2018-04-18 10:53:37",
            "updated_at" => "2018-04-18 10:53:37",
        ]);

        factory(App\Models\CaseNote::class)->create([        
            "id" => 6,
            "creator_id" => 3,
            "owner_id" => 3,
            "case_id" => 4,
            "content" => "Case created.",
            "deleted_at" => null,
            "created_at" => "2018-04-18 11:13:16",
            "updated_at" => "2018-04-18 11:13:16",
        ]);

        factory(App\Models\CaseNote::class)->create([        
            "id" => 7,
            "creator_id" => 3,
            "owner_id" => 3,
            "case_id" => 5,
            "content" => "Case created.",
            "deleted_at" => null,
            "created_at" => "2018-04-18 11:20:36",
            "updated_at" => "2018-04-18 11:20:36",
        ]);

        factory(App\Models\CaseNote::class)->create([        
            "id" => 8,
            "creator_id" => 3,
            "owner_id" => 3,
            "case_id" => 6,
            "content" => "Case created.",
            "deleted_at" => null,
            "created_at" => "2018-04-18 11:29:57",
            "updated_at" => "2018-04-18 11:29:57",
        ]);

        factory(App\Models\CaseNote::class)->create([        
            "id" => 9,
            "creator_id" => 3,
            "owner_id" => 3,
            "case_id" => 7,
            "content" => "Case created.",
            "deleted_at" => null,
            "created_at" => "2018-04-18 11:44:13",
            "updated_at" => "2018-04-18 11:44:13",
        ]);

        factory(App\Models\CaseNote::class)->create([        
            "id" => 10,
            "creator_id" => 3,
            "owner_id" => 3,
            "case_id" => 8,
            "content" => "Case created.",
            "deleted_at" => null,
            "created_at" => "2018-04-18 11:48:44",
            "updated_at" => "2018-04-18 11:48:44",
        ]);

        factory(App\Models\CaseNote::class)->create([        
            "id" => 11,
            "creator_id" => 3,
            "owner_id" => 3,
            "case_id" => 9,
            "content" => "Case created.",
            "deleted_at" => null,
            "created_at" => "2018-04-18 11:55:29",
            "updated_at" => "2018-04-18 11:55:29",
        ]);

        factory(App\Models\CaseNote::class)->create([        
            "id" => 12,
            "creator_id" => 3,
            "owner_id" => 3,
            "case_id" => 10,
            "content" => "Case created.",
            "deleted_at" => null,
            "created_at" => "2018-04-18 11:57:37",
            "updated_at" => "2018-04-18 11:57:37",
        ]);

        factory(App\Models\CaseNote::class)->create([        
            "id" => 13,
            "creator_id" => 3,
            "owner_id" => 3,
            "case_id" => 11,
            "content" => "Case created.",
            "deleted_at" => null,
            "created_at" => "2018-04-18 12:01:29",
            "updated_at" => "2018-04-18 12:01:29",
        ]);

        factory(App\Models\CaseNote::class)->create([        
            "id" => 14,
            "creator_id" => 3,
            "owner_id" => 3,
            "case_id" => 12,
            "content" => "Case created.",
            "deleted_at" => null,
            "created_at" => "2018-04-18 12:20:20",
            "updated_at" => "2018-04-18 12:20:20",
        ]);

        factory(App\Models\CaseNote::class)->create([        
            "id" => 15,
            "creator_id" => 3,
            "owner_id" => 3,
            "case_id" => 13,
            "content" => "Case created.",
            "deleted_at" => null,
            "created_at" => "2018-04-25 15:05:13",
            "updated_at" => "2018-04-25 15:05:13",
        ]);

        factory(App\Models\CaseNote::class)->create([        
            "id" => 19,
            "creator_id" => 3,
            "owner_id" => 3,
            "case_id" => 14,
            "content" => "Case created.",
            "deleted_at" => null,
            "created_at" => "2018-04-25 15:48:54",
            "updated_at" => "2018-04-25 15:48:54",
        ]);

        factory(App\Models\CaseNote::class)->create([        
            "id" => 20,
            "creator_id" => 3,
            "owner_id" => 3,
            "case_id" => 6,
            "content" => "Client planning to drop off signed auths on saturday in door slot",
            "deleted_at" => null,
            "created_at" => "2018-04-27 11:41:49",
            "updated_at" => "2018-04-27 11:41:49",
        ]);

        factory(App\Models\CaseNote::class)->create([        
            "id" => 21,
            "creator_id" => 3,
            "owner_id" => 3,
            "case_id" => 7,
            "content" => "Called client about foregoing ladder claim.  They agreed.  Will send letter confirming",
            "deleted_at" => null,
            "created_at" => "2018-05-01 12:19:07",
            "updated_at" => "2018-05-01 12:19:07",
        ]);

        factory(App\Models\CaseNote::class)->create([        
            "id" => 22,
            "creator_id" => 3,
            "owner_id" => 3,
            "case_id" => 5,
            "content" => "Plastics IME- Dr. Luftman- 859-269-2261",
            "deleted_at" => null,
            "created_at" => "2018-05-01 13:17:11",
            "updated_at" => "2018-05-01 13:17:11",
        ]);

        factory(App\Models\CaseNote::class)->create([        
            "id" => 23,
            "creator_id" => 4,
            "owner_id" => 4,
            "case_id" => 15,
            "content" => "Case created.",
            "deleted_at" => null,
            "created_at" => "2018-05-02 13:17:22",
            "updated_at" => "2018-05-02 13:17:22",
        ]);

        factory(App\Models\CaseNote::class)->create([        
            "id" => 24,
            "creator_id" => 4,
            "owner_id" => 4,
            "case_id" => 15,
            "content" => "Left message for Adjuster Christi Moroneas at Gallagher Bassett. 1-800-227-7391. Claim # 004068-00013-WC-01",
            "deleted_at" => null,
            "created_at" => "2018-05-02 13:19:48",
            "updated_at" => "2018-05-02 13:19:48",
        ]);

        factory(App\Models\CaseNote::class)->create([        
            "id" => 25,
            "creator_id" => 4,
            "owner_id" => 4,
            "case_id" => 16,
            "content" => "Case created.",
            "deleted_at" => null,
            "created_at" => "2018-05-02 13:23:48",
            "updated_at" => "2018-05-02 13:23:48",
        ]);

        factory(App\Models\CaseNote::class)->create([        
            "id" => 26,
            "creator_id" => 4,
            "owner_id" => 4,
            "case_id" => 17,
            "content" => "Case created.",
            "deleted_at" => null,
            "created_at" => "2018-05-02 13:38:46",
            "updated_at" => "2018-05-02 13:38:46",
        ]);

        factory(App\Models\CaseNote::class)->create([        
            "id" => 27,
            "creator_id" => 4,
            "owner_id" => 4,
            "case_id" => 18,
            "content" => "Case created.",
            "deleted_at" => null,
            "created_at" => "2018-05-02 13:42:11",
            "updated_at" => "2018-05-02 13:42:11",
        ]);

        factory(App\Models\CaseNote::class)->create([        
            "id" => 28,
            "creator_id" => 4,
            "owner_id" => 4,
            "case_id" => 19,
            "content" => "Case created.",
            "deleted_at" => "2018-06-20 10:30:00",
            "created_at" => "2018-05-02 13:53:30",
            "updated_at" => "2018-05-02 13:53:30",
        ]);

        factory(App\Models\CaseNote::class)->create([        
            "id" => 29,
            "creator_id" => 4,
            "owner_id" => 4,
            "case_id" => 20,
            "content" => "Case created.",
            "deleted_at" => "2018-06-20 10:30:00",
            "created_at" => "2018-05-02 13:53:35",
            "updated_at" => "2018-05-02 13:53:35",
        ]);

        factory(App\Models\CaseNote::class)->create([        
            "id" => 30,
            "creator_id" => 4,
            "owner_id" => 4,
            "case_id" => 21,
            "content" => "Case created.",
            "deleted_at" => "2018-06-20 10:30:00",
            "created_at" => "2018-05-02 14:00:50",
            "updated_at" => "2018-05-02 14:00:50",
        ]);

        factory(App\Models\CaseNote::class)->create([        
            "id" => 31,
            "creator_id" => 4,
            "owner_id" => 4,
            "case_id" => 22,
            "content" => "Case created.",
            "deleted_at" => "2018-06-20 10:30:00",
            "created_at" => "2018-05-02 14:01:05",
            "updated_at" => "2018-05-02 14:01:05",
        ]);

        factory(App\Models\CaseNote::class)->create([        
            "id" => 32,
            "creator_id" => 4,
            "owner_id" => 4,
            "case_id" => 23,
            "content" => "Case created.",
            "deleted_at" => null,
            "created_at" => "2018-05-02 14:04:39",
            "updated_at" => "2018-05-02 14:04:39",
        ]);

        factory(App\Models\CaseNote::class)->create([        
            "id" => 33,
            "creator_id" => 4,
            "owner_id" => 4,
            "case_id" => 24,
            "content" => "Case created.",
            "deleted_at" => null,
            "created_at" => "2018-05-02 14:11:28",
            "updated_at" => "2018-05-02 14:11:28",
        ]);

        factory(App\Models\CaseNote::class)->create([        
            "id" => 34,
            "creator_id" => 4,
            "owner_id" => 4,
            "case_id" => 25,
            "content" => "Case created.",
            "deleted_at" => null,
            "created_at" => "2018-05-02 14:13:45",
            "updated_at" => "2018-05-02 14:13:45",
        ]);

        factory(App\Models\CaseNote::class)->create([        
            "id" => 35,
            "creator_id" => 4,
            "owner_id" => 4,
            "case_id" => 26,
            "content" => "Case created.",
            "deleted_at" => null,
            "created_at" => "2018-05-02 14:22:20",
            "updated_at" => "2018-05-02 14:22:20",
        ]);

        factory(App\Models\CaseNote::class)->create([        
            "id" => 36,
            "creator_id" => 4,
            "owner_id" => 4,
            "case_id" => 27,
            "content" => "Case created.",
            "deleted_at" => null,
            "created_at" => "2018-05-02 14:36:14",
            "updated_at" => "2018-05-02 14:36:14",
        ]);

        factory(App\Models\CaseNote::class)->create([        
            "id" => 37,
            "creator_id" => 4,
            "owner_id" => 4,
            "case_id" => 28,
            "content" => "Case created.",
            "deleted_at" => null,
            "created_at" => "2018-05-02 14:40:38",
            "updated_at" => "2018-05-02 14:40:38",
        ]);

        factory(App\Models\CaseNote::class)->create([        
            "id" => 38,
            "creator_id" => 4,
            "owner_id" => 4,
            "case_id" => 29,
            "content" => "Case created.",
            "deleted_at" => null,
            "created_at" => "2018-05-02 14:44:31",
            "updated_at" => "2018-05-02 14:44:31",
        ]);

        factory(App\Models\CaseNote::class)->create([        
            "id" => 39,
            "creator_id" => 3,
            "owner_id" => 3,
            "case_id" => 6,
            "content" => "Sent Medical requests to Hospital and EMS 05/11/18",
            "deleted_at" => null,
            "created_at" => "2018-05-11 14:22:47",
            "updated_at" => "2018-05-11 14:22:47",
        ]);

        factory(App\Models\CaseNote::class)->create([        
            "id" => 40,
            "creator_id" => 3,
            "owner_id" => 3,
            "case_id" => 30,
            "content" => "Case created.",
            "deleted_at" => null,
            "created_at" => "2018-06-07 17:34:29",
            "updated_at" => "2018-06-07 17:34:29",
        ]);

        factory(App\Models\CaseNote::class)->create([        
            "id" => 41,
            "creator_id" => 3,
            "owner_id" => 3,
            "case_id" => 30,
            "content" => "Tamelar Readus: Adjuster: 615-692-3040",
            "deleted_at" => null,
            "created_at" => "2018-06-07 17:35:18",
            "updated_at" => "2018-06-07 17:35:18",
        ]);

        factory(App\Models\CaseNote::class)->create([        
            "id" => 42,
            "creator_id" => 1,
            "owner_id" => 1,
            "case_id" => 1,
            "content" => "Case Created",
            "deleted_at" => "2018-06-20 10:30:00",
            "created_at" => "2018-03-19 21:43:39",
            "updated_at" => "2018-03-19 21:43:39",
        ]);

        factory(App\Models\CaseNote::class)->create([        
            "id" => 43,
            "creator_id" => 1,
            "owner_id" => 1,
            "case_id" => 1,
            "content" => "Case Closed",
            "deleted_at" => "2018-06-20 10:30:00",
            "created_at" => "2018-03-19 21:44:36",
            "updated_at" => "2018-03-19 21:44:36",
        ]);

        factory(App\Models\CaseNote::class)->create([        
            "id" => 44,
            "creator_id" => 3,
            "owner_id" => 3,
            "case_id" => 31,
            "content" => "Case created.",
            "deleted_at" => null,
            "created_at" => "2018-06-20 13:41:10",
            "updated_at" => "2018-06-20 13:41:10",
        ]);

        factory(App\Models\CaseNote::class)->create([        
            "id" => 45,
            "creator_id" => 3,
            "owner_id" => 3,
            "case_id" => 32,
            "content" => "Case created.",
            "deleted_at" => null,
            "created_at" => "2018-06-20 14:11:44",
            "updated_at" => "2018-06-20 14:11:44",
        ]);

        factory(App\Models\CaseNote::class)->create([        
            "id" => 46,
            "creator_id" => 3,
            "owner_id" => 3,
            "case_id" => 33,
            "content" => "Case created.",
            "deleted_at" => null,
            "created_at" => "2018-06-20 14:19:27",
            "updated_at" => "2018-06-20 14:19:27",
        ]);

        factory(App\Models\CaseNote::class)->create([        
            "id" => 47,
            "creator_id" => 3,
            "owner_id" => 3,
            "case_id" => 31,
            "content" => "Hand delivered Billing  request to St Joseph, Mt Sterling on 06/13/2018",
            "deleted_at" => null,
            "created_at" => "2018-06-20 14:22:31",
            "updated_at" => "2018-06-20 14:22:31",
        ]);

        factory(App\Models\CaseNote::class)->create([        
            "id" => 48,
            "creator_id" => 3,
            "owner_id" => 3,
            "case_id" => 34,
            "content" => "Case created.",
            "deleted_at" => null,
            "created_at" => "2018-06-20 14:31:55",
            "updated_at" => "2018-06-20 14:31:55",
        ]);

        factory(App\Models\CaseNote::class)->create([        
            "id" => 49,
            "creator_id" => 3,
            "owner_id" => 3,
            "case_id" => 34,
            "content" => "Liability Insurance Company is Zurich. Phone Number is 800-323-5650 and Policy Number is MCD9841552-01.",
            "deleted_at" => null,
            "created_at" => "2018-06-20 14:47:54",
            "updated_at" => "2018-06-20 14:47:54",
        ]);

        factory(App\Models\CaseNote::class)->create([        
            "id" => 50,
            "creator_id" => 3,
            "owner_id" => 3,
            "case_id" => 34,
            "content" => "Main phone number to McDonald's for information is 859-744-7160",
            "deleted_at" => null,
            "created_at" => "2018-06-20 14:51:10",
            "updated_at" => "2018-06-20 14:51:10",
        ]);

        factory(App\Models\CaseNote::class)->create([        
            "id" => 52,
            "creator_id" => 3,
            "owner_id" => 3,
            "case_id" => 36,
            "content" => "Case created.",
            "deleted_at" => null,
            "created_at" => "2018-06-20 15:02:39",
            "updated_at" => "2018-06-20 15:02:39",
        ]);

        factory(App\Models\CaseNote::class)->create([        
            "id" => 53,
            "creator_id" => 3,
            "owner_id" => 3,
            "case_id" => 37,
            "content" => "Case created.",
            "deleted_at" => null,
            "created_at" => "2018-06-20 15:20:08",
            "updated_at" => "2018-06-20 15:20:08",
        ]);

        factory(App\Models\CaseNote::class)->create([        
            "id" => 54,
            "creator_id" => 3,
            "owner_id" => 3,
            "case_id" => 38,
            "content" => "Case created.",
            "deleted_at" => null,
            "created_at" => "2018-06-20 15:47:17",
            "updated_at" => "2018-06-20 15:47:17",
        ]);

    }
}
