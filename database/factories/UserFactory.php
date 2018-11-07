<?php

use App\User;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
        'type' => User::DEFAULT_TYPE,
    ];
});

//To change it to admin
$factory->state(App\User::class, 'admin', [
    'type' => User::ADMIN_TYPE,
]);

//To populate the Thread table
$factory->define(App\Thread::class, function (Faker $faker){
    return[
        'user_id' => App\User::all()->random()->id,
        'title' => $faker->sentence,
        'body' => $faker->sentence

    ];
});

// To populate the Thread comments table
$factory->define(App\ThreadComment::class, function (Faker $faker){
    return[
        'user_id' => App\User::all()->random()->id,
        'thread_id' => App\Thread::all()->random()->id,
        'body'=> $faker->sentence
    ];

});