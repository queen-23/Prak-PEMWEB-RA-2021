<?php

function jumlah($bila1,$bila2){
    $jml=$bila1+$bila2;
    echo "<br>PENJUMLAHAN<br>";
    echo "Operator : +<br>";
    echo "Hasil : $jml<br>";
}

function kurang($bila1,$bila2){
    $krg=$bila1-$bila2;
    echo "<br>PENGURANGAN<br>";
    echo "Operator : -<br>";
    echo "Hasil : $krg<br>";
}

function kali($bila1,$bila2){
    $kali=$bila1*$bila2;
    echo "<br>PERKALIAN<br>";
    echo "Operator : *<br>";
    echo "Hasil : $kali<br>";
}

function bagi($bila1,$bila2){
    $bagi=$bila1/$bila2;
    echo "<br>PEMBAGIAN<br>";
    echo "Operator : /<br>";
    echo "Hasil : $bagi<br>";
}

function modulus($bila1,$bila2){
    $mod=$bila1%$bila2;
    echo "<br>MODULUS<br>";
    echo "Operator : %<br>";
    echo "Hasil : $mod<br>";
}

$bil1=10;
$bil2=5;
echo "Bilangan 1 = $bil1<br>";
echo "Bilangan 2 = $bil2<br>";
echo "<br>Berikut merupakan hasil dari setiap operasi<br>";
jumlah($bil1,$bil2);
kurang($bil1,$bil2);
kali($bil1,$bil2);
bagi($bil1,$bil2);
modulus($bil1,$bil2);

?>

<style>
    body{
        background: <?php echo "red"; ?>;
        background-color: <?php echo "gainsboro"; ?>;
        font-family: <?php echo "Arial, Helvetica, sans-serif"; ?>;
        padding-left: <?php echo "25px"; ?>;
        padding-top: <?php echo "25px"; ?>;
        padding-bottom: <?php echo "25px"; ?>;
    }
</style>