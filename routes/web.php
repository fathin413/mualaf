<?php


use App\Http\Controllers\HeaderController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('admin.dashboard.index');
});

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/pendaftaran', action: function () {
    return view('pendaftaran');
});


Route::get('/header', function () {
    return view('header');
});

Route::get('/saksi', action: function () {
    return view('saksi');
});
// Route::post('/pendaftaran', [\::class, 'store'])->name('pendaftaran.store');

Route::get('/galeri', action: function () {
    return view('galeri');
});

Route::get('/contact', action: function () {
    return view('contact');
});

Route::post('/header', [HeaderController::class, 'store'])->name('header.store');

Route::post('/galeri', [GaleriController::class, 'index'])->name('galeri.index');

Route::get('/saksi', function () {
    return view('saksi');
})->name('saksi');


