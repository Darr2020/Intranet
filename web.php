<?php

<<<<<<< HEAD
=======
<<<<<<< HEAD
Auth::routes();

Route::middleware(['auth'])->group(function () {

	Route::group(['namespace' => 'User'], function(){
		Route::get('/',               'PostController@posts')->name('noticias');
		Route::get('noticia/{slug}',  'PostController@post')->name('noticia');
		Route::get('etiqueta/{slug}', 'PostController@tag')->name('etiqueta');
		Route::get('eventos', 		  'EventController@index')->name('eventos');
		Route::get('servicios', 	  'ServiceController@services')->name('services');

		Route::prefix('tasks')->group( function(){

			Route::get('', 'TasksController@index')->name('tasks.index')
				->middleware('permission:tasks.index');

			Route::get('create', 'TasksController@create')->name('tasks.create')
				->middleware('permission:tasks.create');

			Route::post('store', 'TasksController@store')->name('tasks.store')
				->middleware('permission:tasks.create');

			Route::get('{tarea}/edit', 'TasksController@edit')->name('tasks.edit')
				->middleware('permission:tasks.edit');		

			Route::put('{tarea}', 'TasksController@update')->name('tasks.update')
				->middleware('permission:tasks.edit');

			Route::delete('{tarea}', 'TasksController@destroy')->name('tasks.destroy')
				->middleware('permission:tasks.destroy');
		});	
	});
			

	Route::group(['namespace' => 'Admin'], function (){

		Route::get('PanelAdmin', 'PanelController@view')->name('panel.view')
			->middleware('permission:panel.view');
		
		Route::get('dataEstadistica', 'PanelController@dataEstadistica');

		Route::prefix('Graficas')->group(function (){
			Route::get('', 'ChartsController@view')->name('charts.views');
			Route::get('Area', 'ChartsController@area')->name('charts.area');
			Route::get('Barra', 'ChartsController@bar')->name('charts.bar');
			Route::get('Torta', 'ChartsController@pie')->name('charts.pie');
		});
		
		/*=====  POSTS  =====*/	
		Route::prefix('posts')->group( function(){	

			Route::get('', 	          'PostController@index')->name('posts.index')
				->middleware('permission:posts.index');

			Route::get('post/{slug}', 'PostController@show')->name('posts.show')
				->middleware('permission:posts.show');

			Route::get('create',      'PostController@create')->name('posts.create')
				->middleware('permission:posts.create');

			Route::post('store',      'PostController@store')->name('posts.store')
				->middleware('permission:posts.store');
=======
>>>>>>> 97580540a15fb860aa90c997f932857133480f45
Auth::routes(['register' => false]);

Route::middleware(['auth'])->group(function(){

	Route::group(['namespace' => 'User'], function(){
		Route::get('/',               'PostController@posts')->name('noticias'); //PRINCIPAL
		Route::get('noticia/{slug}',  'PostController@post')->name('noticia');   //POST
		Route::get('etiqueta/{slug}', 'PostController@tag')->name('etiqueta');	 //TAG
		Route::get('eventos', 		  'EventController@index')->name('eventos'); //EVENTS
		Route::get('servicios', 	  'ServiceController@services')->name('services'); //SERVICES
		Route::resource('tarea',      'TasksController', ['except' => 'show', 'create', 'edit']); //TASKS

		Route::get('noticia/{post}/like', 'PostController@like')->name('post.like');//LIKE
    	Route::get('noticia/{post}/unlike', 'PostController@unlike')->name('post.unlike');//UNLIKE
	});

	Route::get('/tareas', function(){
		$titulo = 'Mis tareas';
		return view('users/tasks', compact('titulo'));
	});

	Route::group(['namespace' => 'Admin'], function (){

		Route::get('PanelAdmin', 'PanelController@view')->name('admin.panel') //PANELADMIN	
			->middleware('permission:admin.panel');

		/*=====  SERVICES  =====*/	
		Route::prefix('services')->group( function(){
			Route::get('', 	          'ServiceController@index')->name('services.index')
				->middleware('permission:services.index');

			Route::get('create',      'ServiceController@create')->name('services.create')
				->middleware('permission:services.create');

			Route::post('store',      'ServiceController@store')->name('services.store')
				->middleware('permission:services.create');

			Route::get('{id}/edit',   'ServiceController@edit')->name('services.edit')
				->middleware('permission:services.edit');

			Route::put('{id}', 	      'ServiceController@update')->name('services.update')
				->middleware('permission:services.edit');
		});	
		
		/*=====  POSTS  =====*/	
		Route::prefix('posts')->group( function(){
			Route::get('', 	          'PostController@index')->name('posts.index')
				->middleware('permission:posts.index');

			Route::get('post/{slug}', 'PostController@show')->name('posts.show')
				->middleware('permission:posts.show');

			Route::get('create',      'PostController@create')->name('posts.create')
				->middleware('permission:posts.create');

			Route::post('store',      'PostController@store')->name('posts.store')
				->middleware('permission:posts.create');
<<<<<<< HEAD
=======
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150
>>>>>>> 97580540a15fb860aa90c997f932857133480f45

			Route::get('{id}/edit',   'PostController@edit')->name('posts.edit')
				->middleware('permission:posts.edit');

			Route::put('{id}', 	      'PostController@update')->name('posts.update')
<<<<<<< HEAD
				->middleware('permission:posts.edit');
=======
<<<<<<< HEAD
				->middleware('permission:posts.update');
=======
				->middleware('permission:posts.edit');
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150
>>>>>>> 97580540a15fb860aa90c997f932857133480f45

			Route::delete('posts/{id}','PostController@destroy')->name('posts.destroy')
				->middleware('permission:posts.index');
		});

		/*=====  TAGS  =====*/
		Route::prefix('tags')->group( function(){

			Route::get('', 		 	'TagController@index')->name('tags.index')
				->middleware('permission:tags.index');

			Route::get('create', 	'TagController@create')->name('tags.create')
				->middleware('permission:tags.create');

			Route::post('store',    'TagController@store')->name('tags.store')
<<<<<<< HEAD
=======
<<<<<<< HEAD
				->middleware('permission:tags.store');

			Route::get('{id}/edit', 'TagController@edit')->name('tags.edit')
				->middleware('permission:tags.edit');

			Route::put('{id}',      'TagController@update')->name('tags.update')
				->middleware('permission:tags.update');			

			Route::delete('{id}',   'TagController@destroy')->name('tags.destroy')
				->middleware('permission:tags.destroy');
		});

		/*====  EVENTS  =====*/
		Route::prefix('events')->group( function(){

			Route::get('', 		 	'EventController@index')->name('events.index')
				->middleware('permission:events.index');

			Route::get('create', 	'EventController@create')->name('events.create')
				->middleware('permission:events.create');

			Route::post('store', 	'EventController@store')->name('events.store')
				->middleware('permission:events.store');

			Route::get('{id}/edit', 'EventController@edit')->name('events.edit')
				->middleware('permission:events.edit');

			Route::put('{id}', 		'EventController@update')->name('events.update')
				->middleware('permission:events.update');

			Route::delete('{id}',   'EventController@destroy')->name('events.destroy')
				->middleware('permission:events.destroy');
		});

=======
>>>>>>> 97580540a15fb860aa90c997f932857133480f45
				->middleware('permission:tags.create');

			Route::get('{id}/edit', 'TagController@edit')->name('tags.edit')
				->middleware('permission:tags.edit');

			Route::put('{id}',      'TagController@update')->name('tags.update')
				->middleware('permission:tags.edit');			

			Route::delete('{id}',   'TagController@destroy')->name('tags.destroy')
				->middleware('permission:tags.destroy');
		});

		/*====  EVENTS  =====*/
		Route::prefix('events')->group( function(){

			Route::get('', 		 	'EventController@index')->name('events.index')
				->middleware('permission:events.index');

			Route::get('create', 	'EventController@create')->name('events.create')
				->middleware('permission:events.create');

			Route::post('store', 	'EventController@store')->name('events.store')
				->middleware('permission:events.create');

			Route::get('{id}/edit', 'EventController@edit')->name('events.edit')
				->middleware('permission:events.edit');

			Route::put('{id}', 		'EventController@update')->name('events.update')
				->middleware('permission:events.edit');

			Route::delete('{id}',   'EventController@destroy')->name('events.destroy')
				->middleware('permission:events.destroy');
		});

<<<<<<< HEAD
=======
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150
>>>>>>> 97580540a15fb860aa90c997f932857133480f45
		/*====  ROLES  =====*/
		Route::prefix('roles')->group( function(){

			Route::get('', 'RoleController@index')->name('roles.index')
				->middleware('permission:roles.index');

			Route::get('listado', 'RoleController@listar')->name('listar.users')
				->middleware('permission:roles.listar');

			Route::get('create', 'RoleController@create')->name('roles.create')
				->middleware('permission:roles.create');

			Route::post('store', 'RoleController@store')->name('roles.store')
				->middleware('permission:roles.create');

			Route::get('{role}/edit', 'RoleController@edit')->name('roles.edit')
				->middleware('permission:roles.edit');		

			Route::put('{role}', 'RoleController@update')->name('roles.update')
				->middleware('permission:roles.edit');

			Route::delete('{role}', 'RoleController@destroy')->name('roles.destroy')
				->middleware('permission:roles.destroy');
<<<<<<< HEAD
=======
<<<<<<< HEAD
		});			
=======
>>>>>>> 97580540a15fb860aa90c997f932857133480f45
		});
		
		/*=====  REPORTS  =====*/	
		Route::prefix('Reportes')->group(function (){	
			Route::get('dataEstadistica', 'PanelController@dataEstadistica');
			Route::get('ver', 'ReportsController@viewReport')->name('report.view');
			Route::get('descargar', 'ReportsController@downReport')->name('report.down');
		});
		Route::get('traza', 'TraceController@getTrace')->name('trace.index');

		
		/*=====  CHARTS  =====*/	
		Route::prefix('Graficas')->group(function (){
			Route::get('', 'ChartsController@view')->name('charts.views');
			Route::get('Area', 'ChartsController@area')->name('charts.area');
			Route::get('Barra', 'ChartsController@bar')->name('charts.bar');
			Route::get('Torta', 'ChartsController@pie')->name('charts.pie');
		});
<<<<<<< HEAD
=======
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150
>>>>>>> 97580540a15fb860aa90c997f932857133480f45
	    
	});

	//Users
	Route::get('directorio', 'UserController@index')->name('users.index');

	Route::get('/{slug}', 'UserController@show')->name('users.show');

	Route::get('users/{id}/edit', 'UserController@edit')->name('users.edit')
		->middleware('permission:users.edit');

	Route::put('users/{user}', 'UserController@update')->name('users.update')
		->middleware('permission:users.edit');
});