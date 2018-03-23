<?php
use App\Role;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/roles', function(){
   $role = new Role();
   $role->name = "Subscriber";
   $role->save(); 
});


// Route::resource('admin/users/edit/{user}/', 'AdminUsersController@edit');
// Route::resource('admin/users/{update}', 'AdminUsersController@update');
// Route::resource('admin.users', 'AdminUsersController@destroy');


// Route::get('admin/users/create', 'AdminUsersController@create');
// Route::post('admin/users/store', 'AdminUsersController@store');
// Route::get('admin/users/', 'AdminUsersController@index');
// Route::patch('admin/users/update/{id}', 'AdminUsersController@update');
// Route::get('admin/users/{user}/edit', 'AdminUsersController@edit');
// Route::delete('admin/users/{user}', 'AdminUsersController@update@destroy');


Route::group(['middleware' => 'admin'], function() {
    Route::resource('admin/users', 'AdminUsersController');    
    Route::get('admin/users/{id}/destroy', 'AdminUsersController@destroy');   
});
