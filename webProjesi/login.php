<?php
include("bilgiler.php");
session_start();
ob_start();
if ($user==" " or $pass==" ")
	{
		echo "Lütfen Tüm Alanları Doldurun!";	
	}
else
{

if(($_POST["username"]==$user) and ($_POST["password"]==$pass)){
$_SESSION["login"] = "true";
$_SESSION["user"] = $user;
$_SESSION["pass"] = $pass;
header("Location:kullanıcı.php");
}else{
echo "Kullancı Adı veya Şifre Yanlış.<br>";
echo "Giriş sayfasına yönlendiriliyorsunuz.";
header("Refresh: 2; url=login.html");
}
ob_end_flush();
}
?>
