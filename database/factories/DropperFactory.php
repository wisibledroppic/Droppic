<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Dropper;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Dropper::class, function (Faker $faker) {
    return [
        'dname' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => Hash::make('hello123'), // password
        'dcontact' => Str::random(15),
        'hrs_from'  => '8:45',
        'hrs_to'  => '18:45',
        'dcnic' => Str::random(15),
    ];
});
