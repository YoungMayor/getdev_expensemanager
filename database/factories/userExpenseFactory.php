<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\user_expenses;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(user_expenses::class, function (Faker $faker) {
  return [
    'expense_date' => $faker->date(),
    'expense_cost' => $faker->randomFloat(2, 100, 100000),
    'expense_reason' => $faker->name." - ".$faker->e164PhoneNumber." | ".$faker->realText()." \r\n ".$faker->freeEmail,
  ];
});
