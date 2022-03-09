<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Programlama</title>
</head>

<body>
    <!-- hello  -->
    <!--  -->
    <?php
    //Açıklama Satırı
    /*Açıklama SatırıBloğu*/
    /* çift veya tek tırnak ile kullanılabilir
    çift tırnak içerisinde değişken iöerikleri gösterir
    

    
    
    */
    echo "<h4> Aydın Adnan menderes Üniversitesi</h4>"; //php de ekrana yazdırma
    echo "<h3> Aydın Meslek Yüksekokulu</h3>";
    echo " Bilgisayar Programcılığı" . "<br>" . " Web teknolojileri";

    echo "<hr> <h4>Değişken tanımlama kuralları</h4>";
    echo "<ol>
    <li>Değişken isimleri $ ile başlar</li>
    <li> Değişken isimleri sayısal ifade ile başlayamaz</li>
    <li>Değişken isimlerinde boşluk kullanılmaz. İki kelime varsa _çizgi kullanılır</li>
    <li>Değişken ve dosya isimlerinde türkçce karekter kullanılmamalıdır</li>
    <li>Değişken isimlerinde büyük küçük harf kullanımına duyarlıdır.sayi!=Sayi</li>
    <li>Değişken içerisinde metin varsa çift veya tek tırnak kullanılır</li>
    <li> Değişken içerisinde eğer sayısal bi ifade varsa tırnak kullanılmadan yazılır</li>
    <li>Değişkenin ismi içeriğini ifade etmeli</li>
    <li>Değikenler ekrana echo komutu ile yazdılırıl</li>
    
    
    </ol>";
   
   
   
    /*uygulama:
    Üniversite-Myo-Adsoyad-no değişkenlerini olusturup içerğini uygun sekılde doldurunuz
    Girilen bu değişkenlerin değerlerini nir html tablo içersinde gösteriniz.*/
    $universite = "Adnan Menderes Üniversitesi";
    $myo = "Aydın Meslek Yüksekokulu";
    $adSoyad = "Hüseyin Uyan";
    $no = 21600;

    ?>
    <table border="1">

        <body>
            <tr>
                <td>Üniversite</td>
                <td>Myo</td>
                <td>adsoyad
                </td>
                
                <td>Numara 

                </td>
            </tr>
            <tr>

                <td> <?php echo $universite; ?></td>
                <td><?php echo $myo;?></td>
                <td><?php echo $adSoyad;?></td>
                <td><?php echo $no;?>></td>
               
            </tr>

        </body>
    </table>

</body>

</html>