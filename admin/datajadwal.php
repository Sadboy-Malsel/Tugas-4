<?php
    include "../css.php";
    include "../Navbar.php";

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
    <a style="margin-bottom: 10px; margin:auto; float:right; " href="tambahjadwal.php" type="button" class="btn btn-info">Tambah Jadwal</a>
    <h3><b><center>Data Jadwal</b></h3>
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>NO</th>
                <th>HARI</th>
                <th>JAM</th>
                <th>MATA KULIAH</th>
                <th>DOSEN</th>  
                <th>AKSI</th>  
                
            </tr>
        </thead>
        <tbody>
            <?php
            include "../koneksi.php";
            $qry_jadwal=mysqli_query($koneksi, "select * from jadwalkuliah join matakuliah on matakuliah.id_matkul=jadwalkuliah.id_matkul join dosen on dosen.id_dosen=jadwalkuliah.id_dosen");
            $no=0;
            while($data_jadwal=mysqli_fetch_array($qry_jadwal)){
                $no++;
            
            ?>
            <tr class="table table-success table-striped">
                <td><?=$no?></td>
                <td><?=$data_jadwal['hari']?></td>
                <td><?=$data_jadwal['jam']?></td>
                <td><?=$data_jadwal['nama_matkul']?></td>
                <td><?=$data_jadwal['nama_dosen']?></td>
                <td><a href="edit_jadwal.php? id_jadwal=<?=$data_jadwal['id_jadwal']?>"
                    class="btn btn-success">Edit</a>
                    <a href="deletejadwal.php? id_jadwal=<?=$data_jadwal['id_jadwal']?>"
                    onclick="return confirm('Apakah anda yakin menghapus data ini')"
                    class="btn btn-danger">Delete</a></td>
            </tr>
            <?php
            }
            ?>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    
        </tbody>
    </table>
    <?php include "foter.php";?>
        </div>
</body>
</html>
