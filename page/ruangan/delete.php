<?php
$id = $_GET['id'];
$delete = $conn->query("DELETE FROM tb_ruangan WHERE id_ruangan = '$id'");
if ($delete) {
?>
  <script>
    alert("Data berhasil dihapus");
    window.location.href = "?page=ruangan";
  </script>
<?php
}
?>