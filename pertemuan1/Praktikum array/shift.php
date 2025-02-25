<?php
$rokok = ["Samsu", "Djarum", "Bentoel", "Gudang Garam"];

//Menghapus elemen pertama
$awal = array_shift($rokok);

//Hasil
echo "Rokok yang dihapus : $awal <br>";
echo "Array setelah shift <br>";
foreach ($rokok as $r) {
    echo "$r <br>";
    }
?>