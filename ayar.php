<?php
    error_reporting(E_ALL);
    session_start();
    ob_start();

    //db bilgileri
    $host 	= "localhost";
    $user 	= "root";
    $pass 	= "";
    $db		= "kurumsal33";

    //db bağlantısı     
    $baglan = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);

    //statik değişkenler
    $ayar = $baglan->query("SELECT * FROM ayarlar")->fetch(PDO::FETCH_ASSOC);
    define("PATH", realpath("."));
    define("SITE_AD", $ayar["site_baslik"]);
    define("URL", $ayar["site_url"]);    
    define("TEMA", PATH."/tema/".$ayar["site_tema"]);
    define("TEMA_DIR", $ayar["site_tema"]);
    define("PANEL", $ayar["panel_path"]);  

    define("logo",$ayar["logo"]);
    define("face",$ayar["face"]);
    define("twit",$ayar["twit"]);
    define("google",$ayar["google"]);
    define("insta",$ayar["insta"]);
    define("linkedin",$ayar["linkedin"]);
    define("tel",$ayar["telefon"]);
    define("adres",$ayar["adres"]);
    define("eposta",$ayar["eposta"]);
    define("calisma_saati",$ayar["calisma_saati"]);

?>