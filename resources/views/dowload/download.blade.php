<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Cetak Formulir</title>
    <style>
        @media print {
            @page {
                size: auto;
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
        <h2>SURAT PERMOHONAN BIMBINGAN IKRAR SYAHADAT</h2>
        <p>Yang bertanda tangan di bawah ini, saya:</p>
        @foreach ($dowload as $down )
        
        
        <p><strong>Nama Lengkap :</strong> {{ $down->name }} </p>
        <p><strong>Jenis Kelamin :</strong> {{ $down->gender }} </p>
        <p><strong>TTL :</strong> {{ $down->tmptlahir }}, {{ $down->birthdate }} </p>
        <p><strong>No. Handphone :</strong> {{ $down->phone }} </p>
        <p><strong>Email :</strong> {{ $down->email }} </p>
        <p><strong>Pekerjaan :</strong> {{ $down->pekerjaan }} </p>
        <p><strong>Agama Asal :</strong> {{ $down->agama }} </p>
        <p><strong>Kebangsaan :</strong> {{ $down->kebangsaan }} </p>
        <p><strong>KTP / PASPOR :</strong> {{ $down->nik }} </p>
        <p><strong>Alamat KTP :</strong> {{ $down->alamatktp }} </p>
        <p><strong>Alamat Domisili :</strong> {{ $down->address }} </p>
        @endforeach
        <p>
            Bermaksud mengajukan permohonan kepada Pengurus Masjid AL-HIJR II UIKA Bogor. Bidang Penyelenggara Peribadatan BPMI, 
            untuk dibimbing mengucapkan kalimat syahadat sebagai tanda masuk Agama Islam. 
            Bersama ini kami menyerahkan persyaratan bimbingan ikrar Syahadat yang telah ditentukan.
        </p>

        <p style="text-align: right;">Bogor, </p>
        <p style="text-align: right;"><strong>Hormat Kami</strong></p>
        <p style="text-align: right;"></p>

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
    
    let formData = localStorage.getItem("formData1");
    
    if (formData) {
        formData = JSON.parse(formData);
        document.getElementById("name").innerText = formData.name || "Tidak ada data";
        document.getElementById("nik").innerText = formData.nik || "Tidak ada data";
        document.getElementById("gender").innerText = formData.gender || "Tidak ada data";
        document.getElementById("tmptlahir").innerText = formData.tmptlahir || "Tidak ada data";
        document.getElementById("birthdate").innerText = formData.birthdate || "Tidak ada data";
        document.getElementById("pekerjaan").innerText = formData.pekerjaan || "Tidak ada data";
        document.getElementById("agama").innerText = formData.agama || "Tidak ada data";
        document.getElementById("kebangsaan").innerText = formData.kebangsaan || "Tidak ada data";
        document.getElementById("email").innerText = formData.email || "Tidak ada data";
        document.getElementById("phone").innerText = formData.phone || "Tidak ada data";
        document.getElementById("alamat").innerText = formData.address || "Tidak ada data";
        document.getElementById("alamatktp").innerText = formData.alamatktp || "Tidak ada data";
        
    } else {
        alert("Data tidak ditemukan! Silakan isi formulir dulu.");
    }
});
</script>

</body>
</html>
