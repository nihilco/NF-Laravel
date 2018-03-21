<?php

use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Models\Type::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'model' => \App\Models\Account::class,
            'name' => 'Test',
            'slug' => 'test',
            'description' => 'Test Account.',
        ]);

        //
        factory(App\Models\Type::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'model' => \App\Models\Account::class,
            'name' => 'Live',
            'slug' => 'live',
            'description' => 'Live Account.',
        ]);

        //
        factory(App\Models\Type::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'model' => \App\Models\Customer::class,
            'name' => 'Individual',
            'slug' => 'individual',
            'description' => 'Individual Customer.',
        ]);

        //
        factory(App\Models\Type::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'model' => \App\Models\Customer::class,
            'name' => 'Business',
            'slug' => 'business',
            'description' => 'Business Customer.',
        ]);

        //
        factory(App\Models\Type::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'model' => \App\Models\Activity::class,
            'name' => 'Channel Created',
            'slug' => 'channel-created',
            'description' => 'Channel Created Activity.',
        ]);

        //
        factory(App\Models\Type::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'model' => \App\Models\Activity::class,
            'name' => 'Topic Created',
            'slug' => 'topic-created',
            'description' => 'Topic Created Activity.',
        ]);

        //
        factory(App\Models\Type::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'model' => \App\Models\Activity::class,
            'name' => 'Thread Created',
            'slug' => 'thread-created',
            'description' => 'Thread Created Activity.',
        ]);

        //
        factory(App\Models\Type::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'model' => \App\Models\Alias::class,
            'name' => 'Domain Alias',
            'slug' => 'domain-alias',
            'description' => 'Domain Alias.',
        ]);

        //
        factory(App\Models\Type::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'model' => \App\Models\Alias::class,
            'name' => 'Email Alias',
            'slug' => 'email-alias',
            'description' => 'Email Alias.',
        ]);        
    }
}
