<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$kode_buku = ['kode_buku'];
		$judul_buku =['judul_buku'];
		$nama_pengarang = ['nama_pengarang'];
		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE users SET name='$kode_buku',email='$judul_buku',mobile='$nama_pengarang' WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$name = $_POST['kode_buku'];
		$email = $_POST['judul_buku'];
		$mobile = $_POST['nama_pengarang'];
}
?>
<html>
<head>	
	<title>Edit User Data</title>
</head>
 
<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Kode Buku</td>
				<td><input type="text" name="name" value=<?php echo $kode_buku;?>></td>
			</tr>
			<tr> 
				<td>Judul Buku</td>
				<td><input type="text" name="email" value=<?php echo $judul_buku;?>></td>
			</tr>
			<tr> 
				<td>Nama Pengarang</td>
				<td><input type="text" name="mobile" value=<?php echo $nama_pengarang;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>