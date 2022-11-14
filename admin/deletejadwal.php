<?php
if ($_GET['id_jadwal']) {
    include "../koneksi.php";
    $qry_hapus = mysqli_query($koneksi, "DELETE FROM jadwalkuliah WHERE id_jadwal = '" . $_GET['id_jadwal'] . "'");

    if ($qry_hapus) {
        echo "<script>alert('Sukses hapus data jadwal'); location.href='datajadwal.php'</script>";
    } else {
        echo "<script>alert('Gagal hapus data jadwal'); location.href='datajadwal.php'</script>";
    }
}