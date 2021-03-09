<?php
header("Content-Type: application/json; charset=UTF-8");
include("config.php");

$nama_barang = $_GET['query'];

$sql = $conn->query("SELECT * FROM tb_barang WHERE nama_barang LIKE'%" . $nama_barang . "%'");
$result = $sql->fetch_assoc();

foreach ($result as $data) {
  $output[] = array(
    'value' => $data['nama_barang'],
    'nama_barang' => $data['nama_barang']
  );
}
if (!empty($output)) {
  echo json_encode($data);
}
