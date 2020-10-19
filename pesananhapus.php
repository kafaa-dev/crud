<?php
include "koneksi.php";

$id  = $_GET['id'];
$hapus = "DELETE FROM pesanan WHERE id_pesanan='$id'";
mysqli_query($konek, $hapus);

header("location:pesanantampil.php");

?>