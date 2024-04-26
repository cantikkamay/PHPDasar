<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Latihan Perulangan</title>
    <link rel="icon" type="img/png" href="icon.png" size="16x16" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" conten="Belajar PHP">
    <meta name="keywords" conten="234311010">
    <meta name="author" content="Cantikka May Aristianti">
</head>
<body>
    <h1>Latihan Perulangan</h1>
    <?php
    // Perulangan untuk membuat baris
    for ($i = 1; $i <= 10; $i++) {
        echo "<p>";
        // Perulangan untuk menampilkan bintang
        for ($j = 1; $j <= $i; $j++) {
            echo "* ";
        }
        echo "</p>";
    }
    ?>
</body>
</html>