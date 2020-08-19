<?php
include('./config/konek.php'); 
?>
<html>
<style>
    body {
	   background:-webkit-linear-gradient(top, blue, grey ) ;
	   background-repeat:no-repeat ;
	   }
 #card{
        background: #fbfbfb;
        border-radius: 8px;
        box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
        height: 410px;
        margin: 6rem auto 8.1rem auto;
        width: 329px;
		
}
    </style>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body bgcolor="black">
<?php
$sql	= 'select * from siswa';
$query	= mysqli_query($link,$sql);
?>

<h2><strong><p align="center">Data Siswa SDN 013 Tanjungpinang Timur</p></strong></h2>
<table width="807" border="1" cellpadding="0" cellspacing="0" align="center">
  <!--DWLayoutTable-->
  <tr>
    <td width="112" height="29" align="center" valign="middle" bgcolor="clay">NIS</td>
    <td width="176" align="center" valign="middle" bgcolor="clay">Nama</td>
    <td width="252" align="center" valign="middle" bgcolor="clay">Alamat</td>
    <td width="134" align="center" valign="middle" bgcolor="clay">Kelas</td>
    <td width="133" align="center" valign="middle" bgcolor="clay"><a href="tambah.php">TAMBAH</a></td></tr>
<?php
	while($data	= mysqli_fetch_array($query)){ 
?>
  <tr>
    <td p align="center" bgcolor="white"><?php echo $data['nis']; ?></td>
    <td p align="center" bgcolor="white"><?php echo $data['nama']; ?></td>
    <td p align="center" bgcolor="white"><?php echo $data['alamat']; ?></td>
    <td p align="center" bgcolor="white"><?php echo $data['kelas']; ?></td>
    <td p align="center" bgcolor="white">
	<a href="edit.php?ni=<?php echo $data['nis'];?>" title="Edit siswa ini"> || edit || </a>
	<a href="delete.php?ni=<?php echo $data['nis'];?>" onclick="return confirm('Yakin mau di hapus?');">|| hapus ||</a>
	</td>
  </tr>
  
  
<?php
}
?>
</table>
</body>
</html>