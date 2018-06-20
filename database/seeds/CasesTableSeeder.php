<?php

use Illuminate\Database\Seeder;

class CasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //foreach(\App\Models\Client::where('account_id', 38)->get() as $client) {
        //    $r = rand(2,4);
        //    for($i = 1; $i <= $r; $i++) {
        //        factory(App\Models\ClientCase::class)->create([
        //            'creator_id' => 1,
        //            'owner_id' => 1,
        //            'account_id' => 38,
        //            'client_id' => $client->id,
        //	    'date_settled_at' => (($r > 2) && ($i < ($r))) ? \Carbon\Carbon::now() : null,
        //        ]);
        //    }
        //}

        //$case1 = factory(App\Models\ClientCase::class)->create([
        //    'creator_id' => 1,
        //    'owner_id' => 3,
        //    'client_id' => 1,
        //    'case_type_id' => 5,
        //    'county' => 'Montgomery',
        //    'description' => 'DUI at Cattleman\'s. DUI Second. Refusal Aggravated.',
        //    'created_at' => \Carbon\Carbon::now()->subWeek(),
        //    'updated_at' => \Carbon\Carbon::now()->subWeek(),
        //    //'date_settled_at' => \Carbon\Carbon::now(),
        //]);

        //$case1->settle();

        //factory(App\Models\ClientCase::class)->create([
        //    'creator_id' => 1,
        //    'owner_id' => 3,
        //    'client_id' => 3,
        //    'case_type_id' => 1,
        //    'name' => 'Montgomery',
        //    'description' => 'Big case description.',
        //    'date_settled_at' => null,
        //]);

        factory(App\Models\ClientCase::class)->create([
            "id" => 1,
            "creator_id" => 1,
            "owner_id" => 3,
            "client_id" => 1,
            "case_type_id" => 5,
            "county" => "Montgomery",
            "description" => "DUI at Cattleman's. DUI Second. Refusal Aggravated.",
            "incident_at" => null,
            "settled_at" => "2018-04-13",
            "deleted_at" => "2018-06-20 10:30:00",
            "created_at" => "2018-04-06 14:26:50",
            "updated_at" => "2018-04-13 14:26:50",
        ]);

        factory(App\Models\ClientCase::class)->create([
            "id" => 2,
            "creator_id" => 3,
            "owner_id" => 3,
            "client_id" => 2,
            "case_type_id" => 6,
            "county" => "Montgomery",
            "description" => "CLAIM #04238399 - Montgomery County - 06/30/2017",
            "incident_at" => "2017-06-30",
            "settled_at" => null,
            "deleted_at" => null,
            "created_at" => "2018-04-13 15:48:15",
            "updated_at" => "2018-04-13 15:48:15",
        ]);

        factory(App\Models\ClientCase::class)->create([
            "id" => 3,
            "creator_id" => 3,
            "owner_id" => 3,
            "client_id" => 4,
            "case_type_id" => 6,
            "county" => "Powell",
            "description" => "Omar Risner",
            "incident_at" => "2017-10-17",
            "settled_at" => "2018-03-20",
            "deleted_at" => null,
            "created_at" => "2018-04-18 10:53:37",
            "updated_at" => "2018-04-18 11:02:50",
        ]);

        factory(App\Models\ClientCase::class)->create([            
            "id" => 4,
            "creator_id" => 3,
            "owner_id" => 3,
            "client_id" => 5,
            "case_type_id" => 6,
            "county" => "Bath",
            "description" => null,
            "incident_at" => "2017-10-28",
            "settled_at" => null,
            "deleted_at" => null,
            "created_at" => "2018-04-18 11:13:16",
            "updated_at" => "2018-04-18 11:13:16",
        ]);

        factory(App\Models\ClientCase::class)->create([
            "id" => 5,
            "creator_id" => 3,
            "owner_id" => 3,
            "client_id" => 6,
            "case_type_id" => 7,
            "county" => "Powell",
            "description" => "Sally Risner is the mother of the above named Minor child.",
            "incident_at" => "2017-08-28",
            "settled_at" => null,
            "deleted_at" => null,
            "created_at" => "2018-04-18 11:20:36",
            "updated_at" => "2018-04-18 11:20:36",
        ]);

        factory(App\Models\ClientCase::class)->create([
            "id" => 6,
            "creator_id" => 3,
            "owner_id" => 3,
            "client_id" => 7,
            "case_type_id" => 8,
            "county" => "Carrollton",
            "description" => null,
            "incident_at" => "2018-01-28",
            "settled_at" => null,
            "deleted_at" => null,
            "created_at" => "2018-04-18 11:29:57",
            "updated_at" => "2018-04-18 11:29:57",
        ]);

        factory(App\Models\ClientCase::class)->create([            
            "id" => 7,
            "creator_id" => 3,
            "owner_id" => 3,
            "client_id" => 8,
            "case_type_id" => 1,
            "county" => "Morgan",
            "description" => null,
            "incident_at" => "2017-06-06",
            "settled_at" => null,
            "deleted_at" => null,
            "created_at" => "2018-04-18 11:44:13",
            "updated_at" => "2018-04-18 11:44:13",
        ]);

        factory(App\Models\ClientCase::class)->create([
            "id" => 8,
            "creator_id" => 3,
            "owner_id" => 3,
            "client_id" => 9,
            "case_type_id" => 6,
            "county" => "Jackson",
            "description" => null,
            "incident_at" => "2018-02-22",
            "settled_at" => null,
            "deleted_at" => null,
            "created_at" => "2018-04-18 11:48:44",
            "updated_at" => "2018-04-18 11:48:44",
        ]);

        factory(App\Models\ClientCase::class)->create([
            "id" => 9,
            "creator_id" => 3,
            "owner_id" => 3,
            "client_id" => 10,
            "case_type_id" => 6,
            "county" => "Bath",
            "description" => null,
            "incident_at" => "2017-12-06",
            "settled_at" => null,
            "deleted_at" => null,
            "created_at" => "2018-04-18 11:55:29",
            "updated_at" => "2018-04-18 11:55:29",
        ]);

        factory(App\Models\ClientCase::class)->create([
            "id" => 10,
            "creator_id" => 3,
            "owner_id" => 3,
            "client_id" => 11,
            "case_type_id" => 6,
            "county" => "Montgomery",
            "description" => null,
            "incident_at" => "2018-01-06",
            "settled_at" => null,
            "deleted_at" => null,
            "created_at" => "2018-04-18 11:57:37",
            "updated_at" => "2018-04-18 11:57:37",
        ]);

        factory(App\Models\ClientCase::class)->create([
            "id" => 11,
            "creator_id" => 3,
            "owner_id" => 3,
            "client_id" => 12,
            "case_type_id" => 9,
            "county" => "Montgomery",
            "description" => null,
            "incident_at" => "2018-01-26",
            "settled_at" => null,
            "deleted_at" => null,
            "created_at" => "2018-04-18 12:01:29",
            "updated_at" => "2018-04-18 12:01:29",
        ]);

        factory(App\Models\ClientCase::class)->create([
            "id" => 12,
            "creator_id" => 3,
            "owner_id" => 3,
            "client_id" => 13,
            "case_type_id" => 10,
            "county" => "Clark",
            "description" => null,
            "incident_at" => "2017-08-24",
            "settled_at" => null,
            "deleted_at" => null,
            "created_at" => "2018-04-18 12:20:20",
            "updated_at" => "2018-04-18 12:20:20",
        ]);

        factory(App\Models\ClientCase::class)->create([
            "id" => 13,
            "creator_id" => 3,
            "owner_id" => 3,
            "client_id" => 14,
            "case_type_id" => 6,
            "county" => "Rowan",
            "description" => null,
            "incident_at" => "2018-03-30",
            "settled_at" => "2018-04-25",
            "deleted_at" => null,
            "created_at" => "2018-04-25 15:05:13",
            "updated_at" => "2018-04-25 15:13:31",
        ]);

        factory(App\Models\ClientCase::class)->create([
            "id" => 14,
            "creator_id" => 3,
            "owner_id" => 3,
            "client_id" => 15,
            "case_type_id" => 6,
            "county" => "?",
            "description" => "Per Chandler this case is going to be transferred to an attorney, closer to her",
            "incident_at" => null,
            "settled_at" => null,
            "deleted_at" => null,
            "created_at" => "2018-04-25 15:48:54",
            "updated_at" => "2018-04-25 15:48:54",
        ]);

        factory(App\Models\ClientCase::class)->create([
            "id" => 15,
            "creator_id" => 4,
            "owner_id" => 4,
            "client_id" => 16,
            "case_type_id" => 11,
            "county" => "Bourbon",
            "description" => "Abshear v. Avantor Materials. Meeting on 3/29/18. Job consists of lifting 50 lb bags or raw material, and scooping material into drums. Felt pain in shoulder all of a sudden while scooping materials. Supervisor Chris told her to keep an eye on it. Pain was so bad she was sent home. On Monday she went back to work and filled out incident report. Following week she went to company doctor at Baptistworx. TC with HR manager Kelsey Caudill on April 25. She reported injury as personal injury. Cheryl said they wouldn't file it on WC because of safety bonus.",
            "incident_at" => "2018-02-10",
            "settled_at" => null,
            "deleted_at" => null,
            "created_at" => "2018-05-02 13:17:22",
            "updated_at" => "2018-05-02 13:17:22",
        ]);

        factory(App\Models\ClientCase::class)->create([
            "id" => 16,
            "creator_id" => 4,
            "owner_id" => 4,
            "client_id" => 17,
            "case_type_id" => 11,
            "county" => "Fayette",
            "description" => "Injured knee while working at Amazon. MRI showed possible meniscus tear. Dr. Chatta performed surgery and found no tear. TC with Chatta revealed 0% impairment. 6500 demanded. 3500 offered. Counter demand of 5000 has received no response.",
            "incident_at" => "2017-09-20",
            "settled_at" => null,
            "deleted_at" => null,
            "created_at" => "2018-05-02 13:23:48",
            "updated_at" => "2018-05-02 13:23:48",
        ]);

        factory(App\Models\ClientCase::class)->create([
            "id" => 17,
            "creator_id" => 4,
            "owner_id" => 4,
            "client_id" => 18,
            "case_type_id" => 12,
            "county" => "Jessamine",
            "description" => "MMI on March 6, but still hurting. going to see specialist. Applied for UE but was denied due to termination. His teammate asked him his religious beliefs and since then has been harassing him about converting to Christianity. When he was injured at work his teammate told him he was cursed by God. Oral altercation on March 6 after coworker bumped him.",
            "incident_at" => "2018-03-06",
            "settled_at" => null,
            "deleted_at" => null,
            "created_at" => "2018-05-02 13:38:46",
            "updated_at" => "2018-05-02 13:38:46",
        ]);

        factory(App\Models\ClientCase::class)->create([
            "id" => 18,
            "creator_id" => 4,
            "owner_id" => 4,
            "client_id" => 19,
            "case_type_id" => 12,
            "county" => "Rowan",
            "description" => "Employer: USPS. Fell on steps delivering mail. Supervisor told her to sign CA-1 but did not tell her to check the box for continuation of pay. Unable to reach USPS HR. Have left multiple voicemails for HR specialist Ms. Williams at (502) 473 - 4213.",
            "incident_at" => "2018-03-30",
            "settled_at" => null,
            "deleted_at" => null,
            "created_at" => "2018-05-02 13:42:11",
            "updated_at" => "2018-05-02 13:42:11",
        ]);

        factory(App\Models\ClientCase::class)->create([
            "id" => 19,
            "creator_id" => 4,
            "owner_id" => 4,
            "client_id" => 20,
            "case_type_id" => 11,
            "county" => "WC",
            "description" => "Employer: High Power Technical Services (contracted through Dish). Driving company van and fell asleep at the wheel and broke his back. Adjuster Kristi Goldener at Ladegast & Heffner. Claim No. 2018-55210. DOB: 9/6/68. SSN: 4832",
            "incident_at" => "2018-03-14",
            "settled_at" => null,
            "deleted_at" => "2018-06-20 10:30:00",
            "created_at" => "2018-05-02 13:53:30",
            "updated_at" => "2018-05-02 13:53:30",
        ]);

        factory(App\Models\ClientCase::class)->create([
            "id" => 20,
            "creator_id" => 4,
            "owner_id" => 4,
            "client_id" => 21,
            "case_type_id" => 11,
            "county" => "WC",
            "description" => "Employer: High Power Technical Services (contracted through Dish). Driving company van and fell asleep at the wheel and broke his back. Adjuster Kristi Goldener at Ladegast & Heffner. Claim No. 2018-55210. DOB: 9/6/68. SSN: 4832",
            "incident_at" => "2018-03-14",
            "settled_at" => null,
            "deleted_at" => "2018-06-20 10:30:00",
            "created_at" => "2018-05-02 13:53:35",
            "updated_at" => "2018-05-02 13:53:35",
        ]);

        factory(App\Models\ClientCase::class)->create([
            "id" => 21,
            "creator_id" => 4,
            "owner_id" => 4,
            "client_id" => 22,
            "case_type_id" => 11,
            "county" => "WC",
            "description" => "Employer: High Power Technical Services (contracted through Dish). Driving company van and fell asleep at the wheel and broke his back. Adjuster Kristi Goldener at Ladegast & Heffner. Claim No. 2018-55210. DOB: 9/6/68. SSN: 4832",
            "incident_at" => "2018-03-14",
            "settled_at" => null,
            "deleted_at" => "2018-06-20 10:30:00",
            "created_at" => "2018-05-02 14:00:50",
            "updated_at" => "2018-05-02 14:00:50",
        ]);

        factory(App\Models\ClientCase::class)->create([
            "id" => 22,
            "creator_id" => 4,
            "owner_id" => 4,
            "client_id" => 23,
            "case_type_id" => 11,
            "county" => "WC",
            "description" => "Employer: High Power Technical Services (contracted through Dish). Driving company van and fell asleep at the wheel and broke his back. Adjuster Kristi Goldener at Ladegast & Heffner. Claim No. 2018-55210. DOB: 9/6/68. SSN: 4832",
            "incident_at" => "2018-03-14",
            "settled_at" => null,
            "deleted_at" => "2018-06-20 10:30:00",
            "created_at" => "2018-05-02 14:01:05",
            "updated_at" => "2018-05-02 14:01:05",
        ]);

        factory(App\Models\ClientCase::class)->create([
            "id" => 23,
            "creator_id" => 4,
            "owner_id" => 4,
            "client_id" => 24,
            "case_type_id" => 11,
            "county" => "Harrison?",
            "description" => "Employer: High Power Technical Services (Contracted through Dish). Driving company van and fell asleep at the wheel. Broke his back. Adjuster is Kristi Goldener at Ladegast & Heffner. Claim No. 2018-55210. DOB: 9/6/68. SSN: 4832.",
            "incident_at" => "2018-03-14",
            "settled_at" => null,
            "deleted_at" => null,
            "created_at" => "2018-05-02 14:04:39",
            "updated_at" => "2018-05-02 14:04:39",
        ]);

        factory(App\Models\ClientCase::class)->create([
            "id" => 24,
            "creator_id" => 4,
            "owner_id" => 4,
            "client_id" => 25,
            "case_type_id" => 13,
            "county" => "Fleming",
            "description" => "Cop showed up for a walk and knock. Waived around disk saying he had sufficient evidence for a warrant. James gave him the small amount of meth he had in a drawer. Waiver of Grand Jury Indictment and Guilty Plea filed on May 2, 2018. Arraignment in Circuit Court on May 4 at 1 pm. Getting on Rocket Docket. Asst. Commonwealth Attorney: Michael Clarke. (606) 564 - 5527. Prefers to communicate via email: MClarke@prosecutors.ky.gov",
            "incident_at" => null,
            "settled_at" => null,
            "deleted_at" => null,
            "created_at" => "2018-05-02 14:11:28",
            "updated_at" => "2018-05-02 14:11:28",
        ]);

        factory(App\Models\ClientCase::class)->create([
            "id" => 25,
            "creator_id" => 4,
            "owner_id" => 4,
            "client_id" => 26,
            "case_type_id" => 13,
            "county" => "Morgab",
            "description" => "Conflict Case. Charged with Conspiracy to traffic and Organized Crime. Trading house cleaning services for meth.",
            "incident_at" => null,
            "settled_at" => null,
            "deleted_at" => null,
            "created_at" => "2018-05-02 14:13:45",
            "updated_at" => "2018-05-02 14:13:45",
        ]);

        factory(App\Models\ClientCase::class)->create([
            "id" => 26,
            "creator_id" => 4,
            "owner_id" => 4,
            "client_id" => 27,
            "case_type_id" => 14,
            "county" => "Madison",
            "description" => "Menacing and leaving the scene. Was in line of liquor store when Mr. Wilson may or may not have accidentally bumped vehicle driven by estranged wife's daughter. Mr. Wilson left the scene. Plead to failure to report. 6 months no contact with victim and menacing will be dismissed.",
            "incident_at" => "2018-02-15",
            "settled_at" => null,
            "deleted_at" => null,
            "created_at" => "2018-05-02 14:22:20",
            "updated_at" => "2018-05-02 14:22:20",
        ]);

        factory(App\Models\ClientCase::class)->create([
            "id" => 27,
            "creator_id" => 4,
            "owner_id" => 4,
            "client_id" => 28,
            "case_type_id" => 4,
            "county" => "Montgomery",
            "description" => "17 - T - 608. DUI in Shell parking lot.",
            "incident_at" => "2017-11-17",
            "settled_at" => null,
            "deleted_at" => null,
            "created_at" => "2018-05-02 14:36:14",
            "updated_at" => "2018-05-02 14:36:14",
        ]);

        factory(App\Models\ClientCase::class)->create([
            "id" => 28,
            "creator_id" => 4,
            "owner_id" => 4,
            "client_id" => 29,
            "case_type_id" => 4,
            "county" => "Clark",
            "description" => "17-M-1191. Menacing. Oral altercation when dropping off kids to husband's ex-wife. PTC on May 14.",
            "incident_at" => null,
            "settled_at" => null,
            "deleted_at" => null,
            "created_at" => "2018-05-02 14:40:38",
            "updated_at" => "2018-05-02 14:40:38",
        ]);

        factory(App\Models\ClientCase::class)->create([
            "id" => 29,
            "creator_id" => 4,
            "owner_id" => 4,
            "client_id" => 30,
            "case_type_id" => 4,
            "county" => "Montgomery",
            "description" => "Conflict case. 17 - CR - 00004. Status conference on March 23, 2018. Client did not show. Bench warrant issued.",
            "incident_at" => null,
            "settled_at" => null,
            "deleted_at" => null,
            "created_at" => "2018-05-02 14:44:31",
            "updated_at" => "2018-05-02 14:44:31",
        ]);

        factory(App\Models\ClientCase::class)->create([
            "id" => 30,
            "creator_id" => 3,
            "owner_id" => 3,
            "client_id" => 31,
            "case_type_id" => 6,
            "county" => "Fayette",
            "description" => null,
            "incident_at" => null,
            "settled_at" => null,
            "deleted_at" => null,
            "created_at" => "2018-06-07 17:34:29",
            "updated_at" => "2018-06-07 17:34:29",
        ]);

        factory(App\Models\ClientCase::class)->create([
            "id" => 31,
            "creator_id" => 3,
            "owner_id" => 3,
            "client_id" => 32,
            "case_type_id" => 6,
            "county" => "Montgomery",
            "description" => "Letter of Representation was sent to Progressive Insurance, Jeffrey Wyatt on May 16, 2018",
            "incident_at" => "2018-04-24 00:00:00",
            "settled_at" => null,
            "deleted_at" => null,
            "created_at" => "2018-06-20 13:41:10",
            "updated_at" => "2018-06-20 13:44:39",
        ]);

        factory(App\Models\ClientCase::class)->create([
            "id" => 32,
            "creator_id" => 3,
            "owner_id" => 3,
            "client_id" => 33,
            "case_type_id" => 1,
            "county" => "Bourbon",
            "description" => "client fell on Shell Gas Station Premises in Paris, Ky. No other info",
            "incident_at" => "2018-04-03 00:00:00",
            "settled_at" => null,
            "deleted_at" => null,
            "created_at" => "2018-06-20 14:11:44",
            "updated_at" => "2018-06-20 14:11:44",
        ]);

        factory(App\Models\ClientCase::class)->create([
            "id" => 33,
            "creator_id" => 3,
            "owner_id" => 3,
            "client_id" => 34,
            "case_type_id" => 6,
            "county" => "Madison",
            "description" => "Medical Authorization was signed on 04/26/2018. Letters sent requesting Billing and Medical Records on 06/13/2018.",
            "incident_at" => "2018-04-02 00:00:00",
            "settled_at" => null,
            "deleted_at" => null,
            "created_at" => "2018-06-20 14:19:27",
            "updated_at" => "2018-06-20 14:19:27",
        ]);

        factory(App\Models\ClientCase::class)->create([            
            "id" => 34,
            "creator_id" => 3,
            "owner_id" => 3,
            "client_id" => 35,
            "case_type_id" => 7,
            "county" => "Clark",
            "description" => "
         Letter sent on May 29, 2018 notifying McDonald's of inaccurate insurance information.\r\n
         second request was sent to McDonald's .
         ",
            "incident_at" => "2018-05-03 00:00:00",
            "settled_at" => null,
            "deleted_at" => null,
            "created_at" => "2018-06-20 14:31:54",
            "updated_at" => "2018-06-20 14:31:54",
        ]);

        factory(App\Models\ClientCase::class)->create([
            "id" => 36,
            "creator_id" => 3,
            "owner_id" => 3,
            "client_id" => 37,
            "case_type_id" => 7,
            "county" => "Bath",
            "description" => "Medical and Billing request were hand delivered to St Joseph, Mt. Sterling on June 13, 2018.",
            "incident_at" => "2018-05-11 00:00:00",
            "settled_at" => null,
            "deleted_at" => null,
            "created_at" => "2018-06-20 15:02:39",
            "updated_at" => "2018-06-20 15:02:39",
        ]);

        factory(App\Models\ClientCase::class)->create([            
            "id" => 37,
            "creator_id" => 3,
            "owner_id" => 3,
            "client_id" => 38,
            "case_type_id" => 6,
            "county" => "Carrollton",
            "description" => "
         Letters of Representation and medical and billing requests were sent to ;\r\n
          Saint Elizabeth Covington, FAX NO: 859655-4815.\r\n
          St Elizabeth Medical Center, Edgewood, Ky by FAX: NO  859-655-1789\r\n
          St Elizabeth Urgent Care, Newport, Ky by FAX NO- 859-905-3633\r\n
          St Elizabeth Physicians, Newport, Ky by FAX NO - 859-898-2108 \r\n
         St Elizabeth Physicians, Billing Records by FAX NO -859-905-3633\r\n
         WE NEED HER PHYSICAL ADDRESS
         ",
            "incident_at" => "2018-05-14 00:00:00",
            "settled_at" => null,
            "deleted_at" => null,
            "created_at" => "2018-06-20 15:20:08",
            "updated_at" => "2018-06-20 15:20:08",
        ]);

        factory(App\Models\ClientCase::class)->create([            
            "id" => 38,
            "creator_id" => 3,
            "owner_id" => 3,
            "client_id" => 39,
            "case_type_id" => 6,
            "county" => "Bath",
            "description" => "
         Medical Records request was Hand Delivered to St Joseph, Mt. Sterling on 06/13/2018.\r\n
         Billing Records request was sent by FAX NO - 859-313-3181\r\n
         We need Ambulance information,
         ",
            "incident_at" => "2018-05-14 00:00:00",
            "settled_at" => null,
            "deleted_at" => null,
            "created_at" => "2018-06-20 15:47:17",
            "updated_at" => "2018-06-20 15:47:17",
        ]);
            
    }
}
