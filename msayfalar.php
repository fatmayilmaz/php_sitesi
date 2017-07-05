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
<li><a href="yeni_sayfa.php">Yeni Genel Duyuru Oluştur</a></li>
<li><a href="msayfalar.php">Mevcut Genel Duyurular</a></li>
<li><a href="sayfa_guncelle.php">Genel Duyuru Güncelle</a></li>
<li><a href="sayfalar.php">Genel Duyuru Silme</a></li>
<li><a href="logout.php">Çıkış</a></li>
</ul>

</div>
<br />

<center>
<h2>Mevcut Genel Duyurular</h2>
<?php 
$sorgu=mysql_query("select * from sayfalar order by id ASC");
while($bilgi=mysql_fetch_array($sorgu))
{
	echo"<li><a href=\"sayfa_guncelle.php?sayfa={$bilgi['id']}\">{$bilgi['isim']}</a></li>";
}

?>


</center>
<?php require_once("includes/footer.php");?>