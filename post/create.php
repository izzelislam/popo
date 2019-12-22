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
        <li class="active"><a href="#"><i class="fa fa-plus"></i> Beranda</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
          <div class="box">
        <div class="box-header with-border">
          <h3 class="box-header with-border">Halaman Tambah Post</h3>
          <div class="box-body">
             <form role="form" method="POST" action="proses_create.php">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputPassword1">Author</label>
                  <input name="author" type="text" class="form-control" id="exampleInputPassword1" placeholder="Author">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input name="title" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Title">
                </div>
                <div class="form-group">
                  <label>Content</label>
                   <textarea id="editor1" name="editor1" rows="10" cols="80">
                    </textarea>
                </div>
                 <div class="form-group">
                  <label>Select</label>
                  <select name="status" class="form-control">
                    <option value="1">Activ</option>
                    <option value="0">Nonactiv</option>
                  </select>
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

      <script src="http://localhost/master/popo/AdminLTE-2.4.18/bower_components/jquery/dist/jquery.min.js"></script>
      <!-- Bootstrap 3.3.7 -->
      <script src="http://localhost/master/popo/AdminLTE-2.4.18/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
      <!-- FastClick -->
      <script src="http://localhost/master/popo/AdminLTE-2.4.18/bower_components/fastclick/lib/fastclick.js"></script>
      <!-- AdminLTE App -->
      <script src="http://localhost/master/popo/AdminLTE-2.4.18/dist/js/adminlte.min.js"></script>
      <!-- AdminLTE for demo purposes -->
      <script src="http://localhost/master/popo/AdminLTE-2.4.18/dist/js/demo.js"></script>
      <!-- CK Editor -->
      <script src="http://localhost/master/popo/AdminLTE-2.4.18/bower_components/ckeditor/ckeditor.js"></script>
      <!-- Bootstrap WYSIHTML5 -->
      <script src="http://localhost/master/popo/AdminLTE-2.4.18/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
      <script>
        $(function () {
          // Replace the <textarea id="editor1"> with a CKEditor
          // instance, using default configuration.
          CKEDITOR.replace('editor1')
          //bootstrap WYSIHTML5 - text editor
          $('.textarea').wysihtml5()
        })
      </script>

</body>
</html>
