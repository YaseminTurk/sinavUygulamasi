<?php 
//session_start();

if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    else
    {
        session_destroy();
        session_start(); 
    }
    

//veritabanı ulaşım bilgileri
$username="root";
$password="";
$sunucu="localhost";
$database="arge_yazilim";

$baglan=mysqli_connect($sunucu,$username,$password); //MySql sunucusuna bağlanılır.

mysqli_set_charset($baglan, "utf8"); //türkçe karakter hatası almamak için yazılır.

if (!$baglan)
{
	echo "Bağlantı Hatası:".mysql_errno();
}

$db=mysqli_select_db($baglan,$database); //erişilmek istenen veritabanı seçilir.

if (!$db) 
{
	echo "Bağlantı Hatası:".mysql_errno();
	echo "<br>";

	exit();
}


 ?> 