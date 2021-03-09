<?php

$id = $_GET['id_detail'];
$id1 = $_GET['id'];
$sql = $conn->query("DELETE FROM tb_kir_detail WHERE id_kir_detail = '$id'");
if ($sql) {
?>
  <script>
    window.location.href = "?page=kir&action=detail&id=<?= $id1; ?>";
  </script>
<?php
}
?>