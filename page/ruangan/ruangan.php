<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data Ruangan</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th width="5%">No</th>
            <th class="text-center">Ruangan</th>
            <th width="10%">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          $ruang = $conn->query("SELECT * FROM tb_ruangan");
          while ($data = $ruang->fetch_assoc()) {
          ?>
            <tr>
              <td><?= $no++; ?></td>
              <td><?= $data['nama_ruangan']; ?></td>
              <td>
                <a href="?page=ruangan&action=edit&id=<?= $data['id_ruangan']; ?>" class="btn btn-sm btn-circle btn-success" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>
                <a onclick="return confirm('Yakin hapus?')" href="?page=ruangan&action=delete&id=<?= $data['id_ruangan']; ?>" class="btn btn-sm btn-circle btn-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fas fa-trash"></i></a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<a href="?page=ruangan&action=add" class="btn btn-sm btn-outline-primary">Tambah</a>