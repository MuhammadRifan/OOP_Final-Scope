<?php

class Handphone
{
    // public static property hampir sama seperti constant, hanya beberapa yang berbeda
    public static $jenisHandphone = 'nokia';

    // static method lebih melekat ke class daripada object, oleh karena itu,
    // static method selalu berpasangan dengan scope resolution, karena tidak ada object
    public static function cetakJenisHandphone()
    { // cara memanggil static property pun hampir sama dengan constant, yakni menggunakan self
        return 'Jenis HP : '.self::$jenisHandphone;
    }
}
