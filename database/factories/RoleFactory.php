<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

namespace App;
use Faker\Generator as Faker;

$factory->define(Role::class, function (Faker $faker) {
    $title=$faker->sentence();
    return [
        'name'=> $faker->$title,
    ];
});
