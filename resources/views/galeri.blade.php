<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Galeri</title>
</head>
<body>
    @include('partials.header')

    <main>
    <section class="gallery">
    <div class="gallery-text">
        <h2>Galeri Kegiatan</h2>
        <p>
            Masjid kami berdiri sebagai pusat ibadah dan kebersamaan, tempat di mana setiap individu bisa menemukan
            kedamaian dan pengajaran dalam Islam. Kami berkomitmen untuk menyebarkan nilai-nilai kemanusiaan yang
            penuh kasih dan memberi kebersamaan dalam masyarakat.
        </p>
    </div>
    <div class="gallery-overlay-image">
        <img src="{{ asset('images/sya5.jpg') }}" alt="Gambar overlay">
    </div>
</section>

        <section class="documentation">
            <h2>Dokumentasi</h2>
            <p>Berikut merupakan beberapa dokumentasi dari program kami</p>
            <div class="images">
               <img src="{{ asset('images/sya1.jpg') }}" alt="Event 1">
               <img src="{{ asset('images/sya2.jpg') }}" alt="Event 2">
               <img src="{{ asset('images/sya3.jpg') }}" alt="Event 3">
               <img src="{{ asset('images/sya4.jpg') }}" alt="Event 4">
            </div>
        </section>

    
    </main>

    <footer>
        <p>© 2023 Masjid AL-HIJR II</p>
    </footer>
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        let header = document.querySelector("header");

        window.addEventListener("scroll", function () {
            if (window.scrollY > 5) { // Jika di-scroll lebih dari 50px
                header.classList.add("scrolled");
            } else {
                header.classList.remove("scrolled");
            }
        });
    });
</script>
</body>
</html>