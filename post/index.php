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
        Tambah Post
        <small>Manajemen Data Post</small>
      </h1>
      <ol class="breadcrumb">
        <li class="active"><a href="../index"><i class="fa fa-home"></i> Beranda</a></li>
        <li class="active"><a href="http://localhost/master/popo/post"><i class="fa fa-user"></i> User</a></li>
        <li class="active"><a href="http://localhost/master/popo/post/create.php"><i class="fa fa-plus"></i> Tambah user</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
           <a href="create.php" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i>Tambah</a>
          <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">No</th>
                  <th>Author</th>
                  <th>Title</th>
                  <th>content</th>
                  <th style="width: 70px">Status</th>
                  <th>Action</th>
                </tr>
                <?php 
                    include "../config/koneksi.php";

                    $sql  ="SELECT * FROM post";
                    $query=mysqli_query($koneksi,$sql);
                    $no=1;

                    function status($status){
                          if ($status==1) {
                            return "Aktif";
                          }else{
                            return "Nonaktif";
                          }
                    }

                    if (mysqli_num_rows($query)>0) {
                      while ($data=mysqli_fetch_assoc($query)) {
                        

                 ?>
                <tr>
                  <td style="width: 10px"><?= $no++;?></td>
                  <td><?= $data['author'] ;?></td>
                  <td><?= $data['title'] ;?></td>
                  <td><?= $data['content'] ;?></td>
                  <td style="width: 70px"><?= status($data['status']) ;?></td>
                  <td>
                     <a href="edit.php?id=<?= $data['id'];?>" class="btn btn-sm btn-info">Edit</a>
                     <a href="delete.php?id=<?= $data['id'];?>"  class="btn btn-sm btn-danger" onclick="javascript:return confirm('apakah yakin menghapus data ini?')" class="btn btn-danger" >Hapus</a>

                  </td>
                </tr>
                <?php 
                      }
                    }
                 ?>
              </table>
            </div>
            <!-- /.box-body -->
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
