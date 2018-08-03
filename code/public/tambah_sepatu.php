<html>
<head>
	<title>Tambah Sepatu</title>
</head>

<body>
<?php
include_once("koneksi.php");

if(isset($_POST['submit'])) {	
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$nama = mysqli_real_escape_string($mysqli, $_POST['nama']);
	$ukuran = mysqli_real_escape_string($mysqli, $_POST['ukuran']);
	$harga = mysqli_real_escape_string($mysqli, $_POST['harga']);
	$jumlah = mysqli_real_escape_string($mysqli, $_POST['jumlah']);
		
	if(empty($id) || empty($nama) || empty($ukuran) || empty($harga) || empty($jumlah)) {
				
		if(empty($id)) {
			echo "<font color='red'>Id tidak boleh kosong.</font><br/>";
		}
		
		if(empty($nama)) {
			echo "<font color='red'>Nama tidak boleh kosong.</font><br/>";
		}
		if(empty($ukuran)) {
			echo "<font color='red'>Ukuran tidak boleh kosong.</font><br/>";
		}
		
		if(empty($harga)) {
			echo "<font color='red'>Harga tidak boleh kosong.</font><br/>";
		}
		if(empty($jumlah)) {
			echo "<font color='red'>Jumlah tidak boleh kosong.</font><br/>";
		}
		
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 	
		$result = mysqli_query($mysqli, "INSERT INTO barang(id,nama,ukuran,harga,jumlah) VALUES('$id','$nama','$ukuran','$harga','$jumlah')");
		
		echo "<font color='red'>Tambah Sepatu Telah Berhasil";
		echo "<br/><a href='index.php'>Lihat Data</a>";
	}
}
?>
</body>
</html>