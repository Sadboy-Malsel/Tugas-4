<?php
    include "../koneksi.php";
    $uniga = mysqli_query($koneksi,"select * from matakukuliah");

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
    <h3>Tambah Data Mata kuliah</h3>
    <form action="prosestambahmatkul.php" method="post">
        Nama Matakuliah :
        <input type="text" name="nama_matkul" value="" class="form-control">
        <div class="d-grid gap-2">
            <button type="submit" name="simpan" class="btn btn-primary"><b>Simpan</button>
        </div>
    </form>
                </div>
        </div>
</div>
</body>
</html>