@include('partials.header')
<title>Formulir Saksi</title>
<link rel="stylesheet" href="{{ asset('css/style.css')}}">

<div class="centered-container">
    <img src="{{ asset('images/sya.png')}}" alt="Logo Masjid" style="height: 100px;" class="centered-image">

    <h3 class="formulir">Formulir Saksi</h3>
    <h1 class="cahaya">Masukkan Identitas Saksi</h1>
    <h3 class="saksi1">Saksi 1</h3>
    </div>

    <div class="form-container">

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
                    <div class="form-column">
                    <label for="pekerjaan">Pekerjaan</label>
                    <input type="text" name="pekerjaan" required>
                    </div>
                
                </div>
                

</div>


    <div class="formsaksi2">
<h3 class="saksi2">Saksi 2</h3>
    <div class="form-container2">

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
                    <div class="form-column">
                    <label for="pekerjaan">Pekerjaan</label>
                    <input type="text" name="pekerjaan" required>
                    </div>
                
                </div>
                
</div>
</div>


<div class="submit-container">
                <button type="submit">Daftar</button>
            </div>

</div>