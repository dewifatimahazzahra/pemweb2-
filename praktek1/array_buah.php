<?php
$ar_buah = ["Pepaya", "Mangga", "Pisang", "jambu"];
//cetak buah ke index ke 2
echo $ar_buah[2];
//cetak jumlah buah
echo '<br/>Jumlah Buah ' . count($ar_buah);
//cetak seluruh buah
echo '<ol>';
foreach($ar_buah as $buah){
        echo '<li>'. $buah .'</li>';
    }
    echo '</ol>';
    //tambah buah
    $ar_buah[] = "Durian";
    //hapus buah index ke 1
    unset($ar_buah[1]);
    //ubah buah index ke 2 
    $ar_buah[2]="Manggis";
    //cetak seluruh buah lagi
    echo '<ul>';
    foreach($ar_buah as $k => $v){
        echo '<li>buah index - ' . $k .' adalah '. $v .'</li>';
    }
    echo '</ul>';
?>