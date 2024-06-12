<HTML>
<HEAD>
    <title>Form Pengembalian Buku</title>
</HEAD>
<body> 
    <h2>    Form Pengembalian Buku</h2>
    <Form Action=CariBuku.php method="post">
         <TABLE>
                <tr>
                    <td>Cari ID Pinjam</td>
                    <td>:</td>
                    <td><input type="text" name="tidpinjam" readonly></td>
                </tr>
                <td><input type="submit" value="Cari"></td>
                </tr>
            </TABLE>
        </FORM>
        <br><br>
<?php
include ("Koneksi.php"); 
$kode=$_POST['tidpinjam'];
$query="Select * From tbpinjam Where Id_Pinjam='$kode'";
$sql= mysqli_query($koneksi,$query);
$data=mysqli_fetch_array($sql);
$kdbuku=$data['KdBuku'];
$noanggota=$data['NoAnggota'];
$tglpinjam=$data['Tgl_Pinjam'];
$tglkembali=$data['Tgl_Kembali'];
$jmlpinjam=$data['Jml_Pinjam'];
$status=$data['Status'];
?>

        <h2> Pengembalian Buku</h2>
    <Form Action=SimpanKembali.php method="Post">
    <table style="border-top-width: 2cap ; padding: 1%;">
                <tr>
                    <td>Id Pinjam</td>
                    <td>:</td>
                    <td><input type="text" name="tidpinjam" Value="<?php echo $kode;?>"readonly></td>
                </tr>
                <tr>
                    <td>Kode Buku</td>
                    <td>:</td>
                    <td><input type="text" name="tkdbuku"Value="<?php echo $kdbuku;?>"readonly></td>
                </tr>
                <tr>
                    <td>Nomor Anggota</td>
                    <td>:</td>
                    <td><input type="text" name="tnoanggota"Value="<?php echo $noanggota;?>"readonly></td>
                </tr><tr>
                    <td>Tanggal Pinjam</td>
                    <td>:</td>
                    <td><input type="date" name="ttglpinjam"Value="<?php echo $tglpinjam;?>"readonly></td>
                </tr><tr>
                    <td>Tanggal Kembali</td>
                    <td>:</td>
                    <td><input type="date" name="ttglkembali"Value="<?php echo $tglkembali;?>"readonly></td>
                </tr><tr>
                    <td>Jumlah Pinjam</td>
                    <td>:</td>
                    <td><input type="text" name="tjmlpinjam"Value="<?php echo $jmlpinjam;?>"readonly></td>
                </tr><tr>
                    <td>Status</td>
                    <td>:</td>
                    <td><input type="text" name="tstatus"Value="<?php echo $status;?>"readonly></td>
                </tr>
            </tr>
            <tr>
            </tr>
            <tr>
                <td>
                </td>
                <td>
                </td>
                <td><input type="submit" value="Simpan"><input type="reset" value="Batal"</td>
            </tr>
</form>
    </BODY>
</HTML>