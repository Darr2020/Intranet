<?php

use App\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    $name = $faker->sentence($nbWords = 3, $variableNbWords = true);
    return [
        'user_id' => rand(1,20),
        'name'    => $name,
        'slug'      => str_slug($name),
        'description'   => $faker->text(200),
        'completed'    => $faker->randomElement([TRUE, FALSE]),
        'created_at' => $faker->dateTimeBetween($startDate = '-3 years', $endDate = 'now', $timezone = null)
    ];
});
