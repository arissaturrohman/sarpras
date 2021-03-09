<?php
$id = $_GET['id'];
$edit = $conn->query("SELECT * FROM tb_kir WHERE id_kir = '$id'");
while ($data = $edit->fetch_assoc()) {
  $ruang = $data['id_ruangan'];

?>
  <div class="card shadow mb-4">
    <div class="card-body">
      <form action="" method="POST">
        <div class="form-group">
          <label for="kir">KIR Ruangan</label>
          <select class="form-control" name="kir">
            <option value="">--Pilih--</option>
            <?php
            $edit_ruang = $conn->query("SELECT * FROM tb_ruangan");
            while ($data_ruang = $edit_ruang->fetch_assoc()) {
              $ruang1 = $data_ruang['id_ruangan'];
              $nama_ruang = $data_ruang['nama_ruangan'];
              if ($ruang1 == $ruang) {
                $cek = "selected";
              } else {
                $cek = "";
              }
              echo "<option value='$ruang1' $cek>$nama_ruang</option>";
            } ?>
          </select>
        <?php } ?>
        </div>
        <a href="?page=kir" class="btn btn-sm btn-outline-secondary">Cancel</a>
        <button type="submit" name="edit" class="btn btn-sm btn-outline-primary">Submit</button>
      </form>
    </div>
  </div>

  <?php

  $kir       = $_POST['kir'];

  if (isset($_POST['edit'])) {

    $sql = $conn->query("UPDATE tb_kir SET id_ruangan = '$kir' WHERE id_kir = '$id'");

    if ($sql) {
  ?>
      <script>
        alert("Data berhasil diubah");
        window.location.href = "?page=kir";
      </script>
  <?php
    }
  }

  ?>