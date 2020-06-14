<?php
include_once('view_mhs_header.php');

//print_r($data);

echo "<h1>LIST</h1>";
echo "<table border='1' width='100%' cellpadding='0' cellspacing='0'>";
echo "<tr>";
echo "<td> No. </td>";
echo "<td> NIM </td>";
echo "<td> Nama </td>";
echo "<td> Kelas </td>";
echo "</tr>";
$nomor=1;
foreach ($data as $key ) {
	echo "<tr>";
	echo "<td> $nomor </td>";
	echo "<td> $key[nim] </td>";
	echo "<td> $key[nama] </td>";
	echo "<td> $key[kelas] </td>";
	echo "</tr>";
	$nomor++;
}
echo "</table>";
?>