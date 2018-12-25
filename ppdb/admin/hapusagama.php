<?php
include "../koneksi.php";
	$kdagama=addslashes($_GET['kdagama']);
	$query="delete from agama where kdagama='".$kdagama."'";
	$exec=mysqli_query($konek,$query);
	if(mysqli_query($konek,$query))
		header("location:./?p=agama&code=3");
	else
		header("location:./?p=agama&code=2");

?>