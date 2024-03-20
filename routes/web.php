<?php

use App\Http\Controllers\{
    HomeController,
    DashboardController,
};
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });
// Route::get('/', [HomeController::class, 'index'])->name('dashboard');
// Route::get('/', [\App\http\Controllers\HomeController::class,'index'])->name('home');

Route::get('/', function () {
    return redirect()->route('login');
});

Route::group(['middleware' => 'auth'], function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::group(['middleware'], function () {

        Route::resource('/profil', ProfilController::class);

        Route::get('/docter/data', [DocterController::class, 'data'])->name('docter.data');
        Route::resource('/docter', DocterController::class);

        Route::get('/layanankami/data', [LayananController::class, 'data'])->name('layanankami.data');
        Route::resource('/layanankami', LayananController::class);

        Route::get('/artikel/data', [ArtikelController::class, 'data'])->name('artikel.data');
        Route::resource('/artikel', ArtikelController::class);

        Route::get('/poli/data', [PoliController::class, 'data'])->name('poli.data');
        Route::resource('/poli', PoliController::class);

        Route::get('/kategori/data', [KategoriController::class, 'data'])->name('kategori.data');
        Route::resource('/kategori', KategoriController::class);

        Route::get('/jadwaldokter/data', [JadwalController::class, 'data'])->name('jadwaldokter.data');
        Route::resource('/jadwaldokter', JadwalController::class);

        Route::get('/headslide/data', [SliderController::class, 'data'])->name('headslide.data');
        Route::resource('/headslide', SliderController::class);

    });
});

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
