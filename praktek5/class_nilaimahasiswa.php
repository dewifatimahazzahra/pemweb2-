<?php 

class NilaiMahasiswa
{
    var $nama, $matkul, $nilai;

    function __construct($nama, $matkul, $nilai)
    {
        $this->nama = $nama;
        $this->matkul = $matkul;
        $this->nilai = $nilai;
    }

    function kelulusan()
    {
        return $this->nilai < 56 ? "Tidak Lulus" : "Lulus";
    }

    function hasil()
    {
        if ($this->nilai > 0 && $this->nilai <= 35){
            return "E";
        } elseif ($this->nilai <= 55){
            return "D";
        } elseif ($this->nilai <= 69){
            return "C";
        } elseif ($this->nilai <= 84){
            return "B";
        } elseif ($this->nilai <= 100){
            return "A";
        } else {
            return "NILAI TIDAK VALID";
        } 
    }
}

?>