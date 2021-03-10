<!-- Content Header (Page header) -->
<!-- <section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Data User</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Data User</li>
        </ol>
      </div>
    </div>
  </div>
</section> -->

<!-- Main content -->
<section class="content">
  <!-- Horizontal Form -->
  <div class="row">
    <div class="col-6">
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">Form Add User</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" method="POST">
          <div class="card-body">
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" id="username" name="username" placeholder="Username">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="password">
            </div>
            <div class="form-group">
              <label for="nama">Nama Lengkap</label>
              <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" name="add" class="btn btn-info">Submit</button>
          </div>
          <!-- /.card-footer -->
        </form>
      </div>
      <!-- /.card -->
    </div>
  </div>
</section>
<!-- /.content -->

<?php
if (isset($_POST['add'])) {

  $username  = mysqli_real_escape_string($conn, $_POST['username']);
  $nama      = mysqli_real_escape_string($conn, $_POST['nama']);

  //enkripsi password
  $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
  $sql = $conn->query("INSERT INTO tb_user (username, password, nama) VALUES(        
        '$username',
        '$password',
        '$nama'
    )");

  if ($sql) {
?>
    <script type="text/javascript">
      alert("User berhasil ditambahkan..!");
      window.location.href = "?page=user";
    </script>
<?php
  }
}

?>