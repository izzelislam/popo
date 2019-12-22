<?php
	session_start();

	include "koneksi.php";

	$email   =$_POST['email'];
	$password=md5($_POST['password']);

	$sql  ="SELECT * FROM users WHERE email='$email' AND password='$password'";
	$query=mysqli_query($koneksi,$sql);
	$row  =mysqli_fetch_assoc($query);

	if (!empty($email) && !empty($pass)) {
		if ($row) {
			$_SESSION['email']    =$row['email'];
			$_SESSION['password'] =$row['password'];
			$_SESSION['id']		  =$row['id'];

			header('location:../index/index.php');
		}else{
			echo "Email atau password anda salah";
		}
	}

 ?>