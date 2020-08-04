<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\District;
use App\Model\Health_facility;
use App\Model\Region;
use Faker\Generator as Faker;

$factory->define(Health_facility::class, function (Faker $faker) {
    return [
        'name'=>$faker->cityPrefix,
        'location'=>$faker->streetName ,
        'district_id'=>function(){
            return District::all()->random();
        },

    ];
});
