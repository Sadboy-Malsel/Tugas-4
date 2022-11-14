<?php
if ($_POST) {
    $hari = $_POST['hari'];
    $jam = $_POST['jam'];
    $id_matkul = $_POST['matakuliah'];
    $id_dosen = $_POST['dosen'];
    
    if (empty($hari)) {
        echo "<script>alert('hari jadwal tidak boleh kosong'); location.href='tambahJadwal.php'</script>";
    } elseif (empty($jam)) {
        echo "<script>alert('jam tidak boleh kosong'); location.href='tambahJadwal.php'</script>";
    } else {
        include "../koneksi.php";
        $insert = mysqli_query($koneksi, "INSERT INTO jadwalkuliah (hari, jam, id_matkul, id_dosen)
        VALUES ('" . $hari . " ','". $jam. "',' " . $id_matkul . " ','" . $id_dosen . "')") or die(mysqli_error($koneksi));
    
        if ($insert) {
            echo "<script>alert('Sukses menambahkan jadwal baru');location.href='datajadwal.php'</script>";
        } else {
            echo "<script>alert('Gagal menambahkan jadwal baru');location.href='tambahjadwal.php'</script>";
        }
    }
}