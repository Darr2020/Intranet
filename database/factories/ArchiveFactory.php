<?php

use Faker\Generator as Faker;

$factory->define(App\Archive::class, function (Faker $faker) {

    $archives = storage_path('archives');

    if(!File::exists($archives)){
        File::makeDirectory($archives);
    }
    return [
        'archive' => $faker->image($archives, 600, 350, 'business', false)
    ];
});
