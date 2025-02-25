<?php
$ar_buah = ["Semangka", "Mangga", "Pisang", "Apel", "Jeruk"];



echo "buah ke 2 adalah $ar_buah[2]";

//memanggil array
echo "buah ke 2 adalah $ar_buah[2]";

//mencetak jumlah array
echo "jumlah buah adalah " . count($ar_buah);

//mencetak seluruh buah
echo '<br> Seluruh buah <ol>';
    foreach($ar_buah as $buah){
    echo'<li>'.$buah. '</li>';
    }

echo '</ol>';
//menambahkan buah
$ar_buah[]="Nanas";

//hapus buah index ke 1
unset($ar_buah[1]);

//ubah index ke 4 m4njadi melon
$ar_buah[4] = "Melon";

//cetak seluruh buah dengan indexnya
echo '<ul>';
foreach ($ar_buah as $ak => $av){
    echo '<li>Index : '.$ak.' - Buah : '.$av.'</li>';
}

?>