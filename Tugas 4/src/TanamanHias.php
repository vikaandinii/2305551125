<?php
namespace vika;

class TanamanHias extends Tanaman {
    public function __construct($nama, $warna) {
        parent::__construct($nama, $warna);
    }

    public function info() {
        return parent::info() . " Ini adalah tanaman hias.";
    }
}
?>
