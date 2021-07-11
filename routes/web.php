<?php

use Illuminate\Support\Facades\Route;

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
    return view('pages.index');
})->name('pages.home');

Route::get('/about-us', function () {
    return view('pages.about');
})->name('pages.about');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('pages.contact');

Route::get('/branchs', function () {
    return view('pages.branches');
})->name('pages.branchs');

Route::get('/projects', function () {
    return view('pages.projects');
})->name('pages.projects');

Route::get('/project', function () {
    return view('pages.project');
})->name('pages.project');

Route::get('/ceid', function () {
    return view('pages.ceid');
})->name('pages.ceid');

Route::get('/membership', function () {
    return view('pages.membership');
})->name('pages.membership');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('dashboard')->middleware('auth')->group(function(){
    route::get('/', [App\Http\Controllers\ContentController::class, 'index'])->name('dashboard');
    // route::post('/edit','contents@edit')->name('dashboard.edit');
    
    // // conatcts routes
    // route::get('/contact','contents@conts')->name('contacts');
    // route::delete('/contact/del','contents@remove_conts')->name('contacts.remove'); 

    // // partners routes
    // route::get('/partners','contents@partners')->name('dashboard.partners');
    // route::post('/partners','contents@add_partner');
    // route::put('/partners/{id}','contents@update_partner');
    // route::delete('/partners/{id}','contents@del_partner');

    // // sontacts info routes
    // route::put('/info','contents@edit_info');

});