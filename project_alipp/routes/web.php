<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
/** 
Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function(){
    return 'Hello World';
});

Route::get('siswa', function () {
    return 'GET: daftar semua siswa';
});
Route::post('siswa', function () {
    return 'POST: buat siswa baru';
});
Route::put('siswa', function () {
    return 'PUT pada collection siswa (umumnya tidak dipakai tanpa id)';
});
Route::delete('siswa', function () {
    return 'DELETE pada collection siswa (hapus banyak)';
});
Route::get('siswa/{id}', function ($id) {
    return "GET siswa dengan id: $id";
});
Route::put('siswa/{id}', function ($id) {
    return "PUT update siswa dengan id: $id";
});
Route::delete('siswa/{id}', function ($id) {
    return "DELETE siswa dengan id: $id";
}); 


 Route::get('/', function () { 
echo " Hi! Selamat Datang di Website Laravel"; 
});
Route::get('/about', function () { 
echo " NIM : 2041720205 <br> Nama : Allif Pangestu Aji <br> Kelas : 2RPB"; 
});
Route::get('/artikel/{id}', function ($id) { 
echo " “Ini adalah halaman 
Artikel dengan ID: $id"; 
}); */

route::get('/', [PageController::class, 'index']);
route::get('/about', [PageController::class, 'about']);
route::get('/artikel/{id}', [PageController::class, 'artikel']);
/**Route::get('/hello', function () { 
 
return view('blog.hello', ['name' => 'Andi']); 
 
}); */
Route::get('/hello', [WelcomeController::class, 'hello']); 
?>
