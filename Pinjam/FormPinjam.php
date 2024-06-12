<?php
include "koneksi.php";
$noanggota=$_POST['tnoanggota'];
$kdbuku=$_POST['tkdbuku'];
$tglpinjam=$_POST['ttglpinjam'];
$tglkembali=$_POST['ttglkembali'];
$jmlpinjam=$_POST['tjmlpinjam'];

$query ="INSERT INTO tbpinjam (NoAnggota,KdBuku,Tgl_Pinjam,Tgl_Kembali,Jml_Pinjam,Status)
        Values ('$noanggota','$kdbuku','$tglpinjam','$tglkembali','$jmlpinjam',1);";
mysqli_query($koneksi,$query);
header ('location:ViewPinjam.php');
?>

