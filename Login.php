<?php
session_start();
include "koneksi.php";
$username=$_POST['tuser'];
$password=MD5($_POST['tpass']);

$sql="SELECT * FROM tbuser WHERE username ='$username' AND password='$password' ";
$query= mysqli_query($koneksi,$sql);
$rows= mysqli_num_rows ($query);
if($rows==1){
    $_SESSION['username']=$username;
    header('location:index.html');
}else{
    echo ("<script LANGUAGE='Javascript'>
            window.alert('Login Gagal Username dan Password Anda Salah... Try Again');
            window.location.href='login.html';
            </script>");
}
?>
