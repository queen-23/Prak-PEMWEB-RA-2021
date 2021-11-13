<?php
include "koneksi.php";
$nim=$_POST["nim"];
$nama=$_POST["nama"];
$prodi=$_POST["prodi"];
$angkatan=$_POST["angkatan"];

$sql="DELETE FROM mahasiswa WHERE nim='$nim'";

$hasil=mysqli_query($kon,$sql);
?>