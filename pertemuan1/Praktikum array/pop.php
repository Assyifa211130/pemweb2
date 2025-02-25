<?php
$siswa = ["Tian", "Rendi", "Rizki", "Rahma", "Rifqi"];

// Menampilkan array awal
echo "<br>Array Awal : <br>";
print_r($siswa);

// Menghapus elemen terakhir dari array
$orang_terakhir = array_pop($siswa);

// Menampilkan elemen yang dihapus
echo "<br>Elemen yang dihapus: $orang_terakhir<br>";

// Menampilkan array setelah penghapusan
echo "<br>Array setelah penghapusan : <br>";
print_r($siswa);
?>
