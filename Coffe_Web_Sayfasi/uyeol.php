<?php
require_once("baglan.php");
if(isset($_SESSION["Kullanici"])){
	header("Location:index.php");
	exit();
}else{
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Document</title>
    <style>
        body{
            background-image: url('resim/arkaplan.jpg');
            background-size: cover; 
            background-repeat: no-repeat; 
            background-attachment: fixed; 
        }
    </style>
</head>
<body>
    <h4 style="color: papayawhip;font-size: 60px;font-style: inherit;text-align: center;">KAHVE SEVERLER İÇİN CENNET KÖŞESİ</h4>
    <!--Ana Şablon İçin Oluşturulan Tablo-->
    <table width="1700" height="1500" align="center" border="0" cellpadding="0" cellspacing="0" style="margin-top:46px;">
        <tr>
            <td colspan="5" height="50">
                <!--Menü İçin Oluşturulan Tablo-->
                <table height="50" width="1700" style="text-align:center;">
                        <tr>
                            <td align="tops" height="100px" style="background-color:#8B4513;width:70" colspan="5">
                                <img src="resim\coffee-logo3.jpg" alt="" width="85" height="85" align="top" style="margin-left:3px;border-radius: 56px;">
                            </td>

                            <td align="tops" height="100px" style="background-color:#8B4513;font-family: cursive;width:198px" colspan="5">
                                <a href="menü\icecekler.php" style="text-decoration:none;color:white;font-size:24px;">İçeçekler</a>
                            </td>

                            <td align="tops" height="100px" style="background-color:#8B4513;font-family: cursive;width:198px" colspan="5">
                                <a href="menü\yiyecekler.php" style="text-decoration:none;color:white;font-size:24px;">Yiyecekler</a>
                            </td>

                            <td align="tops" height="100px" style="background-color:#8B4513;font-family: cursive;width:198px" colspan="5">
                                <a href="menü\evdekahve.php" style="text-decoration:none;color:white;font-size:24px;">Evde Kahve Keyfi</a>
                            </td>

                            <td align="tops" height="100px" style="background-color:#8B4513;font-family: cursive;width:198px" colspan="5">
                                <a href="menü\kahveekipmanlari.php" style="text-decoration:none;color:white;font-size:24px;">Kahve Ekipmanları</a>
                            </td>
                        </tr>
                </table><!--Menü İçin Oluşturulan Tablo kapatması-->
            </td>
        </tr>



        <tr>
            <td colspan="5" height="10">&nbsp;</td>
        </tr>



        <!--Ana Kısımların Olduğu yer-->
        <tr>
            <td width="1250" height="538" style="">
                <div id="carouselExampleCaptions" class="carousel slide" style="height: 917px;">
                    
                    <!--Sliden'ın Bulunduğu Kısım-->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="resim/sliderimage1.jpg" class="d-block w-100" alt="..." style="margin-bottom: 296px;">
                            <div class="carousel-caption d-none d-md-block">
                                <p style="font-size: 84px;font-family: fangsong;font-style: italic;margin-bottom: 251px;">Life Happens....<br>Coffe Helps...</p>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="resim/sliderimage2.jpg" class="d-block w-100" alt="..." style="margin-bottom: 343px;height: 811px;">
                            <div class="carousel-caption d-none d-md-block">
                                <p style="font-size: 84px;font-family: fangsong;font-style: italic;margin-bottom: 296px;">It's not just coffee, it's a lifestyle...</p>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="resim/sliderimage3.jpg" class="d-block w-100" alt="..." style="margin-bottom: 297px;">
                            <div class="carousel-caption d-none d-md-block">
                                <p style="font-size: 84px;font-family: fangsong;font-style: italic;margin-bottom: 250px;">Coffee means warmth and sincerity....</p>
                            </div>
                        </div>

                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>

                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>

                </div>


            <!--Kartların Olduğu Kısım-->
                <div class="container">
                    <div class="row" style="margin-left:-61px;">

                            <div class="card" style="width:23rem;margin-left: 53px;background:Moccasin" class="col-md-3">
                                <img src="resim/card1.jpg" class="card-img-top" alt="..." style="height: 255px;margin-top: 0px;width: 365px;margin-left: -12px;">
                                <div class="card-body">
                                    <p class="card-text" style="font-size: 20px;font-weight: bold;">Filtre Kahve Kağıdı Boyutları Nelerdir?</p>
                                    <p><a href="https://kahhve.com/blog/kahve-101/filtre-kahve-kagidi-boyutlari-nelerdir/" class="btn btn-primary" style="background: moccasin;border-color: moccasin;text-decoration: revert;margin-left: 77px;margin-right: auto;text-align: center;color:black">Detayları Oku</a></p>
                                </div>
                            </div>

                            <div class="card" style="width:23rem;margin-left: 53px;background:Moccasin" class="col-md-3">
                                <img src="resim/card2.jpg" class="card-img-top" alt="..." style="height: 255px;margin-top: -1px;width: 368px;margin-left: -13px;">
                                <div class="card-body">
                                    <p class="card-text" style="font-size: 20px;font-weight: bold;">Yöresel Kahve Çeşitleri: Honduras</p>
                                    <a href="https://kahhve.com/blog/yoresel-kahveler/yoresel-kahve-cesitleri-honduras/" class="btn btn-primary" style="background: moccasin;border-color: moccasin;text-decoration: revert;margin-left: 77px;margin-right: auto;text-align: center;color:black">Detayları Oku</a>
                                </div>
                            </div>

                            <div class="card" style="width:23rem;margin-left: 53px;background:Moccasin" class="col-md-3">
                                <img src="resim/card3.jpg" class="card-img-top" alt="..." style="height: 255px;margin-top: -1px;width: 368px;margin-left: -13px;">
                                <div class="card-body">
                                    <p class="card-text" style="font-size: 20px;font-weight: bold;">Evde Süt Nasıl Köpürtülür?</p>
                                    <a href="https://kahhve.com/blog/puf-noktalar/evde-sut-nasil-kopurtulur/" class="btn btn-primary" style="background: moccasin;border-color: moccasin;text-decoration: revert;margin-left: 77px;margin-right: auto;text-align: center;color:black;margin-top: 29px;">Detayları Oku</a>
                                </div>
                            </div>
                    </div> 
                </div>
            </td>
            
            
            <td width="20" height="400">&nbsp;</td>


            <!--Formun Bulunduğu Kısım-->
            <td width="430" heigth="400" valign="top">
                
                    <div class="card" style="height: 404px;background-color: papayawhip;margin-top: 1px;">
                        <form action="uyesonuc.php" method="post">
                            <table width="300" border="0" cellpadding="0" cellspacing="0" style="width: 435px;">
                                <tr>
                                    <td colspan="3" height="30" style="color: #FFFFFF;background-color: #8B4513;font-size: 26px;font-style: italic;font-family: auto;font-weight: bold;text-align: center;">&nbsp;Yeni Üye Kayıt Alanı</td>
                                </tr>

                                <tr>
                                    <td height="30" width="100" style="font-size: 23px;font-style: italic;font-family: inherit;">&nbsp;Kullanıcı Adı</td>
                                    <td height="30" width="10">:</td>
                                    <td height="30" width="190"><input type="text" name="kullaniciadi" style="width:98%;"></td>
                                </tr>

                                <tr>
                                    <td height="30" width="100" style="font-size: 23px;font-style: italic;font-family: inherit;">&nbsp;Adı Soyadı</td>
                                    <td height="30" width="10">:</td>
                                    <td height="30" width="190"><input type="text" name="adiSoyadi" style="width:98%;"></td>
                                </tr>

                                <tr>
                                    <td height="30" width="100" style="font-size: 23px;font-style: italic;font-family: inherit;">&nbsp;Email</td>
                                    <td height="30" width="10">:</td>
                                    <td height="30" width="190"><input type="email" name="email" style="width:98%;"></td>
                                </tr>
                                
                                <tr>
                                    <td height="30" width="100" style="font-size: 23px;font-style: italic;font-family: inherit;">&nbsp;Şifre</td>
                                    <td height="30" width="10">:</td>
                                    <td height="30" width="190"><input type="password" name="password" style="width:98%;"></td>
                                </tr>
                                
                                <tr>
                                    <td height="30" width="10">&nbsp;</td>
                                    <td height="30" width="10">&nbsp;</td>
                                    <td height="30" width="190" align="right"><input type="submit" value="Kayıt Ol" style="width: 141px;height: 39px;border-radius: 40px;font-size: 19px;font-style: italic;font-weight: 400;background-color: tan;margin-top: 15px;"></td>
                                </tr>
                            </table>
                        </form>


                    </div>
                

                    <div class="card" style="width: 24rem;margin-left: 53px;background: Moccasin;margin-top: 513px;height: 415px;" >
                            <img src="resim/card5.jpg" class="card-img-top" alt="..." style="height: 255px;margin-top: 0px;width: 384px;margin-left: -1px;">
                            <div class="card-body">
                                <p class="card-text" style="font-size: 20px;font-weight: bold;">Kahvenin Faydaları Nelerdir?</p>
                                <p><a href="https://kahhve.com/blog/saglik/kahvenin-faydalari-nelerdir/" class="btn btn-primary" style="background: moccasin;border-color: moccasin;text-decoration: revert;margin-left: 77px;margin-right: auto;text-align: center;color:black;margin-top: 29px;">Detayları Oku</a></p>
                            </div>
                    </div>
            </td>
        </tr>



        <tr>
            <td colspan="5" height="20">&nbsp;</td>
        </tr>



        <tr>
            <td colspan="5" height="200" style="background-color:burlywood">
        
                <footer>
                        <div class="footer-content">
                            
                            <div class="footer-links">
                                <ul style="list-style-type: none;font-size: 20px;display:flex;">
                                    <li><a href="#" style="color: darkslategray;font-weight: 600;font-size: 24px;text-decoration: none;">Hakkımızda</a></li>
                                    <li><a href="#" style="color: darkslategray;font-weight: 600;font-size: 24px;text-decoration: none;margin-left:88px;">İletişim</a></li>
                                </ul>
                            </div>

                            <div class="footer-social">
                                <ul style="margin-left: 363px;margin-bottom: -53px;margin-top: -53px;list-style-type: none;font-size: 20px;display:flex;">
                                    <li>
                                        <img src="resim/facebooklogo.png" alt="" style="width: 40px;height: 26px;margin-top: -9px;">
                                        <a href="#" style="color: darkslategray;font-weight: 600;font-size: 24px;text-decoration: none;margin-left:1px;">
                                        <i class="fab fa-facebook">FaceBook</i>
                                        </a>
                                    </li>

                                    <li>
                                        <img src="resim/instagramlogo.png" alt="" style="width: 40px;height: 26px;margin-top: -9px;margin-left: 76px;">
                                        <a href="#" style="color: darkslategray;font-weight: 600;font-size: 24px;text-decoration: none;margin-left:-1px;">
                                        <i class="fab fa-twitter">Instagram</i>
                                        </a>
                                    </li>

                                    <li>
                                        <img src="resim/pinterestlogo.jpg" alt="" style="width: 40px;height: 26px;margin-top: -9px;margin-left: 76px;">
                                        <a href="#" style="color: darkslategray;font-weight: 600;font-size: 24px;text-decoration: none;margin-left:4px;">
                                        <i class="fab fa-instagram">Pinteres</i>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>

                        <div class="footer-info" style="margin-top: 100px;font-size:20px;">
                            <p style="color: darkslategray;font-weight: 600;font-size: 24px;text-decoration: none;">© 2023 Kahve Web Sitesi</p>
                            <p style="color: darkslategray;font-weight: 600;font-size: 24px;text-decoration: none;">İletişim: info@kahveweb.com</p>
                        </div>
                </footer>
            </td>
        </tr>
    </table><!--Ana tablon bitirme tagı-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>

<?php
}
$VeritabaniBaglantisi	=	null;
?>