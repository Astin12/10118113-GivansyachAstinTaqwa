<?php
$db_host	= 'localhost'; 
$db_usn		= 'root';
$db_pwd		= '';
$db_name	= 'sekolah';

$link	= mysqli_connect("$db_host","$db_usn","$db_pwd","$db_name");
if (!$link)
{
	echo 'Tidak dapat terhubung ke database';
}
?>