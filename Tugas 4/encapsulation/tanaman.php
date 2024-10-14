<?php

namespace App;

// Kelas Induk Tanaman
abstract class Tanaman {
    private $nama;  
    private $jenis; 
    private $warna; 

    public function __construct($nama, $jenis, $warna) {
        $this->setNama($nama);
        $this->setJenis($jenis);
        $this->setWarna($warna);
    }

    // Getter dan Setter untuk nama
    public function getNama() {
        return $this->nama;
    }

    public function setNama($nama) {
        if (empty($nama)) {
            throw new \Exception("Nama tanaman tidak boleh kosong.");
        }
        $this->nama = $nama;
    }

    // Getter dan Setter untuk jenis
    public function getJenis() {
        return $this->jenis;
    }

    public function setJenis($jenis) {
        $this->jenis = $jenis;
    }

    // Getter dan Setter untuk warna
    public function getWarna() {
        return $this->warna;
    }

    public function setWarna($warna) {
        if (empty($warna)) {
            throw new \Exception("Warna tanaman tidak boleh kosong.");
        }
        $this->warna = $warna;
    }

    // Method abstrak untuk subclass
    abstract public function deskripsi();
}

// Subclass TanamanHias
class TanamanHias extends Tanaman {
    public function __construct($nama, $warna, $fungsi) {
        parent::__construct($nama, 'Tanaman Hias', $warna);
        $this->fungsi = $fungsi;
    }

    private $fungsi; 

    public function getFungsi() {
        return $this->fungsi;
    }

    public function setFungsi($fungsi) {
        $this->fungsi = $fungsi;
    }

    public function deskripsi() {
        return "Tanaman Hias: " . $this->getNama() . " berwarna " . $this->getWarna() . " dan digunakan untuk " . $this->getFungsi();
    }
}


try {
    $tanamanHias = new TanamanHias("Anggrek", "Putih", "dekorasi");
    echo $tanamanHias->deskripsi() . "\n";

    // Ubah nama dan warna tanaman
    $tanamanHias->setNama("Anggrek Biru");
    $tanamanHias->setWarna("Biru");
    echo "Nama Tanaman Setelah Diubah: " . $tanamanHias->getNama() . "\n";
    echo "Warna Tanaman Setelah Diubah: " . $tanamanHias->getWarna() . "\n";
} catch (\Exception $e) {
    echo 'Kesalahan: ' . $e->getMessage() . "\n";
}

?>
