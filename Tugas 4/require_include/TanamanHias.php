<?php
require_once 'Tanaman.php';

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
?>
