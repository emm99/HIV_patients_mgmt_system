<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\LabTest;
use App\User;
use Faker\Generator as Faker;

$factory->define(LabTest::class, function (Faker $faker) {
    return [
        "test_name"=>$faker->word,
        "results"=>$faker->lexify('HIV ???'),
        'user_id'=>function(){
            return User::all()->where('role_id',5)->random();
        },

    ];
});
