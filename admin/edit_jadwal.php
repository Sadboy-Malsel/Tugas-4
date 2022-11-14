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
    <title>Perpustakaan</title>
</head>
<body>
<?php
$qry_get_jadwal = mysqli_query($koneksi, "SELECT * FROM jadwalkuliah WHERE id_jadwal = '" . $_GET['id_jadwal'] . "'");
$data_jadwal = mysqli_fetch_array($qry_get_jadwal);
?>
?>
<div class ="global-container">
    <div class="card login-form">
            <div class="card-body">
<h3 ><center>Ubah Data Jadwal</h3>
                <form action="proseseditjadwal.php" method="post">
                     <input type="hidden" name="id_jadwal" value="<?= $data_jadwal['id_jadwal']?>">
                <center><b>Hari :
                <center><select name="hari" value="<?= $data_jadwal['hari'] ?>" class="form-select form-control" aria-label=".form-select-sm example">
            
                <option value="<?= $data_jadwal['hari'] ?>"> <?= $data_jadwal['hari'] ?></option>
            <option>Senin</option>
            <option>Selasa</option>
            <option>Rabu</option>
            <option>Kamis</option>
            <option>Jumat</option>
        </select><br>
                Jam :<br>
                 <input type="time" name="jam" value= "<?=$data_jadwal['jam']?>" class="form_control"><br>
                Mata Kuliah:<br>
                    <select name="matakuliah" value="" class="form-control">
                    <?php
                    include "koneksi.php";
                    $qry_matkul = mysqli_query($koneksi, "SELECT * FROM matakuliah");
                    while ($data_jadwal = mysqli_fetch_array($qry_matkul)) {
                        echo '<option value="' . $data_jadwal['id_matkul'] . '">' . $data_jadwal['nama_matkul'] . '</option>';
                     };
                    ?> 
                    </select>
                Dosen:<br>
                <select name="dosen" value="" class="form-control">
                        <option value="">Pilih</option>
                        <?php
                        while ($dosen=mysqli_fetch_array($prodi)){?>
                        <option value="<?=$dosen['id_dosen']?>"><?=$dosen['nama_dosen']?></option>
                         <?php } ?>
                    </select>
                <div class="d-grid gap-2">
                    <button type="submit" name="simpan" class="btn btn-primary"><b>Ubah Data Jadwal</button>
                </div>
                </form>
            </div>
    </div>
</div>
</body>
</html>

