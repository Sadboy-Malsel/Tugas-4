<?php
    if($_GET['id_matkul']){
        include "../koneksi.php";
        $qry_hapus=mysqli_query($koneksi,"delete from matakuliah 
            where id_matkul='".$_GET['id_matkul']."'");
        if($qry_hapus){
            echo "<script>alert('Sukses hapus matakuliah');location.href='matakuliah.php';</script>";
        } else{
            echo "<script>alert('Gagal hapus matakuliah');location.href='matakuliah.php';</script>";
        }
    }
?>