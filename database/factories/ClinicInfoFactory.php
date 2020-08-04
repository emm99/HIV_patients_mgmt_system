<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Clinic_info;
use App\Model\Consultation;
use App\Model\Health_facility;
use App\Model\Interrupt;
use App\Model\Patient;
use App\Model\Stage;
use App\Model\Status;
use App\User;
use Faker\Generator as Faker;

$factory->define(Clinic_info::class, function (Faker $faker) {
    return [
        'patient_id'=> function(){
            return Patient::all()->random();
        },
        'stage_id'=> function(){
            return Stage::all()->random();
        },
        'user_id'=> function(){
            return User::all()->where('role_id',4)->random();
        },
        'facility_id'=>function(){
            return Health_facility::all()->random();
        },
        'status_id'=>function(){
            return Status::all()->random();
        },
        'interrupts_id'=>function(){
            return Interrupt::all()->random();
        },
        'drug_allegies'=>$faker->sentence(6,true),

    ];
});
