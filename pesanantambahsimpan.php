<?php
// konek database
$konek = mysqli_connect("localhost", "root", "", "crud");

// menangkap data yang di kirim dari form
$kodePesanan = $_POST['id_pesanan'];
$nm_pengirim = $_POST['nm_pengirim'];
$nm_penerima = $_POST['nm_penerima'];
$nm_barang = $_POST['nm_barang'];
$jasa_kirim = $_POST['jasa_kirim'];
$harga = $_POST['harga'];
$jumlah_beli = $_POST['jumlah_beli'];
$alamat = $_POST['alamat'];
 
// menginput data ke database
mysqli_query($konek,"INSERT into pesanan values('$kodePesanan', '$nm_pengirim','$nm_penerima','$nm_barang', '$jasa_kirim', '$harga', '$jumlah_beli', '$alamat')");
 
// mengalihkan halaman kembali ke index.php
header("location:pesanantampil.php");
?>a
