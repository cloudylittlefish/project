<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Admin\User::class, function (Faker $faker) {
    return [
        'username'=>$faker->name,
        'password'=>bcrypt('admin')
    ];
});
