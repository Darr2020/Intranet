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
        'state'    => $faker->randomElement(['DRAFT', 'PUBLISHED']),
        'created_at' => $faker->dateTimeBetween($startDate = '-10 years', $endDate = 'now', $timezone = null)
    ];
});