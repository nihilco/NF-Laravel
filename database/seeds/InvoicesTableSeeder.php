<?php

use Illuminate\Database\Seeder;

class InvoicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Mazeston Law
	factory(\App\Models\Invoice::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'customer_id' => 1,
	    'status_id' => 1,
	    'slug' => str_random(16),
	    'total_items' => 4,
	    'tax_rate' => 0,
	    'tax' => 0,
	    'shipping' => 0,
	    'total' => 60000,
	    'due_at' => \Carbon\Carbon::createFromDate(2017, 12, 31, 'America/New_York')
	        ->toDateTimeString(),
	]);

	// Coast-to-Coast College Fair
	factory(\App\Models\Invoice::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'customer_id' => 1,
	    'status_id' => 1,
	    'slug' => str_random(16),
	    'total_items' => 4,
	    'tax_rate' => 0,
	    'tax' => 0,
	    'shipping' => 0,
	    'total' => 60000,
	    'due_at' => \Carbon\Carbon::createFromDate(2017, 12, 31, 'America/New_York')
	        ->toDateTimeString(),
	]);

	// Ben Hollerbach
	factory(\App\Models\Invoice::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'customer_id' => 1,
	    'status_id' => 1,
	    'slug' => str_random(16),
	    'total_items' => 4,
	    'tax_rate' => 0,
	    'tax' => 0,
	    'shipping' => 0,
	    'total' => 10000,
	    'due_at' => \Carbon\Carbon::createFromDate(2017, 12, 31, 'America/New_York')
	        ->toDateTimeString(),
	]);

	// Hollerbach-Tompkins
	factory(\App\Models\Invoice::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'customer_id' => 1,
	    'status_id' => 1,
	    'slug' => str_random(16),
	    'total_items' => 4,
	    'tax_rate' => 0,
	    'tax' => 0,
	    'shipping' => 0,
	    'total' => 10000,
	    'due_at' => \Carbon\Carbon::createFromDate(2017, 12, 31, 'America/New_York')
	        ->toDateTimeString(),
	]);

	// Nancy Clemmer
	factory(\App\Models\Invoice::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'customer_id' => 1,
	    'status_id' => 1,
	    'slug' => str_random(16),
	    'total_items' => 4,
	    'tax_rate' => 0,
	    'tax' => 0,
	    'shipping' => 0,
	    'total' => 2500,
	    'due_at' => \Carbon\Carbon::createFromDate(2017, 12, 31, 'America/New_York')
	        ->toDateTimeString(),
	]);

	// Green Product Junkie
	factory(\App\Models\Invoice::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'customer_id' => 1,
	    'status_id' => 1,
	    'slug' => str_random(16),
	    'total_items' => 4,
	    'tax_rate' => 0,
	    'tax' => 0,
	    'shipping' => 0,
	    'total' => 15000,
	    'due_at' => \Carbon\Carbon::createFromDate(2017, 12, 31, 'America/New_York')
	        ->toDateTimeString(),
	]);

	// Ella Chedburn
	factory(\App\Models\Invoice::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'customer_id' => 1,
	    'status_id' => 1,
	    'slug' => str_random(16),
	    'total_items' => 4,
	    'tax_rate' => 0,
	    'tax' => 0,
	    'shipping' => 0,
	    'total' => 100,
	    'due_at' => \Carbon\Carbon::createFromDate(2017, 12, 31, 'America/New_York')
	        ->toDateTimeString(),
	]);

	// Tisdale Construction
	factory(\App\Models\Invoice::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'customer_id' => 1,
	    'status_id' => 1,
	    'slug' => str_random(16),
	    'total_items' => 4,
	    'tax_rate' => 0,
	    'tax' => 0,
	    'shipping' => 0,
	    'total' => 7500,
	    'due_at' => \Carbon\Carbon::createFromDate(2017, 12, 31, 'America/New_York')
	        ->toDateTimeString(),
	]);
    }
}
