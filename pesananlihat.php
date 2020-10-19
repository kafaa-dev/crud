<?php
// konek ke database
$konek = mysqli_connect("localhost", "root", "", "crud");

$id  = $_GET['id'];

$sql = "SELECT * FROM pesanan WHERE id_pesanan='$id'";
$qry = mysqli_query($konek, $sql)or die ("Gagal query");
$data = mysqli_fetch_array($qry);

?>
<html>
<head>
    <link href="style/tambahfm.css" rel="stylesheet" type="text/css">
    <title>Lihat Pesanan</title>
</head>
<body>
<?php

echo "$data[nm_pengirim] mempunyai pesanan dari $data[nm_penerima],
<br> $data[nm_penerima] membeli $data[nm_barang],
<br> Alamat $data[nm_penerima] : $data[alamat]"
?>
<br /><br />
<table border="1" cellspacing="0" cellpadding="10">
    <tr align="center">
        <td><b>Pengirim</b></td>
        <td><b>Penerima</b></td>
        <td><b>Nama Barang</b></td>
        <td><b>Alamat</b></td>
        <td><b>Jasa Kirim</b></td>
        <td><b>Harga</b></td>
        <td><b>Jumlah Beli</b></td>
        <td><b>Total</b></td>
    </tr>

<?php
echo "<form method=\"GET\" action=\"#\">
    <input type=\"hidden\" name=\"id\" VALUE=\"$id\">
    <tr bgcolor=#FFFFFF>
    <td>$data[nm_pengirim]</td>
    <td>$data[nm_penerima]</td>
    <td>$data[nm_barang]</td>
    <td>$data[alamat]</td>
    <td>$data[jasa_kirim]</td>
    <td><p>Rp. ".number_format($data[harga], 0, '', '.').",-<br></td>
    <td>$data[jumlah_beli]</td>
    <td><p>Rp. ".number_format($data[harga] * $data[jumlah_beli], 0, '', '.').",-<br></td>
    </tr>;


</table>
</form>"
?>

<br>
<input type="reset" name="Kembali" class="button" value="Kembali" onclick="self.history.back()">
</body>
</html>