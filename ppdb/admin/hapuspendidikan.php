<?php
include "../koneksi.php";
	$kdpendidikan=addslashes($_GET['kdpendidikan']);
	$query="delete from pendidikan where kdpendidikan='".$kdpendidikan."'";
	$exec=mysqli_query($konek,$query);
	if(mysqli_query($konek,$query))
		header("location:./?p=pendidikan&code=3");
	else
		header("location:./?p=pendidikan&code=2");

?>