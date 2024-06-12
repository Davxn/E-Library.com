<?php
//Load file koneksi.php
include "koneksi.php";
//Baca lokasi file sementara
//$tglpinjam=$_POST['ttglpinjam'];
//$jmlpinjam=$_POST['tjmlpinjam'];
//$tglkembali=$_POST['ttglkembali'];
//$noanggota=$_POST['tnoanggota'];
//$kdbuku=$_POST['tkdbuku'];
$idpinjam=$_POST['tidpinjam'];
$query = "UPDATE tbpinjam Set Status=2 Where Id_Pinjam='$idpinjam' ";
mysqli_query($koneksi,$query);
header ('location:ViewPinjam.php');
?>