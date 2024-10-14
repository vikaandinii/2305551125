<?php
// Kelas Tanaman
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
?>
