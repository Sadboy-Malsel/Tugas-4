<?php
    if($_POST){
    $nama_matkul=$_POST['nama_matkul'];

    if(empty($nama_matkul)){
        echo "<script>alert('Nama Mata Kuliah Tidak Boleh Kosong');location.href='tambahmatkul.php';</script>";
    }else{
        include "../koneksi.php";
        $insert=mysqli_query($koneksi, "insert into matakuliah (nama_matkul)
            value ('".$nama_matkul."')") or die(mysqli_error($koneksi));
        if($insert){
            echo "<script>alert('Sukses Menambahkan Data Mata Kuliah');location.href='matakuliah.php';</script>";
                    }
        else{
            echo "<script>alert('Gagal Menambahkan Data Mata Kuliah');location.href='matakuliah.php';</script>";

            }
        }
    }
?>