<div class="card shadow mb-4">
  <div class="card-body">
    <form action="" method="POST">
      <div class="form-group">
        <label for="kir">KIR Ruangan</label>
        <select class="form-control" name="kir">
          <option value="">--Pilih--</option>
          <?php
          $ruang = $conn->query("SELECT * FROM tb_ruangan");
          while ($data_ruang = $ruang->fetch_assoc()) {
          ?>
            <option value="<?= $data_ruang['id_ruangan']; ?>"><?= $data_ruang['nama_ruangan']; ?></option>
          <?php } ?>
        </select>
      </div>
      <a href="?page=kir" class="btn btn-sm btn-outline-secondary">Cancel</a>
      <button type="submit" name="add" class="btn btn-sm btn-outline-primary">Submit</button>
    </form>
  </div>
</div>

<?php

$kir       = $_POST['kir'];

if (isset($_POST['add'])) {

  $sql = $conn->query("INSERT INTO tb_kir (id_ruangan) VALUES ('$kir')");

  if ($sql) {
?>
    <script>
      alert("Data berhasil disimpan");
      window.location.href = "?page=kir";
    </script>
<?php
  }
}

?>