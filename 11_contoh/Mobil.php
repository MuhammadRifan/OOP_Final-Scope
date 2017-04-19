<?php

class Mobil
{
    public static $merk = "Lykan Hypersport";
    private static $warna = "Merah";

    public static function result()
    {
        echo 'Mobil anda berwarna '.self::$warna.' dan bermerk ';
    }
}
