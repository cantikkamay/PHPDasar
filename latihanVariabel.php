<?php
// Membuat array berisi nama-nama hari
$hari = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");

// Menampilkan nama hari menggunakan perulangan
for ($i = 0; $i < count($hari); $i++) {
    echo "Hari " . ($i+1) . ": " . $hari[$i] . "<br>";
}
?>
