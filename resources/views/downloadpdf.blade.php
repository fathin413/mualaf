<!DOCTYPE html>
<html lang="id">
@include('partials.header')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    
    <title>Formulir Pendaftaran</title>
    
        <link rel="stylesheet" href="{{ asset('css/style.css')}}">
        <div class="centered-container-download">
            <img src="{{ asset('images/hamdalah.png')}}" alt="Logo Masjid" style="height: 100px;" class="centered-image">
    
            <h3 class="formulir">Silahkan Download Formulir</h3>
            <h1 class="cahaya">PENDAFTARAN BERHASIL !!! </h1>
    
        </div>


        <div class="form-container-download">
        <div class="step-indicator">
            <div class="step" id="step-1">
                <div class="step-number">1</div>
                <div class="step-text">Data Diri</div>
            </div>
            <div class="step" id="step-2">
                <div class="step-number">2</div>
                <div class="step-text">Data Saksi</div>
            </div>
            <div class="step" id="step-3">
                <div class="step-number">3</div>
                <div class="step-text">Selesai</div>
            </div>
        </div>
        </div>
        

        <div class="download-container">
        <a href="#" onclick="printPage('{{ url('/downloadMualaf') }}')" class="download-button">
    <i class="fas fa-file-alt"></i>
    <span>Formulir Permohonan Bimbingan Ikrar Syahadat</span>
    <i class="fas fa-download"></i>
</a>

<a href="#" onclick="printPage('{{ url('/downloadSaksi') }}')" class="download-button">
    <i class="fas fa-file-alt"></i>
    <span>Formulir Saksi Ikrar Syahadat</span>
    <i class="fas fa-download"></i>
</a>
</div>

<script>

function printPage(url) {
    fetch(url)
    .then(response => response.text())
    .then(html => {
        let printWindow = window.open('', '', 'width=800,height=600');
        printWindow.document.open();
        printWindow.document.write(html);
        printWindow.document.close();
        printWindow.onload = function () {
            printWindow.print();
            printWindow.close();
        };
    })
    .catch(error => console.error('Error:', error));
}

       window.addEventListener("scroll", function () {
        let header = document.querySelector("header");
        if (window.scrollY > 10) {
            header.classList.add("scrolled");
        } else {
            header.classList.remove("scrolled");
        }
    });

    document.addEventListener("DOMContentLoaded", function () {
        let currentStep = 3; // Halaman downloadpdf ada di step 2

        document.querySelectorAll(".step").forEach((step, index) => {
            if (index + 1 === currentStep) {
                step.classList.add("active");
            } else {
                step.classList.remove("active");
            }
        });
    });
</script>
   

</body>
</html>
