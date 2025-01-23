<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index()
    {
        // Data dummy untuk galeri
        $photos = [
            [
                'image_path' => 'images/sya1.jpg', // Path gambar
                'title' => 'Acara 1', // Judul acara
                'description' => 'Deskripsi untuk acara 1', // Deskripsi acara
            ],
            [
                'image_path' => 'images/sya2.jpg',
                'title' => 'Acara 2',
                'description' => 'Deskripsi untuk acara 2',
            ],
            [
                'image_path' => 'images/sya3.jpg',
                'title' => 'Acara 3',
                'description' => 'Deskripsi untuk acara 3',
            ],
            [
                'image_path' => 'images/sya4.jpg',
                'title' => 'Acara 4',
                'description' => 'Deskripsi untuk acara 4',
            ],
        ];

        // Kirim data ke view galeri
        return view('galeri.index', compact('photos'));
    }
}
