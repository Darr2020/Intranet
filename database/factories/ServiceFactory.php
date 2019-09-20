<?php

use Faker\Generator as Faker;

$factory->define(App\Service::class, function (Faker $faker) {
    $name = $faker->unique->word(8);
    return [
        'name'    => $name,
        'slug'      => str_slug($name),
        'description' => $faker->sentence,
        'route' => $faker->url,
        'state'    => $faker->randomElement(['DRAFT', 'PUBLISHED']),
    ];
});