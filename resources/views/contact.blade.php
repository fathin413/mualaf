@include('partials.header')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami</title>
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
</head>
<body>
    <div class="centered-container">
        <h1>Kontak Kami</h1>
        <p>Ingin tahu lebih banyak tentang kegiatan masjid atau butuh dukungan spiritual? <br> 
           Hubungi kami melalui kontak di bawah ini, dan mari jalin silaturahmi yang erat bersama kami.</p>
    </div>

    <div class="contact-info">
    <!-- Bagian Informasi Kontak -->
    <div class="contact-items">
        <div class="contact-item">
            <div class="icon-circle">
                <img src="{{ asset('images/location.png') }}" alt="Alamat Icon">
            </div>
            <div class="text">
                <p class="title"><strong>Alamat</strong></p>
                <p>Jl. Sholeh Iskandar No.KM.2, RT.01/RW.10</p>
            </div>
        </div>
        <div class="contact-item">
            <div class="icon-circle-telp">
                <img src="{{ asset('images/telp.png') }}" alt="Telepon Icon">
            </div>
            <div class="text">
                <p class="title"><strong>No Telepon</strong></p>
                <p>(0251) 8356884</p>
            </div>
        </div>
        <div class="contact-item">
            <div class="icon-circle">
                <img src="{{ asset('images/pesan.png') }}" alt="Email Icon">
            </div>
            <div class="text">
                <p class="title"><strong>E-Mail</strong></p>
                <p>masjidalhijr2@gmail.com</p>
            </div>
        </div>
    </div>
    <div class="masjid-image">
        <img src="{{ asset('images/ilustrasimasjid.png') }}" alt="Gambar Masjid" />
    </div>
</div>




    <!-- Map Section -->
    <div class="map-container">
        <iframe 
            src="//www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.687965224031!2d106.79005577399354!3d-6.56101509343217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c46c97fc663b%3A0x6215952b8a466dd7!2sMasjid%20Raya%20Al-Hijri%202!5e0!3m2!1sid!2sid!4v1734025053749!5m2!1sid!2sid"
            width="100%"
      height="100%"
      style="border:0;"
      allowfullscreen=""
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade">
            
        </iframe>
       
    </div>
</body>
