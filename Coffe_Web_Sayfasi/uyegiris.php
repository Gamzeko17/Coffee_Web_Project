<?php
require_once("baglan.php");

if(isset($_POST["kullaniciadi"])){
    $GelenKullaniciadi = Filtre($_POST["kullaniciadi"]);
}else{
    $GelenKullaniciadi = "";
}

if(isset($_POST["password"])){
    $GelenSifre = Filtre($_POST["password"]);
}else{
    $GelenSifre = "";
}

$KontrolSorgu = $VeriTabaniBaglantisi->prepare("SELECT * FROM register WHERE kullaniciadi=? AND password=?");
$KontrolSorgu->execute([$GelenKullaniciadi, $GelenSifre]);
$SorguSayisi = $KontrolSorgu->rowCount();


if($SorguSayisi>0){
    $_SESSION["Kullanici"] = $GelenKullaniciadi;
    header("Location:index.php");
    exit();
}else{
    echo "HATA<br>";
    echo "Girilen Bilgilere Uygun Kullanıcı Bulunamadı";
    echo "Anasayfaya dönmek için lütfen Buraya <a href='index.php'> Tıklayınız</a>.";
}
?>