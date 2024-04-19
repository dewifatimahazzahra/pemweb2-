<?php 

class Mahasiswa{
    var $ipk;
    var $nama;
    var $nim;
    var $prodi;
    var $thn_angkatan;

    function __construct ($nim, $nama){
        $this ->nim = $nim;
        $this ->nama = $nama;
    }

    function predikat_ipk(){
        if ($this ->ipk < 2.0) {
            return "Cukup";
        } else if ($this ->ipk < 3.0) {
            return "Baik";
        } else if ($this ->ipk < 3.75) {
            return "Memuaskan";
        } else {
            return "Cum Laude";
        }
    }
}
?>