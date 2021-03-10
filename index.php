<?php

include("asset/inc/config.php");
include("vendor/autoload.php");
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Blank</title>

  <!-- Custom fonts for this template-->
  <link href="asset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="asset/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="asset/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Custom
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-folder"></i>
          <span>Data Master</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Barang & Ruangan:</h6>
            <a class="collapse-item" href="?page=barang">Data Barang</a>
            <a class="collapse-item" href="?page=ruangan">Data Ruangan</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-file"></i>
          <span>KIR</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">KIR:</h6>
            <a class="collapse-item" href="?page=kir">Data KIR</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Settings
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-cogs"></i>
          <span>Setting</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Setting:</h6>
            <a class="collapse-item" href="?page=user">User</a>
            <a class="collapse-item" href="?page=ganti_pass">Ganti Password</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                <img class="img-profile rounded-circle" src="asset/img/undraw_profile.svg">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-unlock fa-sm fa-fw mr-2 text-gray-400"></i>
                  Ganti Password
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <?php include("asset/inc/content.php"); ?>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Barang -->
  <div class="modal fade" id="barangModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th width="5%">No</th>
                  <th class="text-center">Kode Barang</th>
                  <th class="text-center">No Register</th>
                  <th class="text-center">Nama Barang</th>
                  <th class="text-center">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                $barang = $conn->query("SELECT * FROM tb_barang");
                while ($data_brg = $barang->fetch_assoc()) {
                ?>
                  <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $data_brg['kd_barang']; ?></td>
                    <td><?= $data_brg['register']; ?></td>
                    <td><?= $data_brg['nama_barang']; ?></td>
                    <td>
                      <button class="btn btn-sm btn-info" id="barang" data-id="<?= $data_brg['id_barang']; ?>" data-barang="<?= $data_brg['nama_barang']; ?>" data-kd_barang="<?= $data_brg['kd_barang']; ?>" data-register="<?= $data_brg['register']; ?>" data-merk="<?= $data_brg['merk']; ?>" data-no_seri="<?= $data_brg['no_seri']; ?>" data-bahan="<?= $data_brg['bahan']; ?>" data-ukuran="<?= $data_brg['ukuran']; ?>" data-tahun="<?= $data_brg['tahun']; ?>" data-jumlah="<?= $data_brg['jumlah']; ?>" data-harga="<?= $data_brg['harga']; ?>" data-kondisi="<?= $data_brg['kondisi']; ?>" data-ket="<?= $data_brg['ket']; ?>"> <i class=" fas fa-check"></i>
                      </button>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="asset/vendor/jquery/jquery.min.js"></script>
  <script src="asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="asset/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="asset/js/sb-admin-2.min.js"></script>
  <!-- <script src="asset/js/jQuery.min.js"></script> -->
  <!-- <script src="asset/js/jQuery.js"></script> -->
  <script src="asset/js/jquery.autocomplete.min.js"></script>

  <!-- Page level plugins -->
  <script src="asset/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="asset/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="asset/js/demo/datatables-demo.js"></script>

  <script>
    $(".custom-file-input").on("change", function() {
      var fileName = $(this).val().split("\\").pop();
      $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
  </script>

  <!-- <script type="text/javascript">
    $(function() {
      $('[data-toggle="tooltip"]').tooltip()
    })
  </script> -->

  <!-- <script type="text/javascript">
    function otomatis() {
      var nama_barang = $("#nama_barang").val();
      $.ajax({
        url: 'asset/inc/autofill.php',
        data: "nama_barang=" + nama_barang,
      }).success(function(data) {
        var json = data,
          obj = JSON.parse(json);
        $('#kd_barang').val(obj.kd_barang);
        $('#register').val(obj.register);
        $('#merk').val(obj.merk);
        $('#no_seri').val(obj.no_seri);
        $('#bahan').val(obj.bahan);
        $('#ukuran').val(obj.ukuran);
        $('#tahun').val(obj.tahun);
        $('#jumlah').val(obj.jumlah);
        $('#harga').val(obj.harga);
        $('#kondisi').val(obj.kondisi);
        $('#ket').val(obj.ket);
        $('#id_barang').val(obj.id_barang);
      });
    }
  </script> -->

  <script>
    $(function() {
      $('[data-toggle="tooltip"]').tooltip()
    })
  </script>

  <script>
    $(document).ready(function() {
      $(document).on('click', '#barang', function() {
        var id_barang = $(this).data('id');
        var nama_barang = $(this).data('barang');
        var kd_barang = $(this).data('kd_barang');
        var register = $(this).data('register');
        var merk = $(this).data('merk');
        var no_seri = $(this).data('no_seri');
        var bahan = $(this).data('bahan');
        var ukuran = $(this).data('ukuran');
        var tahun = $(this).data('tahun');
        var jumlah = $(this).data('jumlah');
        var harga = $(this).data('harga');
        var kondisi = $(this).data('kondisi');
        var ket = $(this).data('ket');
        $('#id_barang').val(id_barang);
        $('#nama_barang').val(nama_barang);
        $('#kd_barang').val(kd_barang);
        $('#register').val(register);
        $('#merk').val(merk);
        $('#no_seri').val(no_seri);
        $('#bahan').val(bahan);
        $('#ukuran').val(ukuran);
        $('#tahun').val(tahun);
        $('#jumlah').val(jumlah);
        $('#harga').val(harga);
        $('#kondisi').val(kondisi);
        $('#ket').val(ket);
        $('#barangModal').modal('hide');
      })
    })
  </script>

  <script type="text/javascript">
    $(document).ready(function() {
      $("#nama_barang").autocomplete({
        source: 'asset/inc/autocomplete.php',
        minLength: 1
      });
    })
  </script>

</body>

</html>