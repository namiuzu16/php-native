<?php
    if(isset($_POST)){
        extract($_POST);
        echo "Nama Siswa : $nama_siswa <br>";
        echo "Kelas : $kelas <br>";
        echo "Alamat : $alamat";
    }
?>