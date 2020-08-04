<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Health_facility;
use App\Role;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        // 'role_id'=> function (){
        //     return Role::all()->random();
        // },
        'role_id'=>function(){
            return Role::all()->random();
        },
        'name' => $faker->name,
        'user_name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => bcrypt('secret'),
        'health_facility_id' => function(){
            return Health_facility::all()->random();
        },
        'remember_token' => Str::random(10),
    ];
});
