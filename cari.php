<html>
<body>
<?php
$h='localhost';
$u='root';
$p=''; // Password , jika tidak ada , maka kosongi saja
$db='pegawai';
$k=mysql_connect($h,$u,$p) or die("tidak terkoneksi");
$dB_sel=mysql_select_db($db) or die("db tidak dipilih");
?>
<br /><br /><br /><br /><br />
	<form method="post" action="cari_proses.php">
		<table width="500" border="1" align="center" cellpadding="0">
			<tr bgcolor="orange">
				<td height="50" colspan="3">
					<h1>Pencarian Data Pegawai</h1>
				</td>
			</tr>
			<tr>
				<td>
					<br /><br />Pencarian berdasarkan :<br><br />
				</td>
			</tr>
			<tr>
				
				<td><br />
					Nama : <input type="text" name="nama" />
				</td>
				<td>
					<br /><input type="submit" name="SUBMIT" value="search" /><br />
				</td>
			</tr>
				
	</form>
</body>
	</html>
