<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function () {

	Route::group(['namespace' => 'User'], function(){
		Route::get('/',        'PostController@posts')->name('noticias');
		Route::get('noticia/{slug}',  'PostController@post')->name('noticia');
		Route::get('etiqueta/{slug}', 'PostController@tag')->name('etiqueta');
		Route::get('directorio', 	  'DirectoryController@index')->name('directory.index');
		Route::get('eventos', 		  'EventController@index')->name('eventos');
	});



	Route::group(['namespace' => 'Admin'], function (){


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

			Route::get('{id}/edit',   'PostController@edit')->name('posts.edit')
				->middleware('permission:posts.edit');

			Route::put('{id}', 	      'PostController@update')->name('posts.update')
				->middleware('permission:posts.update');

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
	    
	});
	//Roles
	Route::post('roles/store', 'RoleController@store')->name('roles.store')
		->middleware('permission:roles.create');

	Route::get('roles', 'RoleController@index')->name('roles.index')
		->middleware('permission:roles.index');

	Route::get('roles/create', 'RoleController@create')->name('roles.create')
		->middleware('permission:roles.create');

	Route::put('roles/{role}', 'RoleController@update')->name('roles.update')
		->middleware('permission:roles.edit');

	Route::get('roles/{role}', 'RoleController@show')->name('roles.show')
		->middleware('permission:roles.show');

	Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')
		->middleware('permission:roles.destroy');

	Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')
		->middleware('permission:roles.edit');



	//Users
	Route::get('users', 'UserController@index')->name('users.index')
		->middleware('permission:users.index');

	Route::put('users/{user}', 'UserController@update')->name('users.update')
		->middleware('permission:users.edit');

	Route::get('users/{user}', 'UserController@show')->name('users.show')
		->middleware('permission:users.show');

	Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy')
		->middleware('permission:users.destroy');

	Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit')
		->middleware('permission:users.edit');




	//Products
	Route::post('products/store', 'ProductController@store')->name('products.store')
		->middleware('permission:products.create');

	Route::get('products', 'ProductController@index')->name('products.index')
		->middleware('permission:products.index');

	Route::get('products/create', 'ProductController@create')->name('products.create')
		->middleware('permission:products.create');

	Route::put('products/{product}', 'ProductController@update')->name('products.update')
		->middleware('permission:products.edit');

	Route::get('products/{product}', 'ProductController@show')->name('products.show')
		->middleware('permission:products.show');

	Route::delete('products/{product}', 'ProductController@destroy')->name('products.destroy')
		->middleware('permission:products.destroy');

	Route::get('products/{product}/edit', 'ProductController@edit')->name('products.edit')
		->middleware('permission:products.edit');
});