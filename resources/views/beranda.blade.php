@extends('layout.app')
@section('content')



  
<section class="hero-section">
    <div class="container hero-container">
        <!-- Bagian Kiri (Teks) -->
        <div class="hero-text">
            <h1>Melangkah Bersama Menuju Hidayah</h1>
            <p>Kami hadir untuk membimbing setiap langkah menuju hidayah Allah. Dengan dukungan dan bimbingan penuh kasih, masjid kami berkomitmen menjadi tempat yang nyaman dan terbuka bagi mereka yang ingin mengenal atau memperdalam ajaran Islam. Mari bersama-sama menuju cahaya dan kedamaian dalam iman</p>
            <div class="hero-buttons">
                <a href="pendaftaran" class="btn">Daftar Muallaf</a>
               
            </div>
        </div>

        <!-- Bagian Kanan (Gambar) -->
        <div class="hero-image">
            <img src="{{ asset('images/doa.png') }}" alt="Islamic Learning">
        </div>
    </div>
</section>

<main>
  <section class="sop">
    <h2>SOP & PERSYARATAN</h2>
    <div class="content">
      <div class="column">
        <h3>SOP Pelayanan Mualaf</h3>

        <ol>
          <li>Pendaftaran
            <ul>
              <li>Mengisi buku tamu</li>
              <li>Mengisi form permohonan</li>
              <li>Melengkapi persyaratan
                <ol type="a">
                  <li>Pas Foto 2 x 3 : 3 Lembar (warna)</li>
                  <li>Surat Pengantar dari RT bagi WNI</li>
                  <li>Foto Copy KTP</li>
                  <li>Foto Copy KK</li>
                  <li>Materai 10.000 : 2 Lembar</li>
                  <li>Menyerahkan Surat Baptis (Asli)</li>
                  <li>Surat Pengantar Kedutaan bagi WNA</li>
                  <li>Foto Copy Pasport bagi WNA</li>
                  <li>Saksi 2 (dua) orang</li>
                  <li>Foto Copy KTP Saksi 2 Orang (dibawa)</li>
                </ol>
              </li>
            </ul>
          </li>
          <li>Verifikasi berkas oleh petugas</li>
          <li>Persetujuan Ikrar Syahadat oleh Pimpinan (Kabid / Wakabid / Kasubbid)</li>
          <li>Proses Ikrar Syahadat
            <ul>
              <li>Pembimbing</li>
              <li>Calon Muallaf</li>
              <li>Saksi 2 orang</li>
            </ul>
          </li>
          <li>Tandatangan berkas / Sertifikat</li>
          <li>Waktu Jam : 09.00 – 15.00 Senin – Jum’at</li>
          <li>Tempat Ruang Pusat Pelayanan Muallaf Masjid Istiqlal lantai dasar.</li>
        </ol>

      </div>
      <div class="column">
        <h3>Persyaratan Ikrar Syahadat</h3>
        <ol>
          <li>Pendaftaran
            <ul>
              <li>Mengisi buku tamu</li>
              <li>Mengisi form permohonan</li>
              <li>Melengkapi persyaratan
                <ol type="a">
                  <li>Pas Foto 2 x 3 : 3 Lembar (warna)</li>
                  <li>Surat Pengantar dari RT bagi WNI</li>
                  <li>Foto Copy KTP</li>
                  <li>Foto Copy KK</li>
                  <li>Materai 10.000 : 2 Lembar</li>
                  <li>Menyerahkan Surat Baptis (Asli)</li>
                  <li>Surat Pengantar Kedutaan bagi WNA</li>
                  <li>Foto Copy Pasport bagi WNA</li>
                  <li>Saksi 2 (dua) orang</li>
                  <li>Foto Copy KTP Saksi 2 Orang (dibawa)</li>
                </ol>
              </li>
            </ul>
          </li>
          <li>Verifikasi berkas oleh petugas</li>
          <li>Persetujuan Ikrar Syahadat oleh Pimpinan (Kabid / Wakabid / Kasubbid)</li>
          <li>Proses Ikrar Syahadat
            <ul>
              <li>Pembimbing</li>
              <li>Calon Muallaf</li>
              <li>Saksi 2 orang</li>
            </ul>
          </li>
          <li>Tandatangan berkas / Sertifikat</li>
          <li>Waktu Jam : 09.00 – 15.00 Senin – Jum’at</li>
          <li>Tempat Ruang Pusat Pelayanan Muallaf Masjid Istiqlal lantai dasar.</li>
        </ol>

      </div>
    </div>
  </section>

  <script>
        window.addEventListener("scroll", function () {
        let header = document.querySelector("header");
        if (window.scrollY > 5) {
            header.classList.add("scrolled");
        } else {
            header.classList.remove("scrolled");
        }
    });
    </script>
</main>

<footer>
  <p>&copy; 2025 Masjid AL-HIJR II</p>
</footer>
@endsection