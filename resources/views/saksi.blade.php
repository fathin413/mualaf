@include('partials.header')
<title>Formulir Saksi</title>
<body>
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <div class="centered-container">
        <img src="{{ asset('images/sya.png')}}" alt="Logo Masjid" style="height: 100px;" class="centered-image">
        <h3 class="formulir-saksi">Formulir Saksi</h3>
        <h1 class="cahaya-saksi">Masukkan Identitas Saksi</h1>
    
    </div>

    

    <form id="sakForm" action="{{ route('saksi.store') }}" method="POST" >
    @csrf
    <div class="form-container">

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
    

    <h3 class="saksi1">Saksi 1</h3>

     <div class="form-row">
     <input type="hidden" name="pendaftaran_id" value="{{ request()->pendaftaran_id }}">

                <div class="form-column">
                    <label for="saksi_name">Nama Lengkap</label>
                    <input type="text" id="saksi_name" name="saksi_name" required>


                </div>

                <div class="form-column">
                    <label for="saksi_nik">Nomor KTP/ Pasport</label>
                    <input type="text" id="saksi_nik" name="saksi_nik" pattern="\d{16}" title="Masukkan 16 digit angka" required>
                </div>

            </div>

            <div class="form-row">
                <div class="form-column">
                    <label for="gender_saksi">Jenis Kelamin</label>
                    <select name="gender_saksi" id="gender_saksi" required>
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="Laki-laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
</div>
                    <div class="form-column">
                    <label for="pekerjaan">Pekerjaan</label>
                    <input type="text" id="pekerjaan_saksi" name="pekerjaan_saksi" required>
                    </div>
                
                </div>


                <div class="alamat">

                <label for="alamatsaksi">Alamat Domisili</label>
                <input type="text" id="alamatsaksi" name="alamatsaksi" required>

            </div>
              


   

    <!-- <div class="formsaksi2"> -->
<h3 class="saksi2">Saksi 2</h3>
    <!-- <div class="form-container2"> -->

     <div class="form-row">

                <div class="form-column">
                    <label for="saksi_name2">Nama Lengkap</label>
                    <input type="text" id="saksi_name2" name="saksi_name2" required>


                </div>

                <div class="form-column">
                    <label for="saksinik2">Nomor KTP/ Pasport</label>
                    <input type="text" id="saksinik2" name="saksinik2" pattern="\d{16}" title="Masukkan 16 digit angka" required>
                </div>

            </div>

            <div class="form-row">
                <div class="form-column">
                    <label for="gender_saksi2">Jenis Kelamin</label>
                    <select name="gender_saksi2" id="gender_saksi2" required>
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="Laki-laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
</div>
                    <div class="form-column">
                    <label for="pekerjaan_saksi2">Pekerjaan</label>
                    <input type="text" id="pekerjaan_saksi2" name="pekerjaan_saksi2" required>
                    </div>
                
                </div>
                
                <div class="alamat">

<label for="alamatsaksi2">Alamat Domisili</label>
<input type="text" id="alamatsaksi2" name="alamatsaksi2" required>
</div>
</div>


<div class="submit-container">
<button type="submit" class="btn" onclick="simpanSaksi()">Simpan</button>
            </div>

    
    
    </form>

<script>
        function simpanSaksi() {
            let form = document.getElementById("sakForm")

            if (!form.checkValidity()) {
        alert("Harap isi semua field yang wajib!");
        return; // Stop function biar user gak bisa lanjut
    }

        let formData = new FormData(form); // Simpan data ke localStorage

            fetch("{{ route('saksi.store') }}", {
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
        localStorage.setItem("formDataSaksi", JSON.stringify(Object.fromEntries(formData.entries())));
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

    document.addEventListener("DOMContentLoaded", function () {
        let currentStep = 2; // Halaman saksi ada di step 2

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
    
