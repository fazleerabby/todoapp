<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
//$factory->define(App\User::class, function (Faker\Generator $faker) {
//    static $password;
//
//    return [
//        'name' => $faker->name,
//        'email' => $faker->unique()->safeEmail,
//        'password' => $password ?: $password = bcrypt('secret'),
//        'remember_token' => str_random(10),
//    ];
//});

use App\Managers\Slug;
use App\Todo;
use Faker\Generator;

$factory->define(Todo::class, function(Generator $faker){

    $name = $faker->sentence(4);
    $slug = slug($name);

    return[
        'name'  =>  $name,
        'details'   =>  $faker->sentences(10,true),
        'dueDate'   =>  $faker->date(),
        'slug'  =>  $slug
    ];
});
