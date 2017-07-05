<?php require_once("includes/config.php");
if(!isset($_SESSION['uname']))
{
	header("location:login.php");
}
?>
<?php include("includes/header.php");?>

<div class="sec">
<center>
<?php 
echo "<kbd>Güncellemek İstediğiniz Haberi Seçin</kbd>";
echo "<br />";
echo "<br />";
echo "<form name=\"forumadi\">";
echo "<p>";
echo"<select onchange=\"javascript:document.location=document.forumadi.kategori.options[document.forumadi.kategori.selectedIndex].value\" name=\"kategori\">";
echo"<option value selected>Haber Seçin</option>";
$sorgu=mysql_query("select * from haberler order by id desc");

while($bilgi=mysql_fetch_array($sorgu))

{ echo"<option class=\"main1\" value=\"haber_guncelle.php?sayfa={$bilgi['id']}\">{$bilgi['isim']}</option>";
		
	}

echo"</select></p>";


echo "</form>";
?>

</center>
</div>


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
		mysql_query("update haberler set 
		isim='$_POST[isim]',
		atilan_yer='$_POST[atilan_yer]',
		icerik='$_POST[icerik]'
		where id='$_POST[sayfa]'
		 ");	
		$mesaj="Kayıt Başarıyla Güncellenmiştir.";
	}
	
}

if($sayfa=$_POST[sayfa])
{
	$sayfa=$_POST[sayfa];
	
	}
else {
	$sayfa=$_GET[sayfa];
	}

$sorgu=mysql_query("select * from haberler where id='$sayfa'");
$bilgi=mysql_fetch_array($sorgu);

?>

<div class="yonetim_menu">

<ul>
<li><a href="yeni_haber.php">Yeni Haber Oluştur</a></li>
<li><a href="mhaberler.php">Mevcut Haber Sayfaları</a></li>
<li><a href="haber_guncelle.php">Haber Güncelle</a></li>
<li><a href="haberler.php">Haber Silme</a></li>
<li><a href="logout.php">Çıkış</a></li>
</ul>

</div>
<br />

<center>
<h2>Güncelleme Sayfası</h2>
<form name="yeni_sayfa" action="haber_guncelle.php?kayit=1" method="post">
<input  type="hidden" name="sayfa" value="<?php echo $bilgi[id]?>" />
<?php 
if($hata)
{echo "<p>{$hata}</p>";}
if($mesaj)
{echo "<p>{$mesaj}</p>";}
?>



<p class="isimclasi">Haberin Adı:</br> <input id="submit" type="text" name="isim" value="<?php echo $bilgi[isim]?>" /> </p>

<p class="isimclasi">Haberi Oluşturan Kişi:</br> <input id="submit" type="text" name="atilan_yer" value="<?php echo $bilgi[atilan_yer]?>" /> </p>

<br />


<br />
Haber İçeriği
<br />

<div class="ck">
<textarea class="ckeditor" name="icerik" cols="70" rows="10"><?php echo $bilgi[icerik]?></textarea>
</div>

<br />

<p><input type="submit" class="giris" id="submit" value="Güncelle" /></p>
</form>

</center>





<?php require_once("includes/footer.php");?>










