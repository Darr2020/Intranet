<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder{

    public function run(){
        factory(App\Service::class, 2)->create();
    }
}