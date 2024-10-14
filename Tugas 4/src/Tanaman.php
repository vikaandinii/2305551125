<?php
namespace vika;

class Tanaman {
    protected $nama;
    protected $warna;
    protected $khasiat;

    public function __construct($nama, $warna = null, $khasiat = null) {
        $this->nama = $nama;
        $this->warna = $warna;
        $this->khasiat = $khasiat;
    }

    public function rawat() {
        return "Merawat tanaman {$this->nama}.";
    }

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
?>
