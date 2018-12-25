<?php
include "../koneksi.php";
	$kdtk=addslashes($_GET['kdtk']);
	$query="delete from tk where kdtk='".$kdtk."'";
	$exec=mysqli_query($konek,$query);
	if(mysqli_query($konek,$query))
		header("location:./?p=tk&code=3");
	else
		header("location:./?p=tk&code=2");

?>