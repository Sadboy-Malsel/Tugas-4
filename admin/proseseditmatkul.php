<?php
include "../koneksi.php";

if($_POST){
    $id_matkul=$_POST['id_matkul'];
    $nama_matkul=$_POST['nama_matkul'];

    if(empty($nama_matkul)){
        echo "<script>alert('nama dosen tidak boleh kosong');location.href='edit_dosen.php';</script>";
    }else {
        include "koneksi.php";
        $update=mysqli_query($koneksi,"update matakuliah set nama_matkul= '$nama_matkul' where id_matkul='".$id_matkul."'") or die(mysqli_error($koneksi));
      if($update){
        echo "<script>alert('Sukses update data matakuliah');location.href='matakuliah.php';</script>";
      }else {
        echo "<script>alert('Gagal update data matakuliah');location.href='matakuliah.php';</script>";
      }
    }
}
?>