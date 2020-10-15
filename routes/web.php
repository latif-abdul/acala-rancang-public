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
    return redirect('/loginPengunjung');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/tes', function () {
    return view('tes');
});
Route::get('/tes2', function () {
    return view('tes2');
});
Route::get('/loginpengunjung', function () {
    return view('loginPengunjung');
});
Route::get('/podcast', function () {
    return view('podcast');
});


Route::get('/admin/exhibition','ExhibitionController@index');
Route::get('/admin/tambah_exhibition','ExhibitionController@tambah');
Route::post('/admin/simpan','ExhibitionController@simpan');
Route::get('/admin/hapus/{id}','ExhibitionController@hapus');
Route::get('/admin/edit/{id}','ExhibitionController@edit');
Route::post('/admin/update','ExhibitionController@update');
Route::get('/admin/detail/{id}','ExhibitionController@detail');
Route::get('/admin/InteriorExp','InteriorExpController@index');
Route::get('/admin/tambah_author','InteriorExpController@tambahAuthor');
Route::get('/admin/tambah_interiorExp','InteriorExpController@tambahInteriorExp');
Route::post('/admin/simpanInteriorExp','InteriorExpController@simpanInteriorExp');
Route::post('/admin/simpanAuthor','InteriorExpController@simpanAuthor');
Route::get('/admin/edit_interiorExp/{id}','InteriorExpController@editInteriorExp');
Route::post('/admin/updateInteriorExp','InteriorExpController@updateInteriorExp');
Route::get('/admin/detail_interiorExp/{id}','InteriorExpController@detailInteriorExp');
Route::get('/admin/edit_author/{id}','InteriorExpController@editAuthor');
Route::post('/admin/updateAuthor','InteriorExpController@updateAuthor');
Route::get('/admin/detail_author/{id}','InteriorExpController@detailAuthor');
Route::get('/admin/hapusInteriorExp/{id}','InteriorExpController@hapusInteriorExp');
Route::get('/admin/hapusAuthor/{id}','InteriorExpController@hapusAuthor');
Route::get('/admin/umkm','umkmController@index');
Route::get('/admin/tambahUmkm','umkmController@tambahUmkm');
Route::post('/admin/simpanUmkm','umkmController@simpanUmkm');
Route::get('/admin/editUmkm/{id}','umkmController@editUmkm');
Route::post('/admin/updateUmkm/','umkmController@updateUmkm');
Route::get('/admin/detailUmkm/{id}','umkmController@detailUmkm');
Route::get('/admin/hapusUmkm/{id}','umkmController@hapusUmkm');
Route::get('/loginPengunjung','userController@index');
Route::post('/rekapPengunjung','userController@login');
Route::get('/exhibition','userController@exhibition');
Route::get('/interiorExp','userController@interiorExp');
Route::get('/umkm','userController@umkm');
Route::get('/podcast','userController@podcast');
Route::get('/aboutus','userController@aboutus');
Route::get('/exhibition/InteriorDesign','userController@katInteriorDesign');
Route::get('/exhibition/Furniture','userController@katFurniture');
Route::get('/exhibition/SchematicDrawing','userController@katSchematicDrawing');
Route::get('/exhibition/Nirmana','userController@katNirmana');
Route::get('/admin', 'adminController@index');
Route::get('/workshop', 'userController@interiorExp');
Route::get('/workshop2/{id}', 'userController@readInteriorExp');
Route::get('/admin/podcast_admin', 'podcastController@index');
Route::get('/admin/tambah_podcast', 'podcastController@tambahPodcast');
Route::post('/admin/simpan_podcast', 'podcastController@simpanPodcast');
Route::get('/admin/edit_podcast/{id}', 'podcastController@editPodcast');
Route::post('/admin/update_podcast', 'podcastController@updatePodcast');
Route::get('/admin/hapus_podcast/{id}', 'podcastController@hapusPodcast');
Route::get('/admin/pengunjung', 'pengunjungController@index');
Route::get('/umkm2/{id}', 'userController@readUmkm');
Auth::routes();

Route::get('/homeAdmin', 'HomeController@index')->name('home');

