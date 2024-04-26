<?php

// Mendefinisikan variabel
$gaji_pokok = 3250000; // Gaji pokok
$tunjangan_jabatan = 1200000; // Tunjangan jabatan
$pajak_penghasilan = 0.1; // Pajak penghasilan (10%)

// Menghitung gaji kotor
$gaji_kotor = $gaji_pokok + $tunjangan_jabatan;

// Menghitung jumlah pajak yang harus dibayarkan
$pajak = $gaji_kotor * $pajak_penghasilan;

// Menghitung gaji bersih
$gaji_bersih = $gaji_kotor - $pajak;

// Menampilkan output
echo "Gaji Pokok: Rp. " . number_format($gaji_pokok, 0, ',', '.') . "<br>";
echo "Tunjangan Jabatan: Rp. " . number_format($tunjangan_jabatan, 0, ',', '.') . "<br>";
echo "Gaji Kotor: Rp. " . number_format($gaji_kotor, 0, ',', '.') . "<br>";
echo "Pajak Penghasilan (10%): Rp. " . number_format($pajak, 0, ',', '.') . "<br>";
echo "Gaji Bersih: Rp. " . number_format($gaji_bersih, 0, ',', '.') . "<br>";

?>