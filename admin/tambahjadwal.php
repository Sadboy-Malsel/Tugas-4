<?php
    include "../css.php";
    include "../koneksi.php";
    $uniga = mysqli_query($koneksi,"select * from matakuliah");
    $prodi = mysqli_query($koneksi,"select * from dosen");

    session_start();

    if($_SESSION['level']==""){
        echo "<script>alert('login dulu ya!!')</script>";
        header("location:../login.php?pesan=galogin");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Perpustakaan</title>
</head>
<body>
<div class ="global-container">
    <div class="card login-form">
            <div class="card-body">
    <h3>Tambah Data Jadwal</h3>
    <form action="prosestambahjadwal.php" method="post">
        Hari :
        <select name="hari" class="form-select form-control" aria-label=".form-select-sm example">
            <option>Senin</option>
            <option>Selasa</option>
            <option>Rabu</option>
            <option>Kamis</option>
            <option>Jumat</option>
        </select>
        Jam :
        <input type="time" name="jam" value="" class="form-control">
        Matakuliah
        <select name="matakuliah" value="" class="form-control">
            <option value="">Pilih</option>
            <?php
                while ($matkul=mysqli_fetch_array($uniga)){?>
                    <option value="<?=$matkul['id_matkul']?>"><?=$matkul['nama_matkul']?></option>
            <?php } ?>
        </select>
        Dosen
        <select name="dosen" value="" class="form-control">
            <option value="">Pilih</option>
            <?php
                while ($dosen=mysqli_fetch_array($prodi)){?>
                    <option value="<?=$dosen['id_dosen']?>"><?=$dosen['nama_dosen']?></option>
            <?php } ?>
        </select>
        <div class="d-grid gap-2">
            <button type="submit" name="simpan" class="btn btn-primary"><b>Simpan</button>
        </div>
    </form>
                </div>
        </div>
</div>
</body>
</html>