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

Route::get ('/Hello', function () {
	return '<center><h1> Hello World<h1></center>';
});

// Route::get('/index', function() {
// 	echo "Uji coba route dengan method GET";
// });

// Route::post('/store',function(){
// 	//sintak untuk menyimpan data yang kita miliki
// });

// Route::put('/update',function(){
// 	//sintak untuk update data yang kita miliki
// });

// Route::delete('/delete',function(){
// 	//sintak untuk menghapus data yang kita miliki
// });

// Route::match(['get','post'],'/welcome' function(){
// //
// });

// Route::any ('/welcome' function() {
// 	//
// });

Route::get('/show/{id}',function ($id){
	echo "Nilai parameter yang kita berikan adalah =".$id;
});

Route::get('/show/{id?}',function ($id=1){
	echo "Nilai parameternya adalah =".$id;
});

Route::get('/edit/{nama}',function ($nama){
	echo "Nilai parameter yang kita berikan adalah ".$nama;
})->where('nama','[A-Za-z]+');

Route::get('/index',function(){
	echo "<a href='".route('create')."'>Akses route dengan nama </a>";
});

Route::get('/create',function (){
	echo "Route diakses menggunakan nama";
})->name('create');

Route::get('/produk','barangsController@index');

Route::get('/produk/show','barangsController@show');

Route::get('/halaman',function(){
	$title ='HarryPotter';
	$konten = 'Harry potter and masha and the bear deathly hallows: part 2';
	return view('konten.halaman',compact('title','konten'));
});