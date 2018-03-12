<?php

use Faker\Generator as Faker;

$factory->define(\Illuminate\Notifications\DatabaseNotification::class, function (Faker $faker) {

    return [
        'id' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
        'type' => \App\Notifications\ReplyToResource::class,
        'notifiable_id' => function () {
            return auth()->id() ?: factory(\App\Models\User::class)->create()->id;
        },
        'notifiable_type' => \App\Models\User::class,
        'data' => ['foo' => 'bar'],
    ];
});
