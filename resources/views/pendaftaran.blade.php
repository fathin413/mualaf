@include('partials.header')   
<title>Formulir Pendafataran</title>
<body>
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <div class="centered-container-pendaftaran">
        <img src="{{ asset('images/sya.png')}}" alt="Logo Masjid" style="height: 100px;" class="centered-image">
        <h3 class="formulir">Formulir Pendafataran Ikrar Syahadat</h3>
        <h1 class="cahaya">Langkah Awal Menuju <br> Cahaya Islam</h1>

    </div>

       
    
    <form id="myForm" action="{{ route('pendaftaran.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-container-pendaftaran">

        <!-- Indikator Langkah -->
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


        


            <div class="form-row">

                <div class="form-column">
                <label for="name">Nama Lengkap:</label>
                <input type="text" id="name" name="name" required><br><br>

                </div>

                <div class="form-column">
                <label for="nik">Nomor KTP/ Pasport:</label>
                <input type="text" id="nik" name="nik" pattern="\d{16}" title="Masukkan 16 digit angka" required>
                </div>

            </div>

            <div class="form-row">
                <div class="form-column">
                <label for="gender">Jenis Kelamin:</label>
        <select id="gender" name="gender" required>
            <option value="">Pilih Jenis Kelamin</option>
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
        </select><br><br>
                </div>
                   

                <div class="form-column">
                <label for="tmptlahir">Tempat Lahir:</label>
                <input type="text" id="tmptlahir" name="tmptlahir" required><br><br>
                    </div>

                   

            </div>

            <div class="form-row">

                <div class="form-column">

                <label for="birthdate">Tanggal Lahir:</label>
                <input type="date" id="birthdate" name="birthdate" required><br><br>

                </div>

                <div class="form form-column">
                <label for="pekerjaan">Pekerjaan:</label>
                <input type="text" id="pekerjaan" name="pekerjaan" required><br><br>

                </div>
            </div>

            <div class="form-row">
                <div class="form-column">
                    <label for="agama"> Agama Sekarang</label>
                    <select name="agama" id="agama" required>
                        <option value="">Pilih Agama Sekarang</option>
                        <option value="kristen">Kristen</option>
                        <option value="hindu">Hindu</option>
                        <option value="budha">Budha</option>
                        <option value="konghucu">Konghucu</option>
                        <option value="yanglainnya">Yang Lainnya</option>
                    </select>

                </div>

                <div class="form-column">
                    <label for="kebangsaan">kebangsaan</label>
                    <input type="text" id="kebangsaan" name="kebangsaan" required>
                </div>

            </div>


            <div class="form-row">
                <div class="form-column">
                    <label for="email">Alamat E-mail</label>
                    <input type="email" id="email" name="email" required>

                </div>

                <div class="form-column">
                    <label for="phone">No Handphone</label>
                    <input type="number" id="phone" name="phone" required>

                </div>

            </div>



            <label for="photo">Pas Foto</label>
            <input type="file" name="photo" id="photo" accept="image/*" required>


            <div class="alamat">

                <label for="alamatktp">Alamat Sesuai KTP/Pasport</label>
                <input type="text" id="alamatktp" name="alamatktp" required>


                <label for="alamat">Alamat Domisili</label>
                <input type="text" id="address" name="address" required>

            </div>


            <div class="checkbox-group">
                <div class="checkbox-container">
                    <input type="checkbox" name="terms1" id="terms1" required>
                    <label for="terms1">Bahwa saya bermaksud untuk mengucapkan Dua Kalimat Syahadat sebagai tanda memeluk Agama Islam, serta akan menjalankan syariat Agama Islam dengan sebaik-baiknya.</label>
                </div>

                <div class="checkbox-container">
                    <input type="checkbox" name="terms2" id="terms2" required>
                    <label for="terms2">Bahwa saya memeluk Agama Islam ini dengan sadar dan tulus, tanpa tekanan dari pihak manapun.</label>
                </div>
            </div>




            <p>Apakah anda bersedia mengikuti program pembinaan setelah ikrar Syahadat</p>

            <div class="radio-box">
                <input type="radio" name="consent" id="bersedia" value="bersedia" required>
                <label for="bersedia">Bersedia</label>

                <input type="radio" name="consent" id="tidak_bersedia" value="tidak_bersedia" required>
                <label for="tidak_bersedia">Tidak Bersedia</label>
            </div>



            <div class="submit-container">
                <!-- <button type="submit">Daftar</button> -->
            <button type="submit" onclick="simpanDanNext()">Daftar</button>
            </div>
    </div>
    </form>



            @verbatim
            <script>

        
        function simpanDanNext() {
            // event.preventDefault(); // Mencegah reload halaman

            let form = document.getElementById("myForm"); // Ganti sesuai ID 

    if (!form.checkValidity()) {
        alert("Harap isi semua field yang wajib!");
        return; // Stop function biar user gak bisa lanjut
    }

            let formData = new FormData(form); // Simpan data ke localStorage

            fetch("{{ route('pendaftaran.store') }}", {
    method: "POST",
    body: formData,
    headers: {
        "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content,
        "Accept": "application/json"
    }
})
.then(response => response.json())
.then(data => {
    if (data.success) {
        localStorage.setItem("formData1", JSON.stringify(Object.fromEntries(formData.entries())));
        window.location.href = data.redirect; // Redirect ke halaman yang dikirim dari backend
    } else {
        alert("Terjadi kesalahan saat menyimpan data!");
    }
})
.catch(error => {
    console.error("Error:", error);
    alert("Gagal menghubungi server. Coba lagi.");
});
        }


    window.addEventListener("scroll", function () {
        let header = document.querySelector("header");
        if (window.scrollY > 10) {
            header.classList.add("scrolled");
        } else {
            header.classList.remove("scrolled");
        }
    });


   // Dapatkan URL saat ini
   let path = window.location.pathname;

// Tentukan currentStep berdasarkan halaman
let currentStep = 1;
if (path.includes("saksi")) {
    currentStep = 2;
} else if (path.includes("selesai")) {
    currentStep = 3;
}

// Update tampilan step
function updateStep() {
    document.querySelectorAll(".step").forEach((step, index) => {
        if (index + 1 === currentStep) {
            step.classList.add("active");
        } else {
            step.classList.remove("active");
        }
    });
}

updateStep();


    document.addEventListener("DOMContentLoaded", updateStep);
        


    </script>

</body>
@endverbatim

