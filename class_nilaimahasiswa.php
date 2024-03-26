<?php
class NilaiMahasiswa
{
    var $nim, $matkul, $nilai;

    function __construct($nim, $matkul, $nilai)
    {
        $this->nim = $nim;
        $this->matkul = $matkul;
        $this->nilai = $nilai;
    }

    function getNIM()
    {
        return $this->nim;
    }

    function getMatkul()
    {
        return $this->matkul;
    }

    function getNilai()
    {
        return $this->nilai;
    }

    function kelulusan()
    {
        return $this->nilai < 56 ? "TIDAK LULUS" : "LULUS";
    }

    function hasil()
    {
        if ($this->nilai > 0 && $this->nilai <= 35) {
            return "E";
        } else if ($this->nilai <= 55) {
            return "D";
        } else if ($this->nilai <= 69) {
            return "C";
        } else if ($this->nilai <= 84) {
            return "B";
        } else if ($this->nilai <= 100) {
            return "A";
        } else {
            return "Nilai tidak valid";
        }
    }
}
    
$nilai_mahasiswa = new NilaiMahasiswa("0110223165", "Matematika", 75);
echo "NIM:" . $nilai_mahasiswa->getNIM() . "<br>";
echo "Mata Kuliah :" . $nilai_mahasiswa->getMatkul() . "<br>";
echo "Nilai:" . $nilai_mahasiswa->getNilai() . "<br>";
echo "Kelulusan:" . $nilai_mahasiswa->kelulusan() . "<br>";
echo "Hasil:" . $nilai_mahasiswa->hasil() . "<br>";


?>