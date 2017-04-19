<?php

// kita akan mencoba untuk memanggil isi dari class tanpa membuat object terlebih dahulu, gimana caranya ?
// kita akan menggunakan operator scope resolution

require_once 'Handphone.php';

// dibawah adalah cara untuk menggunakan operator scope resolution
// kita tinggal menulis nama class, lalu :: dan nama method / property yang ingin dipanggil
var_dump(Handphone::$jenisHandphone);
var_dump(Handphone::cetak());
