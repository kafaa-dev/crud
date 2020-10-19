<html>a
<head>
    <link rel="stylesheet" href="style/tambahfm.css" type="text/css">
    <title>Ubah Pesanan</title>
</head>
</html>
<?php
$konek = mysqli_connect("localhost","root","","crud");

// ambil id dari hasil klik link Edit
$id    = $_GET['id'];

$edit  = "SELECT * FROM pesanan WHERE id_pesanan='$id'";
$hasil = mysqli_query($konek, $edit);
$data  = mysqli_fetch_array($hasil);


echo "<form method=\"GET\" action=\"pesananubahsim.php\">
      <input type=\"hidden\" name=\"id\" VALUE=\"$id\">
      <table style=\"width: 650px;\" border=\"1\" cellspacing=\"0\" cellpadding=\"8\">
      <tr><td colspan=\"2\"><b>Ubah Data Pesanan</b></td></tr>
      <tr><td align=\"right\">Nama Pengirim :</td><td><input size=\"50\" maxlength=\"50\" type=\"text\" name=\"nm_pengirim\" value=\"$data[nm_pengirim]\"></td></tr>
      <tr><td align=\"right\">Nama Penerima :</td><td><input size=\"50\" maxlength=\"50\" type=\"text\" name=\"nm_penerima\" value=\"$data[nm_penerima]\" required=\"required\"></td></tr>
      <tr><td align=\"right\">Nama Barang :</td><td><input type=\"text\" name=\"nm_barang\" size=\"50\" maxlength=\"100\" value=\"$data[nm_barang]\" required=\"required\"></td></tr>
      <tr><td align=\"right\">Jasa Kirim :</td><td><input type=\"text\" name=\"jasa_kirim\" size=\"50\" maxlength=\"40\" value=\"$data[jasa_kirim]\" required=\"required\"></td></tr>
      <tr><td align=\"right\">Harga :</td><td><div class=\"as\"><div><b>Rp. </b><input class=\"bg\" name=\"harga\" value=\"$data[harga]\" type=\"number\" size=\"46\" maxlength=\"40\" required=\"required\"></div></div></td></tr>
      <tr><td align=\"right\">Jumlah Beli :</td><td><input type=\"number\" name=\"jumlah_beli\" value=\"$data[jumlah_beli]\" required=\"required\"></td></tr>
      <tr><td align=\"right\">Alamat :</td><td><textarea cols=\"50\" type=\"text\" name=\"alamat\" value=\"$data[alamat]\" required=\"required\">$data[alamat]</textarea></td></tr>
      <tr><td colspan=\"2\"><input type=\"submit\" class=\"button\" value=\"Simpan\"> <input type=\"reset\" class=\"button\" value=\"Batal\" onclick=\"self.history.back()\"></td></tr>
      </table>
      </form>"
?>
