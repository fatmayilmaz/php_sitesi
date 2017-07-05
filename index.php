<?php require_once("includes/config.php"); ?>
<?php include("includes/header.php")?>
<?php include ("includes/slider.html")?>
<?php include ("includes/functions.php")?>
<?php  error_reporting(E_ALL ^ E_NOTICE);?>
<div class="container">
<div class="row">

<div class="col-lg-6 col-md-6 col-sm-6">

<br />

<h2><i class="fa fa-bullhorn" aria-hidden="true"><a>Genel Duyurular</a></i></h2>

<?php
echo "<div class=\"konu_alani\"";
menu_olustur($GET[page]);
if($_GET[page])
{   

	header("location:yazi.php");
}
echo "</div>";
?>

</div><!--end col md6-->

<div class="col-lg-6 col-md-6 col-sm-6">
<br />

<h2><i class="fa fa-bullhorn" aria-hidden="true"><a>Bölüm Duyuruları</a></i></h2>

<?php
echo "<div class=\"konu_alani\"";
duyuru_olustur($GET[page]);
if($_GET[page])
{   

	header("location:duyuru.php");
}
echo "</div>";
?>
</div>

</div>
</div>
<br />


<div class="row">

<div class="col-lg-12 col-md-12 col-sm-12">
<br />

<h2><i class="fa fa-newspaper-o" aria-hidden="true"><a>Haber ve Etkinlikler</a></i></h2>
<?php
echo "<div class=\"konu_alani\"";
haber_olustur($GET[page]);
if($_GET[page])
{   

	header("location:haber.php");
}
echo "</div>";
?>

</div>

</div>


<?php include("includes/footer.php");?>
