<?php

$laptop =["Asus", "Lenovo", "HP", "Dell"];

//Menambahkan elemen di awal 
array_unshift($laptop, "Acer", "Apple");

//Hasil
echo "Hasil";
foreach ($laptop as $p){
    echo "<br>".$p;
    }
?>