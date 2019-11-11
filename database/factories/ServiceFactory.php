<?php

use Faker\Generator as Faker;

$factory->define(App\Service::class, function (Faker $faker) {
    $name = $faker->unique->word(8);
    return [
        'name'    => $name,
<<<<<<< HEAD
        'slug'      => str_slug($name),
        'description' => $faker->sentence,
        'route' => $faker->url,
        'state'    => $faker->randomElement(['DRAFT', 'PUBLISHED']),
=======
        'user_id' => '21',
        'description' => $faker->sentence,
        'route' => $faker->url,
        'state' => $faker->randomElement(['ACTIVE', 'DEACTIVATED']),
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150
    ];
});