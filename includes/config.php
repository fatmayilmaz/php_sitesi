<?php 
$baglanti = @mysql_connect('localhost', 'root', '');
$veritabani = @mysql_select_db('php_sitesi_proje');
 
if($baglanti && $veritabani) {  
} 
else {
   echo 'Bağlantı kurulamadı.';
}
mysql_query("SET NAMES utf8");

session_start();
?>
