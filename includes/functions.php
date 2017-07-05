<?php
function menu_olustur($page)
{
	$page=@$_GET["s"];
	if(empty($page) || !is_numeric($page))
	{$page=1; }
		$kacar=3;
		$ksayisi=mysql_num_rows(mysql_query("select * from sayfalar"));
		$ssayisi=ceil($ksayisi/$kacar);
		$nereden=($page*$kacar)-$kacar;
		$bul=mysql_query("select * from sayfalar order by id desc limit $nereden,$kacar");
		while($goster=mysql_fetch_array($bul))
		{
			extract($goster);
			
			echo "<div class=\"konu_alani\">";
			echo "<ul>";
			echo"<i class=\"fa fa-folder-open\" title=\"konu adı\"><a href=\"yazi.php?page={$goster['id']}\">{$goster[isim]}</a></i>";
			
			
			echo "<br>";
			echo "<br>";
					//echo"<i class=\"fa fa-line-chart\" title=\"hit sayısı\"><a href=\"#\">{$goster[hit]}</a></i>";
					
		   echo"<i class=\"fa fa-calendar\" title=\"tarih\"><a href=\"#\">{$goster[tarih]}</a></i>";
		
		   echo "<br>";
		   echo "<div class=\"hoca_adi\">";
		     echo"<li>{$goster[hoca_adi]}</li>";
		   echo "</div>";
		   echo "<br>";	

		   
		   echo "<div class=\"devamini_oku2\">";
		     echo"<li><a href=\"yazi.php?page={$goster[id]}\">Devamını Oku</a></li>";
		   echo "</div>";
		   echo "<br>";	
		   echo"<center>";
		   
					
		echo "<ul/>";
			echo "</div>";
			echo "<br>";	
			}
			
			echo"<center>";
			echo"<div>";
			for ($i=1;$i<=$ssayisi;$i++){
				echo "<a class=\"sira\"href='index.php?s={$i}'>{$i}</a>";
				}}
			echo"</div>";
			echo"</center>";	
	
?>

<?php
function duyuru_olustur($page)
{
	$page=@$_GET["x"];
	if(empty($page) || !is_numeric($page))
	{$page=1; }
		$kacar=3;
		$ksayisi=mysql_num_rows(mysql_query("select * from duyurular"));
		$ssayisi=ceil($ksayisi/$kacar);
		$nereden=($page*$kacar)-$kacar;
		$bul=mysql_query("select * from duyurular order by id desc limit $nereden,$kacar");
		while($goster=mysql_fetch_array($bul))
		{
			extract($goster);
			
			echo "<div class=\"konu_alani\">";
			echo "<ul>";
			echo"<i class=\"fa fa-folder-open\" title=\"konu adı\"><a href=\"duyuru.php?page={$goster['id']}\">{$goster[isim]}</a></i>";
			
			
			echo "<br>";
			echo "<br>";
					//echo"<i class=\"fa fa-line-chart\" title=\"hit sayısı\"><a href=\"#\">{$goster[hit]}</a></i>";
					
		   echo"<i class=\"fa fa-calendar\" title=\"tarih\"><a href=\"#\">{$goster[tarih]}</a></i>";
		
		   echo "<br>";
		   echo "<div class=\"bolum_bask\">";
		     echo"<li>{$goster[bolum_bask]}</li>";
		   echo "</div>";
		   echo "<br>";	

		   
		   echo "<div class=\"devamini_oku2\">";
		     echo"<li><a href=\"duyuru.php?page={$goster[id]}\">Devamını Oku</a></li>";
		   echo "</div>";
		   echo "<br>";	
		   echo"<center>";
		   
					
		echo "<ul/>";
			echo "</div>";
			echo "<br>";	
			}
			
			echo"<center>";
			echo"<div>";
			for ($i=1;$i<=$ssayisi;$i++){
				echo "<a class=\"sira\"href='index.php?x={$i}'>{$i}</a>";
				}}
			echo"</div>";
			echo"</center>";	
	
?>

<?php
function haber_olustur($page)
{
	$page=@$_GET["y"];
	if(empty($page) || !is_numeric($page))
	{$page=1; }
		$kacar=3;
		$ksayisi=mysql_num_rows(mysql_query("select * from haberler"));
		$ssayisi=ceil($ksayisi/$kacar);
		$nereden=($page*$kacar)-$kacar;
		$bul=mysql_query("select * from haberler order by id desc limit $nereden,$kacar");
		while($goster=mysql_fetch_array($bul))
		{
			extract($goster);
			
			echo "<div class=\"konu_alani\">";
			echo "<ul>";
			echo"<i class=\"fa fa-folder-open\" title=\"konu adı\"><a href=\"haber.php?page={$goster['id']}\">{$goster[isim]}</a></i>";
			
			
			echo "<br>";
			echo "<br>";
					//echo"<i class=\"fa fa-line-chart\" title=\"hit sayısı\"><a href=\"#\">{$goster[hit]}</a></i>";
					
		   echo"<i class=\"fa fa-calendar\" title=\"tarih\"><a href=\"#\">{$goster[tarih]}</a></i>";
		
		   echo "<br>";
		   echo "<div class=\"atilan_yer\">";
		     echo"<li>{$goster[atilan_yer]}</li>";
		   echo "</div>";
		   echo "<br>";	

		   
		   echo "<div class=\"devamini_oku2\">";
		     echo"<li><a href=\"haber.php?page={$goster[id]}\">Devamını Oku</a></li>";
		   echo "</div>";
		   echo "<br>";	
		   echo"<center>";
		   
					
		echo "<ul/>";
			echo "</div>";
			echo "<br>";	
			}
			
			echo"<center>";
			echo"<div>";
			for ($i=1;$i<=$ssayisi;$i++){
				echo "<a class=\"sira\"href='index.php?y={$i}'>{$i}</a>";
				}}
			echo"</div>";
			echo"</center>";	
	
?>












