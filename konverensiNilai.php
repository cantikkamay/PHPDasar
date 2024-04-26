<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Konversi Nilai</title>
    <link rel="icon" type="img/png" href="icon.png" size="16x16" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" conten="Belajar PHP">
    <meta name="keywords" conten="234311010">
    <meta name="author" content="Cantikka May Aristianti">
</head>
<body>
    <h2>Konversi Nilai Angka ke Huruf</h2>
    <form method="post">
        Masukkan nilai angka: <input type="text" name="nilai"><br>
        <input type="submit" name="submit" value="Konversi">
    </form>

    <?php
    // Fungsi untuk mengkonversi nilai angka menjadi huruf
    function konversiNilai($nilai) {
        if ($nilai >= 0 && $nilai < 60) {
            return 'C';
        } elseif ($nilai >= 60 && $nilai < 70) {
            return 'BC';
        } elseif ($nilai >= 70 && $nilai < 80) {
            return 'B';
        } elseif ($nilai >= 80 && $nilai < 90) {
            return 'AB';
        } elseif ($nilai >= 90 && $nilai <= 100) {
            return 'A';
        } else {
            return 'Nilai tidak valid';
        }
    }

    // Cek apakah form telah di-submit
    if (isset($_POST['submit'])) {
        // Mengambil nilai angka dari form
        $nilai = $_POST['nilai'];

        // Memastikan nilai yang dimasukkan adalah angka
        if (is_numeric($nilai)) {
            // Konversi nilai angka menjadi huruf
            $hasil_konversi = konversiNilai($nilai);
            echo "<p>Nilai angka $nilai setara dengan nilai huruf: $hasil_konversi</p>";
        } else {
            echo "<p>Input harus berupa angka</p>";
        }
    }
    ?>
</body>
</html>