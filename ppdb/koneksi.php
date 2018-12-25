
<?php
$host='localhost';
$user='root';
$pass='';
$database='ppdb';

$konek=mysqli_connect($host, $user, $pass);

mysqli_select_db($konek,$database);
if ($konek){

} else {
echo "failure";
}

?>