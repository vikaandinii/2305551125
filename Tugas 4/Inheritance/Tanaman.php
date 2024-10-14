<?php

class Tanaman {
    // Properti
    protected $nama;
    protected $warna; // Hanya untuk tanaman hias
    protected $khasiat; // Hanya untuk tanaman obat

    // Constructor
    public function __construct($nama, $warna = null, $khasiat = null) {
        $this->nama = $nama;
        $this->warna = $warna;
        $this->khasiat = $khasiat;
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
}

// Kelas TanamanHias
class TanamanHias extends Tanaman {
    // Constructor
    public function __construct($nama, $warna) {
        parent::__construct($nama, $warna);
    }

    // Method untuk menampilkan informasi tanaman hias
    public function info() {
        return parent::info() . " Ini adalah tanaman hias.";
    }
}

// Kelas TanamanObat
class TanamanObat extends Tanaman {
    // Constructor
    public function __construct($nama, $khasiat) {
        parent::__construct($nama, null, $khasiat);
    }

    // Method untuk menampilkan informasi tanaman obat
    public function info() {
        return parent::info() . " Ini adalah tanaman obat.";
    }
}

// Kelas TanamanBeracun
class TanamanBeracun extends Tanaman {
    protected $tingkatRacun; // Tingkat racun tanaman

    // Constructor
    public function __construct($nama, $tingkatRacun) {
        parent::__construct($nama);
        $this->tingkatRacun = $tingkatRacun;
    }

    // Method untuk menampilkan informasi tanaman beracun
    public function info() {
        return parent::info() . " Ini adalah tanaman beracun dengan tingkat racun: {$this->tingkatRacun}.";
    }
}

// Kelas TanamanHutan
class TanamanHutan extends Tanaman {
    protected $habitat; // Habitat tanaman

    // Constructor
    public function __construct($nama, $warna, $habitat) {
        parent::__construct($nama, $warna);
        $this->habitat = $habitat;
    }

    // Method untuk menampilkan informasi tanaman hutan
    public function info() {
        return parent::info() . " Habitat: {$this->habitat}. Ini adalah tanaman hutan.";
    }
}

// Kelas TanamanKebun
class TanamanKebun extends Tanaman {
    protected $manfaat; // Manfaat tanaman kebun

    // Constructor
    public function __construct($nama, $warna, $manfaat) {
        parent::__construct($nama, $warna);
        $this->manfaat = $manfaat;
    }

    // Method untuk menampilkan informasi tanaman kebun
    public function info() {
        return parent::info() . " Manfaat: {$this->manfaat}. Ini adalah tanaman kebun.";
    }
}

// Program Utama
// Membuat objek dari class TanamanHias
$tanamanHiasKu = new TanamanHias('Anggrek', 'Putih');

// Membuat objek dari class TanamanObat
$tanamanObatKu = new TanamanObat('Jahe', 'Mengobati masuk angin');

// Membuat objek dari class TanamanBeracun
$tanamanBeracunKu = new TanamanBeracun('Oleander', 'Tinggi');

// Membuat objek dari class TanamanHutan
$tanamanHutanKu = new TanamanHutan('Beringin', 'Hijau', 'Hutan Tropis');

// Membuat objek dari class TanamanKebun
$tanamanKebunKu = new TanamanKebun('Tomat', 'Merah', 'Sumber makanan');

// Mengakses metode untuk Tanaman Hias
echo $tanamanHiasKu->rawat() . PHP_EOL;
echo $tanamanHiasKu->info() . PHP_EOL;

// Mengakses metode untuk Tanaman Obat
echo $tanamanObatKu->rawat() . PHP_EOL;
echo $tanamanObatKu->info() . PHP_EOL;

// Mengakses metode untuk Tanaman Beracun
echo $tanamanBeracunKu->rawat() . PHP_EOL;
echo $tanamanBeracunKu->info() . PHP_EOL;

// Mengakses metode untuk Tanaman Hutan
echo $tanamanHutanKu->rawat() . PHP_EOL;
echo $tanamanHutanKu->info() . PHP_EOL;

// Mengakses metode untuk Tanaman Kebun
echo $tanamanKebunKu->rawat() . PHP_EOL;
echo $tanamanKebunKu->info() . PHP_EOL;
?>
