<?php
 
use Illuminate\Database\Seeder;

use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder{
    
    public function run() {
<<<<<<< HEAD

         //Users
         Permission::create([
            'name'          => 'Admin panel',
            'slug'          => 'admin.panel',
            'description'   => 'Permiso para ingresar a el panel administrador del sistema',
        ]);
        //Users
        Permission::create([
            'name'          => 'Navegar usuarios',
            'slug'          => 'users.index',
            'description'   => 'Lista y navega todos los usuarios del sistema',
        ]);
=======
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150

         //ADMIN
        Permission::create([
            'name'          => 'Admin panel',
            'slug'          => 'admin.panel',
            'description'   => 'Permiso para ingresar a el panel administrador del sistema',
        ]);
        Permission::create([
            'name'          => 'Todas las acciones',
            'slug'          => 'trace.index',
            'description'   => 'Permiso para iver todas las acciones del sistemas',
        ]);

        //USERS
        Permission::create([
            'name'          => 'Edición de usuarios',
            'slug'          => 'users.edit',
            'description'   => 'Podría editar cualquier dato de un usuario del sistema',
        ]);

        //Roles
        Permission::create([
            'name'          => 'Navegar roles',
            'slug'          => 'roles.index',
            'description'   => 'Lista y navega todos los roles del sistema',
        ]);

        
        Permission::create([
            'name'          => 'Creación de roles',
            'slug'          => 'roles.create',
            'description'   => 'Podría crear nuevos roles en el sistema',
        ]);
        
        Permission::create([
            'name'          => 'Edición de roles',
            'slug'          => 'roles.edit',
            'description'   => 'Podría editar cualquier dato de un rol del sistema',
        ]);
        
        Permission::create([
            'name'          => 'Eliminar roles',
            'slug'          => 'roles.destroy',
            'description'   => 'Podría eliminar cualquier rol del sistema',      
        ]);

<<<<<<< HEAD
       //noticias
        Permission::create([
            'name'          => 'Navegar noticias',
            'slug'          => 'posts.index',
            'description'   => 'Lista y navega todos los noticias del sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de un noticia',
            'slug'          => 'posts.show',
            'description'   => 'Ve en detalle cada noticia',            
        ]);
        
        Permission::create([
            'name'          => 'Creación de noticias',
            'slug'          => 'posts.create',
            'description'   => 'Permiso para crear nuevas noticias',
        ]);
        
        Permission::create([
            'name'          => 'Edición de noticias',
            'slug'          => 'posts.edit',
            'description'   => 'Permiso de editar cualquier dato de un noticia',
        ]);
        
        Permission::create([
            'name'          => 'Eliminar noticias',
            'slug'          => 'posts.destroy',
            'description'   => 'Permiso de eliminar noticias'      
        ]);

        //eventos
    
        Permission::create([
            'name'          => 'Ver detalle de un evento',
            'slug'          => 'events.show',
            'description'   => 'Ve en detalle cada evento',            
        ]);
        
        Permission::create([
            'name'          => 'Creación de eventos',
            'slug'          => 'events.create',
            'description'   => 'Permiso para crear nuevos eventos',
        ]);
        
        Permission::create([
            'name'          => 'Edición de eventos',
            'slug'          => 'events.edit',
            'description'   => 'Permiso de editar algun dato de un evento',
        ]);
        
        Permission::create([
            'name'          => 'Eliminar eventos',
            'slug'          => 'events.destroy',
            'description'   => 'Permiso de eliminar eventos'      
        ]);

        //tasks
        Permission::create([
            'name'          => 'Navegar tareas',
            'slug'          => 'tasks.index',
            'description'   => 'Lista y navega todas las tareas',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de un tarea',
            'slug'          => 'tasks.show',
            'description'   => 'Ve en detalle cada tarea',            
        ]);
        
        Permission::create([
            'name'          => 'Creación de tareas',
            'slug'          => 'tasks.create',
            'description'   => 'Permiso para crear nuevas tareas',
        ]);
        
        Permission::create([
            'name'          => 'Edición de tareas',
            'slug'          => 'tasks.edit',
            'description'   => 'Permiso de editar algun dato de una tarea',
        ]);
        
        Permission::create([
            'name'          => 'Eliminar tareas',
            'slug'          => 'tasks.destroy',
            'description'   => 'Permiso de eliminar tareas'      
        ]);

        //tags
        Permission::create([
            'name'          => 'Navegar etiquetas',
            'slug'          => 'tags.index',
            'description'   => 'Lista y navega todas las etiquetas',
        ]);
        
        Permission::create([
            'name'          => 'Creación de etiquetas',
            'slug'          => 'tags.create',
            'description'   => 'Permiso para crear nuevas etiquetas',
        ]);
        
        Permission::create([
            'name'          => 'Edición de etiquetas',
            'slug'          => 'tags.edit',
            'description'   => 'Permiso de editar algun dato de una etiqueta',
        ]);
        
        Permission::create([
            'name'          => 'Eliminar etiquetas',
            'slug'          => 'tags.destroy',
            'description'   => 'Permiso de eliminar etiquetas'      
=======
        //SERVICES
        Permission::create([
            'name'          => 'Navega servicios',
            'slug'          => 'services.index',
            'description'   => 'Lista y navega todos los servicios del sistema',
        ]);
        
        Permission::create([
            'name'          => 'Creación de servicios',
            'slug'          => 'services.create',
            'description'   => 'Permiso para crear nuevas servicios',
        ]);
        
        Permission::create([
            'name'          => 'Edición de servicios',
            'slug'          => 'services.edit',
            'description'   => 'Permiso de editar cualquier dato de un  servicio    ',
        ]);

       //POSTS
        Permission::create([
            'name'          => 'Navegar noticias',
            'slug'          => 'posts.index',
            'description'   => 'Lista y navega todos los noticias del sistema',
        ]);
        
        Permission::create([
            'name'          => 'Creación de noticias',
            'slug'          => 'posts.create',
            'description'   => 'Permiso para crear nuevas noticias',
        ]);
        
        Permission::create([
            'name'          => 'Edición de noticias',
            'slug'          => 'posts.edit',
            'description'   => 'Permiso de editar cualquier dato de un noticia',
        ]);
       
        //EVENTS    
        Permission::create([
            'name'          => 'Navegar eventos',
            'slug'          => 'events.index',
            'description'   => 'Lista y navega todos los eventos',            
        ]);
        
        Permission::create([
            'name'          => 'Creación de eventos',
            'slug'          => 'events.create',
            'description'   => 'Permiso para crear nuevos eventos',
        ]);
        
        Permission::create([
            'name'          => 'Edición de eventos',
            'slug'          => 'events.edit',
            'description'   => 'Permiso de editar algun dato de un evento',
        ]);
        
        Permission::create([
            'name'          => 'Eliminar eventos',
            'slug'          => 'events.destroy',
            'description'   => 'Permiso de eliminar eventos'      
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150
        ]);

       
        //TAGS
        Permission::create([
            'name'          => 'Navegar etiquetas',
            'slug'          => 'tags.index',
            'description'   => 'Lista y navega todas las etiquetas',
        ]);
        
        Permission::create([
            'name'          => 'Creación de etiquetas',
            'slug'          => 'tags.create',
            'description'   => 'Permiso para crear nuevas etiquetas',
        ]);
        
        Permission::create([
            'name'          => 'Edición de etiquetas',
            'slug'          => 'tags.edit',
            'description'   => 'Permiso de editar algun dato de una etiqueta',
        ]);
        
        Permission::create([
            'name'          => 'Eliminar etiquetas',
            'slug'          => 'tags.destroy',
            'description'   => 'Permiso de eliminar etiquetas'      
        ]);

    }
}
