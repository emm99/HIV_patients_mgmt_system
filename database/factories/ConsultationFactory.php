<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Model\Clinic_info;
use App\Model\Consultation;
use App\Model\LabTest;
use App\Model\Pharmacy;
use App\User;
use Faker\Generator as Faker;

$factory->define(Consultation::class, function (Faker $faker) {
    return [
        'user_id'=>function(){
            return User::all()->where('role_id',2)->random();
        },

        'clinic_info_id'=>function(){
            return Clinic_info::all()->random();
        },

        'lab_test_id'=>function(){
            return LabTest::all()->random();
        },

        'pharmacy_id'=>function(){
            return Pharmacy::all()->random();
        },

        'next_consultation_date'=> $faker->dateTimeBetween('+1 months', '1 years','GMT+3')->format('Y-m-d'),

        'side_effects'=>$faker->sentence(),

    ];
});
