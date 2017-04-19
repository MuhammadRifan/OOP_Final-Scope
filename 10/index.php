<?php

// final method pada php OOP
// final method adalah method yang tidak bisa di overriding

class Buah
{
    public function beli()
    {
        echo "beli buah ..." . PHP_EOL;
    }

    // kita membuat final method pada class buah
    final public function makan()
    {
        echo "makan buah ...".PHP_EOL;
    }
}

class Jeruk extends Buah
{
    // lalu pada class turunan dari class buah, nama final method tidak boleh digunakan kembali
    // jika digunakan kembali, akan terjadi error
    public function makan1()
    {
        echo "makan buah jeruk ...".PHP_EOL;
    }
}

$jeruk = new Jeruk();
$jeruk->beli();
// $jeruk->makan();
$jeruk->makan1();
