<?php
function encrypt($string)
{
    $key = 5;
    $kalimat = $string;
    for ($i = 0; $i < strlen($kalimat); $i++) {
        $kode[$i] = ord($kalimat[$i]); //rubah ASCII ke desimal
        $b[$i] = ($kode[$i] + $key) % 256; //proses enkripsi
        $c[$i] = chr($b[$i]); //rubah desimal ke ASCII
    };
    $hsl = '';
    for ($i = 0; $i < strlen($kalimat); $i++) {
        $hsl = $hsl . $c[$i];
    };
    return $hsl;
}

function decrypt($string)
{
    $key = 5;
    $isi = $string;
    $hasil = "";
    for ($i = 0; $i < strlen($isi); $i++) {
        $kode[$i] = ord($isi[$i]); // rubah ASII ke desimal
        $b[$i] = ($kode[$i] - $key) % 256; // proses dekripsi Caesar
        $c[$i] = chr($b[$i]); //rubah desimal ke ASCII
    }
    for ($i = 0; $i < strlen($isi); $i++) {
        $hasil = $hasil . $c[$i];
    }
    return $hasil;
}