<?php
    if($_POST){
    $nama=$_POST['nama'];
    $nim=$_POST['nim'];
    $jurusan=$_POST['jurusan'];
    $alamat=$_POST['alamat'];
    $username=$_POST['username'];
    $password=$_POST['password'];

    if(empty($nama)){
        echo "<script>alert('Nama Mahasiswa Tidak Boleh Kosong');location.href='tambahmahasiswa.php';</script>";
    }
    elseif(empty($nim)){
        echo "<script>alert('NIM Tidak Boleh Kosong');location.href='tambahjadwal.php';</script>";
    }elseif(empty($jurusan)){
        echo "<script>alert('Jurusan Tidak Boleh Kosong');location.href='tambahjadwal.php';</script>";
    }
    elseif(empty($alamat)){
        echo "<script>alert('ALAMAT Tidak Boleh Kosong');location.href='tambahjadwal.php';</script>";
    }
    elseif(empty($username)){
        echo "<script>alert('USERNAME Tidak Boleh Kosong');location.href='tambahjadwal.php';</script>";
    }
    elseif(empty($password)){
        echo "<script>alert('PASSWORD Tidak Boleh Kosong');location.href='tambahjadwal.php';</script>";
    }
    else{
        include "../koneksi.php";
        $insert=mysqli_query($koneksi, "insert into mahasiswa (nama, nim, alamat, username, password, id_jurusan)
            value ('".$nama."','".$nim."', '".$alamat."', '".$username."', '".$password."','".$jurusan."')") or die(mysqli_error($koneksi));
        if($insert){
            echo "<script>alert('Sukses Menambahkan Data Mahasiswa');location.href='datamahasiswa.php';</script>";
                    }
        else{
            echo "<script>alert('Gagal Menambahkan Mahasiswa');location.href='tambahmahasiswa.php';</script>";

            }
        }
    }
?>