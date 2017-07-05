<?php require_once("includes/config.php");?>

<?php 
if($_GET[sayfa])
{
	mysql_query("delete from duyurular where id='$_GET[sayfa]'");
	header("location:duyurular.php");

	}

?>