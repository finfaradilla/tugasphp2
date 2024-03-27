<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form method="post">
  <div class="form-group row">
    <label for="" class="col-4 col-form-label">Nama Pelanggan</label> 
    <div class="col-8">
      <input id="" name="nama" placeholder="Nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="" class="col-4 col-form-label">Produk Pilihan</label> 
    <div class="col-8">
      <select id="" name="produk" class="custom-select">
        <option value="80000">Kulkas</option>
        <option value="60000">TV</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="" class="col-4 col-form-label">Jumlah Beli</label> 
    <div class="col-8">
      <input id="" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $nama = $_POST['nama'];
  $produk = $_POST['produk'];
  $jumlah = $_POST['jumlah'];

  $produk = (int)$produk;

  $totalbelanja = $produk * $jumlah;
  $diskon = 0.20 * $totalbelanja;
  $ppn = 0.10 * ($totalbelanja - $diskon);
  $hargabersih = ($totalbelanja - $diskon) + $ppn;
?>

<h1>Nama Pelanggan: Rp. <?= $nama ?> </h1>
<h1>Produk Pilihan: Rp. <?= $produk ?> </h1>
<h1>Jumlah Beli: Rp. <?= $jumlah ?> </h1>
<h1>Harga Satuan: Rp. <?= $produk ?> </h1>
<h1>Total Belanja: Rp. <?= $totalbelanja ?> </h1>
<h1>Potongan Diskon: Rp. <?= $diskon ?> </h1>
<h1>PPN: Rp. <?= $ppn ?> </h1>
<h1>Harga Bersih: Rp. <?= $hargabersih ?> </h1>

<?php } ?>