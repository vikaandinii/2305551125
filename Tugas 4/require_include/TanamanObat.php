<?php
require_once 'Tanaman.php';

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
?>
