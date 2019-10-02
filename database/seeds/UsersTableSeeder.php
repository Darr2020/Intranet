<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;
use App\User;

class UsersTableSeeder extends Seeder{

    public function run(){

        factory(User::class, 20)->create();

        User::create([
            'name'           => 'Diego',
            'last_name'      => 'Rojas',
            'slug'           => 'Diego-Rojas',
            'cedula'         => '27694986',
            'tlf_emergencia' => '04263285993',
            'extension'      => '7522',
            'email'          => 'diego.rojas0640@gmail.com',
            'biography'      => 'Tecnico Superior Informático, funcionario del Ministerio de Educación Universitaria.Amante del futbol.',
            'password'       => bcrypt('2020')
        ]);

        
        User::create([
            'name'      => 'Jesus',
            'last_name' => 'Reina',
            'slug'      => 'Jesus-Reina',  
            'email'     => 'jesus@gmail.com',
            'cedula'    => '123456',
            'password'  => bcrypt('123456'),
        ]);


        User::create([
            'name'      => 'Alejandra',
            'last_name' => 'Suarez',
            'slug'      => 'Alejandra-Suarez',
            'email'     => 'aleesuarez0909@gmail.com',
            'cedula'    => '28337126',
            'password'  => bcrypt('2020'),

        ]);

        Role::create([
        	'name'		=> 'Admin',
        	'slug'  	=> 'slug',
        	'special' 	=> 'all-access'
        ]);
    }
}
