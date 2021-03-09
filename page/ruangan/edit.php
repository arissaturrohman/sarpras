<?php

$id = $_GET['id'];
$edit = $conn->query("SELECT * FROM tb_ruangan WHERE id_ruangan = '$id'");
$data = $edit->fetch_assoc();

?>
<div class="card shadow mb-4">
  <div class="card-body">
    <form action="" method="POST">
      <div class="form-group">
        <label for="ruangan">Ruangan</label>
        <input type="text" class="form-control" id="ruangan" name="ruangan" value="<?= $data['nama_ruangan']; ?>">
      </div>
      <a href="?page=ruangan" class="btn btn-sm btn-outline-secondary">Cancel</a>
      <button type="submit" name="edit" class="btn btn-sm btn-outline-primary">Submit</button>
    </form>
  </div>
</div>

<?php

$ruang = $_POST['ruangan'];

if (isset($_POST['edit'])) {

  $sql = $conn->query("UPDATE tb_ruangan SET nama_ruangan = '$ruang' WHERE id_ruangan = '$id'");

  if ($sql) {
?>
    <script>
      alert("Data berhasil diubah");
      window.location.href = "?page=ruangan";
    </script>
<?php
  }
}

?>