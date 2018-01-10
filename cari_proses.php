<?php
	include "cari.php";
	$nama= $_POST['nama']; //get the nama value from form
	$q = "SELECT * from pekerja where Nama_pegawai like '%$nama%'"; //query to get the search result
	$result = mysql_query($q); //execute the query $q
	echo "<center>";
	echo "<h2 bgcolor='blue'> Hasil Pencarian</h2>";
	echo "<table border='1' cellpadding='10' cellspacing='10'>";
	echo "
		<tr bgcolor='orange'>
			<td>NIM</td>
			<td>Nama Pegawai</td>
		</tr>";
	while ($data = mysql_fetch_array($result)) {  //fetch the result from query into an array
	echo "
		<tr>
			<td>".$data['NIP']."</td>
			<td>".$data['Nama_pegawai']."</td>
		</tr>";
	}
	echo "</table>";
?>
