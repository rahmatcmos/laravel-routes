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
