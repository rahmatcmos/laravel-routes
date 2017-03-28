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

Route::match(['get', 'post'], 'kontak', function() {
    $html = '<h1>halaman kontak</h1>';
    if (isset($_REQUEST['pesan'])) {
    $html .= 'Anda mengirim pesan ' . $_REQUEST['pesan'];
    }
    return $html;
});
