<?php

use Faker\Generator as Faker;

$factory->define(\App\Product::class, function (Faker $faker) {
    $user = \App\User::all()->map(function($item) { return $item->id; });
    return [
        'name' => array_random(['CRM', 'Restaurant Management', 'Hotel Management', 'School Software']),
        'start_date' => today(),
        'renew_date' => today()->addYear(),
        'user_id' => $user->random(),
    ];
});
