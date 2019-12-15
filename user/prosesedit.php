<?php 
 include '../config/koneksi.php';

 $id       =$_POST['id'];
 $name     =$_POST['nama'];
 $email    =$_POST['email'];
 $password =$_POST['password'];


 $sql="UPDATE users SET name='$name',email='$email',password='$password' WHERE id='$id'";
 $query=mysqli_query($koneksi,$sql);

 header("location:index.php");

?>