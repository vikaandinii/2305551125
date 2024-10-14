<?php
namespace vika;

class TanamanObat extends Tanaman {
    public function __construct($nama, $khasiat) {
        parent::__construct($nama, null, $khasiat);
    }

    public function info() {
        return parent::info() . " Ini adalah tanaman obat.";
    }
}
?>
