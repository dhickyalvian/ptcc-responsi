<?php
include_once("koneksi.php");

if(isset($_POST['update']))
{	
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$nama = mysqli_real_escape_string($mysqli, $_POST['nama']);
	$ukuran = mysqli_real_escape_string($mysqli, $_POST['ukuran']);
	$harga = mysqli_real_escape_string($mysqli, $_POST['harga']);
	$jumlah = mysqli_real_escape_string($mysqli, $_POST['jumlah']);	
	
	if(empty($id) || empty($nama) || empty($ukuran) || empty($harga) || empty($jumlah)) {	
			
		if(empty($id)) {
			echo "<font color='red'>Id Wajib diisi.</font><br/>";
		}
		if(empty($nama)) {
			echo "<font color='red'>Nama Wajib diisi.</font><br/>";
		}
		
		if(empty($ukuran)) {
			echo "<font color='red'>UKuran Wajib diisi.</font><br/>";
		}
		
		if(empty($harga)) {
			echo "<font color='red'>Harga Wajib diisi.</font><br/>";
		}	
		if(empty($jumlah)) {
			echo "<font color='red'>Jumlah Wajib diisi.</font><br/>";
		}	
	} else {	
		$result = mysqli_query($mysqli, "UPDATE barang SET id='$id',nama='$nama',ukuran='$ukuran',harga='$harga',jumlah='$jumlah' WHERE id=$id");
		
		header("Location: index.php");
	}
}
?>
<?php
$id = $_GET['id'];

$query = mysqli_query($mysqli, "SELECT * FROM barang WHERE id=$id");

while($barang = mysqli_fetch_array($query))
{
	$id = $barang['id'];
	$nama = $barang['nama'];
	$ukuran = $barang['ukuran'];
	$harga = $barang['harga'];
	$jumlah = $barang['jumlah'];
}
?>
<html>
<head>	
	<title>Edit Sepatu</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Nama</td>
				<td><input type="text" name="id" value="<?php echo $id;?>"></td>
			</tr>
			<tr> 
				<td>Sekolah</td>
				<td><input type="text" name="nama" value="<?php echo $nama;?>"></td>
			</tr>
			<tr> 
				<td>Umur</td>
				<td><input type="text" name="ukuran" value="<?php echo $ukuran;?>"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="harga" value="<?php echo $harga;?>"></td>
			</tr>
			<tr> 
				<td>Alamat</td>
				<td><input type="text" name="jumlah" value="<?php echo $jumlah;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>