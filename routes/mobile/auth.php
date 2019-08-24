<?php

Route::group([
	'namespace' => 'Auth', 
	'as' => 'auth.'], function () {

 	Route::post('register', 'AuthenticateController@register')->name('access.authenticate.register');

    Route::post('login', 'AuthenticateController@authenticate')->name('access.authenticate.login');
});

Route::group([
	'middleware' => 'jwt.auth',
    'namespace'  => 'Auth',
    'as' => 'auth.',
    'prefix'     => 'auth',
], function() {

	/**
	 * User Management
	 */
	Route::group([
		'namespace' => 'User',
		'as' => 'user.',
		'prefix'     => 'user',
	], function() {

		//list of products
		Route::post('products', 'UserController@products')->name('user.products');
		
	});

});
