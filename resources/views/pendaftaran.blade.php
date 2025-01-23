<form action="" method="POST">
    @csrf
    @include('partials.header')
    
<title>Form Pendafataran</title>

    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <div class="centered-container-pendaftaran">
        <img src="{{ asset('images/sya.png')}}" alt="Logo Masjid" style="height: 100px;" class="centered-image">

        <h3 class="formulir">Formulir Pendafataran Ikrar Syahadat</h3>
        <h1 class="cahaya">Langkah Awal Menuju <br> Cahaya Islam</h1>

    </div>

    <div class="form-container">

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


        <div class="step-active">


            <div class="form-row">

                <div class="form-column">
                    <label for="name">Nama Lengkap</label>
                    <input type="text" name="name" required>


                </div>

                <div class="form-column">
                    <label for="nik">Nomor KTP/ Pasport</label>
                    <input type="number" name="nik" required>
                </div>

            </div>

            <div class="form-row">
                <div class="form-column">
                    <label for="gender">Jenis Kelamin</label>
                    <select name="gender" id="gender" required>
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="laki-laki">Laki-Laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>

                </div>

                

            </div>

            <div class="form-row">

                <div class="form-column">

                    <label for="birthdate">Tanggal Lahir</label>
                    <input type="date" name="birthdate" id="birthdate" required>

                </div>

                <div class="form form-column">
                    <label for="pekerjaan">Pekerjaan</label>
                    <input type="text" name="pekerjaan" required>

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
                    <input type="text" name="kebangsaan" required>
                </div>

            </div>


            <div class="form-row">
                <div class="form-column">
                    <label for="email">Alamat E-mail</label>
                    <input type="email" name="email" required>

                </div>

                <div class="form-column">
                    <label for="phone">No Handphone</label>
                    <input type="number" name="phone" required>

                </div>

            </div>



            <label for="photo">Pas Foto</label>
            <input type="file" name="photo" id="photo" accept="image/*" required>


            <div class="alamat">

                <label for="alamatktp">Alamat Sesuai KTP/Pasport</label>
                <input type="text" name="alamatktp" required>


                <label for="alamat">Alamat Domisili</label>
                <input type="text" name="alamat" required>

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
            <button onclick="window.location.href='/saksi'" class="btn">Daftar</button>
            </div>


</form>