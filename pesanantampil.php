<?php
// konek ke database
$konek = mysqli_connect("localhost", "root", "", "crud")
?>
<htmla>
<head>
<link rel="stylesheet" href="style/tampil.css">
    <title>Daftar Pesanan</title>
</head>
<body>
<form action="pesanantambahfm.php">
<input class="button" type="submit" style="font-weight: bold;" value="Tambah Pesanan">
</form>
<table border="1" cellspacing="0" cellpadding="6">
    <tr>
        <td colspan="100%"><b>Daftar Pesanan</b></td>
    </tr>
    <tr align="center">
        <td>No</td>
        <td>Pengirim</td>
        <td>Penerima</td>
        <td>Nama Barang</td>
     
        <td>Jasa Kirim</td>
        <td>Harga</td>
        <td>Jumlah Beli</td>
        <td>Total</td>
        <td>Aksi</td>
    </tr>

<?php
$sql = "SELECT * FROM pesanan ORDER BY id_pesanan";
$qry = mysqli_query($konek, $sql)or die ("Gagal query");
$no=1;
while ($data = mysqli_fetch_array($qry)) {
echo "<tr bgcolor=#FFFFFF>
    <td>$no</td>
    <td>$data[nm_pengirim]</td>
    <td>$data[nm_penerima]</td>
    <td>$data[nm_barang]</td>
    
    <td>$data[jasa_kirim]</td>
    <td><p>Rp. ".number_format($data[harga], 0, '', '.')."<br></td>
    <td>$data[jumlah_beli]</td>
    <td><p>Rp. ".number_format($data[harga] * $data[jumlah_beli], 0, '', '.').",-<br></td>
    <td><a href=\"pesananlihat.php?id=$data[id_pesanan]\">Lihat</a> |
        <a href=\"pesananubahfm.php?id=$data[id_pesanan]\">Edit</a> |
        <a href=\"pesananhapus.php?id=$data[id_pesanan]\">Hapus</a></td>
    </tr>";
        $no++;
}
?>

</table>
</body>
</html>
