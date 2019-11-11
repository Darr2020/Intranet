<?php

use Faker\Generator as Faker;

$factory->define(App\Event::class, function (Faker $faker){

    $title = $faker->unique()->sentence(6);

    return [
        'title' => $title,
        'user_id'   => rand(1,5),
        'slug'         => str_slug($title),
        'description'  => $faker->text(250),
        'color'        =>$faker->safeColorName,
        'date_start' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'date_end'    => $faker->date($format = 'Y-m-d', $max = 'now'),
<<<<<<< HEAD
        'hora_start'  => $faker->time($format = 'H:i', $max = 'now'),
        'hora_end'     => $faker->time($format = 'H:i', $max = 'now'),
=======
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150
        'state'    => $faker->randomElement(['DRAFT', 'PUBLISHED']),
        'created_at' => $faker->dateTimeBetween($startDate = '-10 years', $endDate = 'now', $timezone = null)
    ];
});