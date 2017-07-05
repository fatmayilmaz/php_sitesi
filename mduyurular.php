<?php require_once("includes/config.php");
if(!isset($_SESSION['uname']))
{
	header("location:login.php");
}
?>
<?php include("includes/header.php");?>
<?php  error_reporting(E_ALL ^ E_NOTICE);?>

<div class="yonetim_menu">

<ul>
<li><a href="yeni_sayfa.php">Yeni Bölüm Duyurusu Oluştur</a></li>
<li><a href="mduyurular.php">Mevcut Bölüm Duyuruları</a></li>
<li><a href="duyuru_guncelle.php">Bölüm Duyurusu Güncelle</a></li>
<li><a href="duyurular.php">Bölüm Duyurusu Silme</a></li>
<li><a href="logout.php">Çıkış</a></li>
</ul>

</div>
<br />

<center>
<h2>Mevcut Bölüm Duyuruları</h2>
<?php 
$sorgu=mysql_query("select * from duyurular order by id ASC");
while($bilgi=mysql_fetch_array($sorgu))
{
	echo"<li><a href=\"duyuru_guncelle.php?sayfa={$bilgi['id']}\">{$bilgi['isim']}</a></li>";
}

?>


</center>
<?php require_once("includes/footer.php");?>