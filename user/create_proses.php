<?php 
	
	include '../config/koneksi.php';

	$nama=$_POST['nama'];
	$email=$_POST['email'];
	$password=md5($_POST['password']);

	$sql=" INSERT INTO users (name , email , password) VALUES ('$nama','$email','$password')";
	$query=mysqli_query($koneksi,$sql);
	$row=mysqli_fetch_assoc($query);

	if ($row['email']===$email) {
		echo "email anda sudah terdaftar";
	}else{
		header("location:index.php");
	}


 ?>