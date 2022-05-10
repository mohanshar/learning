<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;


$factory->define(\App\UserPosting::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'location' => $faker->sentence(),
        'mobile_no' => $faker->sentence(),
        'user' => $faker->name,
        'description' => $faker->sentence(),
        'status' => $faker->name,
        'approved_declined' => $faker->sentence(),
        'image' => $faker->sentence(),
        // 'created_at' => \Carbon\Carbon::now(),
        // 'Updated_at' => \Carbon\Carbon::now(),
    ];
});
