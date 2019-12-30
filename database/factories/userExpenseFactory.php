<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\user_expenses;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(user_expenses::class, function (Faker $faker) {
    return [
        'expense_date' => "2019-10-05",
        'expense_cost' => rand(100, 100000),
        'expense_reason' => $faker->name.Str::random(rand(24, 120)),
    ];
});
