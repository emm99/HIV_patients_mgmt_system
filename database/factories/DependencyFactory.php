<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Dependency;
use Faker\Generator as Faker;

$factory->define(dependency::class, function (Faker $faker) {
    return [
        'first_name'=>$faker->firstName,
         'last_name'=>$faker->lastName,
         'phone_no'=>$faker->e164PhoneNumber,
         'location_address'=>$faker->streetAddress ,
    ];
});
