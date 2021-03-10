<div class="card">
  <div class="card-body my-3">
    <div class="row">
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-6">
            <img src="asset/img/user.png" width="100%" alt="">
          </div>
          <div class="col-md-6">
            <table class="table">
              <?php
              $sql = $conn->query("SELECT * FROM tb_user WHERE id_user = 1");
              $data = $sql->fetch_assoc();
              ?>
              <tr>
                <td width="50%">Nama</td>
                <td><?= $data['nama']; ?></td>
              </tr>
              <tr>
                <td width="50%">Username</td>
                <td><?= $data['username']; ?></td>
              </tr>
              <tr>
                <td width="50%">Password</td>
                <td>*********</td>
              </tr>
            </table>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <form action="" method="POST">
          <input type="hidden" name="username" value="<?= $data['username']; ?>">
          <div class="form-group">
            <label for="pass_lama">Password Lama</label>
            <input type="password" class="form-control" id="pass_lama">
          </div>
          <div class="form-group">
            <label for="pass_baru">Password Baru</label>
            <input type="password" class="form-control" id="pass_baru">
          </div>
          <div class="form-group">
            <label for="konfirmasi_pass">Konfirmasi Password</label>
            <input type="password" class="form-control" id="konfirmasi_pass">
          </div>
          <button type="submit" name="ganti" class="btn btn-sm btn-outline-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>