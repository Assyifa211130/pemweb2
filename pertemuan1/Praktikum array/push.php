<?php
// array_push
$komponen = ["Mabo", "Mama", "Mami", "Mamu"];

// Menambahkan elemen di akhir array
array_push($komponen, "PSU", "Cassing");

echo "Setelah Push<br>";
foreach ($komponen as $k) {
    echo "$k <br>";
}
?>