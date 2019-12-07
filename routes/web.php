<?php

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

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
    // return view('welcome');
    // return view('portfolio.admin.home.AdminHome');
    return view('welcome');
});
Route::get('/home', function() {
    return view('HomePage');
});
Route::get('/admin', function() {
    return view('AdminHome');
});
Route::get('/recommendations',function() {
    return view('Recommendations');
});
Route::get('login', function (){
    return view('auth.login');
});
Route::view('/portfolio/admin/home/AdminHome','AdminHome');
Route::resource('forms','FormController');
// Route::resource('portfolio.admin.home','HomeController');
// Route::get('/multiuploads', 'HomeController@uploadForm');
// Route::post('/multiuploads', 'HomeController@uploadSubmit');
Route::resource('hire','HireController');
// Route::get('/hire','HireController@index');

Route::post('/hires','HireController@store')->name('hires');
Route::get('hires/{id}/edit', 'HireController@edit');
Route::get('/hires','HireController@display');
Route::post('hires/{id}/edit','HireController@update');

Route::resource('skills', 'SkillsController');
// Route::get('/skills','SkillsController@index');
Route::get('/skills','SkillsController@display');
Route::post('/skills','SkillsController@store')->name('skills');
Route::get('skills/{id}/edit', 'SkillsController@edit');
Route::post('skills/{id}/edit','SkillsController@update');

Route::resource('experience','ExperienceController');
Route::get('/experience','ExperienceController@display');
Route::post('/experience','ExperienceController@store')->name('experience');
Route::get('experience/{id}/edit', 'ExperienceController@edit');
Route::post('experience/{id}/edit','ExperienceController@update');

Route::resource('work', 'WorkController');
Route::get('/works','WorkController@display');
Route::post('/works','WorkController@store')->name('works');
Route::get('works/{id}/edit', 'WorrkController@edit');
Route::post('works/{id}/edit','WorkController@update');

Route::get('/contact', function() {
    return view('contact');
});
Route::post('/contact', function(Request $request) {
    Mail::send(new ContactMail($request));
    return redirect('/hires');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
