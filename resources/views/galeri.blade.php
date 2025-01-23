@extends('layouts.app')

@section('title', 'Galeri')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Galeri Kegiatan Masjid</h1>
    <div class="row g-3">
        @foreach ($photos as $index => $photo)
        <div class="col-6 {{ ($index % 4 == 0 || $index % 4 == 3) ? 'portrait' : 'landscape' }}">
            <div class="gallery-item">
                <img src="{{ asset($photo['image_path']) }}" alt="{{ $photo['title'] }}" class="img-fluid">
                <p>{{ $photo['title'] }}</p>
                <p>{{ $photo['description'] }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
