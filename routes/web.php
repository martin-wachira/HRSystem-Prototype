<?php

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

Route::get('/admin', function (){
    return view('admin_template');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/users', function () {
    return view('users/index');
});

//Route::get('/users/show', function (){
//    $users = DB::table('users')
//        ->select('id','first_name','last_name','email')->get();
//    return view('users/show', compact('users'));
//});

Route::get('/users/show', function (){
    $users = DB::table('users')
        ->join('roles_user','roles_user.user_id','=','users.id')
        ->join('roles','roles.id','=','roles_user.roles_id')
        ->select('users.*','roles.role_name')
        ->get();
    return view('users/show', compact('users'));
});

//Route::get('/role', function () {
//    return view('create_role');
//});

Route::resource('skills', 'SkillsController');
Route::resource('roles', 'RolesController');
//Route::resource('users','Auth\RegisterController');
Route::resource('users','UsersController');

Route::get('/skills', 'SkillsController@index');
Route::get('/roles','RolesController@index');


//Route::get('/users','Auth\RegisterController@profile');
//Route::get('/users','Auth\RegisterController@auth\register');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@administrator')->name('administrator');
Route::get('/skills', 'SkillsController@skills')->name('skills');
Route::get('/roles', 'RolesController@roles')->name('roles');
Route::get('/skills', 'SkillsController@index');
Route::get('/roles','RolesController@index');
//Route::get('/users','Auth\UsersController@users');




