<!DOCTYPE html>
<html>
<head>
  <?php 
      include "../template/link.php";
   ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php 
    include "../template/header.php";
   ?>

  <?php 
    include "../template/sidebar.php";
   ?>

  <div class="content-wrapper">
      <section class="content-header">
      <h1>
        Beranda User
        <small>Manajemen Data User</small>
      </h1>
      <ol class="breadcrumb">
        <li class="active"><a href="../index"><i class="fa fa-home"></i> Beranda</a></li>
        <li class="active"><a href="http://localhost/master/popo/user"><i class="fa fa-user"></i> User</a></li>
        <li class="active"><a href="http://localhost/master/popo/user/create.php"><i class="fa fa-plus"></i> Tambah user</a></li>
      </ol>
    </section>
    <section class="content">
      <div class="box">
        <div class="box-header with-border">
          <a href="create.php" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i>Tambah</a>
          <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">No</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th style="width: 200px">Action</th>
                </tr>
                <?php 
                  include '../config/koneksi.php';

                  $sql="SELECT * FROM users";
                  $query=mysqli_query($koneksi,$sql);
                  $no=1;

                  if (mysqli_num_rows($query)>0) { 
                    while ($data=mysqli_fetch_assoc($query)) {                   
                 ?>
                <tr>
                  <td><?= $no++; ?></td>
                  <td><?= $data['name']; ?></td>
                  <td><?= $data['email']; ?></td>
                  <td>
                      <a href="edit.php?id=<?= $data['id'];?>" class="btn btn-sm btn-info">Edit</a>
                      <a href="delete.php?id=<?= $data['id'];?>" class="btn btn-sm btn-danger">Hapus</a>
                  </td>
               </tr>
                <?php 
                    }
                  }
                 ?>
              </table>
            </div>
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div>
        </div>
      </div>
    </section>
  </div>
  <?php 
    include "../template/footer.php";
   ?>
</div>
<?php 
    include "../template/scriipt.php";
 ?>
</body>
</html>
