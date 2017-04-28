<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
    	'id' => $faker->unique()->numberBetween($min = 2, $max = 500),
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'role' => 0,
    ];
});

$factory->define(App\Member::class, function (Faker\Generator $faker) {
    static $password;

    return [
    	'm_id' => $faker->unique()->numberBetween($min = 2, $max = 500),
        'name' => $faker->name(),
        'dept' => $faker->randomElement($array = array ('CSE','ECE','SWE','IT','EEE','MECH','CHEM')),
        'event_no' => 0,
    ];
});

/*$factory->define(App\Event::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name(),
        'type' => 'National',
        'sub_type' => 'Conference',
        'c_id' => 2,
        'h_id' => 1,
        'country' => 'USA',
        'start_date' => '2017-06-03',
        'end_date' => '2017-06-03',
        'description' => 'This is a seeded event',
    ];
});*/

