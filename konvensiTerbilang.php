<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Terbilang</title>
    <link rel="icon" type="img/png" href="icon.png" size="16x16" />
    <meta name="description" conten="Belajar PHP">
    <meta name="keywords" conten="234311010">
    <meta name="author" content="Cantikka May Aristianti">
</head>
<body>
    <h2>Konversi Angka ke Terbilang</h2>
    <form action="" method="post">
        <label for="angka">Masukkan angka (1-9):</label>
        <input type="number" name="angka" id="angka" min="1" max="9" required>
        <button type="submit">Konversi</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $angka = $_POST["angka"];

        switch ($angka) {
            case 1:
                echo "Satu";
                break;
            case 2:
                echo "Dua";
                break;
            case 3:
                echo "Tiga";
                break;
            case 4:
                echo "Empat";
                break;
            case 5:
                echo "Lima";
                break;
            case 6:
                echo "Enam";
                break;
            case 7:
                echo "Tujuh";
                break;
            case 8:
                echo "Delapan";
                break;
            case 9:
                echo "Sembilan";
                break;
            default:
                echo "Angka yang dimasukkan tidak valid.";
        }
    }
    ?>
</body>
</html>