<?php

use Illuminate\Database\Seeder;

class ArchivesTableSeeder extends Seeder{

    public function run(){
        factory(App\Archive::class, 10)->create();
    }
}