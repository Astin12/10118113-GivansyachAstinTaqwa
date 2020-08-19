<?php
include('config/konek.php');
if(isset($_POST['ttambah'])){
	$nis	= $_POST['nis'];
	$nama	= $_POST['nama'];
	$alamat	= $_POST['alamat'];
	$kelas	= $_POST['kelas'];
	
	$sql	= 'insert into siswa (nis,nama,alamat,kelas) values ("'.$nis.'","'.$nama.'","'.$alamat.'","'.$kelas.'")';
	$query	= mysqli_query($link,$sql);
	
	if($query){
		header('location: siswa.php');
	}
	else{
		echo 'Gagal';
	}
}
if(isset($_POST['tedit']))
{
	$nama	= $_POST['nama'];
	$alamat	= $_POST['alamat'];
	$kelas	= $_POST['kelas'];
	$nis	= $_POST['nis'];
	
	$sql	= 'update siswa set nama="'.$nama.'", alamat="'.$alamat.'", kelas="'.$kelas.'" where nis="'.$nis.'"';
	$query	= mysqli_query($link,$sql);
	
	if($query){
		header('location: siswa.php');
	}
	else{
		echo 'Gagal';
	}
}
?>