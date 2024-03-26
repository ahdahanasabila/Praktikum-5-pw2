<?php
function hitungLuas($panjang, $lebar)
{               
    $luas = $panjang * $lebar;
    return $luas;
}
function hitungKeliling($panjang, $lebar)
{
    $keliling = 2 * ($panjang + $lebar);
    return $keliling;
}
$panjang = 5;
$lebar = 3;

$luas = hitungLuas($panjang, $lebar);
$keliling = hitungKeliling($panjang, $lebar);

echo "Luas persegi panjang dengan panjang $panjang dan lebar $lebar adalah: $luas <br>";
echo "Keliling persegi panjang dengan panjang $panjang dan lebar $lebar adalah: $keliling";
