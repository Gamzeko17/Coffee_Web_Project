<?php
session_start();ob_start();

try{
    $VeriTabaniBaglantisi= new PDO("mysql:host=localhost;dbname=websayfasi;charset=UTF8","root","");
}catch(PDOException $Hata){
    echo "Hata Oluştu !!!!" . $Hata->getMessage();
    die();
}

//Veritabanına zarar verilmesin diye yazılan fonksiyon.
function Filtre($deger){
    $Bir = trim($deger);
    $Iki = strip_tags($Bir);//html taglarını yok eder.
    $Uc = htmlspecialchars($Iki,ENT_QUOTES);
    $Sonuc = $Uc;
    return $Sonuc;
}

$ZamanDamgasi= time();

if(isset($_SESSION["Kullanici"])){
    $UyelerSorgusu = $VeriTabaniBaglantisi->prepare("SELECT * FROM register WHERE kullaniciadi=?");
    $UyelerSorgusu->execute([$_SESSION["Kullanici"]]);
    $UyeKayitSayisi = $UyelerSorgusu->rowCount();
    $UyeKaydi = $UyelerSorgusu->fetch(PDO::FETCH_ASSOC);
    
    if($UyeKayitSayisi>0){
        $UyeninAdiSoyadi = $UyeKaydi["adiSoyadi"];
    }else{
        $UyeninAdiSoyadi = "";
    }
}
?>