<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>MUALAF</title>
</head>
<body>

<header>
    <div class="navhead-container">
        <div class="logo">
             <img src="{{ asset('images/logo4.png')}}" alt="Logo Masjid">
             <h3 class="h3head">MASJID AL-HIJR II</h3>
            </div>

            <!-- <i class="fas fa-bars menu-toggle"></i> Tombol toggle -->

        <nav class="navhead">
            <ul>
                <li><a href="/beranda">Beranda</a></li>
                <li><a href="/pendaftaran">Daftar Mualaf</a></li>
                <li><a href="/galeri">Galeri</a></li>
                <li><a href="/contact">Kontak</a></li>
            </ul>
        </nav>
    </div>
</header>
    @yield('content')
    
</body>
</html>