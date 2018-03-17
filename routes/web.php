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

Route::resource('admin/users', 'AdminUsersController');

// Route::get('/admin', function() {
//     return view ('admin.index');
// });

// Route::get('admin/users/{id}/edit', 'AdminUsersController');