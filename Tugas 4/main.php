<?php
require __DIR__ . '/vendor/autoload.php';

use vika\TanamanHias;
use vika\TanamanObat;
use vika\TanamanBeracun;

$tanamanHiasKu = new TanamanHias('Anggrek', 'Putih');
$tanamanObatKu = new TanamanObat('Jahe', 'Mengobati masuk angin');
$tanamanBeracunKu = new TanamanBeracun('Oleander', 'Tinggi');

echo $tanamanHiasKu->rawat() . PHP_EOL;
echo $tanamanHiasKu->info() . PHP_EOL;

echo $tanamanObatKu->rawat() . PHP_EOL;
echo $tanamanObatKu->info() . PHP_EOL;

echo $tanamanBeracunKu->rawat() . PHP_EOL;
echo $tanamanBeracunKu->info() . PHP_EOL;
?>
