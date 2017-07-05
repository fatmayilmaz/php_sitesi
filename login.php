<?php require_once("includes/config.php");?>
<?php include("includes/header.php");?>
<center>
<br />

<div class="login">

<h2><i class="fa fa-user-circle-o" aria-hidden="true"><a>Yönetici Girişi</a></i></h2>

<form action="sys_kontrol.php" method="post">
<p>Kullanıcı Adı</br><input id="submit" type="text" name="username" /></p>
<p>Kullanıcı Şifresi</br><input id="submit" type="password" name="password" /></p>
<p><input class="giris" type="submit" id="submit" value="Giriş" /></p>
</form>
</div>

</center>
<br />
<br />
<br />
<br />
<br />
<br />
<br />


<?php include("includes/footer.php");?>