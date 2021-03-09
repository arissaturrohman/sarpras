<div class="card shadow mb-4">
  <div class="card-body">
    <form action="" method="POST">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="kd_barang">Kode Barang</label>
          <input type="text" class="form-control" id="kd_barang" name="kd_barang" autofocus>
        </div>
        <div class="form-group col-md-6">
          <label for="register">Register</label>
          <input type="text" class="form-control" id="register" name="register">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="nama_barang">Nama Barang</label>
          <input type="text" class="form-control" id="nama_barang" name="nama_barang">
        </div>
        <div class="form-group col-md-6">
          <label for="merk">Merk</label>
          <input type="text" class="form-control" id="merk" name="merk">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="no_seri">No Seri</label>
          <input type="text" class="form-control" id="no_seri" name="no_seri">
        </div>
        <div class="form-group col-md-6">
          <label for="bahan">Bahan</label>
          <input type="text" class="form-control" id="bahan" name="bahan">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="ukuran">Ukuran</label>
          <input type="text" class="form-control" id="ukuran" name="ukuran">
        </div>
        <div class="form-group col-md-6">
          <label for="tahun">Tahun</label>
          <input type="text" class="form-control" id="tahun" name="tahun" value="<?= date('Y'); ?>">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="jumlah">Jumlah</label>
          <input type="text" class="form-control" id="jumlah" name="jumlah">
        </div>
        <div class="form-group col-md-6">
          <label for="harga">Harga</label>
          <input type="text" class="form-control" id="harga" name="harga">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="kondisi">Kondisi</label>
          <select class="form-control" name="kondisi">
            <option value=""></option>
            <option value="Baik">Baik</option>
            <option value="Kurang Baik">Kurang Baik</option>
            <option value="Rusak Berat">Rusak Berat</option>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label for="ket">Keterangan</label>
          <input type="text" class="form-control" id="ket" name="ket">
        </div>
      </div>
      <button type="submit" name="add" class="btn btn-sm btn-outline-primary">Submit</button>
    </form>
  </div>
</div>

<?php

$kd_brg       = $_POST['kd_barang'];
$register     = $_POST['register'];
$nama_brg     = $_POST['nama_barang'];
$merk         = $_POST['merk'];
$no_seri      = $_POST['no_seri'];
$bahan        = $_POST['bahan'];
$ukuran       = $_POST['ukuran'];
$tahun        = $_POST['tahun'];
$jumlah       = $_POST['jumlah'];
$harga        = $_POST['harga'];
$kondisi      = $_POST['kondisi'];
$ket          = $_POST['ket'];

if (isset($_POST['add'])) {

  $sql = $conn->query("INSERT INTO tb_barang (kd_barang, register, nama_barang, merk, no_seri, bahan, ukuran, tahun, jumlah, harga, kondisi, ket) VALUES ('$kd_brg', '$register', '$nama_brg', '$merk', '$no_seri', '$bahan', '$ukuran', '$tahun', '$jumlah', '$harga', '$kondisi', '$ket')");

  if ($sql) {
?>
    <script>
      alert("Data berhasil disimpan");
      window.location.href = "?page=barang";
    </script>
<?php
  }
}

?>