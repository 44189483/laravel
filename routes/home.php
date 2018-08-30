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

Route::get('/', 'Home@index');
Route::get('detail/{id}', 'Home@detail');
Route::post('save', 'Home@save');
Route::get('del/{id}', 'Home@del');
Route::post('member/login','Member@login');
Route::get('member/logout','Member@logout');

//Route::get('/',function(){

	//$articles = App\Models\article::all();

	//$articles = DB::table('article')->select('id','title','attach','createTime')->where('type', 1)->orderBy('id', 'DESC')->get();

	//print_r($articles);

    //return View::make('Home.index')->with('articles', $articles);

	//return view('Home.index',array('name' => 'James');
	//return view('Home.index')->with('name','James');

//});

Route::get('update', 'Home@update');

// Route::get('users', function(){

// 	$users = App\Models\Users::all();

//     return View::make('Home.users')->with('users', $users);

//     //return View::make('Home.users');
// });