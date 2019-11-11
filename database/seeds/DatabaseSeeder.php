<?php

use Illuminate\Database\Seeder;
<<<<<<< HEAD

=======
use App\Tag;
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150
class DatabaseSeeder extends Seeder{
   
    public function run(){
        $this->call(PermissionsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(EventsTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
<<<<<<< HEAD
        $this->call(TagsTableSeeder::class);
        
        $this->call(PostsTableSeeder::class);
        $this->call(TasksTableSeeder::class);
        }
=======
        $this->call(PostsTableSeeder::class);

        Tag::create([
            'name' => 'Noticia Institucional',
            'slug' => 'noticia-institucional',
        ]);

    }
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150
}
