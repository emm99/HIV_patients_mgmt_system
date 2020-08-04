<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Dependency;
use App\Model\Patient;
use Faker\Generator as Faker;


$factory->define(Patient::class, function (Faker $faker) {
    return [
         'first_name'=>$faker->firstName,
         'last_name'=>$faker->lastName,
         'DOB'=>$faker->dateTimeBetween('-50 years', '-10 years')->format('Y-m-d'),
         'sex'=>$faker->word,
         'marital_status'=>$faker->word,
         'phone_no'=>$faker->e164PhoneNumber ,
         'location_address'=>$faker->streetAddress,
         'dependency_id'=>function(){
             return Dependency::all()->random();
         },

    ];
});
