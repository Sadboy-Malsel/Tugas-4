<?php
    include "../koneksi.php";

    if($_POST){
    $id_mahasiswa=$_POST['id_mahasiswa'];
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
        echo "<script>alert('NIM Tidak Boleh Kosong');location.href='tambahmahasiswa.php';</script>";
    }elseif(empty($jurusan)){
        echo "<script>alert('Jurusan Tidak Boleh Kosong');location.href='tambahmahasiswa.php';</script>";
    }
    elseif(empty($alamat)){
        echo "<script>alert('ALAMAT Tidak Boleh Kosong');location.href='tambahmahasiswa.php';</script>";
    }
    elseif(empty($username)){
        echo "<script>alert('USERNAME Tidak Boleh Kosong');location.href='tambahmahasiswa.php';</script>";
    }
    elseif(empty($password)){
        echo "<script>alert('PASSWORD Tidak Boleh Kosong');location.href='tambahmahasiswa.php';</script>";
    }
    else{
        include "koneksi.php";
        $update=mysqli_query($koneksi,"update mahasiswa set nama='$nama',nim='$nim',id_jurusan='$jurusan',alamat='$alamat',username='$username',password='$password' where id_mahasiswa='".$id_mahasiswa."'") or die(mysqli_error($koneksi));
        if($update){
            echo "<script>alert('Sukses Update Data Mahasiswa');location.href='datamahasiswa.php';</script>";
                    }
        else{
            echo "<script>alert('Gagal Update Mahasiswa');location.href='tambahmahasiswa.php';</script>";

            }
        }
    }
?>