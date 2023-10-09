<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Sayfasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body{
            background-image: url('resim/arkaplan.jpg');
            background-size: cover; 
            background-repeat: no-repeat; 
            background-attachment: fixed; 
        }
    </style>
</head>
<body style="color: white;font-size: 34px;margin-left: 524px;font-style: italic;font-family: cursive;">
    <?php
    require_once("baglan.php");

    if(isset($_POST["kullaniciadi"])){
        $GelenKullaniciadi = Filtre($_POST["kullaniciadi"]);
    }else{
        $GelenKullaniciadi = "";
    }

    if(isset($_POST["adiSoyadi"])){
        $GelenIsimSoyisim = Filtre($_POST["adiSoyadi"]);
    }else{
        $GelenIsimSoyisim = "";
    }

    if(isset($_POST["email"])){
        $GelenEmail = Filtre($_POST["email"]);
    }else{
        $GelenEmail = "";
    }

    if(isset($_POST["password"])){
        $GelenSifre = Filtre($_POST["password"]);
    }else{
        $GelenSifre = "";
    }

    $Sorgu = $VeriTabaniBaglantisi->prepare("SELECT * FROM register WHERE kullaniciadi=? OR email=? ");
    $Sorgu->execute([$GelenKullaniciadi, $GelenEmail]);
    $SorguSayisi = $Sorgu->rowCount();



    if($SorguSayisi>0){
        echo "HATA<br />";
        echo "Kullanıcı Adı veya E-Mail Adresi Başka Bir Üye Tarafından Kullanılmaktadır.<br />";
        echo "Ana Sayafaya Dönmek İçin Lütfen Buraya <a href='index.php' style='color: moccasin;'>Tıklayınız</a>.";
        
    }else{
        $KayitEkle = $VeriTabaniBaglantisi->prepare("INSERT INTO register (kullaniciadi, adiSoyadi, email, password, kayittarihi) VALUES (?, ?, ?, ?, ?)");
        $KayitEkle->execute([$GelenKullaniciadi,$GelenIsimSoyisim, $GelenEmail, $GelenSifre, $ZamanDamgasi]);
        $KayitKontrol = $KayitEkle->rowCount();

        if($KayitKontrol>0){
            echo "TEBRİKLER<br />";
            echo "Kullanıcı Kaydı Başarıyla Tamamlandı.<br />";
            echo "Ana Sayafaya Dönmek İçin Lütfen Buraya <a href='index.php'>Tıklayınız</a>.";
        }else{
            echo "HATA<br />";
            echo "Kullanıcı Kaydı İşlemi Sırasında Beklenmeyen Bir Hata Oluştu.<br />";
            echo "Lütfen Daha Sonra Tekrar Deneyiniz.<br />";
            echo "Ana Sayafaya Dönmek İçin Lütfen Buraya <a href='index.php'>Tıklayınız</a>.";
        }
    }
?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>



















