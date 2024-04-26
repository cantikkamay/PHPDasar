<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Latihan Perulangan 2</title>
    <link rel="icon" type="img/png" href="icon.png" size="16x16" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" conten="Belajar PHP">
    <meta name="keywords" conten="234311010">
    <meta name="author" content="Cantikka May Aristianti">
</head>
<body>
    <h1>Hasil Pengecekan Ganjil/Genap</h1>
    <?php
    // Array dengan nilai
    $angka = array(12, 13, 15, 16, 67, 189, 346, 876, 54232, 3256);

    // Perulangan untuk mengecek ganjil atau genap
    foreach ($angka as $nilai) {
        // Menampilkan nomor
        echo "Nomor: $nilai ";
        
        // Mengecek ganjil atau genap
        if ($nilai % 2 == 0) {
            echo "Genap<br>";
        } else {
            echo "Ganjil<br>";
        }
    }
    ?>
</body>
</html>
