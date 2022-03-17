<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\ContactController;

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


  //website

  Route::get('/theme', function () {return view('website.layouts.theme');});
  Route::get('/',[App\Http\Controllers\WebsiteController::class,'index']);
  Route::get('/urunler', [App\Http\Controllers\WebsiteController::class, 'uruncagir']);
  Route::get('/urunview/{id}',[App\Http\Controllers\WebsiteController::class, 'urunview']);
  Route::get('/kategori/{urun_kategori}', [App\Http\Controllers\WebsiteController::class, 'kategorikontrol']);
  //Contact
  Route::get('iletisim',[App\Http\Controllers\ContactController::class, 'getContact']);
  Route::post('iletisim',[App\Http\Controllers\ContactController::class, 'saveContact']);


  // admin/
Route::group(['prefix'=>'admin'],function(){


  Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
  Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');

  /*// Authentication Routes...
  $this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
  $this->post('login', 'Auth\LoginController@login');
  $this->post('logout', 'Auth\LoginController@logout')->name('logout');

  // Registration Routes...
  $this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
  $this->post('register', 'Auth\RegisterController@register');

  // Password Reset Routes...
  $this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
  $this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
  $this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
  $this->post('password/reset', 'Auth\ResetPasswordController@reset');*/

  //auth sayfalarının bağlantısı vendor/laravel/ui/src/AuthRouteMethods.php
  Auth::routes();


  Route::group(['middleware' => 'auth'], function () {
    Route::get('icons', ['as' => 'pages.icons', 'uses' => 'App\Http\Controllers\PageController@icons']);
  	Route::get('maps', ['as' => 'pages.maps', 'uses' => 'App\Http\Controllers\PageController@maps']);
  	Route::get('notifications', ['as' => 'pages.notifications', 'uses' => 'App\Http\Controllers\PageController@notifications']);
  	Route::get('rtl', ['as' => 'pages.rtl', 'uses' => 'App\Http\Controllers\PageController@rtl']);
  	Route::get('tables', ['as' => 'pages.tables', 'uses' => 'App\Http\Controllers\PageController@tables']);
  	Route::get('typography', ['as' => 'pages.typography', 'uses' => 'App\Http\Controllers\PageController@typography']);
  	Route::get('upgrade', ['as' => 'pages.upgrade', 'uses' => 'App\Http\Controllers\PageController@upgrade']);

      // Admin Sayfası Giriş Yetki Kontrol
      Route::group(['middleware' => 'yetki'], function () {
        // Ürünler

        Route::get('urun', ['as' => 'pages.urun', 'uses' => 'App\Http\Controllers\PageController@urun']);
        Route::post('urunEkleSonuc', ['as' => 'pages.urunEkleSonuc', 'uses' => 'App\Http\Controllers\PageController@urunEkleSonuc'])->name('urunEkleSonuc');
        Route::get('urunEkle', ['as' => 'pages.urunEkle', 'uses' => 'App\Http\Controllers\PageController@urunEkle']);
        Route::post("/urunEkleSonuc",[PageController::class,'urunEkleSonuc'])->name('urunEkleSonuc');
        Route::get("/urunSil/{id}",[PageController::class,'urunSil']);
        Route::get("/urunDuzenle/{id}",[PageController::class,'urunDuzenle']);
        Route::post("/urunDuzenleSonuc/{id}",[PageController::class,'urunDuzenleSonuc'])->name('urunDuzenleSonuc');
        Route::get("/urunDetay/{id}",[PageController::class,'urunDetay']);
        Route::post("/urunDetaySonuc/{id}",[PageController::class,'urunDetaySonuc'])->name('urunDetaySonuc');
        Route::post("/urunSirala",[PageController::class,'urunSirala'])->name('urunSirala');

        // Kategoriler

        Route::get('/kategoriEkle', ['as' => 'pages.kategoriEkle', 'uses' => 'App\Http\Controllers\PageController@kategoriEkle']);
        Route::post('/kategoriEkleSonuc',[PageController::class,'kategoriEkleSonuc'])->name('kategoriEkleSonuc');
        Route::get('/kategoriSil', ['as' => 'pages.kategoriSil', 'uses' => 'App\Http\Controllers\PageController@kategoriSil']);
        Route::post("/kategoriSilSonuc",[PageController::class,'kategoriSilSonuc'])->name('kategoriSilSonuc');
        Route::get('/kategoriDuzenle', ['as' => 'pages.kategoriDuzenle', 'uses' => 'App\Http\Controllers\PageController@kategoriDuzenle']);
        Route::post("/kategoriDuzenleSonuc",[PageController::class,'kategoriDuzenleSonuc'])->name('kategoriDuzenleSonuc');

        //site_bilgi

        Route::get('siteBilgi', ['as' => 'pages.siteBilgi', 'uses' => 'App\Http\Controllers\PageController@siteBilgi']);
        Route::post('siteBilgiSonuc', ['as' => 'pages.siteBilgiSonuc', 'uses' => 'App\Http\Controllers\PageController@siteBilgiSonuc'])->name('siteBilgiSonuc');
      });

  });

      Route::group(['middleware' => 'auth'], function () {
	     Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	     Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	     Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
       Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
      });

});
