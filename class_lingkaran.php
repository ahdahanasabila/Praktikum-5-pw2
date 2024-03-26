<?php

class Lingkaran
{
    // Properti
    private $jari_jari;

    // Konstruktor
    function __construct($jari_jari)
    {
        $this->jari_jari = $jari_jari;
    }

    // Metode untuk menghitung luas lingkaran
    function hitungLuas()
    {
        return pi() * pow($this->jari_jari, 2);
    }

    // Metode untuk menghitung keliling lingkaran
    function hitungKeliling()
    {
        return 2 * pi() * $this->jari_jari;
    }
}

// Membuat objek lingkaran
$lingkaran = new Lingkaran(7);

// Menampilkan hasil perhitungan
echo "Luas Lingkaran: " . $lingkaran->hitungLuas() . "<br>";
echo "Keliling Lingkaran: " . $lingkaran->hitungKeliling();

?>