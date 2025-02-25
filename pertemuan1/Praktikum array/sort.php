<?php
$ar_buah = [ "a"=>"Apel", "m"=>"Mangga", "b"=>"Bengkoang", "d"=>"Durian"];

        
        echo '<ol>';
        sort($ar_buah);
        echo '<hr/>';
        echo '</ol>';
        foreach ($ar_buah as $key => $value) {
            echo '<li>' . $key . ' - ' . $value . '</li>';
            }
        echo '<ol>';
        



?>