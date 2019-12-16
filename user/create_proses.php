<?php 
	
	include '../config/koneksi.php';

	$nama=$_POST['nama'];
	$email=$_POST['email'];
	$password=md5($_POST['password']);

	$sql=" INSERT INTO users (name , email , password) VALUES ('$nama','$email','$password')";
	$query=mysqli_query($koneksi,$sql);

	if ($query) {
		header('location:index.php');
	}


 ?>