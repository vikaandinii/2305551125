<?php
// Menggunakan spl_autoload_register untuk memuat kelas secara otomatis
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

// Membuat objek dari class TanamanHias
$tanamanHiasKu = new TanamanHias('Anggrek', 'Putih');

// Membuat objek dari class TanamanObat
$tanamanObatKu = new TanamanObat('Jahe', 'Mengobati masuk angin');

// Membuat objek dari class TanamanBeracun
$tanamanBeracunKu = new TanamanBeracun('Oleander', 'Tinggi');

// Mengakses metode untuk Tanaman Hias
echo $tanamanHiasKu->rawat() . PHP_EOL;
echo $tanamanHiasKu->info() . PHP_EOL;

// Mengakses metode untuk Tanaman Obat
echo $tanamanObatKu->rawat() . PHP_EOL;
echo $tanamanObatKu->info() . PHP_EOL;

// Mengakses metode untuk Tanaman Beracun
echo $tanamanBeracunKu->rawat() . PHP_EOL;
echo $tanamanBeracunKu->info() . PHP_EOL;
?>
