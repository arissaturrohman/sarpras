<?php
$id = $_GET['id'];
// $id1 = $_GET['id'];
$detail = $conn->query("SELECT * FROM tb_kir WHERE id_kir = '$id'");
$data = $detail->fetch_assoc();

?>
<div class="card shadow mb-4">
  <div class="card-body">
    <form action="" method="POST">
      <input type="text" name="id_barang" id="id_barang">
      <input type="hidden" name="id_kir" id="id_kir" value="<?= $data['id_kir']; ?>">
      <input type="hidden" name="id_ruangan" id="id_ruangan" value="<?= $data['id_ruangan']; ?>">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="nama_barang">Nama Barang</label>
          <input type="text" class="form-control" onkeyup="otomatis()" id="nama_barang" name="nama_barang" placeholder="Klik disini" data-toggle="modal" data-target="#barangModal" autocomplete="off">
        </div>
        <div class="form-group col-md-6">
          <label for="kd_barang">Kode Barang</label>
          <input type="text" class="form-control" id="kd_barang" name="kd_barang" readonly>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="register">Register</label>
          <input type="text" class="form-control" id="register" name="register" readonly>
        </div>
        <div class="form-group col-md-6">
          <label for="merk">Merk</label>
          <input type="text" class="form-control" id="merk" name="merk" readonly>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="no_seri">No Seri</label>
          <input type="text" class="form-control" id="no_seri" name="no_seri" readonly>
        </div>
        <div class="form-group col-md-6">
          <label for="bahan">Bahan</label>
          <input type="text" class="form-control" id="bahan" name="bahan" readonly>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="ukuran">Ukuran</label>
          <input type="text" class="form-control" id="ukuran" name="ukuran" readonly>
        </div>
        <div class="form-group col-md-6">
          <label for="tahun">Tahun</label>
          <input type="text" class="form-control" id="tahun" name="tahun" readonly>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="jumlah">Jumlah</label>
          <input type="text" class="form-control" id="jumlah" name="jumlah" readonly>
        </div>
        <div class="form-group col-md-6">
          <label for="harga">Harga</label>
          <input type="text" class="form-control" id="harga" name="harga" readonly>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="kondisi">Kondisi</label>
          <input type="text" class="form-control" id="kondisi" name="kondisi" readonly>
        </div>
        <div class="form-group col-md-6">
          <label for="ket">Keterangan</label>
          <input type="text" class="form-control" id="ket" name="ket" readonly>
        </div>
      </div>
      <a href="?page=kir&action=detail&id=<?= $id; ?>" class="btn btn-sm btn-outline-secondary">Cancel</a>
      <button type="reset" class="btn btn-sm btn-outline-warning">Reset</button>
      <button type="submit" name="add" class="btn btn-sm btn-outline-primary">Submit</button>
    </form>
  </div>
</div>




<?php

$id_brg       = $_POST['id_barang'];
$id_ruangan   = $_POST['id_ruangan'];
$id_kir       = $_POST['id_kir'];

if (isset($_POST['add'])) {

  $sql = $conn->query("INSERT INTO tb_kir_detail (id_barang, id_ruangan, id_kir) VALUES ('$id_brg', '$id_ruangan', '$id_kir')");

  if ($sql) {
?>
    <script>
      alert("Data berhasil disimpan");
      window.location.href = "?page=kir&action=detail&id=<?= $id; ?>";
    </script>
<?php
  }
}

?>