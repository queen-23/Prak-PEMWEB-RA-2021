<?php

function tukar(&$kata1,&$kata2){
    $temp=$kata1;
    $kata1=$kata2;
    $kata2=$temp;
}

$kata=['larine','aduh','qufuat','toda','anevi','samid','kifuat'];
echo "<h4>Kata yang sudah diurutkan</h4>";
sort($kata);
foreach($kata as $baru){
    echo $baru;
    echo "<br>";
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