<?php 
$host="localhost";
$user='root';
$pass='';
$database='db_kuesioner';

$konek = mysqli_connect($host, $user, $pass);

mysqli_select_db($konek, $database);

?>