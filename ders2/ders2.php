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
    echo"Tırnak işaretleri arasindaki farklar";

 
 echo "<br>";
 $uni="Adnan Menderes üniversitesi"; /*dogru tanımlama*/
 echo "<br>";
 echo"Kazandığınız Üniversite : $uni";
 echo "<br>";
 echo" Kazandığınız Üniversite".$uni; /*doğru tanımlama*/
 echo "<br>";
 echo" Kazandığınız Üniversite".'$uni' ;/*DEĞİŞKENİ TEKTIRNAK İLE <YAZAMAZSINIZ></YAZAMAZSINIZ>*/
  echo "<hr> <h4>TEmel matamatiksel işlemler</h4>";

  echo"<h5>Toplama İşlemi</h5>";

  $sayi1 = 10;
  $sayi2 = 20;
  echo '$sayi1 + $sayi2 = ' .( $sayi1 + $sayi2);/*tek tırnak değişkeni tanımaz*/
  echo "<br>";
  echo "$sayi1 + $sayi2 = " .( $sayi1 + $sayi2);/*çift tırnakcdeğişkeni tanır*/
  echo "<br>";
  
  $sonuc = $sayi1 + $sayi2;
  echo "$sayi1 + $sayi2 = $sonuc";

  echo"<h5>Çıkarma İşlemi</h5>";

  $sayi1 = 10;
  $sayi2 = 20;
  echo '$sayi1 - $sayi2 = ' .( $sayi1 - $sayi2);/*tek tırnak değişkeni tanımaz*/
  echo "<br>";
  echo "$sayi1 - $sayi2 = " .( $sayi1 - $sayi2);/*çift tırnakcdeğişkeni tanır*/
  echo "<br>";
  
  $sonuc = $sayi1 - $sayi2;
  echo "$sayi1 - $sayi2 = $sonuc";

    
  echo"<h5>Çarpmaİşlemi</h5>";

  $sayi1 = 10;
  $sayi2 = 20;
  echo '$sayi1 * $sayi2 = ' .( $sayi1 * $sayi2);/*tek tırnak değişkeni tanımaz*/
  echo "<br>";
  echo "$sayi1 * $sayi2 = " .( $sayi1 * $sayi2);/*çift tırnakcdeğişkeni tanır*/
  echo "<br>";
  
  $sonuc = $sayi1 * $sayi2;
  echo "$sayi1 * $sayi2 = $sonuc";
  echo"<br>";
  echo"<h5>Bölme İşlemi</h5>";

  $sayi1 = 10;
  $sayi2 = 20;
  echo '$sayi1 / $sayi2 = ' .( $sayi1 / $sayi2);/*tek tırnak değişkeni tanımaz*/
  echo "<br>";
  echo "$sayi1 / $sayi2 = " .( $sayi1 / $sayi2);/*çift tırnakcdeğişkeni tanır*/
  echo "<br>";
  
  $sonuc = $sayi1 / $sayi2;
  echo "$sayi1 / $sayi2 = $sonuc";
  echo "<br>";
  echo"<h5>Üst Alma İşlemleri</h5>";
  $x="3";
  $y=12;
  echo "$x<sup>$y</sup>=" .pow($x,$y);

  echo"<br> Değişken tipi: $x " .( gettype($x));
  echo"<br>";
  echo"<h5>KareKök İşlemleri</h5>";
  $x=25;
  $karekök=sqrt($x);
  echo"$x in karekökü: $karekök";

  echo "<h5>Mutlak Değer İşlemleri</h5>";
  $x=-47;
  $mutlak=abs($x);
  echo"$x in mutlak değeri: $mutlak";
  echo"<br>";
  echo "<h5>Taban Değişim İşlemleri(base_convert(x,taban1,taban2))</h5>";
  $sayi=30;
  $taban=10;
  $yenitaban=2;
  echo"27 nin 2 lik tabandaki karşılığı: ". base_convert(27,10,2);
  echo"<br>";
  $sonuc=base_convert($sayi,$taban,$yenitaban);
  echo "($sayi)<sub>$taban </sub>:($sonuc)<sub>$yenitaban</sub>";
  echo"<br>";
  echo"<h5>mod İşlemi (fmod(x,y))</h5>";
  $x=15;
  $y=4;
  $mod=fmod(15,4);
  echo"$x mod $y = $mod";
  echo " <br>$x sayısı : ". (fmod($x,2)==0) ? "çifttir." : "tektir";

  echo "<h5>Yuvarlama  İşlemler(round(x,y))</h5>";
  $x=15.315;

echo"<br>$x Bir ondalık basamak yuvarlama:". round($x,1);

echo "<h5>Yuvarlama  İşlemler(florr(x,y))</h5>";
$x=15.315;
echo "$x:"  . floor($x);
echo "<h5>Yuvarlama  İşlemler(ceil(x,y))</h5>";
$x=15.315;
echo "$x:" . ceil($x);

echo "<h5>Yuvarlama  İşlemler(rand())</h5>";
echo"10-100 Arasında Rastgele Değer:" .rand(10,100);
for ( $i=1 ; $i<11; $i++) {
    echo "<br> ($i) .Eleman" . rand(10,100);
}
    
    ?>
    
</body>
</html>