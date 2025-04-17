<?php


use App\Http\Controllers\HeaderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\SaksiController;

// Route::post('/download-pendaftaran', [PdfController::class, 'generatePendaftaranPdf'])->name('download.pendaftaran');
// Route::post('/download-saksi', [PdfController::class, 'generateSaksiPdf'])->name('download.saksi');

// Route::get('/download-pdf', [FormController::class, 'downloadPDF'])->name('download.pdf');

// Route::get('/dowloadPdf', [PdfController::class, 'index']);

Route::get('/dowloadPdf', function(){
    return view('dowload.saksi');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard.index');
});

Route::get('/beranda', function () {
    return view('beranda');
});

Route::post('/pendaftaran', [PendaftaranController::class, 'store'])->name('pendaftaran.store');

Route::post('/saksi', [SaksiController::class, 'store'])->name('saksi.store');

Route::get('/pendaftaran', action: function () {
    return view('pendaftaran');
});

Route::get('/downloadMualaf', [PendaftaranController::class, 'Download']);

Route::get('/downloadSaksi', [SaksiController::class, 'Download2']);

Route::get('/header', function () {
    return view('header');
});

Route::get('/saksi', action: function () {
    return view('saksi');
});



// Route::get('/download', action: function () {
//     return view('download');
// });

// Route::get('/download2', action: function () {
//     return view('download2');
// });

Route::get('/downloadpdf', function () {
    return view('downloadpdf');
})->name('downloadpdf');

// Route::get('/download2', function () {
//     return view('download2');
// })->name('download2');

// Route::get('/download', function () {
//     return view('download');
// })->name('download');

// Route::post('/pendaftaran', [\::class, 'store'])->name('pendaftaran.store');

Route::get('/galeri', action: function () {
    return view('galeri');
});

Route::get('/contact', action: function () {
    return view('contact');
});

Route::post('/header', [HeaderController::class, 'store'])->name('header.store');

Route::post('/headerberanda', [HeaderController::class, 'store'])->name('header.store');

// Route::post('/galeri', [GaleriController::class, 'index'])->name('galeri.index');

Route::get('/saksi', function () {
    return view('saksi');
})->name('saksi');
