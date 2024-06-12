<HTML>
<HEAD>
    <title>Form Pengembalian Buku</title>
</HEAD>
<body> 
    <h2>    Form Pengembalian Buku</h2>
    <Form Action=CariBuku.php method="post">
         <TABLE Style="Background-Color=Orange">
                <tr>
                    <td>Cari ID Pinjam</td>
                    <td>:</td>
                    <td><input type="text" name="tidpinjam"></td>
                </tr>
                <td><input type="submit" value="Cari"></td>
                </tr>
            </TABLE>
        </FORM>
        <br><br>




        <h2> Pengembalian Buku</h2>
    <Form Action=CariBuku.php method="Post">
    <table style="border-top-width: 2cap ; padding: 1%;">
                <tr>
                    <td>Id Pinjam</td>
                    <td>:</td>
                    <td><input type="text" name="tidpinjam"readonly></td>
                </tr>
                <tr>
                    <td>Kode Buku</td>
                    <td>:</td>
                    <td><input type="text" name="tkdbuku"readonly></td>
                </tr>
                <tr>
                    <td>Nomor Anggota</td>
                    <td>:</td>
                    <td><input type="text" name="tnoanggota"readonly></td>
                </tr><tr>
                    <td>Tanggal Pinjam</td>
                    <td>:</td>
                    <td><input type="date" name="ttglpinjam"readonly></td>
                </tr><tr>
                    <td>Tanggal Kembali</td>
                    <td>:</td>
                    <td><input type="date" name="ttglkembali"readonly></td>
                </tr><tr>
                    <td>Jumlah Pinjam</td>
                    <td>:</td>
                    <td><input type="text" name="tjmlpinjam"readonly></td>
                </tr><tr>
                    <td>Status</td>
                    <td>:</td>
                    <td><input type="text" name="tstatus"readonly></td>
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