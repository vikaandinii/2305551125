<?php

class Tanaman {
    // Properti
    protected $nama;
    protected $warna; // Hanya untuk tanaman hias
    protected $khasiat; // Hanya untuk tanaman obat
    protected $kebutuhanAir; // Kebutuhan air tanaman
    protected $nutrisi; // Nutrisi yang diperlukan

    // Constructor
    public function __construct($nama, $warna = null, $khasiat = null, $kebutuhanAir = "Sedang", $nutrisi = "Nutrisi Dasar") {
        $this->nama = $nama;
        $this->warna = $warna;
        $this->khasiat = $khasiat;
        $this->kebutuhanAir = $kebutuhanAir;
        $this->nutrisi = $nutrisi;
    }

    // Method untuk merawat tanaman
    public function rawat() {
        return "Merawat tanaman {$this->nama}.";
    }

    // Method untuk mendapatkan informasi tanaman
    public function info() {
        $infoMessage = "Nama: {$this->nama}.";
        if ($this->khasiat) {
            $infoMessage .= " Khasiat: {$this->khasiat}.";
        } elseif ($this->warna) {
            $infoMessage .= " Warna: {$this->warna}.";
        }
        return $infoMessage;
    }

    // Method untuk mengumumkan tanaman
    public function umumkan() {
        return "Hai, saya adalah tanaman {$this->nama}!";
    }

    // Method untuk menampilkan kebutuhan air
    public function kebutuhanAir() {
        return "{$this->nama} membutuhkan air dengan tingkat: {$this->kebutuhanAir}.";
    }

    // Method untuk menampilkan nutrisi
    public function nutrisi() {
        return "{$this->nama} memerlukan nutrisi: {$this->nutrisi}.";
    }

    // Method untuk menampilkan deskripsi lengkap
    public function deskripsiLengkap() {
        return $this->rawat() . " " . $this->info() . " " . $this->kebutuhanAir() . " " . $this->nutrisi();
    }
}

// Membuat objek dari class Tanaman
$tanamanHiasKu = new Tanaman('Anggrek', 'Putih', null, 'Rendah', 'Nutrisi Khusus Anggrek');
$tanamanObatKu = new Tanaman('Jahe', null, 'Mengobati masuk angin', 'Sedang', 'Nutrisi Tanaman Obat');

// Mengakses metode untuk Tanaman Hias
echo $tanamanHiasKu->umumkan() . PHP_EOL;
echo $tanamanHiasKu->deskripsiLengkap() . PHP_EOL;

// Mengakses metode untuk Tanaman Obat
echo $tanamanObatKu->umumkan() . PHP_EOL;
echo $tanamanObatKu->deskripsiLengkap() . PHP_EOL;
?>
