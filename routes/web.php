<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LoginUserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\LokasiTampilController;
use App\Http\Controllers\UserDetailController;
use App\Http\Controllers\DetailPengaduanController;
use App\Http\Controllers\TanggapanController;
use App\Http\Controllers\CetakController;
use App\Http\Controllers\HistoryController;

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




// Route::group(['middleware'=> 'guest:Petugas15467,user'],function () {
   //login user
Route::get('/',[LoginUserController::class,'index'])->name('login');
Route::post('/',[LoginUserController::class,'login']);

//regist user
Route::get('/login/register',[LoginUserController::class,'register']);
Route::post('/login/create',[LoginUserController::class,'create']);
// });


// Route::group(['middleware'=> 'auth:Petugas15467'],function () {
   Route::post('/logout',[LoginUserController::class,'logout']);
   
   // });






 Route::group(['middleware'=> 'auth:Petugas15467'],function () {
   //pegaduan
Route::resource('home',PengaduanController::class);
//userDetail
Route::get('detailUser',[UserDetailController::class,'index']);

});





//register
// Route::get('/login/register',[LoginController::class,'register'])->middleware('islogin');
// Route::post('/login/create',[LoginController::class,'create']);

    




//lokasitampil
Route::resource('/home/create',LokasiTampilController::class);


// //pengaduan
// Route::resource('admin',AdminController::class);



//detail pengaduan user
Route::get('/detailPengaduan/{id}/home',[DetailPengaduanController::class,'home']);

//hapuslaporan
Route::delete('detailpengaduan/{id}/home' ,[DetailPengaduanController::class,'destroy'] );

//tanggapaan
Route::post('/detailPengaduan/{id}',[DetailPengaduanController::class,'postTanggapan']);




Route::group(['middleware'=> 'auth:user'],function () {
//lokasi
Route::resource('lokasi',LokasiController::class);
//cetak
Route::get('/admin/{id}/cetak',[CetakController::class,'index']);
//admin
Route::resource('admin',AdminController::class);

//detail pengaduan admin
Route::get('/detailPengaduan/{id}',[DetailPengaduanController::class,'index']);
});




// Route::group(['middleware'=> 'auth:Petugas15467'],function () {
//tanggapaan
Route::post('/detailPengaduan/{id}',[DetailPengaduanController::class,'postTanggapan']);
// });

Route::group(['middleware'=> 'guest:user'],function () {
//Loginpetugas
Route::get('/loginPetugas',[LoginController::class,'index']);
Route::post('/loginPetugas',[LoginController::class,'loginPetugas']);
 
});


Route::group(['middleware'=> 'auth:user'],function () {
//logout
Route::post('/logout',[LoginController::class,'logout']);
});



//history 
Route::resource('history',HistoryController::class);


//delete laporan selesai
Route::delete('history/{id}', [HistoryController::class,'destroy']);
