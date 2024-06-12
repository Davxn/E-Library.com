<HTML>
<HEAD>
    <title>Edit Data Buku</title>
</HEAD>
<body> 
    <h2>    Edit Data Buku </h2>
    <Form Action=EditPinjam.php method="post">
    <?php
        include ("Koneksi.php");
        $kode=$_GET['Id_Pinjam'];
        $query="SELECT * FROM tbpinjam Where Id_Pinjam='".$kode."'";
        $hasil=mysqli_query($koneksi,$query);
        $data=mysqli_fetch_array($hasil);
        $noanggota=$data['NoAnggota'];
        $kdbuku=$data['KdBuku'];
        $tglpinjam=$data['Tgl_Pinjam'];
        $tglkembali=$data['Tgl_Kembali'];
        $jmlpinjam=$data['Jml_Pinjam'];
        ?>
         <TABLE>
                <tr>
                    <td>Nomor Anggota</td>
                    <td>:</td>
                    <td><input type="text" name="tnoanggota"Value="<?php echo $noanggota;?>"readonly></td>
                </tr>
                <tr>
                    <td>Kode Buku</td>
                    <td>:</td>
                    <td><input type="text" name="tkdbuku"Value="<?php echo $kdbuku;?>"readonly></td>
                </tr>
                <tr>
                    <td>Tanggal Pinjam</td>
                    <td>:</td>
                    <td><input type="date" name="ttglpinjam"Value="<?php echo $tglpinjam;?>"readonly></td>
                </tr>
                <tr>
                    <td>Tanggal Kembali</td>
                    <td>:</td>
                    <td><input type="date" name="ttglkembali"Value="<?php echo $tglkembali;?>"></td>
                </tr>
                <tr>
                    <td>Jumlah Pinjam</td>
                    <td>:</td>
                    <td><input type="text" name="tjmlpinjam"Value="<?php echo $jmlpinjam;?>"></td>
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
            </TABLE>
        </FORM>
    </BODY>
</HTML>