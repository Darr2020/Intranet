<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function(Faker $faker){

    $title = $faker->sentence(10);
    
    return [
        'user_id' => rand(1,5),
        'title'    => $title,
        'slug'      => str_slug($title),
        'summary'   => $faker->text(500),
        'image'    => $faker->imageUrl($width = 1820, $height = 1110),
        'description' => $faker->text(1000),
        'state'    => $faker->randomElement(['DRAFT', 'PUBLISHED']),
        'created_at' => $faker->dateTimeBetween($startDate = '-10 years', $endDate = 'now', $timezone = null)
    ];
});