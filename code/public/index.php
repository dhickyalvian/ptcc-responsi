<?php
	include_once("koneksi.php");

	$barang = mysqli_query($mysqli, "SELECT * FROM barang ORDER BY id DESC");
?>
<body>
        <h2>DATA SEPATU</h2>
	</br>
	<table border="0">
    <thead>
        <tr>
            <th>Id</th>
			<th>Nama/th>
            <th>Ukuran</th>
            <th>Harga</th>
            <th>Jumlah</th>
        </tr>
    </thead>
    <body>
	<a href="add.html">Tambah Sepatu</a><br/><br/>
		<?php
        while($barang = mysqli_fetch_array($query)){
            echo "<tr>";
            echo "<td>".$barang['id']."</td>";
			echo "<td>".$barang['nama']."</td>";
            echo "<td>".$barang['ukuran']."</td>";
            echo "<td>".$barang['harga']."</td>";
            echo "<td>".$barang['jumlah']."</td>";
            echo "</tr>";
        }
        ?>
	</table>
</body>
</html>