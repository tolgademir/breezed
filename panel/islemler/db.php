<?php

@session_start();

$host 		= "localhost";
$dbname 	= "breezed";
$charset 	= "utf8";
$username = "root";
$password = "";

try {
    
  $db = new PDO("mysql:host=$host;dbname=$dbname;charset=$charset;", $username, $password);

} catch(PDOExeption $error) {

  echo $error->getMessage();

}

$sorgu=$db->prepare("SELECT * FROM panel_ayarlar");
$sorgu->execute();
$panel_ayarlar=$sorgu->fetch(PDO::FETCH_ASSOC);

$sorgu=$db->prepare("SELECT * FROM kullanici");
$sorgu->execute();
$kullanici=$sorgu->fetch(PDO::FETCH_ASSOC);

$sorgu=$db->prepare("SELECT * FROM seo");
$sorgu->execute();
$seo=$sorgu->fetch(PDO::FETCH_ASSOC);

$sorgu=$db->prepare("SELECT * FROM navbar");
$sorgu->execute();
$navbar=$sorgu->fetch(PDO::FETCH_ASSOC);

$sorgu=$db->prepare("SELECT * FROM slider");
$sorgu->execute();
$slider=$sorgu->fetch(PDO::FETCH_ASSOC);

$sorgu=$db->prepare("SELECT * FROM banner");
$sorgu->execute();
$banner=$sorgu->fetch(PDO::FETCH_ASSOC);

?>