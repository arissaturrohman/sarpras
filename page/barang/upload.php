<?php
include("asset/inc/config.php");
require "../vendor/autoload.php";
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Csv;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

$file_mimes = array('application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');

if (isset($_FILES['data_barang']['name']) && in_array($_FILES['data_barang']['type'], $file_mimes)) {
  
  $arr_file = explode('.', $_FILES['data_barang']['name']);
  $extension = end($arr_file);

  if ('csv' == $extension) {
    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
  } else {
    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();    
  }

  $spreadsheet = $reader->load($_FILES['data_barang']['tmp_name']);
  $sheetData = $spreadsheet->getActiveSheet()->toArray();
  for ($i=1; $i < count($sheetData) ; $i++) 
  { 
    $kd_brg = $sheetData[$i]['1'];

    mysqli_query($conn, "INSERT INTO tb_barang (kd_barang) VALUES ('$kd_brg')");
  }
  header("Location: ?page=barang");
}
