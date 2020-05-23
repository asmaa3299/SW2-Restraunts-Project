<?php

use Faker\Generator as Faker;

$factory->define(App\Reservation::class, function (Faker $faker) {
    return [
        'FirstName' => $faker->firstName,
        'LastName' =>  $faker->lastName,
        'email' => $faker->email,
        'phone' =>  $faker->phoneNumber,
        'table_id' =>  $faker->randomDigit,
        'guests' => $faker->randomDigit,
        'view' =>  $faker->sentence(1),
        'date' =>  $faker->dateTimeBetween('+1 week', '+1 month'),
        'starttime' =>  $faker->time,
        'endtime' => $faker->time,
        'user_id' => $faker->randomDigit,
    ];
});
