<?php

use Illuminate\Database\Seeder;
use App\Tag;
class DatabaseSeeder extends Seeder{
   
    public function run(){
       // $this->call(PermissionsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(EventsTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(PostsTableSeeder::class);

        Tag::create([
            'name' => 'Noticia Institucional',
            'slug' => 'noticia-institucional',
        ]);

    }
}
