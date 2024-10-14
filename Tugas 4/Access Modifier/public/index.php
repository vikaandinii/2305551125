<?php
namespace App;

abstract class Pakaian {
    public string $nama;  // Public property
    public string $jenis; // Public property
    public string $warna; // Public property

    public function __construct(string $nama, string $jenis, string $warna) {
        $this->nama = $nama;
        $this->jenis = $jenis;
        $this->warna = $warna;
    }

    // Method abstrak yang harus diimplementasikan oleh subclass
    abstract public function deskripsi(): string;
}

class PakaianHarian extends Pakaian {
    public string $bahan; // Public property

    public function __construct(string $nama, string $warna, string $bahan) {
        parent::__construct($nama, 'Harian', $warna);
        $this->bahan = $bahan;
    }

    public function deskripsi(): string {
        return "Pakaian Harian: $this->nama berwarna $this->warna terbuat dari $this->bahan.";
    }
}

class PakaianResmi extends Pakaian {
    public string $ukuran; // Public property

    public function __construct(string $nama, string $warna, string $ukuran) {
        parent::__construct($nama, 'Resmi', $warna);
        $this->ukuran = $ukuran;
    }

    public function deskripsi(): string {
        return "Pakaian Resmi: $this->nama berwarna $this->warna dengan ukuran $this->ukuran.";
    }
}


class PakaianOlahraga extends Pakaian {
    public string $tipeOlahraga; // Public property

    public function __construct(string $nama, string $warna, string $tipeOlahraga) {
        parent::__construct($nama, 'Olahraga', $warna);
        $this->tipeOlahraga = $tipeOlahraga;
    }

    public function deskripsi(): string {
        return "Pakaian Olahraga: $this->nama berwarna $this->warna cocok untuk $this->tipeOlahraga.";
    }
}


class PakaianMusiman extends Pakaian {
    public string $musim; // Public property

    public function __construct(string $nama, string $warna, string $musim) {
        parent::__construct($nama, 'Musiman', $warna);
        $this->musim = $musim;
    }

    public function deskripsi(): string {
        return "Pakaian Musiman: $this->nama berwarna $this->warna dirancang untuk musim $this->musim.";
    }
}


class PakaianAksesoris extends Pakaian {
    public string $jenisAksesoris; // Public property

    public function __construct(string $nama, string $warna, string $jenisAksesoris) {
        parent::__construct($nama, 'Aksesoris', $warna);
        $this->jenisAksesoris = $jenisAksesoris;
    }

    public function deskripsi(): string {
        return "Pakaian Aksesoris: $this->nama berwarna $this->warna adalah jenis aksesoris $this->jenisAksesoris.";
    }
}

// Membuat objek dari berbagai class dan menampilkan deskripsi
$pakaianHarian = new PakaianHarian("Kaos", "Biru", "Katun");
echo $pakaianHarian->deskripsi() . "\n";

$pakaianResmi = new PakaianResmi("Jas", "Hitam", "L");
echo $pakaianResmi->deskripsi() . "\n";

$pakaianOlahraga = new PakaianOlahraga("Jersey", "Merah", "Sepak Bola");
echo $pakaianOlahraga->deskripsi() . "\n";

$pakaianMusiman = new PakaianMusiman("Jaket", "Hijau", "Dingin");
echo $pakaianMusiman->deskripsi() . "\n";

$pakaianAksesoris = new PakaianAksesoris("Topi", "Putih", "Bersepeda");
echo $pakaianAksesoris->deskripsi() . "\n";
?>
