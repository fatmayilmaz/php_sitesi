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
		$ekle=mysql_query("insert into sayfalar (isim,atilan_yer,icerik)
		values('$_POST[isim]',
		       '$_POST[atilan_yer]',
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
<li><a href="yeni_haber.php">Yeni Haber Oluştur</a></li>
<li><a href="mhaberler.php">Mevcut Haberler</a></li>
<li><a href="haber_guncelle.php">Haber Güncelle</a></li>
<li><a href="haberler.php">Haber Silme</a></li>
<li><a href="logout.php">Çıkış</a></li>
</ul>

</div>
<br />

<center>
<h2>Yeni Haber</h2>

<?php 
if($hata)
{echo "<p>{$hata}</p>";}
if($mesaj)
{echo "<p>{$mesaj}</p>";}
?>


<form name="yeni_haber" action="yeni_haber.php?kayit=1" method="post">

<p class="isimclasi">Haber Adı:</br> <input id="submit" type="text" name="isim" value="<?php echo $bilgi[isim]?>" /> </p>

<p class="isimclasi">Haberi Oluşturan Kişi:</br> <input id="submit" type="text" name="atilan_yer" value="<?php echo $bilgi[atilan_yer]?>" /> </p>


<br />

<br />
Haberin İçeriği
<br />

<div class="ck">
<textarea class="ckeditor" name="icerik" cols="70" rows="10"><?php echo $bilgi[icerik] ?></textarea>
</div>

<br />

<p><input type="submit" class="giris" id="submit" value="Oluştur" /></p>
</form>

</center>


<?php include("includes/footer.php");?>




