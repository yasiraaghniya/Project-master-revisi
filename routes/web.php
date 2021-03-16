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
    return view('home2', ['title' => 'KEJAKSAAN TINGGI KALIMANTAN SELATAN']);
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/new-login', function(){
    return view('newLogin');
});

Route::get('/new-register', function(){
    return view('newRegister');
});

Route::get('/new-forget', function(){
    return view('newForget');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Route::get('edulevels','EdulevelController@data');
// Route::get('edulevels/add','EdulevelController@add');
// Route::post('edulevels','EdulevelController@addProcess');
// Route::get('edulevels/edit/{id}','EdulevelController@edit');
// Route::patch('edulevels/{id}', 'EdulevelController@editProcess');
// Route::delete('edulevels/{id}', 'EdulevelController@delete');

// Route::get('programs/trash','ProgramController@trash');
// Route::get('programs/restore/{id?}','ProgramController@restore');
// Route::get('programs/delete/{id?}','ProgramController@delete');
// Route::resource('programs', 'ProgramController');

//Pegawai
Route::get('datapegawai/delete/{id?}', 'PegawaiController@delete');
Route::get('/datapegawai/cetak', 'PegawaiController@cetak')->name('datapegawai/cetak');

Route::get('/cetak-filter/{kantor}','PegawaiController@cetakFilter')->name('cetak-filter');
Route::resource('datapegawai', 'PegawaiController');


//Kenaikan Gaji
Route::get('kenaikan-gaji/delete/{id?}', 'KenaikangajiController@delete');
Route::get('/kenaikan-gaji/cetak', 'KenaikangajiController@cetak')->name('kenaikan-gaji/cetak');
// Route::get('datapegawai/edit/{id}','KenaikangajiController@edit');
// Route::get('/cetak-filter/{kantor}','KenaikangajiController@cetakFilter')->name('cetak-filter');
Route::resource('kenaikan-gaji', 'KenaikangajiController');

//Melaksanakan Tugas
Route::get('melaksanakan-tugas/delete/{id?}', 'MelaksanakantgsController@delete');
Route::get('/melaksanakan-tugas/cetak', 'MelaksanakantgsController@cetak')->name('melakasanakan-tugas/cetak');
// Route::get('datapegawai/edit/{id}','KenaikangajiController@edit');
// Route::get('/cetak-filter/{kantor}','KenaikangajiController@cetakFilter')->name('cetak-filter');
Route::resource('melaksanakan-tugas', 'MelaksanakantgsController');

//Perjalanan
Route::get('perjalanan-dinas/delete/{id?}', 'PerjalanandnsController@delete');
Route::get('/perjalanan-dinas/cetak', 'PerjalanandnsController@cetak')->name('perjalanan-dinas/cetak');
// Route::get('datapegawai/edit/{id}','KenaikangajiController@edit');
// Route::get('/cetak-filter/{kantor}','KenaikangajiController@cetakFilter')->name('cetak-filter');
Route::resource('melaksanakan-tugas', 'PerjalanandnsController');

//Mengikuti
Route::get('mengikuti-pelatihan/delete/{id?}', 'MengikutiplthController@delete');
Route::get('/mengikuti-pelatihan/cetak', 'MengikutiplthController@cetak')->name('mengikuti-pelatihan/cetak');
// Route::get('datapegawai/edit/{id}','MengikutiplthController@edit');
// Route::get('/cetak-filter/{kantor}','MengikutiplthController@cetakFilter')->name('cetak-filter');
Route::resource('mengikuti-pelatihan', 'MengikutiplthController');

