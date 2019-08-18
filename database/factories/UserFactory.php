<?php

use Faker\Generator as Faker;

$factory->define(App\User::class, function (Faker $faker){
    
    $name = $faker->name;
    $lastName = $faker->lastName;

    return [
        'name'           => $name,        
        'last_name'      => $lastName,
        'slug' => str_slug($name . " " . $lastName, '-'),
        'cedula'         => $faker->numberBetween($min = 1000000, $max = 27000000),
        'tlf_emergencia' => $faker->e164PhoneNumber,
        'extension'      => $faker->numberBetween($min = 1000, $max = 9999),
        'email'          => $faker->unique()->safeEmail,
        'biography'      => $faker->paragraph,
        'password'       => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'  
    ];
});