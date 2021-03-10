<div class="row">
  <div class="col-md-6">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary float-left">Import Data</h6>
        <a href="asset/data/data_barang.xlsx" class="btn btn-sm btn-outline-warning float-right">Download Form</a>
      </div>
      <div class="card-body">
        <form action="" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="customFile" name="data_barang">
              <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
          </div>
          <button type="submit" class="btn btn-sm btn-outline-success">Upload</button>
        </form>
      </div>
    </div>
  </div>
</div>


<?php

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
  for ($i = 1; $i < count($sheetData); $i++) {
    $kd_brg     = $sheetData[$i]['1'];
    $register   = $sheetData[$i]['2'];
    $nama_brg   = $sheetData[$i]['3'];
    $merk       = $sheetData[$i]['4'];
    $no_seri    = $sheetData[$i]['5'];
    $bahan      = $sheetData[$i]['6'];
    $ukuran     = $sheetData[$i]['7'];
    $tahun      = $sheetData[$i]['8'];
    $jumlah     = $sheetData[$i]['9'];
    $harga      = $sheetData[$i]['10'];
    $kondisi    = $sheetData[$i]['11'];
    $ket        = $sheetData[$i]['12'];

    mysqli_query($conn, "INSERT INTO tb_barang (kd_barang, register, nama_barang, merk, no_seri, bahan, ukuran, tahun, jumlah, harga, kondisi, ket) VALUES ('$kd_brg', '$register', '$nama_brg', '$merk', '$no_seri', '$bahan', '$ukuran', '$tahun', '$jumlah', '$harga', '$kondisi', '$ket')");
  }
?>
  <script>
    alert("Data berhasil di Import");
    window.location.href = "?page=barang";
  </script>
<?php

}

?>