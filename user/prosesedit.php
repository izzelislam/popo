<?php 
 include '../config/koneksi.php';

 $id       =$_POST['id'];
 $name     =$_POST['nama'];
 $email    =$_POST['email'];
 $password =$_POST['password'];


 $data="SELECT * FROM users WHERE id='$id'";
 $result=mysqli_query($koneksi,$data);
 $row=mysqli_fetch_row($result);
 $pass=$row[3];

 if (empty($password)) {
 	$password =$pass ;
 }
 else{
 	$password=md5($password);
 }

 $sql="UPDATE users SET name='$name',email='$email',password='$password' WHERE id='$id'";
 $query=mysqli_query($koneksi,$sql);

 header("location:index.php");

?>