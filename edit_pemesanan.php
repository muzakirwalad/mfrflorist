<?php
include_once("koneksi.php");
$id = $_GET['id'];
$qry = "SELECT * FROM pemesanan WHERE id='$id'";
$data = mysqli_query($con,$qry);

$ps = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>mfrflorist | pemesanan</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <?php include_once('navbar.php'); ?>

  <!-- Main Sidebar Container -->
 
  <?php include_once('sidebar.php'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <div>
          <i class="fas fa-shopping-cart fa-2x"></i>
          <h1 class="m-3" style="display: inline-block; margin-left: 10px;">pemesanan</h1>
          </div>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">pemesanan</li>
              <li class="breadcrumb-item"><a href="index.php">dashboard</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-12">
                                <h2>Input Pesanan</h2>
                            </div>
                            </div>
                            
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
        <form action="proses_editp.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $ps['id'] ?>">
            <div class="mb-3">
                <label for="exampleInputnama" class="form-label">Nama Lengkap</label>
                <input type="nama" value="<?php echo $ps['nama'] ?>" name="nama" class="form-control" id="exampleInputnama">
            </div>


            <div class="mb-3">
                    <label for="barang" class="form-label">Nama Barang</label> <br>
                    <select name="barang" value="<?php echo $ps['barang'] ?>" id="barang" class="form-control" >
                        <option value="papan bunga">Papan Bunga</option>
                    </select>
                    <div id="pemesananHelp" class="form-text"></div>
                  </div>
                <div class="mb-3">

                <div class="mb-3">
                    <label for="total" class="form-label">Jumlah Papan</label> <br>
                    <select name="total" value="<?php echo $ps['total'] ?>" id="total" class="form-control" >
                        <option selected>Jumlah</option>
                        <option value="Rp180,000">Satu Papan</option>
                        <option value="Rp350,000">Duoble Papan</option>
                    </select>
                    <div id="pemesananHelp" class="form-text"></div>
                  </div>
                <div class="mb-3">

            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal Pemesanan</label>
                <input type="date" value="<?php echo $ps['tanggal'] ?>" name="tanggal" class="form-control" id="tanggal">
            </div>
            <div class="mb-3">
                <label for="hp" class="form-label">No Hp</label>
                <input type="number" value="<?php echo $ps['hp'] ?>" name="hp" class="form-control" id="hp">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat Pemesanan</label>
                <input type="alamat" value="<?php echo $ps['alamat'] ?>" name="alamat" class="form-control" id="alamat">
            </div>

            <div class="mb-3">
                    <label for="pengantar" class="form-label">Pengantar</label> <br>
                    <select name="pengantar" value="<?php echo $ps['pengantar'] ?>" id="pengantar" class="form-control" >
                        <option selected>Nama Pengantar</option>
                        <option value="Raisul Fatah">Raisul Fatah</option>
                        <option value="Razin">Razin</option>
                    </select>
                    <div id="pemesananHelp" class="form-text"></div>
                  </div>
                <div class="mb-3">

            <button type="proses" class="btn btn-primary">Proses Data</button>
            <a class="btn btn-secondary" href="dana.php">Batal </a>
            </form>
            </div>
            </div>
        </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->

    <!-- Modal Tambah Data -->
    <div class="modal fade" id="tambahDataModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <!-- Isi modal tambah data -->
            </div>
        </div>
    </div>

    <!-- Modal Hapus Data -->
    <div class="modal fade" id="hapusDataModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <!-- Isi modal hapus data -->
            </div>
        </div>
    </div>
</section>

<!-- jQuery and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>




      
        

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
!-- Page specific script 
<script>
  $(function () {
   
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
