<?php
    include "koneksi.php";
    $sql = "SELECT * FROM pesanan ORDER BY id_pesanan";
    $qry = mysqli_query($konek, $sql)or die ("Gagal query");
    $data = mysqli_fetch_array($qry);
    $harga = $data["harga"];
    $jumlah_beli = $data["jumlah_beli"];
        
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
    <td align="right"><label for="nm_pengirim">Nama Pengirim :</label></td>
    <td>
    <input name="nm_pengirim" id="nm_pengirim" type="text" size="50" maxlength="50" required="required">
        </td>
    </tr>
    
    <tr>
    <td align="right"><label for="nm_penerima">Nama Penerima :</label></td>
    <td><input name="nm_penerima" id="nm_penerima" type="text" size="50" maxlength="50" required="required"></td>
    </tr>
    
    <tr>
    <td align="right"><label for="nm_barang">Nama Barang :</label></td>
    <td><input name="nm_barang" id="nm_barang" type="text" size="50" maxlength="100" required="required"></td>
    </tr>
    
    <tr>
    <td align="right"><label for="marketplace">Marketplace</label></td>
    <td>
    <input type="radio" id="Bukalapak" value="Bukalapak" name="marketplace" checked><label for="Bukalapak">Bukalapak</label>
    <input type="radio" id="Tokopedia" value="Tokopedia" name="marketplace"><label for="Tokopedia">Tokopedia</label>
    <input type="radio" id="Shopee" value="Shopee" name="marketplace"><label for="Shopee">Shopee</label>
    <input type="radio" id="Lazada" value="Lazada" name="marketplace"><label for="Lazada">Lazada</label>
    </td>
    </tr>
    
    <tr>
    <td align="right"><label for="jasa_kirim">Jasa Kirim :</label></td>
    <td><input name="jasa_kirim" id="jasa_kirim" type="text" size="50" maxlength="100" required="required"></td>
    </tr>

    <tr>
    <td align="right"><label for="harga">Harga :</label></td>
    <td><div class="as"><div><div><b style="color: rgba(0,0,0,.54);">Rp.</b></div><input id="harga" class="bg" name="harga" type="text" size="46" maxlength="40" required="required"></div></div></td>
    </tr>
    
    <tr>
    <td align="right"><label for="jumlah_beli">Jumlah Beli :</label></td>
    <td><input name="jumlah_beli" id="jumlah_beli" type="number" size="46" maxlength="40" required="required"></td>
    </tr>

    <tr>
    <td align="right"><label for="alamat">Alamat :</label></td>
    <td><textarea style="outline: none;" class="alamat" name="alamat" id="alamat" cols="50" rows="2" required="required"></textarea></td>
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
