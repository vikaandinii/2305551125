<?php
namespace App;


abstract class Tanaman {
    private string $nama;
    private string $jenis;
    private string $warna;

    public function __construct(string $nama, string $jenis, string $warna) {
        $this->nama = $nama;
        $this->jenis = $jenis;
        $this->warna = $warna;
    }

    abstract public function deskripsi(): string;
    
    protected function getNama(): string {
        return $this->nama;
    }

    protected function getJenis(): string {
        return $this->jenis;
    }

    protected function getWarna(): string {
        return $this->warna;
    }
}


class TanamanHias extends Tanaman {
    private string $fungsiDekoratif;

    public function __construct(string $nama, string $warna, string $fungsiDekoratif) {
        parent::__construct($nama, 'Hias', $warna);
        $this->fungsiDekoratif = $fungsiDekoratif;
    }

    public function deskripsi(): string {
        return "Tanaman Hias: {$this->getNama()} berwarna {$this->getWarna()} dan digunakan untuk {$this->fungsiDekoratif}.";
    }
}


class TanamanObat extends Tanaman {
    private string $khasiat;

    public function __construct(string $nama, string $warna, string $khasiat) {
        parent::__construct($nama, 'Obat', $warna);
        $this->khasiat = $khasiat;
    }

    public function deskripsi(): string {
        return "Tanaman Obat: {$this->getNama()} berwarna {$this->getWarna()} dan memiliki khasiat {$this->khasiat}.";
    }
}


class TanamanHutan extends Tanaman {
    private string $habitat;

    public function __construct(string $nama, string $warna, string $habitat) {
        parent::__construct($nama, 'Hutan', $warna);
        $this->habitat = $habitat;
    }

    public function deskripsi(): string {
        return "Tanaman Hutan: {$this->getNama()} berwarna {$this->getWarna()} dan tumbuh di habitat {$this->habitat}.";
    }
}


class TanamanKebun extends Tanaman {
    private string $manfaatKebun;

    public function __construct(string $nama, string $warna, string $manfaatKebun) {
        parent::__construct($nama, 'Kebun', $warna);
        $this->manfaatKebun = $manfaatKebun;
    }

    public function deskripsi(): string {
        return "Tanaman Kebun: {$this->getNama()} berwarna {$this->getWarna()} dan bermanfaat untuk {$this->manfaatKebun}.";
    }
}


class TanamanBeracun extends Tanaman {
    private string $tingkatRacun;

    public function __construct(string $nama, string $warna, string $tingkatRacun) {
        parent::__construct($nama, 'Beracun', $warna);
        $this->tingkatRacun = $tingkatRacun;
    }

    public function deskripsi(): string {
        return "Tanaman Beracun: {$this->getNama()} berwarna {$this->getWarna()} dan memiliki tingkat racun {$this->tingkatRacun}.";
    }
}

// Membuat objek dari berbagai class dan menampilkan deskripsi
$tanamanHias = new TanamanHias("Anggrek", "Putih", "dekorasi");
echo $tanamanHias->deskripsi() . "\n";

$tanamanObat = new TanamanObat("Jahe", "Kuning", "mengobati masuk angin");
echo $tanamanObat->deskripsi() . "\n";

$tanamanHutan = new TanamanHutan("Beringin", "Hijau", "hutan tropis");
echo $tanamanHutan->deskripsi() . "\n";

$tanamanKebun = new TanamanKebun("Tomat", "Merah", "memproduksi buah");
echo $tanamanKebun->deskripsi() . "\n";

$tanamanBeracun = new TanamanBeracun("Oleander", "Merah Muda", "tinggi");
echo $tanamanBeracun->deskripsi() . "\n";
?>
