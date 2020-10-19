<?php
$konek = mysqli_connect("localhost","root","","crud");

// ambil variabel yang dikirim dari form
$id    = $_GET['id'];
$id_pesanan = $_GET['id_pesanan'];
$nm_pengirim = $_GET['nm_pengirim'];
$nm_penerima = $_GET['nm_penerima'];
$nm_barang = $_GET['nm_barang'];
$jasa_kirim = $_GET['jasa_kirim'];
$harga = $_GET['harga'];
$jumlah_beli = $_GET['jumlah_beli'];
$alamat  = $_GET['alamat'];

$update = "UPDATE pesanan SET nm_pengirim='$nm_pengirim', nm_penerima='$nm_penerima', nm_barang='$nm_barang', jasa_kirim='$jasa_kirim', harga='$harga', jumlah_beli='$jumlah_beli', alamat='$alamat' WHERE id_pesanan='$id'";
$hasil  = mysqli_query($konek, $update);

// apabila query untuk mengupdate data benar
 include "pesanantampil.php";
?>
