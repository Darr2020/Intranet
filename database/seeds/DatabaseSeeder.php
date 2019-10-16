<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder{
   
    public function run(){
        $this->call(PermissionsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(EventsTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(TagsTableSeeder::class);        
        $this->call(PostsTableSeeder::class);
        //$this->call(TasksTableSeeder::class);
    }
}
