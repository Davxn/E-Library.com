<?php
include "koneksi.php";
$noanggota=$_POST['tnoanggota'];
$tglbayar=$_POST['ttglbayar'];
$jmlhari=$_POST['tjmlhari'];
$dendahari=$_POST['tdendahari'];
$total=$_POST['ttotal'];

$query ="INSERT INTO tbdenda (NoAnggota,Tgl_Bayar,Jml_Hari,Denda_Hari)
        Values ('$noanggota','$tglbayar','$jmlhari','$dendahari');";
mysqli_query($koneksi,$query);
header ('location:ViewDenda.php');
?>

