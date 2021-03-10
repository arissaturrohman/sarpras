<?php

$id = $_GET['id'];
$edit = $conn->query("SELECT * FROM tb_barang WHERE id_barang = '$id'");
$data = $edit->fetch_assoc();

?>

<div class="card shadow mb-4">
  <div class="card-body">
    <form action="" method="POST">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="kd_barang">Kode Barang</label>
          <input type="text" class="form-control" id="kd_barang" name="kd_barang" value="<?= $data['kd_barang']; ?>">
        </div>
        <div class="form-group col-md-6">
          <label for="register">Register</label>
          <input type="text" class="form-control" id="register" name="register" value="<?= $data['register']; ?>">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="nama_barang">Nama Barang</label>
          <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?= $data['nama_barang']; ?>">
        </div>
        <div class="form-group col-md-6">
          <label for="merk">Merk</label>
          <input type="text" class="form-control" id="merk" name="merk" value="<?= $data['merk']; ?>">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="no_seri">No Seri</label>
          <input type="text" class="form-control" id="no_seri" name="no_seri" value="<?= $data['no_seri']; ?>">
        </div>
        <div class="form-group col-md-6">
          <label for="bahan">Bahan</label>
          <input type="text" class="form-control" id="bahan" name="bahan" value="<?= $data['bahan']; ?>">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="ukuran">Ukuran</label>
          <input type="text" class="form-control" id="ukuran" name="ukuran" value="<?= $data['ukuran']; ?>">
        </div>
        <div class="form-group col-md-6">
          <label for="tahun">Tahun</label>
          <input type="text" class="form-control" id="tahun" name="tahun" value="<?= $data['tahun']; ?>">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="jumlah">Jumlah</label>
          <input type="text" class="form-control" id="jumlah" name="jumlah" value="<?= $data['jumlah']; ?>">
        </div>
        <div class="form-group col-md-6">
          <label for="harga">Harga</label>
          <input type="text" class="form-control" id="harga" name="harga" value="<?= $data['harga']; ?>">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="kondisi">Kondisi</label>
          <select class="form-control" name="kondisi">
            <option value=""></option>
            <?php

            if ($data['kondisi'] == "Baik") echo "<option value='Baik' selected>Baik</option>";
            else echo "<option value='Baik'>Baik</option>";

            if ($data['kondisi'] == "Kurang Baik") echo "<option value='Kurang Baik' selected>Kurang Baik</option>";
            else echo "<option value='Kurang Baik'>Kurang Baik</option>";

            if ($data['kondisi'] == "Rusak Berat") echo "<option value='Rusak Berat' selected>Rusak Berat</option>";
            else echo "<option value='Rusak Berat'>Rusak Berat</option>";

            ?>

          </select>
        </div>
        <div class="form-group col-md-6">
          <label for="ket">Keterangan</label>
          <input type="text" class="form-control" id="ket" name="ket" value="<?= $data['ket']; ?>">
        </div>
      </div>
      <a href="?page=barang" class="btn btn-sm btn-outline-secondary">Cancel</a>
      <button type="submit" name="edit" class="btn btn-sm btn-outline-primary">Submit</button>
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

if (isset($_POST['edit'])) {

  $sql = $conn->query("UPDATE tb_barang SET 
  kd_barang   = '$kd_brg',
  register    = '$register',
  nama_barang = '$nama_brg',
  merk        = '$merk',
  no_seri     = '$no_seri',
  bahan       = '$bahan',
  ukuran      = '$ukuran',
  tahun       = '$tahun',
  jumlah      = '$jumlah',
  harga       = '$harga',
  kondisi     = '$kondisi',
  ket         = '$ket'
  WHERE id_barang = '$id'");

  if ($sql) {
?>
    <script>
      alert("Data berhasil diubah");
      window.location.href = "?page=barang";
    </script>
<?php
  }
}

?>