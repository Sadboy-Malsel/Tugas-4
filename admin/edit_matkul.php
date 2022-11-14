<?php
    include "../css.php";

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
include "../koneksi.php";
$qry_get_matkul = mysqli_query($koneksi, "select * from matakuliah 
    where id_matkul ='".$_GET['id_matkul']."'");
 $data_matkul=mysqli_fetch_array($qry_get_matkul);
?>
<div class ="global-container">
    <div class="card login-form">
            <div class="card-body">
<h3 ><center>Ubah Data Matakuliah</h3>
                <form action="proseseditmatkul.php" method="post">
                     <input type="hidden" name="id_matkul" value="<?= $data_matkul['id_matkul']?>">
                <center><b>Nama Matakuliah :
                <center><input type="text" name="nama_matkul" value= "<?=$data_matkul['nama_matkul']?>" class="form_control"><br>
                <div class="d-grid gap-2">
                    <button type="submit" name="simpan" class="btn btn-primary"><b>Ubah Data Matakuliah</button>
                </div>
                </form>
            </div>
    </div>
</div>
</body>
</html>

