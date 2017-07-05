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
		$ekle=mysql_query("insert into sayfalar (isim,hoca_adi,icerik)
		values('$_POST[isim]',
		       '$_POST[hoca_adi]',
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
<li><a href="yeni_sayfa.php">Yeni Sayfa Oluştur</a></li>
<li><a href="#">Mevcut Konu Sayfaları</a></li>
<li><a href="sayfa_guncelle.php">Sayfa Güncelle</a></li>
<li><a href="#">Sayfa Silme</a></li>
<li><a href="#">Çıkış</a></li>
</ul>

</div>
<br />

<center>
<h2>Yeni Sayfa</h2>

<?php 
if($hata)
{echo "<p>{$hata}</p>";}
if($mesaj)
{echo "<p>{$mesaj}</p>";}
?>

<form name="yeni_sayfa" action="yeni_sayfa.php?kayit=1" method="post">

<p class="isimclasi">Duyuru Adı:</br> <input id="submit" type="text" name="isim" /> </p>

<p class="isimclasi">Duyuruyu Atan Kişi:</br> <input id="submit" type="text" name="hoca_adi" /> </p>


<br />

<br />
Duyuru İçeriği
<br />

<div class="ck">
<textarea class="ckeditor" name="icerik" cols="70" rows="10"><?php echo $bilgi[icerik] ?></textarea>
</div>

<br />

<p><input type="submit" class="giris" id="submit" value="Oluştur" /></p>
</form>

</center>


<?php include("includes/footer.php");?>


