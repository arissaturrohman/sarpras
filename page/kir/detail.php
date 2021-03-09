<?php
$id = $_GET['id'];
$detail = $conn->query("SELECT * FROM tb_kir WHERE id_kir = '$id'");
$data = $detail->fetch_assoc();

?>

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Detail KIR Ruangan
  <?php
  $id_ruangan = $data['id_ruangan'];
  $ruang = $conn->query("SELECT * FROM tb_ruangan WHERE id_ruangan = '$id_ruangan'");
  $data_ruang = $ruang->fetch_assoc();
  echo $nama_ruang = $data_ruang['nama_ruangan'];
  ?>
</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Detail Aset</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th width="5%">No</th>
            <th class="text-center">Kode Barang</th>
            <th class="text-center">Nama Barang</th>
            <th width="10%">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          $kir = $conn->query("SELECT * FROM tb_kir_detail, tb_barang WHERE tb_kir_detail.id_barang = tb_barang.id_barang AND id_kir = '$id'");
          while ($data = $kir->fetch_assoc()) {
          ?>
            <tr>
              <td><?= $no++; ?></td>
              <td><?= $data['kd_barang']; ?></td>
              <td><?= $data['nama_barang']; ?></td>
              <td>
                <a href="?page=kir&action=edit_detail&id=<?= $id; ?>&id_detail=<?= $data['id_kir_detail']; ?>" class="btn btn-sm btn-circle btn-success" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>
                <a onclick="return confirm('Yakin hapus?')" href="?page=kir&action=delete_detail&id=<?= $id; ?>&id_detail=<?= $data['id_kir_detail']; ?>" class="btn btn-sm btn-circle btn-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fas fa-trash"></i></a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<a href="?page=kir" class=" btn btn-sm btn-outline-secondary">Cancel</a>
<a href="?page=kir&action=add_aset&id=<?= $id; ?>" class=" btn btn-sm btn-outline-primary">Tambah</a>