<?php
include 'Koneksi.php';
$kode=$_GET['Id_Bayar'];
$query="Select * From tbdenda Where Id_Bayar='$kode'";
$sql= mysqli_query($koneksi,$query);
$data=mysqli_fetch_array($sql);
$query2="Delete From tbdenda Where Id_Bayar='$kode'";
$sql2=mysqli_query($koneksi,$query2);// Eksekusi/Jalankan Query dari variabel $query
if($sql2){//Cek jika proses simpan ke database sukses atau tidak//Jika sukses,Lakukan:
header("location:ViewDenda.php");} //Redirect ke halaman viewdata.php
else {
    //Jika gagal,Lakukan:
    echo "Data gagal dihapus.<a href='ViewDenda.php'>Kembali</a>";
}
?>