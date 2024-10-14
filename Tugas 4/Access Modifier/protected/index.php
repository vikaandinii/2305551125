<?php
namespace App;


abstract class BarangElektronik {
    protected string $nama;
    protected string $merk;
    protected string $model;

    public function __construct(string $nama, string $merk, string $model) {
        $this->nama = $nama;
        $this->merk = $merk;
        $this->model = $model;
    }

    abstract public function deskripsi(): string;
}


class Televisi extends BarangElektronik {
    protected float $ukuran;

    public function __construct(string $nama, string $merk, string $model, float $ukuran) {
        parent::__construct($nama, $merk, $model);
        $this->ukuran = $ukuran;
    }

    public function deskripsi(): string {
        return "Televisi: $this->nama, Merk: $this->merk, Model: $this->model, Ukuran: $this->ukuran inci.";
    }
}


class Kulkas extends BarangElektronik {
    protected float $kapasitas;

    public function __construct(string $nama, string $merk, string $model, float $kapasitas) {
        parent::__construct($nama, $merk, $model);
        $this->kapasitas = $kapasitas;
    }

    public function deskripsi(): string {
        return "Kulkas: $this->nama, Merk: $this->merk, Model: $this->model, Kapasitas: $this->kapasitas liter.";
    }
}


class Laptop extends BarangElektronik {
    protected int $ram;

    public function __construct(string $nama, string $merk, string $model, int $ram) {
        parent::__construct($nama, $merk, $model);
        $this->ram = $ram;
    }

    public function deskripsi(): string {
        return "Laptop: $this->nama, Merk: $this->merk, Model: $this->model, RAM: $this->ram GB.";
    }
}


class Smartphone extends BarangElektronik {
    protected int $kamera;

    public function __construct(string $nama, string $merk, string $model, int $kamera) {
        parent::__construct($nama, $merk, $model);
        $this->kamera = $kamera;
    }

    public function deskripsi(): string {
        return "Smartphone: $this->nama, Merk: $this->merk, Model: $this->model, Kamera: $this->kamera MP.";
    }
}


class Radio extends BarangElektronik {
    protected float $frekuensi;

    public function __construct(string $nama, string $merk, string $model, float $frekuensi) {
        parent::__construct($nama, $merk, $model);
        $this->frekuensi = $frekuensi;
    }

    public function deskripsi(): string {
        return "Radio: $this->nama, Merk: $this->merk, Model: $this->model, Frekuensi: $this->frekuensi MHz.";
    }
}

// Membuat objek dari berbagai class dan menampilkan deskripsi
$televisi = new Televisi("Samsung QLED", "Samsung", "QA55Q60TA", 55);
echo $televisi->deskripsi() . "\n";

$kulkas = new Kulkas("LG InstaView", "LG", "GC-B247SVUV", 601);
echo $kulkas->deskripsi() . "\n";

$laptop = new Laptop("MacBook Pro", "Apple", "M1 2020", 16);
echo $laptop->deskripsi() . "\n";

$smartphone = new Smartphone("Samsung Galaxy S21", "Samsung", "SM-G991B", 64);
echo $smartphone->deskripsi() . "\n";

$radio = new Radio("Sony FM/AM", "Sony", "ICF-P26", 87.5);
echo $radio->deskripsi() . "\n";
?>
