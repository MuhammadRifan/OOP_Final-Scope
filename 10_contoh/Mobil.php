<?php

class Car
{
    final public function testMobil()
    {
        echo "Mobil itu berwarna ?, dan bermerk ?";
    }

    public function result()
    {
        echo 'Itu bukan mobil anda karena ?';
    }
}

class Mobil extends Car
{
    // kita bisa overriding / mengupdate isi dari method result, karena method tersebut bukan final method
    // jikalau kita juga ingin merubah isi dari final method testMobil, maka hasil nya akan error
    // karena method testMobil adalah final method
    
    // public function testMobil()
    // {
    //     echo "Mobil itu berwarna Merah, dan bermerk Toyota";
    // }

    public function result()
    {
        echo 'Itu bukan mobil anda karena merk mobil anda Lykan Hypersport';
    }
}
