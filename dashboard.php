<?php 
include 'koneksi.php';
?>
<title>Dashboard</title>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>
              <?=
                  mysqli_num_rows(mysqli_query($konek, "SELECT * FROM tb_user"));;
              ?>
              </h3>
              <p>Pengguna</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="#" class="small-box-footer"><i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>
              <?=
                mysqli_num_rows(mysqli_query($konek, "SELECT * FROM tb_jurusan"));
              ?>
                <sup style="font-size: 20px"></sup></h3>
              <p>Jurusan</p>
            </div>
            <div class="icon">
              <i class="ion ion-university"></i>
            </div>
            <a href="?page=jurusan" class="small-box-footer"><i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>
              <?=
                mysqli_num_rows(mysqli_query($konek, "SELECT * FROM tb_kelas"));
              ?>
              </h3>

              <p>Kelas</p>
            </div>
            <div class="icon">
              <i class="ion ion-home"></i>
            </div>
            <a href="?page=kelas" class="small-box-footer"><i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>
              <?=
                mysqli_num_rows(mysqli_query($konek, "SELECT * FROM tb_siswa"));
              ?>
              </h3>
              <p>Siswa</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-stalker"></i>
            </div>
            <a href="?page=siswa" class="small-box-footer"><i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->