<?php require_once("includes/config.php");
if(!isset($_SESSION['uname']))
{
	header("location:login.php");
}?>
<?php include("includes/header.php");?>
<?php  error_reporting(E_ALL ^ E_NOTICE);?>

<div class="yonetim_menu">

<ul>
<li><a href="yeni_haber.php">Yeni Haber veya Etkinlik</a></li>
<li><a href="mhaberler.php">Mevcut Haber ve Etkinlik Sayfaları</a></li>
<li><a href="haber_guncelle.php">Haber veya Etkinlik Güncelle</a></li>
<li><a href="haberler.php">Haber veya Etkinlik Silme</a></li>
<li><a href="logout.php">Çıkış</a></li>
</ul>

</div>
<br />

<center>
<h2>Haber Silme</h2>
<?php 
$sorgu=mysql_query("select * from haberler order by id ASC");
while($bilgi=mysql_fetch_array($sorgu))
{
	echo"<li><a href=\"haber_guncelle.php?sayfa={$bilgi['id']}\">{$bilgi['isim']}</a><a href=\"haber_sil.php?sayfa={$bilgi['id']}\" > -[Sil]</a></li>";
}

?>


</center>
<?php require_once("includes/footer.php");?>