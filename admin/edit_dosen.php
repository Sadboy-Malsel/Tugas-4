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
$qry_get_dosen = mysqli_query($koneksi, "select * from dosen 
    where id_dosen ='".$_GET['id_dosen']."'");
 $data_dosen=mysqli_fetch_array($qry_get_dosen);
?>
<div class ="global-container">
    <div class="card login-form">
            <div class="card-body">
<h3 ><center>Ubah Data Dosen</h3>
                <form action="proseseditdosen.php" method="post">
                     <input type="hidden" name="id_dosen" value="<?= $data_dosen['id_dosen']?>">
                <center><b>Nama Dosen :
                <center><input type="text" name="nama_dosen" value= "<?=$data_dosen['nama_dosen']?>" class="form_control"><br>
                Alamat :<br>
                 <input type="text" name="alamat" value= "<?=$data_dosen['alamat']?>" class="form_control"><br>
                Telepon:<br>
                <input type="int" name="telepon" value= "<?=$data_dosen['telepon']?>" class="form_control"><br>
                <div class="d-grid gap-2">
                    <button type="submit" name="simpan" class="btn btn-primary"><b>Ubah Data Dosen</button>
                </div>
                </form>
            </div>
    </div>
</div>
</body>
</html>

