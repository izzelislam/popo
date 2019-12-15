<!DOCTYPE html>
<html>
<head>
  <?php 
      include "../template/link.php";
   ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <?php 
    include "../template/header.php";
   ?>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <?php 
    include "../template/sidebar.php";
   ?>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah User
        <small>Halaman tambah user</small>
      </h1>
      <ol class="breadcrumb">
        <li class="active"><a href="../index"><i class="fa fa-home"></i> Beranda</a></li>
        <li class="active"><a href="index.php"><i class="fa fa-user"></i> User</a></li>
        <li class="active"><a href="create.php"><i class="fa fa-plus"></i> Tambah user</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-header with-border">Halaman login user</h3>
          <div class="box-body">
             <form role="form" method="POST" action="create_proses.php">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama</label>
                  <input name="nama" type="text" class="form-control" id="exampleInputPassword1" placeholder="Nama">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Alamat Email</label>
                  <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <!-- <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile">

                  <p class="help-block">Example block-level help text here.</p>
                </div> -->
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <a href="index.php" class="btn btn-sm btn-default"><i class="fa fa-arrow-left"></i>Kembali</a>
                <button type="submit" class="btn btn-sm btn-primary">Submit</button>
              </div>
            </form>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
            
            </div>
        </div>
        
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php 
    include "../template/footer.php";
   ?>

</div>

<?php 
    include "../template/scriipt.php";
 ?>

</body>
</html>
