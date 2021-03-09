<div class="card shadow mb-4">
  <div class="card-body">
    <form action="" method="POST">
      <div class="form-group">
        <label for="ruangan">Ruangan</label>
        <input type="text" class="form-control" id="ruangan" name="ruangan">
      </div>
      <button type="submit" name="add" class="btn btn-sm btn-outline-primary">Submit</button>
    </form>
  </div>
</div>

<?php

$ruang       = $_POST['ruangan'];

if (isset($_POST['add'])) {

  $sql = $conn->query("INSERT INTO tb_ruangan (nama_ruangan) VALUES ('$ruang')");

  if ($sql) {
?>
    <script>
      alert("Data berhasil disimpan");
      window.location.href = "?page=ruangan";
    </script>
<?php
  }
}

?>