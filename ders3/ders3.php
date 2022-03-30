<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    /*Uygulama
    50'den buyukse gectınız
    50'den kucukse kaldınız */
   // $rastgele_sayi=rand(10,100);
    /*if($rastgele_sayi>=50){
        echo "Geçtiniz-Notunuz: $rastgele_sayi";
      
    }
    else{
        echo "Kaldınız - notunuz ";
    }
    */
    // rastgele sayı //
    /*$not=rand(1,100);
    if($not>50)
    {
        echo"geçtiniz  $not "  ;
    }
    else    {
        echo "kaldınız $not ";
    }
    */
    echo "<h3> Sık Kullanılan String Fonksiyonlar</h3>";
    $yazi="Aydın Adnan Menderes Üniversitesi";
    echo "\$yazi değişkeninin içeriği: $yazi";
    echo"<br>\$yazi Değişkeninin Türü:" .gettype($yazi);



    /*İÇERİĞİN BÜYÜK HARFE DÖNÜşTÜRÜlMESİ*/

    echo"<br>\$yazi Değişkeninin Büyük harfle yazılması:" .$byazi=strtoupper($yazi);
    echo"<h1> $byazi</h1>";
    /*İÇERİĞİN KÜÇÜK HARFE DÖNÜŞTÜRÜŞMESİ*/
    echo"<br>\$yazinin küçük harfle yazılması:". $kyazi=strtolower($byazi);
    echo"<br>\$yazinin küçük harfle yazılması:". $kyazi=mb_strtolower($byazi);
     /*İÇERİĞİN  ilk  BÜYÜK HARFE DÖNÜşTÜRÜlMESİ*/
     echo"<br>\$yazinin il kelimesinin büyük harfle yazılması:". $yazi=ucfirst($kyazi);
     echo"<br>";
     /*İÇERİĞİN  Her Kelimesinin   BÜYÜK HARFE DÖNÜşTÜRÜlMESİ*/
     echo"<br>\$yazinin her kelimesinin büyük harfle yazılması:". $yazi=ucwords($kyazi);
     /*İçeriğin harf sayısı*/
     echo"<br>\$yazi nın harf sayısı:",strlen($yazi);
     echo"<br>";
     /* ascıı char dönüşümleri */
     echo "Kakter Karşılığı:(65)". chr(65);
     echo "Kakter Karşılığı:(100)". chr(100);
     echo "Kakter Karşılığı:(220)". chr(220);
     echo "Kakter Karşılığı:(14)". chr(14);
     echo"<br>";
    
/* 0-255 arası değerlerin chr fonksiyonuna sokarak satır satır yazdırınız.*/
     for($i=33; $i<=255; $i++){
         echo"$i:".chr($i)."";
     }
     echo"<br>";
     /*Metini parçalayarak Dizinie dönüştürülmesi*/
     echo"<br>";
     

     /*Uygulama:Metin İçerisinde kelime ve cümle sayısını alt alta yazdırınız.*/

     $metin="Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis doloribus vitae, quibusdam, cupiditate possimus, placeat ipsam repellat facere quaerat quae optio necessitatibus non voluptatibus fugiat ex nobis libero voluptatem tempora! Libero incidunt necessitatibus, quibusdam asperiores expedita ea, reprehenderit voluptates illum modi aspernatur mollitia maiores inventore, sint reiciendis veniam itaque dolore deserunt nostrum.";
     $kelimedizisi=explode(" ",$metin);
     $cümledizisi=explode(".",$metin);
     echo"kelime sayısı:". count($kelimedizisi);
     echo"<br>";
     echo"Cümle sayısı:" . count($cümledizisi);
     /*tarih değiştirme*/
     echo"<br>";
        $tarih= "2022-11-20";
        $tarihdizisi= explode("-", $tarih);
        echo"<pre>";
        print_r($tarihdizisi);
        echo"</pre>";
       echo "Tarih: $tarihdizisi[2],$tarihdizisi[1],$tarihdizisi[0]";

       $aylardizisi=array (
           "Ocak",
           "subat",
           "mart",
           "nısan,"

       );
       echo "<pre>";
       print_r($aylardizisi);
       echo"</pre>";
       echo $aylarstring=implode("-",$aylardizisi);


       $iban="TR20124578986532124578";
       $yeniiban=str_split($iban,4);
       echo"<pre>";
       print_r($yeniiban);
       echo"</pre>";
       /* forearch ıle*/
       foreach ($yeniiban as $parca){
           echo"$parca ";
       } 
       echo"<br>";
       echo"for iban: ";
      for ($i=0; $i < count($yeniiban) ; $i++) { 
          echo $yeniiban[$i] . " ";
      }
      echo"<br> İmplode Iba:.". implode("-",$yeniiban);


            
    


     


    
    
    
    

    
   
    
    ?>
     
    
</body>
</html>