<?php
include("bilgiler.php");
session_start();
if(!isset($_SESSION["login"])){
echo "Bu sayfayı görüntüleme yetkiniz yoktur.";
}else{
echo "HOŞGELDİNİZ G211210307 <br>";
echo "<a href=logout.php>Çıkış Yap</a>";
}
?>