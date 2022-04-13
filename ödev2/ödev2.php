<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
Sayı giriş : <input type="text" placeholder="Aklınızdaki sayıyı giriniz" name="sayi" />
<input type="submit" value="Gönder" />
    <?php
/*Rastgele üretilen sayı tekmi çiftmi 

$rastgele_sayı=rand(1,100);
echo"rastgele sayı:". $rastgele_sayı;
echo"<br>";
if ($rastgele_sayı%2==0) {
    echo"Rastgele Sayı:". $rastgele_sayı;
    echo"<br>";
    echo"Rastgele sayı çifttir";
    
}
else    {
    
    echo"<br>";
    echo"Rastgele sayı Tektir";
   
}

*/
/*
$rastgele=rand(1,100);
if ($rastgele>50) {
    echo"Öğrenci Notu:" . $rastgele;
    echo"<br>";
    echo"Geçtiniz";
} 

else{
    echo"Öğrenci Notu:" . $rastgele;
    echo"<br>";
    echo"Kaldınız";
}
*/
$yıl=2022;
$tahmin = $_POST['sayi'];

$yıl-$tahmin=$ehliyet;
if($ehliyet > 18)
{
echo "Aklımdaki sayı $tahmin";

}
else{
echo "Aklımdaki sayı $tahmin değildi.";
}

        ?>
        
        



    
    
</body>
</html>