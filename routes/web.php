<?php

use App\site_setting;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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

// For user
Route::get('/', function () {
    // $is_fetched = false;
    // if ($is_fetched) {
        $settings = site_setting::find(1);
        Session::put('site_setting', $settings);
        // dd(Session::get('site_setting'));
    //     $is_fetched = true;
    // }
    return view('welcome');
});

Route::post('/update/profile', 'pocoController@upload')->name('update.profile');
Route::get('/change/profile', 'pocoController@changeProfile')->name('change.profile');


// Admin Login routes

Route::get('/admin/login','adminLoginController@adminLogin')->name('admin.login');
Route::post('/admin/login/submit','adminLoginController@submit')->name('admin.login.submit');

Route::post('/admin/logout','adminLoginController@adminLogout')->name('admin.logout');
Route::get('/admin', 'pocoController@adminDashboard')->name('admin.dashboard');


\Illuminate\Support\Facades\Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// For Newsletter
Route::post('/sendmail', 'mailController@sendmail');

// SMTP Gmail Message delivered done!
Route::post('/mail', 'SendMailController@sendMail')->name('send.mail');

// User Posting Routes

Route::get('/userposting', 'UserPostingController@userPostingShow')->name('userpost.show');
Route::get('/post', 'UserPostingController@create');
Route::post('/post/submit', 'UserPostingController@submit')->name('post.submit');
Route::get('/delete/{id}', 'UserPostingController@delete')->name('post.delete');

// Frontend Pages
Route::view('/about', 'frontend.layouts.OtherPages.about');
Route::view('/contact', 'frontend.layouts.OtherPages.contact');
Route::view('/blog', 'frontend.layouts.OtherPages.blog');

// Site Settings

Route::get('/sitesettings', 'SiteSettingController@site_settings')->name('site.settings');
Route::post('/settings/update', 'SiteSettingController@settings_update')->name('settings.update');

