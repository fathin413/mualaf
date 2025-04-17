<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Cetak Formulir Saksi</title>
    <style>
        @media print {
            @page {
                size: A4;
        margin: 0; /* Hilangkan margin default browser */
    }
            


            body {
                font-family: "Times New Roman", serif;
                font-size: 14px;
                margin: 2cm;
                padding: 0;
            }
            
            .container {
                width: 100%;
                border: none;
                box-shadow: none;
            }

            .btn-container {
                display: none; /* Sembunyikan tombol saat dicetak */
            }

            h2 {
                text-align: center;
                font-size: 30px;
                text-transform: uppercase;
                margin-bottom: 1cm;
            }

            .header, footer {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>SURAT SAKSI IKRAR SYAHADAT</h2>
        <p>Yang bertanda tangan di bawah ini, saya:</p>
        @foreach ($saksi as $data )
        
        
        <p><strong>Nama Lengkap :</strong> {{ $data->saksi_name }} </p>
        <p><strong>NIK :</strong> {{ $data->saksi_nik }} </p>
        <p><strong>Jenis Kelamin :</strong> {{ $data->gender_saksi }} </p>
        <p><strong>Pekerjaan :</strong> {{ $data->pekerjaan_saksi }} </p>
        <p><strong>Alamat :</strong> {{ $data->alamatsaksi }} </p>
        <p><strong>Nama Lengkap :</strong> {{ $data->saksi_name2 }} </p>
        <p><strong>NIK :</strong> {{ $data->saksinik2 }} </p>
        <p><strong>Jenis Kelamin :</strong> {{ $data->gender_saksi2 }} </p>
        <p><strong>Pekerjaan :</strong> {{ $data->pekerjaan_saksi2 }} </p>
        <p><strong>Alamat :</strong> {{ $data->alamatsaksi2 }} </p>
        @endforeach
        <p>
            Bermaksud mengajukan permohonan kepada Pengurus Masjid AL-HIJR II UIKA Bogor. Bidang Penyelenggara Peribadatan BPMI, 
            untuk dibimbing mengucapkan kalimat syahadat sebagai tanda masuk Agama Islam. 
            Bersama ini kami menyerahkan persyaratan bimbingan ikrar Syahadat yang telah ditentukan.
        </p>

        <p style="text-align: right;">Bogor, <span id="tanggal"></span></p>
        <p style="text-align: right;"><strong>Hormat Kami</strong></p>
        <p style="text-align: right;"><span id="name_signature"></span></p>

        <div style="display: flex; justify-content: space-between; margin-top: 50px;">
            <div>
                <p>Mengetahui / Menyetujui,</p>
                <p>Bidang Penyelenggara Peribadatan BPMI</p>
                <p>Kabid / Wakabid / Kasubid</p>
                <p>.................................................</p>
            </div>
            <div>
                <p>Telah diverifikasi oleh:</p>
                <p>Petugas Bid. Penyelenggara</p>
                <p>Peribadatan BPMI</p>
                <p>.................................................</p>
            </div>
        </div>
    </div>

    <div class="btn-container">
        <button onclick="window.print()">Cetak</button>
    </div>

    <script>
document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("tanggal").innerText = new Date().toLocaleDateString("id-ID", {
    day: "numeric",
    month: "long",
    year: "numeric"
});
    let formDataSaksi = localStorage.getItem("formDataSaksi");
    
    if (formDataSaksi) {
        formDataSaksi = JSON.parse(formDataSaksi);
        document.getElementById("saksi_name").innerText = formDataSaksi.saksi_name || "Tidak ada data";
        document.getElementById("saksi_nik").innerText = formDataSaksi.saksi_nik || "Tidak ada data";
        document.getElementById("gender_saksi").innerText = formDataSaksi.gender_saksi || "Tidak ada data";
        document.getElementById("pekerjaan_saksi").innerText = formDataSaksi.pekerjaan_saksi || "Tidak ada data";
        document.getElementById("alamatsaksi").innerText = formDataSaksi.alamatsaksi || "Tidak ada data";
        document.getElementById("saksi_name2").innerText = formDataSaksi.saksi_name2 || "Tidak ada data";
        document.getElementById("saksinik2").innerText = formDataSaksi.saksinik2 || "Tidak ada data";
        document.getElementById("gender_saksi2").innerText = formDataSaksi.gender_saksi2 || "Tidak ada data";
        document.getElementById("pekerjaan_saksi2").innerText = formDataSaksi.pekerjaan_saksi2 || "Tidak ada data";
        document.getElementById("alamatsaksi2").innerText = formDataSaksi.alamatsaksi2 || "Tidak ada data";
       
        
    } else {
        alert("Data tidak ditemukan! Silakan isi formulir dulu.");
    }
});
</script>

</body>
</html>
