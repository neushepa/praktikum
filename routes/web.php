<?php

use App\Http\Controllers\BiodataController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/belajar', function () {
    return 'Hello World';
});

// Route::get('/list', function () {
//     return view('list_siswa');
// });

Route::get('/home', [HomeController::class, 'showgreeting']);

// Route::get('/bio', function () {
//     $data= [
//         'nama'=>'Rio Andrianto',
//         'lahir'=>'Bandung, 07 Desember 1992',
//         'hobi'=>'Ngoding',
//         'jk'=>'Laki-laki',
//         'agama'=>'Islam',
//         'alamat'=>'Mutiara Venue Estate MR No.10',
//         'telp'=>'0857-2282-8810',
//         'email'=>'r.andrianto@gmail.com',
//         'photo'=>'../img/rio.jpg',
//     ];
//     return view('bio', $data);
// });

Route::get('/bio', [HomeController::class, 'index']);
Route::get('/list', [BiodataController::class, 'index']);
Route::get('/add_siswa', [BiodataController::class, 'create']);

Route::get('/post', [PostController::class, 'index']);
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
