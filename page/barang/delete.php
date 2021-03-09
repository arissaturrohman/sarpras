<?php
$id = $_GET['id'];
$delete = $conn->query("DELETE FROM tb_barang WHERE id_barang = '$id'");
if ($delete) {
?>
  <script>
    alert("Data berhasil dihapus");
    window.location.href = "?page=barang";
  </script>
<?php
}
?>