<?php
include "../koneksi.php";
	$kdpekerjaan=addslashes($_GET['kdpekerjaan']);
	$query="delete from pekerjaan where kdpekerjaan='".$kdpekerjaan."'";
	$exec=mysqli_query($konek,$query);
	if(mysqli_query($konek,$query))
		header("location:./?p=pekerjaan&code=3");
	else
		header("location:./?p=pekerjaan&code=2");

?>