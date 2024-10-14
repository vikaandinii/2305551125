<?php
// Kelas TanamanBeracun
class TanamanBeracun extends Tanaman {
    protected $tingkatRacun; // Tingkat racun tanaman

    // Constructor
    public function __construct($nama, $tingkatRacun) {
        parent::__construct($nama);
        $this->tingkatRacun = $tingkatRacun;
    }

    // Method untuk menampilkan informasi tanaman beracun
    public function info() {
        return parent::info() . " Ini adalah tanaman beracun dengan tingkat racun: {$this->tingkatRacun}.";
    }
}
?>
