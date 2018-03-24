<?php
use App\Role;
use App\Post;
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

// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/roles', function(){
//    $role = new Role();
//    $role->name = "subscriber";
//    $role->save(); 
// });

// Route::get('/addpost', function () {
//     $post = new Post();
//     $post->title = 'Laravel post';
//     $post->body = 'this is the content of the post in laravel test data';
//     $post->user_id = 1;
//     $post->save();
// });

Route::get('/', function() {
    if (Auth::check()) {
        return "User is logged in";
    }
});
 
Auth::routes();
Route::get('/home', 'HomeController@index');

Route::group(['middleware' => 'admin'], function() {
    Route::resource('admin/users', 'AdminUsersController');    
    Route::get('admin/users/{id}/destroy', 'AdminUsersController@destroy'); 
    Route::get('admin/', function() {
        return view('admin/index');
    });  
    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

    Route::resource('admin/posts', 'AdminPostsController');
});
