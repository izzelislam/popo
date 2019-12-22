<?php 
  session_start();
  if (!isset($_SESSION['email']) && !isset($_SESSION['password'])) {
    header("location:../index.php");
  }
 ?>
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
        Edit User
        <small>Halaman edit user</small>
      </h1>
      <ol class="breadcrumb">
        <li class="active"><a href="../index"><i class="fa fa-home"></i> Beranda</a></li>
        <li class="active"><a href="index.php"><i class="fa fa-user"></i> User</a></li>
        <li class="active"><a href="create.php"><i class="fa fa-plus"></i> Tambah user</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <?php 
             include '../config/koneksi.php';
             $id=$_GET['id'];

            $sql="SELECT * FROM users WHERE id='$id'";
            $query=mysqli_query($koneksi,$sql);
            $data=mysqli_fetch_assoc($query);                                   
        ?>
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-header with-border">Halaman edit user</h3>
          <div class="box-body">
             <form role="form" method="POST" action="prosesedit.php">
              <div class="box-body">
                <div class="form-group">
                  <input type="hidden" name="id" value="<?= $id ;?>">
                  <label for="exampleInputPassword1">Nama</label>
                  <input name="nama" type="text" class="form-control" id="exampleInputPassword1" value="<?= $data['name'] ;?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Alamat Email</label>
                  <input name="email" type="email" class="form-control" id="exampleInputEmail1" value="<?= $data['email'] ;?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input name="password" type="password" class="form-control" id="exampleInputPassword1" >
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
                <button type="submit" class="btn btn-sm btn-primary">ubah</button>
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
