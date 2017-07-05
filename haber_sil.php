<?php require_once("includes/config.php");?>

<?php 
if($_GET[sayfa])
{
	mysql_query("delete from haberler where id='$_GET[sayfa]'");
	header("location:haberler.php");

	}

?>