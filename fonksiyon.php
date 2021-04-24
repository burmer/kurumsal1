<?php

//footer bölümünde kullanıldı
function hizmet_getir($kactane){
        global $baglan;
        $sor = $baglan->prepare("SELECT * FROM hizmetler order by id asc limit $kactane");
        $sor->execute();
        return $sor;      
}

?>