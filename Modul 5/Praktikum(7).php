<?php
function luas_balok ($panjang, $tinggi, $lebar) {
    return 2 * $panjang * $lebar + $panjang * $tinggi + $lebar * $tinggi;
}
$a = 10;
$b = 2;
$c = 4;
echo "<br>Rumus luas balok = 2(p.l+p.t+l.t)";
echo "<br> contoh soal : ";
echo "<br>1. luas balok dengan panjang $a, tinggi $b dan lebar $c = ";
echo luas_balok($a,$b,$c);


function volume_balok ($panjang, $tinggi, $lebar){
return $panjang * $lebar * $tinggi;
}
$a = 5;
$b = 10;
$c = 4;
echo "<br><br>Rumus volume = V=p.l.t";
echo "<br>contoh soal : ";
echo "<br>2. volume balok dengan panjang $a, tinggi $b dan lebar $c = ";
echo volume_balok($a,$b,$c);
?>
