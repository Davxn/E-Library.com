<HTML>
<HEAD>
    <title>Edit Data Buku</title>
</HEAD>
<body> 
    <h2>    Edit Data Buku </h2>
    <Form Action=editbuku.php method="post">
        <?php
        include ("Koneksi.php");
        $kode=$_GET['KdBuku'];
        $query="SELECT * FROM tbBuku Where KdBuku='".$kode."'";
        $hasil=mysqli_query($koneksi,$query);
        $data=mysqli_fetch_array($hasil);
        $nama=$data['NmBuku'];
        $pengarang=$data['Pengarang'];
        $penerbit=$data['Penerbit'];
        $tahun=$data['ThnTerbit'];
        $edisi=$data['Edisi'];
        $jmlhal=$data['JmlHalaman'];
        $jenis=$data['JenisBuku'];
        $foto=$data['Cover'];
        ?>
         <TABLE>
                <tr>
                    <td>Kode Buku</td>
                    <td>:</td>
                    <td><input type="text" name="tkdbuku"Value="<?php echo $kode;?>"readonly></td>
                </tr>
                <tr>
                    <td>Nama Buku</td>
                    <td>:</td>
                    <td><input type="text" name="tnmbuku"Value="<?php echo $nama;?>"readonly></td>
                </tr>
                <tr>
                    <td>Pengarang</td>
                    <td>:</td>
                    <td><input type="text" name="tpengarang"Value="<?php echo $pengarang;?>"readonly></td>
                </tr>
                <tr>
                    <td>Penerbit</td>
                    <td>:</td>
                    <td><input type="text" name="tpenerbit"Value="<?php echo $penerbit;?>"readonly></td>
                </tr>
                <tr>
                    <td>Tahun</td>
                    <td>:</td>
                    <td><input type="text" name="ttahun"Value="<?php echo $tahun;?>"readonly></td>
                </tr>
                <tr>
                    <td>Edisi</td>
                    <td>:</td>
                    <td><input type="text" name="tedisi"Value="<?php echo $edisi;?>"readonly></td>
                </tr>
                <tr>
                    <td>Jml.Hal</td>
                    <td>:</td>
                    <td><input type="text" name="tjml"Value="<?php echo $jmlhal;?>"readonly></td>
                </tr>
                <tr>
                    <td>Jenis Buku</td>
                    <td>:</td>
                    <td><input type="text" name="tjenis"Value="<?php echo $jenis;?>"readonly></td>
                </tr>
                <tr>
                    <td>Ubah (JPG)</td>
                    <td>:</td>
                    <td><input type="file" name="tfoto"<?php echo $foto;?>></td>
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