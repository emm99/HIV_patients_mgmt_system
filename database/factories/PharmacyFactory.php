<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Pharmacy;
use App\User;
use Faker\Generator as Faker;

$factory->define(Pharmacy::class, function (Faker $faker) {
    return [
        'drug_name'=>$faker->lexify('ARV ???'),
        'user_id'=>function(){
            return User::all()->where('role_id',3)->random();
        },

    ];
});
