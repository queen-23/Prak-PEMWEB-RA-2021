<?php

function prima($bil){
    $jmlbagi=0;
    for($i=2;$i<$bil;$i++){
        if($bil%$i==0){
            $jmlbagi++;
        }
    }
    if($jmlbagi==0&&$bil!=1){
        echo "$bil<br>";
    }
}

echo "<h1>Bilangan Prima 1-150</h1>";
for($i=1;$i<=50;$i++){
    prima($i);
}

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