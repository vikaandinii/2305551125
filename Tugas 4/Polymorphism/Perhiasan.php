<?php

class Perhiasan {
    
    protected $nama;
    protected $bahan;
    protected $harga;

    // Constructor
    public function __construct($nama, $bahan, $harga) {
        $this->nama = $nama;
        $this->bahan = $bahan;
        $this->harga = $harga;
    }

    // Method untuk mendapatkan informasi perhiasan
    public function info() {
        return "Nama: {$this->nama}, Bahan: {$this->bahan}, Harga: Rp {$this->harga}";
    }

    // Method untuk merawat perhiasan
    public function rawat() {
        return "Merawat perhiasan {$this->nama}.";
    }
}


class Cincin extends Perhiasan {
    protected $ukuran;

    // Constructor
    public function __construct($nama, $bahan, $harga, $ukuran) {
        parent::__construct($nama, $bahan, $harga);
        $this->ukuran = $ukuran;
    }

    // Override method info()
    public function info() {
        return parent::info() . ", Ukuran: {$this->ukuran} mm. Ini adalah cincin.";
    }
}


class Kalung extends Perhiasan {
    protected $panjang;

    // Constructor
    public function __construct($nama, $bahan, $harga, $panjang) {
        parent::__construct($nama, $bahan, $harga);
        $this->panjang = $panjang;
    }

    // Override method info()
    public function info() {
        return parent::info() . ", Panjang: {$this->panjang} cm. Ini adalah kalung.";
    }
}


class Anting extends Perhiasan {
    protected $tipe;

    // Constructor
    public function __construct($nama, $bahan, $harga, $tipe) {
        parent::__construct($nama, $bahan, $harga);
        $this->tipe = $tipe;
    }

    // Override method info()
    public function info() {
        return parent::info() . ", Tipe: {$this->tipe}. Ini adalah anting.";
    }
}


class Gelang extends Perhiasan {
    protected $lebar;

    // Constructor
    public function __construct($nama, $bahan, $harga, $lebar) {
        parent::__construct($nama, $bahan, $harga);
        $this->lebar = $lebar;
    }

    // Override method info()
    public function info() {
        return parent::info() . ", Lebar: {$this->lebar} cm. Ini adalah gelang.";
    }
}

// Program Utama
// Membuat objek dari class Cincin
$cincinKu = new Cincin('Cincin Berlian', 'Emas', 1000000, 16);

// Membuat objek dari class Kalung
$kalungKu = new Kalung('Kalung Mutiara', 'Mutiara', 1500000, 40);

// Membuat objek dari class Anting
$antingKu = new Anting('Anting Emas', 'Emas', 800000, 'Tersangkai');

// Membuat objek dari class Gelang
$gelangKu = new Gelang('Gelang Perak', 'Perak', 500000, 2.5);

// Mengakses metode untuk setiap jenis perhiasan
$perhiasanList = [$cincinKu, $kalungKu, $antingKu, $gelangKu];

foreach ($perhiasanList as $perhiasan) {
    echo $perhiasan->rawat() . PHP_EOL; // Memanggil metode rawat
    echo $perhiasan->info() . PHP_EOL;  // Memanggil metode info yang menggunakan polimorfisme
}
?>
