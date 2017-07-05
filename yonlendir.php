<?php require_once("includes/config.php");
if(!isset($_SESSION['uname']))
{
	header("location:login.php");
}
?>
<?php include("includes/header.php");?>
<?php  error_reporting(E_ALL ^ E_NOTICE);?>
<center>
<h2>Düzenlemek İçin Seçim Yapınız..</h2>
<br />

<div class="row">
<a href="sayfalar.php" button type="button" class="btn btn-primary btn-lg btn-block">Genel Duyuru İşlemleri</a>
</div>
<br />


<div class="row">
<a href="duyurular.php" button type="button" class="btn btn-primary btn-lg btn-block">Bölüm Duyurusu İşlemleri</a>
</div>
<br />


<div class="row">
<a href="haberler.php" button type="button" class="btn btn-primary btn-lg btn-block">Haber ve Etkinlik İşlemleri</a>
</div>

<br />
<br />
<br />
<br />




<?php include("includes/footer.php");?>
</center>