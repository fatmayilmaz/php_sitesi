<?php require_once("includes/config.php");
if(!isset($_SESSION['uname']))
{
	header("location:login.php");
}
?>
<?php include("includes/header.php");?>

<?php  error_reporting(E_ALL ^ E_NOTICE);?>
<?php
if($_GET[kayit]==1)
{
	if(!isset($_POST[isim]) || empty($_POST[isim]))
	{
		$hata="Tüm alanların doldurulması gerekiyor.";
	}
	if(!isset($_POST[icerik]) || empty($_POST[icerik]))
	{
		$hata="Tüm alanların doldurulması gerekiyor.";
	}
	if(!$hata)
	{ 
		$ekle=mysql_query("insert into sayfalar (isim,bolum_bask,icerik)
		values('$_POST[isim]',
		       '$_POST[bolum_bask]',
		       '$_POST[icerik]')
		");
		$mesaj="Kayıt Başarıyla Oluşturuldu.";
	}

	if($ekle){
		echo"başarılı";}
		else {
			echo "başarısız";
		}
}

?>

<div class="yonetim_menu">

<ul>
<li><a href="yeni_duyuru.php">Yeni Bölüm Duyurusu Oluştur</a></li>
<li><a href="mduyurular.php">Mevcut Bölüm Duyuruları</a></li>
<li><a href="duyuru_guncelle.php">Bölüm Duyurusu Güncelle</a></li>
<li><a href="duyurular.php">Bölüm Duyurusu Silme</a></li>
<li><a href="logout.php">Çıkış</a></li>
</ul>

</div>
<br />

<center>
<h2>Yeni Bölüm Duyurusu</h2>

<?php 
if($hata)
{echo "<p>{$hata}</p>";}
if($mesaj)
{echo "<p>{$mesaj}</p>";}
?>


<form name="yeni_duyuru" action="yeni_duyuru.php?kayit=1" method="post">

<p class="isimclasi">Duyuru Adı:</br> <input id="submit" type="text" name="isim" value="<?php echo $bilgi[isim]?>" /> </p>

<p class="isimclasi">Duyuruyu Oluşturan Kişi:</br> <input id="submit" type="text" name="bolum_bask" value="<?php echo $bilgi[bolum_bask]?>" /> </p>


<br />

<br />
Duyurunun İçeriği
<br />

<div class="ck">
<textarea class="ckeditor" name="icerik" cols="70" rows="10"><?php echo $bilgi[icerik] ?></textarea>
</div>

<br />

<p><input type="submit" class="giris" id="submit" value="Oluştur" /></p>
</form>

</center>


<?php include("includes/footer.php");?>




