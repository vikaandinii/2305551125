<?php

abstract class Bangunan {
    protected $nama;
    protected $luas;

    // Constructor
    public function __construct($nama, $luas) {
        $this->nama = $nama;
        $this->luas = $luas;
    }

    // Metode abstrak untuk mendapatkan informasi bangunan
    abstract public function info();

    // Method untuk merawat bangunan
    public function rawat() {
        return "Merawat bangunan {$this->nama}.";
    }
}


class Rumah extends Bangunan {
    private $jumlahKamar;

    public function __construct($nama, $luas, $jumlahKamar) {
        parent::__construct($nama, $luas);
        $this->jumlahKamar = $jumlahKamar;
    }

    public function info() {
        return "{$this->rawat()} Luas: {$this->luas} m², Jumlah Kamar: {$this->jumlahKamar}. Ini adalah rumah.";
    }
}


class Kantor extends Bangunan {
    private $jumlahLantai;

    public function __construct($nama, $luas, $jumlahLantai) {
        parent::__construct($nama, $luas);
        $this->jumlahLantai = $jumlahLantai;
    }

    public function info() {
        return "{$this->rawat()} Luas: {$this->luas} m², Jumlah Lantai: {$this->jumlahLantai}. Ini adalah kantor.";
    }
}

// Program Utama
$rumahKu = new Rumah('Rumah Cantik', 120, 3);
$kantorKu = new Kantor('Kantor Utama', 300, 5);

// Mengakses metode untuk setiap jenis bangunan
$bangunanList = [$rumahKu, $kantorKu];

foreach ($bangunanList as $bangunan) {
    echo $bangunan->info() . PHP_EOL; // Memanggil metode info
}
?>
