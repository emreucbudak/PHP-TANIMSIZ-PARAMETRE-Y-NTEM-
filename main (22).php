<?php
/******************************************************************************

Emre Üçbudak Karadeniz Teknik Üniveristesi

*******************************************************************************/
// PHP FONKSIYONLARA GIRIS
// ENDIREK OZYINELEMELI FONKSIYONLAR

function islem($sayi) {
    $deger = func_num_args();
    echo($deger);
    // func num argsla parametre sayısını döndürüyor
    $deger1 = func_get_arg();
    echo($deger1);
    // func get argla indis değeri döner
    $deger2 = func_get_args();
    echo($deger2);
    // func get argsla birden fazla indis değeri döner
}
islem("emre");





?>
