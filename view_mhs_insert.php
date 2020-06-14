<?php
include_once('view_mhs_header.php');
?>
<form method="post" action="index_mhs.php?arg_menu=insert_respon">
   <p><input type="text" name="nim" placeholder="Nim"></p>
   <p><input type="text" name="nama" placeholder="Nama"></p>
   <p><input type="text" name="kelas" placeholder="Kelas"></p>
   <p><input type="submit" name="submit" value="Submit">
   	<input type="submit" name="cancel" value="Cancel"> 
 </p>

</form>
