<?php require_once("includes/config.php");?>
<?php include("includes/header.php");?>
<?php  error_reporting(E_ALL ^ E_NOTICE);?>

<div class="yonetim_menu">

<ul>
<li><a href="yeni_haber.php">Yeni Haber Oluştur</a></li>
<li><a href="msayfalar.php">Mevcut Haber Sayfaları</a></li>
<li><a href="haber_guncelle.php">Haber Güncelle</a></li>
<li><a href="haberler.php">Haber Silme</a></li>
<li><a href="logout.php">Çıkış</a></li>
</ul>

</div>
<br />

<center>
<h2>Mevcut Haberler</h2>
<?php 
$sorgu=mysql_query("select * from haberler order by id ASC");
while($bilgi=mysql_fetch_array($sorgu))
{
	echo"<li><a href=\"haber_guncelle.php?sayfa={$bilgi['id']}\">{$bilgi['isim']}</a></li>";
}

?>


</center>
<?php require_once("includes/footer.php");?>