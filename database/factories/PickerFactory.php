<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Picker;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Picker::class, function (Faker $faker) {
    return [
        'pname' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => Hash::make('hello123'), // password
        'pcontact' => Str::random(15),
        'pcnic' => Str::random(15),
        'picker_category_id'  => '1',
        'profile_image' => 'users/default.png',
        'pricing_plan_id' => '1',
    ];
});
