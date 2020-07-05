<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Patient;
use Faker\Generator as Faker;


$factory->define(Patient::class, function (Faker $faker) {
    return [
         'First_Name'=>$faker->name,
         'Last_Name'=>$faker->name,
         'Gender'=>$faker->name,
         'Age'=>$faker->randomDigit,
         'DOB'=>$faker->date('Y-m-d'),
         'Marital_Status'=>$faker->name,
         'Phone_no'=>$faker->phoneNumber,
         'Relative_phone_no'=>$faker->phoneNumber,
         'District'=>$faker->city,
         'Region'=>$faker->state,

    ];
});
