<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary float-left">Data Barang</h6>
    <a href="?page=barang&action=import" class="btn btn-sm btn-info float-right">Import</a>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>Kode Barang</th>
            <th>No Register</th>
            <th>Nama Barang</th>
            <th>Merk</th>
            <th>No Seri</th>
            <th>Bahan</th>
            <th>Ukuran</th>
            <th>Tahun</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Kondisi</th>
            <th>Keterangan</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          $barang = $conn->query("SELECT * FROM tb_barang");
          while ($data = $barang->fetch_assoc()) {
          ?>
            <tr>
              <td><?= $no++; ?></td>
              <td><?= $data['kd_barang']; ?></td>
              <td><?= $data['register']; ?></td>
              <td><?= $data['nama_barang']; ?></td>
              <td><?= $data['merk']; ?></td>
              <td><?= $data['no_seri']; ?></td>
              <td><?= $data['bahan']; ?></td>
              <td><?= $data['ukuran']; ?></td>
              <td><?= $data['tahun']; ?></td>
              <td><?= $data['jumlah']; ?></td>
              <td><?= number_format($data['harga']); ?></td>
              <td><?= $data['kondisi']; ?></td>
              <td><?= $data['ket']; ?></td>
              <td>
                <a href="?page=barang&action=edit&id=<?= $data['id_barang']; ?>" class="btn btn-sm btn-circle btn-success" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>
                <a onclick="return confirm('Yakin hapus?')" href="?page=barang&action=delete&id=<?= $data['id_barang']; ?>" class="btn btn-sm btn-circle btn-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fas fa-trash"></i></a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<a href="?page=barang&action=add" class="btn btn-sm btn-outline-primary">Tambah</a>