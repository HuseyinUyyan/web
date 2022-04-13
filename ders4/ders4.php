<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
<h3>Php'de Diziler</h3>
    <ol>
        <li>Dizi oluşturmak için array() fonksiyonu veya [] kullanılabilir.</li>
        <li>Dizi içerisinde farklı türden birçok değer bulunabilir.(int, string, double, obje) (1,2,3,"Ali","Ahmet","125,20") </li>
        <li>"echo $diziAdi" ile dizi içeriği ekrana yazdırılamaz. Array to String Conversion hatası verir. Fakat dizinin örneğin 3 indisine sahip elemanı elemanı "echo $diziAdi[3]" şeklinde yazdırılabilir.</li>
        <li>Dizinin içerisindeki string ifadeler çift tırnak("") içerisine yazılır.</li>
        <li>Dizinin içerisindeki int ifadeler direk yazılabilir.</li>
        <li>Dizinin elemanları birbirinden virgül(,) ile ayrılır.</li>
        <li>Dizi içerisinde indisler varsayılan olarak 0'dan başlar.</li>
        <li>Diziler içerisinde diziler tanımlanabilir.</li>
    </ol>
    <?php 
    
    $dizi1=array(1,2,3,4,"kemal","enes",13.5);
    $dizi2=[1,25,43,4,"cemal","hüseyin",13.5];
    echo"<pre>";    
    print_r($dizi1);    
    echo"<pre>"; 

    echo"<pre>"; 
    print_r($dizi2);
    echo"<pre>"; 
    echo "dizinin 5.elemanı: $dizi1[4]";
    echo"<br>";
   echo "Dizinin 1.elemanı:" . gettype($dizi1[0]);


   echo"<h3> Dizinin İçeriğini Forearch döngüsü İle Yazdırma-1</h3>";
   foreach ($dizi1 as $item){
       echo $item . "<br>";
   } 
   echo"<h3> Dizinin İçeriğini Forearch döngüsü İle Yazdırma-2</h3>";
   foreach ($dizi1 as $key =>$value){
       echo "$key - $value <br>";
   } 
   echo"<h3> Dizinin İçeriğini For döngüsü İle Yazdırma</h3>";
   for ($i=0; $i < count($dizi1); $i++) { 
       echo $dizi1[$i]. "<br>";
   }


$sayilar=array(1,2,3,4,5,6);
 $sayilar=array(
     array(1,5,7,9,6),
     array("hasan","huseyin","emir")
     
 );
 echo"<pre>"; 
 print_r($sayilar);
 echo"<pre>"; 

 echo "Sayılar Dizisinin İçerisindeki İkinci Dizinin İkinci Elemanı: " . $sayilar[1][1] . "<br>";
 echo "Sayılar Dizisinin İçerisindeki Birinci Dizinin Üçüncü Elemanı: " . $sayilar[0][2] . "<br>";

 echo "<br>*****************************<br>";

 $sayilar2 = array(
     "Integer"   => array(1, 2, 3, 4, 5),
     "Double"    => array(10.5, 3.2, 1.7)
 );

 echo "<pre>";
 print_r($sayilar2);
 echo "</pre>";

 echo "Sayılar2 Dizisinin İçerisindeki İkinci Dizinin İkinci Elemanı: " . $sayilar2["Integer"][1] . "<br>";
 echo "Sayılar2 Dizisinin İçerisindeki Birinci Dizinin Üçüncü Elemanı: " . $sayilar2["Double"][2] . "<br>";
 echo "<br>*****************************<br>";
 $bilgiler = array(
    "id"        => 1,
    "adi"       => "Ahmet",
    "soyadi"    => "Erimez",
    "gsm"       => "5343333333",
    "cinsiyet"  => "Erkek",
    "yas"       => 30
);


$isimler=array();
$isimler[]="havin";
$isimler[]="hazal";
$isimler[]="enes";
$isimler[]="selami";
$isimler[]="mehmet";

echo "<pre>";
 print_r($isimler);
 echo "</pre>";
 $isimle2r=array();
 $isimler2 ["isim1"]= "Enes";
 $isimler2 ["isim2"]= "burak";

 $isimler2 ["isim3"]= "doguka";

 $isimler2 []= "huseyin";

 $isimler2 []= "ece";
 echo "<pre>";
 print_r($isimler2);
 echo "</pre>";
 echo "<br>*****************************<br>";
 $ogrencidetay=array(
     "id"    => 1,
     "Adi"   => "Nurullah",
     "Soyadi"=> "karadeniz",
     "bolum"=> "bilgisayar",
     "dersler"=> array(
        "ders"=> "veritabanı",
        "ders2"=> "web",
        "ders3 "=> "mobil"

     )
     );




    ?>


    <h3> Koşul ifadeleri(if - else)</h3>
    <p> İf Else bloklarında öncellikle koşul belirtilir ve  sonraki dallanma koşula göre devam eder. </p>
    <h5> karşılaştırma operatörleri</h5>
    <ol>
        <li>
            == ($a==$b) Eşit ise. (Genellikle Matematiksel karsılastırma yapılır) 
        </li>
        <li>
            === ($a ===$b) Denk ise. (Genellikle string bir karsılastırma yapılır)
        </li>
        <li> != ($a !=$b) eşit değilse (GEnellikle matematiksel işaretler)  </li>
        <li> !== ($a !===$b) denk degilse (Genellikle string verilerde)</li>
        <li>
            > ($a > $b) büyükse. (MAtematiksel işlemlerde kullanılır)
        </li>
        <li>
            >= ( $a >=$b ) büyük eşit ise
         </li>
         <li>
             
         <= ($a <= $b) küçük eşit ise ( matematiksel verilerde kullanılır)
         </li>
    </ol>
  <table>
  <h5> Mantıksal operatörleri</h5>
    <ol>
        <li> ! (olumsuz) (!$a) --> $a nın değeri false ise true döner.Aksine yapar olumsuz mu diye sorar.</li>
        <li> &&- AND (ve) ($a && $b )-- $a ve $ b nın degerı olumlu ise true döner iki koşulda saglanmak zorundadır  </li>
        <li> ||- Or (veya) ($a || $b) $a veya $b nın herhangı bırının degerı olumlu ıse true olarak doner</li>

    </ol>
  </table>
  <h4> Not</h4>
  <ol>
      <li>
          Elseif sürekli tekrara den sorgu blogu acar.
      </li>
      <li>Else son kapanış koşuludur.Herhangi bir şart belirtilmez.hiçbir Ön kosul gerceklesmedıgınde calısacak son kosulu ıfade eder</li>

  </ol>
<?php
/*if (condition) {
    elseif (condition) {
        elseif (condition) {
            # code...
        }
    }
}
*/
echo "<br>*****************************<br>";
$sayi1=123;
$sayii2=555;
$metin="adü";

if ($sayi1) {
    echo  "$sayi1";
}


/*UYGULAMA ODEVİ rastgele uretılen değerin tek veya çıft oldugunu ekrana yazdırınız.
RAstgele uretılen degerın 50 den kucuk oldugu durumlarda kaldınız buyukse gectınız.
Dogum yılına gore 18 yasından buyuk olanların ehlıyet alabılecegını kontrol eden ıf blogunu yazınız*/

?>

    
</body>
</html>