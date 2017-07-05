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
echo "<kbd>Güncellemek İstediğiniz Duyuruyu Seçin</kbd>";
echo "<br />";
echo "<br />";
echo "<form name=\"forumadi\">";
echo "<p>";
echo"<select onchange=\"javascript:document.location=document.forumadi.kategori.options[document.forumadi.kategori.selectedIndex].value\" name=\"kategori\">";
echo"<option value selected>Seçin</option>";
$sorgu=mysql_query("select * from sayfalar order by id desc");

while($bilgi=mysql_fetch_array($sorgu))

{ echo"<option class=\"main1\" value=\"sayfa_guncelle.php?sayfa={$bilgi['id']}\">{$bilgi['isim']}</option>";
		
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
		mysql_query("update sayfalar set 
		isim='$_POST[isim]',
		hoca_adi='$_POST[hoca_adi]',
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

$sorgu=mysql_query("select * from sayfalar where id='$sayfa'");
$bilgi=mysql_fetch_array($sorgu);

?>

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
<h2>Güncelleme Sayfası</h2>
<form name="yeni_sayfa" action="sayfa_guncelle.php?kayit=1" method="post">
<input  type="hidden" name="sayfa" value="<?php echo $bilgi[id]?>" />
<?php 
if($hata)
{echo "<p>{$hata}</p>";}
if($mesaj)
{echo "<p>{$mesaj}</p>";}
?>



<p class="isimclasi">Duyuru Adı:</br> <input id="submit" type="text" name="isim" value="<?php echo $bilgi[isim]?>" /> </p>

<p class="isimclasi">Duyuruyu Atan Kişi:</br> <input id="submit" type="text" name="hoca_adi" value="<?php echo $bilgi[hoca_adi]?>" /> </p>

<br />


<br />
Duyuru İçeriği
<br />

<div class="ck">
<textarea class="ckeditor" name="icerik" cols="70" rows="10"><?php echo $bilgi[icerik]?></textarea>
</div>

<br />

<p><input type="submit" class="giris" id="submit" value="Güncelle" /></p>
</form>

</center>




<?php require_once("includes/footer.php");?>











