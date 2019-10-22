<?php 
function swap (&$a, &$b) {
	echo "Nilai Awal A = $a <br>";
	echo "Nilal Awal B = $b <br>";
	$a = $a + $b;
	$b = $a - $b;
	$a = $a - $b;
}

$x = 2; 
$y = 4;
swap ($x, $y);
echo "<br> Setelah di Swap : <br>";
echo "X = $x <br>"; 
echo "Y = $y <br>";
?>