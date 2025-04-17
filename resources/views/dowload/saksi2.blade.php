<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Halaman Cetak</title>
</head>
<body>

    <button onclick="cetakHalaman()">Cetak Formulir</button>

    <script>
        function cetakHalaman() {
            let printFrame = document.createElement("iframe");
            printFrame.style.position = "absolute";
            printFrame.style.width = "0";
            printFrame.style.height = "0";
            printFrame.style.border = "none";
            printFrame.src = "halaman_download.html"; // Ganti dengan URL halaman yang ingin dicetak

            document.body.appendChild(printFrame);

            printFrame.onload = function () {
                printFrame.contentWindow.focus();
                printFrame.contentWindow.print();
                setTimeout(() => {
                    document.body.removeChild(printFrame);
                }, 1000); // Hapus iframe setelah cetak selesai
            };
        }
    </script>

</body>
</html>
