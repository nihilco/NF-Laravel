<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $accounts = \App\Models\Account::all();
        $types = \App\Models\Type::where('model', 'App\Models\Customer')->get();
        
        factory(App\Models\Customer::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'account_id' => 1,
            'type_id' => $types->where('name', 'Business')->first()->id,
            'name' => 'The NIHIL Corporation',
            'billing_address_id' => 0,
            'shipping_address_id' => 0,
        ]);
        
        factory(App\Models\Customer::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'account_id' => 1,
            'type_id' => $types->where('name', 'Individual')->first()->id,
            'name' => 'Uriah M. Clemmer IV',
            'billing_address_id' => 0,
            'shipping_address_id' => 0,
        ]);
        
        factory(App\Models\Customer::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'account_id' => 1,
            'type_id' => $types->where('name', 'Business')->first()->id,
            'name' => 'EST Prints',
            'billing_address_id' => 0,
            'shipping_address_id' => 0,
        ]);
        
        factory(App\Models\Customer::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'account_id' => 1,
            'type_id' => $types->where('name', 'Business')->first()->id,
            'name' => 'The Shirlock Foundation',
            'billing_address_id' => 0,
            'shipping_address_id' => 0,
        ]);
        
        factory(App\Models\Customer::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'account_id' => 1,
            'type_id' => $types->where('name', 'Individual')->first()->id,
            'name' => 'Nancy Clemmer',
            'billing_address_id' => 0,
            'shipping_address_id' => 0,
        ]);
        
        factory(App\Models\Customer::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'account_id' => 1,
            'type_id' => $types->where('name', 'Individual')->first()->id,
            'name' => 'Chris Clemmer',
            'billing_address_id' => 0,
            'shipping_address_id' => 0,
        ]);
        
        factory(App\Models\Customer::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'account_id' => 1,
            'type_id' => $types->where('name', 'Business')->first()->id,
            'name' => 'UTK Delts',
            'billing_address_id' => 0,
            'shipping_address_id' => 0,
        ]);
        
        factory(App\Models\Customer::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'account_id' => 1,
            'type_id' => $types->where('name', 'Business')->first()->id,
            'name' => 'Taraloka Foundation',
            'billing_address_id' => 0,
            'shipping_address_id' => 0,
        ]);
        
        factory(App\Models\Customer::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'account_id' => 1,
            'type_id' => $types->where('name', 'Business')->first()->id,
            'name' => 'Antiquarians',
            'billing_address_id' => 0,
            'shipping_address_id' => 0,
        ]);
        
        factory(App\Models\Customer::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'account_id' => 1,
            'type_id' => $types->where('name', 'Individual')->first()->id,
            'name' => 'Ben Hollerbach',
            'billing_address_id' => 0,
            'shipping_address_id' => 0,
        ]);
        
        factory(App\Models\Customer::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'account_id' => 1,
            'type_id' => $types->where('name', 'Business')->first()->id,
            'name' => 'Hollerbach & Tompkins LLC.',
            'billing_address_id' => 0,
            'shipping_address_id' => 0,
        ]);
        
        factory(App\Models\Customer::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'account_id' => 1,
            'type_id' => $types->where('name', 'Individual')->first()->id,
            'name' => 'Tim Williams',
            'billing_address_id' => 0,
            'shipping_address_id' => 0,
        ]);
        
        factory(App\Models\Customer::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'account_id' => 1,
            'type_id' => $types->where('name', 'Business')->first()->id,
            'name' => 'Encore',
            'billing_address_id' => 0,
            'shipping_address_id' => 0,
        ]);
        
        factory(App\Models\Customer::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'account_id' => 1,
            'type_id' => $types->where('name', 'Business')->first()->id,
            'name' => 'Just Peachy Pictures',
            'billing_address_id' => 0,
            'shipping_address_id' => 0,
        ]);
        
        factory(App\Models\Customer::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'account_id' => 1,
            'type_id' => $types->where('name', 'Business')->first()->id,
            'name' => 'First American Commercial Property Group',
            'billing_address_id' => 0,
            'shipping_address_id' => 0,
        ]);
        
        factory(App\Models\Customer::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'account_id' => 1,
            'type_id' => $types->where('name', 'Business')->first()->id,
            'name' => 'Pathrise',
            'billing_address_id' => 0,
            'shipping_address_id' => 0,
        ]);
        
        factory(App\Models\Customer::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'account_id' => 1,
            'type_id' => $types->where('name', 'Business')->first()->id,
            'name' => 'weScore',
            'billing_address_id' => 0,
            'shipping_address_id' => 0,
        ]);
        
        factory(App\Models\Customer::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'account_id' => 1,
            'type_id' => $types->where('name', 'Individual')->first()->id,
            'name' => 'Katharine Freeman',
            'billing_address_id' => 0,
            'shipping_address_id' => 0,
        ]);
        
        factory(App\Models\Customer::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'account_id' => 1,
            'type_id' => $types->where('name', 'Business')->first()->id,
            'name' => 'Tisdale Construction',
            'billing_address_id' => 0,
            'shipping_address_id' => 0,
        ]);
        
        factory(App\Models\Customer::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'account_id' => 1,
            'type_id' => $types->where('name', 'Individual')->first()->id,
            'name' => 'David Cross',
            'billing_address_id' => 0,
            'shipping_address_id' => 0,
        ]);
        
        factory(App\Models\Customer::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'account_id' => 1,
            'type_id' => $types->where('name', 'Business')->first()->id,
            'name' => 'Ternion Athletics',
            'billing_address_id' => 0,
            'shipping_address_id' => 0,
        ]);
        
        factory(App\Models\Customer::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'account_id' => 1,
            'type_id' => $types->where('name', 'Business')->first()->id,
            'name' => 'Tate Township',
            'billing_address_id' => 0,
            'shipping_address_id' => 0,
        ]);
        
        factory(App\Models\Customer::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'account_id' => 1,
            'type_id' => $types->where('name', 'Individual')->first()->id,
            'name' => 'Vince Bianco',
            'billing_address_id' => 0,
            'shipping_address_id' => 0,
        ]);
        
        factory(App\Models\Customer::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'account_id' => 1,
            'type_id' => $types->where('name', 'Business')->first()->id,
            'name' => 'Lexander Farm',
            'billing_address_id' => 0,
            'shipping_address_id' => 0,
        ]);
        
        factory(App\Models\Customer::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'account_id' => 1,
            'type_id' => $types->where('name', 'Individual')->first()->id,
            'name' => 'Lucy Coppedge',
            'billing_address_id' => 0,
            'shipping_address_id' => 0,
        ]);
        
        factory(App\Models\Customer::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'account_id' => 1,
            'type_id' => $types->where('name', 'Business')->first()->id,
            'name' => 'Bethel-Tate Fire Department',
            'billing_address_id' => 0,
            'shipping_address_id' => 0,
        ]);
        
        factory(App\Models\Customer::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'account_id' => 1,
            'type_id' => $types->where('name', 'Business')->first()->id,
            'name' => 'Subway',
            'billing_address_id' => 0,
            'shipping_address_id' => 0,
        ]);
        
        factory(App\Models\Customer::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'account_id' => 1,
            'type_id' => $types->where('name', 'Business')->first()->id,
            'name' => 'Sushi Nabe',
            'billing_address_id' => 0,
            'shipping_address_id' => 0,
        ]);
        
        factory(App\Models\Customer::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'account_id' => 1,
            'type_id' => $types->where('name', 'Business')->first()->id,
            'name' => 'Coast-to-Coast College Fair',
            'billing_address_id' => 0,
            'shipping_address_id' => 0,
        ]);

        factory(App\Models\Customer::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'account_id' => 1,
            'type_id' => $types->where('name', 'Business')->first()->id,
            'name' => 'Case Antiques',
            'billing_address_id' => 0,
            'shipping_address_id' => 0,
        ]);
        
        factory(App\Models\Customer::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'account_id' => 1,
            'type_id' => $types->where('name', 'Business')->first()->id,
            'name' => 'Flagstick Partners',
            'billing_address_id' => 0,
            'shipping_address_id' => 0,
        ]);
        
        factory(App\Models\Customer::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'account_id' => 1,
            'type_id' => $types->where('name', 'Business')->first()->id,
            'name' => 'Blue Springs Historical Association',
            'billing_address_id' => 0,
            'shipping_address_id' => 0,
        ]);
        
        factory(App\Models\Customer::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'account_id' => 1,
            'type_id' => $types->where('name', 'Business')->first()->id,
            'name' => 'La Qhia',
            'billing_address_id' => 0,
            'shipping_address_id' => 0,
        ]);
        
        factory(App\Models\Customer::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'account_id' => 1,
            'type_id' => $types->where('name', 'Business')->first()->id,
            'name' => 'Maze & Stone PLLC.',
            'billing_address_id' => 0,
            'shipping_address_id' => 0,
        ]);
        
        factory(App\Models\Customer::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'account_id' => 1,
            'type_id' => $types->where('name', 'Individual')->first()->id,
            'name' => 'Ella Chedburn',
            'billing_address_id' => 0,
            'shipping_address_id' => 0,
        ]);
        
        factory(App\Models\Customer::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'account_id' => 1,
            'type_id' => $types->where('name', 'Business')->first()->id,
            'name' => 'Green Product Junkie',
            'billing_address_id' => 0,
            'shipping_address_id' => 0,
        ]);
        
        factory(App\Models\Customer::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'account_id' => 1,
            'type_id' => $types->where('name', 'Individual')->first()->id,
            'name' => 'Kate Gribbin',
            'billing_address_id' => 0,
            'shipping_address_id' => 0,
        ]);

        factory(App\Models\Customer::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'account_id' => 1,
            'account_id' => 1,
            'type_id' => $types->where('name', 'Individual')->first()->id,
            'name' => 'Jen Clemmer',
            'billing_address_id' => 0,
            'shipping_address_id' => 0,
        ]);
    }
}
