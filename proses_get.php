<?php
    if(isset($_GET)){
        $nama = $_GET['nama_siswa'];
        $kelas = $_GET['kelas'];
        $husbu = $_GET['husbu'];

        echo "Nama Siswa : $nama <br>";
        echo "Kelas : $kelas <br>";
        echo "Husbu : $husbu";
    }
?>