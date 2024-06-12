<?php
//Load file koneksi.php
include "koneksi.php";
//Baca lokasi file sementara
$tglpinjam=$_POST['ttglpinjam'];
$jmlpinjam=$_POST['tjmlpinjam'];
$tglkembali=$_POST['ttglkembali'];
$noanggota=$_POST['tnoanggota'];
$kdbuku=$_POST['tkdbuku'];

$query = "UPDATE tbpinjam Set Jml_Pinjam='$jmlpinjam',Tgl_Kembali='$tglkembali',NoAnggota='$noanggota',KdBuku='$kdbuku'
Where Tgl_Pinjam='$tglpinjam' ";
mysqli_query($koneksi,$query);
header ('location:ViewPinjam.php');
?>