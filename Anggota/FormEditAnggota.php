<HTML>
<head>
        <title>Perpustakaan SMAS Kartika XIX-3</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        </head>
<body style="background-image: url('images/a.jpg')">
            <div class="batas">
            <div class="header">
                <h1 style="padding: 1%;">E-Library SMAS Kartika XIX-3 Bandung</h1>
            </div>
            <div class="isiweb">
            <div class="sidebar">
            </div>
            <div class="konten">
    <h2>    Edit Data Anggota </h2>
    <Form Action=editanggota.php method="post" enctype="multipart/form-data">
        <?php
        include ("Koneksi.php");
        $kode=$_GET['NoAnggota'];
        $query="SELECT * FROM tbanggota Where NoAnggota='".$kode."'";
        $hasil=mysqli_query($koneksi,$query);
        $data=mysqli_fetch_array($hasil);
        $nis=$data['NIS'];
        $nama=$data['Nama'];
        $alamat=$data['Alamat'];
        $tmplahir=$data['TmpLahir'];
        $tglahir=$data['TglLahir'];
        $foto=$data['Foto'];
        ?>
         <TABLE>
                <tr>
                    <td>Nomor Anggota</td>
                    <td>:</td>
                    <td><input type="text" name="tnoanggota" Value="<?php echo $kode;?>"readonly></td>
                </tr>
                <tr>
                    <td>NIS</td>
                    <td>:</td>
                    <td><input type="text" name="tnis"Value="<?php echo $nis;?>"></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="tnama"Value="<?php echo $nama;?>"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type="text" name="talamat"Value="<?php echo $alamat;?>"></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td><input type="text" name="ttempat"Value="<?php echo $tmplahir;?>"></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td><input type="text" name="tlahir"Value="<?php echo $tglahir;?>"></td>
                </tr>
                <tr>
                    <td>Ubah (JPG)</td>
                    <td>:</td>
                    <td><input type="file" name="tfoto"<?php echo $foto;?>></td>
                </tr>
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
        <p1>Dibuat oleh Davin Nugraha Bulan Juni 2024</p1><br></br>
	<p3>Perpustakaan SMAS Kartika XIX-3 adalah perpustakaan yang menyediakan koleksi buku-buku, majalah, dan lainnya untuk digunakan oleh seluruh anggota perpustakaan SMA Negeri Situraja</p3><br></br>
	<p3>Perpustakaan SMAS Kartika XIX-3 buka dari hari senin-jumat jam 08.30-15.00 WIB</p3><br></br>
	<div class="footer">
    <marquee><p style="background-color: peru;">2024 Davin Nugraha</p></marquee>
	</div>
	</div>
	</div>
	</div>
    </BODY>
</HTML>