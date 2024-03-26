<?php

class PersegiPanjang
{
    // Properti
    private $panjang;
    private $lebar;

    // Konstruktor
    function __construct($panjang, $lebar)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    // Metode untuk menghitung luas persegi panjang
    function hitungLuas()
    {
        return $this->panjang * $this->lebar;
    }

    // Metode untuk menghitung keliling persegi panjang
    function hitungKeliling()
    {
        return 2 * ($this->panjang + $this->lebar);
    }
}

// Membuat objek persegi panjang
$persegi_panjang = new PersegiPanjang(5, 8);

// Menampilkan hasil perhitungan
echo "Luas Persegi Panjang: " . $persegi_panjang->hitungLuas() . "<br>";
echo "Keliling Persegi Panjang: " . $persegi_panjang->hitungKeliling();

?>