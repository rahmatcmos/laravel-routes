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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('kontak', function () {
//     return '<h1>Halaman Kontak</h1>';
// });
//
// Route::post('kontak-post', function() {
//     return 'Anda mengirim pesan "' . $_POST['pesan'] . '"';
// });

// Route::match(['get', 'post'], 'kontak', function() {
//     $html = '<h1>halaman kontak</h1>';
//     if (isset($_REQUEST['pesan'])) {
//     $html .= 'Anda mengirim pesan ' . $_REQUEST['pesan'];
//     }
//     return $html;
// });

// Route::any('kontak', function() {
//     $html = '<h1>halaman kontak</h1>';
//     $html = 'Anda mengakses dengan method ' . Request::method();
//     return $html;
// });

/*
Route::get('welcome', function() {
    return "Selamat datang " . $_REQUEST['nama'] . ". Anda ganteng banget!";
});
*/

Route::get('welcome/{nama}/{asal}', function($nama, $asal) {
    return "Selamat datang " . $nama . " dari " . $asal . ". Anda ganteng banget!";
});

// Route::get('welcome/{nama}', ['as'=>'home.welcome', function($nama) {
//     return "Selamat datang " . $nama . ". Anda ganteng banget!";
// }])->where('nama', '[A-Za-z]+');


/* Global Pattern Route
Route::pattern('nama', '[A-Za-z]+');

Route::get('welcome/{nama}', ['as'=>'home.welcome', function($nama) {
    return "Selamat datang " . $nama . ". Anda ganteng banget!";
}]);
*/

/* Optional Route tanpa Parameter
Route::get('welcome/{nama?}', function($nama = 'Pengunjung') {
    return "Selamat datang " . $nama . ". Anda ganteng banget!";
});
*/

/* Optional Route tanpa Parameter + Named Routes
Route::get('welcome/{nama?}', ['as'=>'home.welcome',  function($nama = 'Pengunjung') {
    return "Selamat datang " . $nama . ". Anda ganteng banget!";
}]);
*/

/* URL Manual
Route::get('menu', function() {
    return 'Kunjungi <a href="/welcome">Kunjungi Halaman Welcome</a>';
});
*/

/* URL + named route
Route::get('menu', function() {
    return 'Kunjungi <a href="'.route('home.welcome').'">Halaman Welcome</a>';
});
*/

/* Route group
Route::group(['prefix'=>'dashboard'], function() {
    Route::get('settings', function() {
      return 'halaman dashboard > settings';
    });
    Route::get('profile', function() {
      return 'halaman dashboard > profile';
    });
    Route::get('inbox', function() {
      return 'halaman dashboard > inbox';
    });
});
*/

/* Subdomain Routing
Route::group(['domain' => '{account}.myapp.com'], function()
{
    Route::get('user/{id}', function($account, $id)
    {
      //
    });
});
*/

/* Subdomain Routing 2
Route::group(['domain' => '{username}.laravel-routes.dev'], function()
{
    Route::get('/', function($username) {
        return 'Anda mengunjungi akun ' . $username;
    });
});
*/

/* Subdomain Routing 3
Route::group(['domain' => '{username}.laravel-routes.dev'], function()
{
      $data_user = [
             'dhimas' => [
                 'profile' => 'Seorang merbot langgar.',
                 'status' => ['Gue keren!', 'Gue keren bgt!', 'Top dah!']
             ],
             'ganteng' => [
                 'profile' => 'Seorang programmer cute.',
                 'status' => ['Mantap!', 'Hari ini luar biasa!', 'Cemungut ea..']
              ]
     ];

     Route::get('profile', function($username) use ($data_user)
     {
        return $data_user[$username]['profile'];
     });

     Route::get('status/{id}', function($username, $id) use ($data_user)
    {
        return $username . ' menulis : ' . $data_user[$username]['status'][$id];
    });
});
*/
