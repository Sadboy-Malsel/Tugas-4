<?php
    include "../css.php";
    include "../koneksi.php";
    $uniga = mysqli_query($koneksi,"select * from jurusan");

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
include "koneksi.php";
$qry_get_mahasiswa = mysqli_query($koneksi, "select * from mahasiswa 
    where id_mahasiswa ='".$_GET['id_mahasiswa']."'");
 $data_mahasiswa=mysqli_fetch_array($qry_get_mahasiswa);
?>
<div class ="global-container">
    <div class="card login-form">
            <div class="card-body">
<h3 ><center>Ubah Mahasiswa</h3>
                <form action="prosesedit.php" method="post">
                     <input type="hidden" name="id_mahasiswa" value="<?= $data_mahasiswa['id_mahasiswa']?>">
                <center><b>Nama :
                <center><input type="text" name="nama" value= "<?=$data_mahasiswa['nama']?>" class="form_control"><br>
                 NIM :<br>
                 <input type="number" name="nim" value= "<?=$data_mahasiswa['nim']?>" class="form_control"><br>
                 JURUSAN
                    <select name="jurusan" value="" class="form-control">
                    <option value="">Pilih</option>
                    <?php
                        while ($pjurusan=mysqli_fetch_array($uniga)){?>
                    <option value="<?=$pjurusan['id_jurusan']?>"><?=$pjurusan['namajurusan']?></option>
                    <?php } ?>
                    </select>
                 Alamat :<br>
                <input type="text" name="alamat" value= "<?=$data_mahasiswa['alamat']?>" class="form_control"><br>
                Username :<br>
                <input type="text" name="username" value= "<?=$data_mahasiswa['username']?>" class="form_control"><br>
                Password :<br>
                <input type="password" name="password" value= "<?=$data_mahasiswa['password']?>" class="form_control"><br>
                <div class="d-grid gap-2">
                    <button type="submit" name="simpan" class="btn btn-primary"><b>Ubah Mahasiswa</button>
                </div>
                </form>
            </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>

