<?php
include_once('view_mhs_header.php');

//print_r($data);

echo "<h1>TABLE</h1>";
echo "<table border='0' width='50%'>";

$nomor=1;
foreach ($data as $key ) {
	echo "<tr>";
	echo "<td width='15%'>Nomor</td><td>$nomor </td>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>NIM</td> <td>$key[nim] </td>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>Nama</td> <td>$key[nama] </td>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>Kelas</td> <td>$key[kelas] </td>";
	echo "</tr>";

	echo "<tr>";
	echo "<td colspan='2'>&nbsp;</td>";
	echo "</tr>";
	$nomor++;
}
echo "</table>";


?>