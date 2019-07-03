<?php

use App\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    return [
		'first_name'=>$faker->firstName,
		'last_name'=>$faker->lastName,
		'age'=>$faker->numberBetween(0,100),
		'created_at'=>$faker->dateTime,
		'updated_at'=>$faker->dateTime,
	];
});
