<?php
include('koneksi.php'); 
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body bgcolor="#CCCCCC">
<?php
$sql	= 'select * from tbl_buku where kategori ="Filosofi"';
$query	= mysqli_query($db_link,$sql);
?>
<h2><strong><p align="center">Data Siswa SMK Media Kreatif</p></strong></h2>
<table width="807" border="1" cellpadding="0" cellspacing="0" align="center">
  <!--DWLayoutTable-->
  <tr>
    <td width="112" height="29" align="center" valign="middle" bgcolor="#00FFFF">Kode Buku</td>
    <td width="176" align="center" valign="middle" bgcolor="#00FFFF">Judul Buku</td>
    <td width="252" align="center" valign="middle" bgcolor="#00FFFF">Nama Pengarang</td>
    <td width="252" align="center" valign="middle" bgcolor="#00FFFF">Kategori</td>
    <td width="133" align="center" valign="middle" bgcolor="#00FFFF"><a href="tambah_buku.php">TAMBAH</a></td></tr>
<?php
	while($data	= mysqli_fetch_array($query)){ 
?>
  <tr>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['kode_buku']; ?></td>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['judul_buku']; ?></td>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['nama_pengarang']; ?></td>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['kategori']; ?></td>
    <td p align="center" bgcolor="#FFFFFF">
	 || edit || || hapus ||
	</td>
  </tr>
<?php
}
?>
</table>
</body>
</html>