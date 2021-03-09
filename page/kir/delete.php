<?php

$id = $_GET['id'];
$sql = $conn->query("DELETE FROM tb_kir WHERE id_kir = '$id'");
if ($sql) {
?>
  <script>
    window.location.href = "?page=kir";
  </script>
<?php
}
?>