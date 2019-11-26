<?php

use Faker\Generator as Faker;

$factory->define(App\User::class, function (Faker $faker){
    
    $name = $faker->firstName;
    $lastName = $faker->lastName;

    return [
        'name'           => $name,        
        'last_name'      => $lastName,
        'slug'           => str_slug($name . " " . $lastName, '-'),
        'office'         => $faker->randomElement(['Tecnología', 'Gestión Humana', 'Gestión Comunicacional', 'Servicios Generales', 'Seguridad']),
        'cedula'         => $faker->numberBetween($min = 1000000, $max = 27000000),
        'tlf_emergencia' => $faker->e164PhoneNumber,
        'extension'      => $faker->numberBetween($min = 1000, $max = 9999),
        'email'          => $faker->unique()->safeEmail,
        'biography'      => $faker->paragraph,
        'birth'          => $faker->dateTimeBetween($startDate = '-50 years', $endDate = '-20 years', $timezone = null),
        'last_login'     => $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now', $timezone = null),
        'password'       => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'  
    ];
});