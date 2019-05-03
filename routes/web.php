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
	$tids = App\Tiding::orderBy('id', 'desc')->take(3)->get();
	$slides = App\Tiding::orderBy('id', 'desc')->take(3)->get();

    return view('welcome')->with('slides', $slides)->with('tids', $tids);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('tidings', 'TidingController');
Route::resource('system_events', 'SistemEventController');
Route::resource('associations', 'AssociationController');
Route::resource('contacts', 'Contact_UsController');
Route::resource('proyects', 'ProyectController');
Route::resource('benefits', 'BenefitController');
Route::resource('unionized_companies', 'UnionizedCompaniController');
Route::resource('affiliated_companies', 'AffiliatedCompaniController');
Route::resource('video_gallery', 'VideoController');
Route::resource('images_gallery', 'ImageGalleryController');