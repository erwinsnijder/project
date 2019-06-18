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
// get  /projects        (index)
// get  /projects/create (create)
// get  /projects/1      (show)
// post /projects        (store)
// get  /projects/1/edit (edit)
// path /projects/1      (update)
// path /projects/1      (destroy)

route::resource('projects', 'ProjectsController');
// Route::get('/projects', 'ProjectsController@index');
// Route::get('/projects/create', 'ProjectsController@create');
// route::get('/projects/{project}', 'ProjectsController@show');
// Route::post('/projects', 'ProjectsController@store');
// route::get('/projects/{project}/edit', 'ProjectsController@edit');
// route::patch('/projects/{project}', 'ProjectsController@update');
// route::delete('/projects/{project}', 'ProjectsController@destroy');