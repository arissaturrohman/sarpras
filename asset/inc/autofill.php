<?php

include("config.php");

$nama_barang = $_GET['nama_barang'];

$sql = $conn->query("SELECT * FROM tb_barang WHERE nama_barang = '$nama_barang'");
$data_barang = $sql->fetch_array();
$data = array(
  'kd_barang' => $data_barang['kd_barang'],
  'register'  => $data_barang['register'],
  'merk'      => $data_barang['merk'],
  'no_seri'   => $data_barang['no_seri'],
  'bahan'     => $data_barang['bahan'],
  'ukuran'    => $data_barang['ukuran'],
  'tahun'     => $data_barang['tahun'],
  'jumlah'    => $data_barang['jumlah'],
  'harga'     => $data_barang['harga'],
  'kondisi'   => $data_barang['kondisi'],
  'ket'       => $data_barang['ket'],
  'id_barang'       => $data_barang['id_barang'],
);

echo json_encode($data);
