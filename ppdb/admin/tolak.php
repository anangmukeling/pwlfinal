<?php
include "../koneksi.php";
$kdpendaftar= $_GET ['kdpendaftar'];

	mysqlI_query($konek,"update pendaftar set statusdaftar='Ditolak' where kdpendaftar='$kdpendaftar'");
		
if(mysqlI_query)
		header("location:./?p=seleksi&code=1");
else
	header("location:./?p=seleksi&code=2");

?>