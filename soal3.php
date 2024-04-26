<?php

// Array berisi data nilai akhir siswa
$data_siswa = array(
    array("no_urut" => 1, "poin" => 75, "siswa" => "adi"),
    array("no_urut" => 2, "poin" => 80, "siswa" => "joni"),
    array("no_urut" => 3, "poin" => 65, "siswa" => "jihan"),
    array("no_urut" => 4, "poin" => 70, "siswa" => "aya"),
    array("no_urut" => 5, "poin" => 85, "siswa" => "ita"),
    array("no_urut" => 6, "poin" => 90, "siswa" => "budi"),
    array("no_urut" => 7, "poin" => 95, "siswa" => "tini"),
    array("no_urut" => 8, "poin" => 65, "siswa" => "sari")
);

// a) Tampilkan poin siswa dengan nama ita nomor urut 5
echo "a) Poin siswa dengan nama ita nomor urut 5: ";
foreach ($data_siswa as $siswa) {
    if ($siswa["siswa"] == "ita") {
        echo $siswa["poin"];
break;
    }
}
echo "<br>";

// b) Tampilkan semua nama siswa yang memiliki poin 90
echo "b) Nama-nama siswa yang memiliki poin 90: ";
$siswa_poin_90 = array();
foreach ($data_siswa as $siswa) {
    if ($siswa["poin"] == 90) {
        $siswa_poin_90[] = $siswa["siswa"];
    }
}
echo implode(", ", $siswa_poin_90);
echo "<br>";

// c) Tampilkan semua nama siswa yang memiliki poin 100
echo "c) Nama-nama siswa yang memiliki poin 100: ";
$siswa_poin_100 = array();
foreach ($data_siswa as $siswa) {
    if ($siswa["poin"] == 100) {
        $siswa_poin_100[] = $siswa["siswa"];
    }
}
if (empty($siswa_poin_100)) {
    echo "Tidak ada";
} else {
    echo implode(", ", $siswa_poin_100);
}
?>