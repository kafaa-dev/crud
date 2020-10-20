<?php
    include "koneksi.php";
    $sql = "SELECT * FROM pesanan ORDER BY id_pesanan";
    $qry = mysqli_query($konek, $sql)or die ("Gagal query");
    $data = mysqli_fetch_array($qry);
    $harga = $data[harga];
    $jumlah_beli = $data[jumlah_beli];
        
    $query = mysqli_query($konek, "SELECT max(id_pesanan) as kodeTerbesar FROM pesanan");
    $data1 = mysqli_fetch_array($query);
    $kodePesanan = $data1['kodeTerbesar'];

    $urutan = (int) substr($kodePesanan, 9, 9);
    $urutan++;

    $huruf = "PSN";
    $kodePesanan = $huruf . sprintf("%09s", $urutan);        
?>
<html>
<head>
  <script src="jquery/jquery-1.11.2.min.js"></script>
  <script src="jquery/jquery.mask.min.js"></script>
<script type="text/javascript">
function inputTerbilang1() {
      $('.mata-uang').mask('0.000.000.000', {reverse: true});
}
</script>
<script>
function myFunction() {
  var str = document.getElementById("demo").innerHTML; 
  var res = str.replace("Microsoft", "Iklan");
  document.getElementById("demo").innerHTML = res;
}
</script>

        
  
    <link href="style/tambahfm.css" rel="stylesheet" type="text/css">
    <title>Tambah Pesanan</title>
</head>
<body>
<form action ="pesanantambahsimpan.php" method="post">
<table style="width: 650px;" border="1" cellspacing="0" cellpadding="8">

    <tr>
        <td colspan="2"><b>Masukkan Data Pesanan</b></td>
    </tr>
    
    <tr hidden="">
		<td><input type="text" name="id_pesanan" required="required" value="<?php echo $kodePesanan ?>" readonly></td>
    </tr>
    
    <tr>
    <td align="right">Nama Pengirim :</td>
    <td class="ji">
    <input name="nm_pengirim" type="text" size="50" maxlength="50" required="required">
        </td>
    </tr>
    
    <tr>
    <td align="right">Nama Penerima :</td>
    <td class="ji"><input name="nm_penerima" type="text" size="50" maxlength="50" required="required"></td>
    </tr>
    
    <tr>
    <td align="right">Nama Barang :</td>
    <td class="ji"><input name="nm_barang" type="text" size="50" maxlength="100" required="required"></td>
    </tr>
    
    <tr>
    <td align="right">Jasa Kirim :</td>
    <td class="ji"><input name="jasa_kirim" type="text" size="50" maxlength="100" required="required"></td>
    </tr>

    <tr>
    <td align="right">Harga :</td>
    <td><div class="as"><div><div><b style="color: rgba(0,0,0,.54);">Rp.</b></div><input id="harga" class="bg" name="harga" onkeyup="myFunction();" type="number" size="46" maxlength="40" required="required"></div></div></td>
    </tr>
    
    <tr>
    <td align="right">Jumlah Beli :</td>
    <td class="ji"><input name="jumlah_beli" type="number" size="46" maxlength="40" required="required"></td>
    </tr>

    <tr>
    <td align="right">Alamat :</td>
    <td class="ji"><textarea name="alamat" cols="50" rows="2" required="required"></textarea></td>
    </tr>
    
    <tr>
    <td colspan="2">
        <input type="submit" name="Simpan" class="button" value="Simpan">
        <input type="reset" name="Batal" class="button" value="Batal" onclick="self.history.back()">
    </td>
    </tr>

</table>
</form>

</body>
</html>
