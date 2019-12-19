<?php 
	include '../config/koneksi.php';

	$id=$_GET['id'];

	$sql="DELETE FROM users WHERE id='$id'";
	$query=mysqli_query($koneksi,$sql);

	header("location:index.php");
?>