<?php

use Faker\Generator as Faker;

$factory->define(App\Service::class, function (Faker $faker) {
    $name = $faker->unique->word(8);
    return [
        'name'    => $name,
        'user_id' => '21',
        'description' => $faker->sentence,
        'route' => $faker->url,
        'state' => $faker->randomElement(['ACTIVE', 'DEACTIVATED']),
    ];
});