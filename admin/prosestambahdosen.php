<?php
    if($_POST){
    $nama_dosen=$_POST['nama_dosen'];
    $alamat=$_POST['alamat'];
    $telepon=$_POST['telepon'];

    if(empty($nama_dosen)){
        echo "<script>alert('Nama Dosen Tidak Boleh Kosong');location.href='tambahdosen.php';</script>";
    }
    elseif(empty($alamat)){
        echo "<script>alert('Alamat Tidak Boleh Kosong');location.href='tambahdosen.php';</script>";
    }elseif(empty($telepon)){
        echo "<script>alert('Telepon Tidak Boleh Kosong');location.href='tambahdosen.php';</script>";
    }else{
        include "../koneksi.php";
        $insert=mysqli_query($koneksi, "insert into dosen (nama_dosen, alamat, telepon)
            value ('".$nama_dosen."','".$alamat."', '".$telepon."')") or die(mysqli_error($koneksi));
        if($insert){
            echo "<script>alert('Sukses Menambahkan Data Dosen');location.href='datadosen.php';</script>";
                    }
        else{
            echo "<script>alert('Gagal Menambahkan Data Dosen');location.href='tambahdosen.php';</script>";

            }
        }
    }
?>