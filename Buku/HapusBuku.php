<?php
include 'Koneksi.php';
$kode=$_GET['KdBuku'];
$query="Select * From tbbuku Where KdBuku='$kode'";
$sql= mysqli_query($koneksi,$query);
$data=mysqli_fetch_array($sql);
$query2="Delete From tbbuku Where Kdbuku='$kode'";
$sql2=mysqli_query($koneksi,$query2);// Eksekusi/Jalankan Query dari variabel $query
if($sql2){//Cek jika proses simpan ke database sukses atau tidak//Jika sukses,Lakukan:
header("location:viewdataedithapus.php");} //Redirect ke halaman viewdata.php
else {
    //Jika gagal,Lakukan:
    echo "Data gagal dihapus.<a href='viewdataedithapus.php'>Kembali</a>";
}
?>