<?php
    include "../css.php";
    include "Navbar.php";

    session_start();

    if($_SESSION['level']==""){
        echo "<script>alert('login dulu ya!!')</script>";
        header("location:../login.php?pesan=galogin");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Perpustakaan</title>
</head>
<body>
    <div style = "width:1300px; margin:auto;" >
    <a style="margin-bottom: 10px; margin:auto; float:right; " href="tambahmatkul.php" type="button" class="btn btn-info">Tambah Mata Kuliah</a>
    <h3><b><center>Data Mata Kuliah</b></h3>
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>N0</th>
                <th>NAMA MATA KULIAH</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "../koneksi.php";
            $qry_matakuliah=mysqli_query($koneksi, "select * from matakuliah");
            $no=0;
            while($data_matakuliah=mysqli_fetch_array($qry_matakuliah)){
                $no++;
            
            ?>
            <tr class="table table-success table-striped">
                <td><?=$no?></td>
                <td><?=$data_matakuliah['nama_matkul']?></td>
                <td><a href="edit_matkul.php? id_matkul=<?=$data_matakuliah['id_matkul']?>"
                    class="btn btn-success">Edit</a>
                    <a href="deletematkul.php? id_matkul=<?=$data_matakuliah['id_matkul']?>"
                    onclick="return confirm('Apakah anda yakin menghapus data ini')"
                    class="btn btn-danger">Delete</a></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <?php include "foter.php";?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    </div>
</body>
</html>
