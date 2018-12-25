<?php
include "../koneksi.php";
	$kdpendaftar=addslashes($_GET['kdpendaftar']);
	$query="delete from pendaftar where kdpendaftar='".$kdpendaftar."'";
	$exec=mysqli_query($konek,$query);
	if(mysqli_query($konek,$query))
		header("location:./?p=pendaftar&code=3");
	else
		header("location:./?p=pendaftar&code=2");

?>