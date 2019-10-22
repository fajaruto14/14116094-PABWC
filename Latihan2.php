<?php
 function bet($color="red"){
    echo '<font color="'.$color.'">Nama : '.$nama.'</font><br>';
    echo '<font color="'.$color.'">Harga total : Rp.'.$harga_total.'</font><br>';
 }
 $nama = 'Fajar Muhammad';
 $panjang_nama = strlen($nama);
 
 if ($panjang_nama <= 10) {
    $harga_total = $panjang_nama * 300;
    echo '<font color=brown>Nama : '.$nama.'</font><br>';
    echo '<font color=brown>Panjang Nama : '.$panjang_nama.'</font><br>';
    echo '<font color=brown>Harga total : Rp '.$harga_total.'</font><br>';   
 } else if($panjang_nama >10 && $panjang_nama <=20 ) {
    $harga_total = $panjang_nama * 500;
    echo '<font color=magenta>Nama : '.$nama.'</font><br>';
    echo '<font color=magenta>Panjang Nama : '.$panjang_nama.'</font><br>';
    echo '<font color=magenta>Harga total : Rp '.$harga_total.'</font><br>'; 
 } else if($panjang_nama >20 ) {
    $harga_total = $panjang_nama * 700;
    echo '<font color=gold>Nama : '.$nama.'</font><br>';
    echo '<font color=gold>Panjang Nama : '.$panjang_nama.'</font><br>';
    echo '<font color=gold>Harga total : Rp '.$harga_total.'</font><br>'; 
 }
 
?>