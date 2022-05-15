<?php
if (isset($_POST['kaydet'])){
	if (isset($_POST['ad'], $_POST['soyad'] )
&& ($_POST['ad']!='')
&& ($_POST['soyad']!='')) {
echo "Kayıt İşleminiz Yapıldı...";
echo "<b>".$_POST['ad'] . ' ' . $_POST['soyad']."</b>";
echo "<p>".$_POST['password'] ."</br>".$_POST['yas'] ."</br>".$_POST['email'] ."</br>".$_POST['tcno'] ."</br>".$_POST['resim'] ."</br>".$_POST['cinsiyet'] ."</br>".$_POST['sehirler'] ."</br>".$_POST['dil'] ."</br>".$_POST['adres'] ."</p>";
 
}else{
echo "Eksik Bilgi Girdiniz!";
}
}

echo "<p> <a href='iletisim.html'>&lt;GERİ DÖN&gt;</a></p> ";
?>