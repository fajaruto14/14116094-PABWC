<?php
function faktorial($angka) { 
 
    if ($angka < 2) { 
        return 1; 
    } else { 
        return ($angka * faktorial($angka-1)); 
    } 
}
 
$x = 5;
echo "Faktorial dari $x adalah ";
echo faktorial($x);

?>