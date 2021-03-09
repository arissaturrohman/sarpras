<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data KIR Aset</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th width="5%">No</th>
            <th class="text-center">KIR Ruangan</th>
            <th width="10%">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          $kir = $conn->query("SELECT * FROM tb_kir");
          while ($data = $kir->fetch_assoc()) {
          ?>
            <tr>
              <td><?= $no++; ?></td>
              <?php
              $id_ruangan = $data['id_ruangan'];
              $ruangan = $conn->query("SELECT * FROM tb_ruangan WHERE id_ruangan = '$id_ruangan'");
              while ($data_ruang = $ruangan->fetch_assoc()) {
              ?>
                <td><?= $data_ruang['nama_ruangan']; ?></td>
              <?php } ?>
              <td>
                <a href="?page=kir&action=detail&id=<?= $data['id_kir']; ?>" class="btn btn-sm btn-circle btn-info" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fas fa-list"></i></a>
                <a href="?page=kir&action=edit&id=<?= $data['id_kir']; ?>" class="btn btn-sm btn-circle btn-success" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>
                <a onclick="return confirm('Yakin hapus?')" href="?page=kir&action=delete&id=<?= $data['id_kir']; ?>" class="btn btn-sm btn-circle btn-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fas fa-trash"></i></a>
                <span class="d-inline-block" tabindex="0" data-toggle="tooltip" data-placement="top" title="Cetak">
                  <button id="btnGroupDrop1" type="button" class="btn btn-sm btn-circle btn-secondary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-print"></i>
                  </button>
                  <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                    <a class="dropdown-item" target="_blank" href="?page=kir&action=cetak_ba&id=<?= $data['id_kir']; ?>">Berita Acara</a>
                    <a class="dropdown-item" target="_blank" href="?page=kir&action=cetak_kir&id=<?= $data['id_kir']; ?>">KIR</a>
                  </div>
                </span>
                <!-- <a href="?page=kir&action=cetak&id=<?= $data['id_kir']; ?>" class="btn btn-sm btn-circle btn-secondary" data-toggle="tooltip" data-placement="top" title="Print"><i class="fas fa-print"></i></a> -->
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<a href="?page=kir&action=add" class="btn btn-sm btn-outline-primary">Tambah</a>