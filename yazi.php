<?php require_once("includes/config.php")?>
<?php include("includes/functions.php")?>
<?php include("includes/header.php")?>
<?php  error_reporting(E_ALL ^ E_NOTICE);?>

<div class="container">
<div class="row">

<div class="col-md-3 enson">

<h3><i class="fa fa-info-circle fa-lg" aria-hidden="true"><a href="#">Duyuru Bilgileri</a></i></h3>
<hr/>

<?php 
if($_GET[page])
echo"<div class=\"istatistik_alanı\">";
$sorgu=mysql_query("SELECT * FROM sayfalar WHERE id='$_GET[page]'");
$bilgi=mysql_fetch_array($sorgu);
{
	mysql_query("UPDATE sayfalar SET hit=hit+1 WHERE id='$_GET[page]'");
	echo"<ul>";
	
	echo"<i class=\"fa fa-user-circle fa-lg\"><a href=\"#\">{$bilgi[hoca_adi]}</a></i>";
	echo"<br/>";
	echo"<br/>";
	
	echo"<i class=\"fa fa-eye\"><a href=\"#\">{$bilgi[hit]} tık </a></i>";
	echo"<br/>";
	echo"<br/>";
	
	echo"<i class=\"fa fa-clock-o\"><a href=\"#\">{$bilgi[tarih]}</a></i>";
	echo"<br/>";
	echo"<br/>";
	echo"</ul>";
	echo"</div>";

}
?>

</div>





<div class="col-md-6 ">
<br />
<div id="disicerik">
<div id="icerik">
<?php 
$sorgu=mysql_query("SELECT * FROM sayfalar WHERE id='$_GET[page]'");
$bilgi=mysql_fetch_array($sorgu);

echo"<ul id=\"konu_adi\">";
echo"<li>{$bilgi[isim]}</li>";
echo"</ul>";
echo"<br/>";
echo"<ul id=\"konu_icerik\">";
echo"<li>{$bilgi[icerik]}</li>";
echo"</ul>";


?>

</div>
</div>
</div>

<div class="col-md-3 enson ">
<h3>
<i class="fa fa-bullhorn" aria-hidden="true"><a href="#">Son Duyurular</a></i>
</h3>
<hr/>
<?php
$sorgu=mysql_query("select * from sayfalar order by  id desc, isim LIMIT 0,4");
	while($bilgi=mysql_fetch_array($sorgu))
     {
		 echo"<i class=\"fa fa-tags\"title=\"konu adı\"><a href=\"yazi.php?page={$bilgi[id]}\">{$bilgi[isim]}</a></i>";
		 echo "<br>";
		 echo"<i class=\"fa fa-clock-o\"title=\"konu tarihi\"><a href=\"#\">{$bilgi[tarih]}</a></i>";
		 echo "<br>";
		 echo "<br>";
		 }	
?>


</div>









</div>
</div>
<?php require_once("includes/footer.php");?>