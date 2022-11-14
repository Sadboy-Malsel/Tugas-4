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
    <h3><b><center>Data Mahasiswa</b></h3>
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>NIM</th>
                <th>JURUSAN</th>
                <th>ALAMAT</th>
                <th>USERNAME</th>
                <th>PASSWORD</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "../koneksi.php";
            $qry_mahasiswa=mysqli_query($koneksi, "select * from mahasiswa join jurusan on jurusan.id_jurusan=mahasiswa.id_jurusan");
            $no=0;
            while($data_mahasiswa=mysqli_fetch_array($qry_mahasiswa)){
                $no++;
            
            ?>
            <tr class="table table-success table-striped">
                <td><?=$no?></td>
                <td><?=$data_mahasiswa['nama']?></td>
                <td><?=$data_mahasiswa['nim']?></td>
                <td><?=$data_mahasiswa['namajurusan']?></td>
                <td><?=$data_mahasiswa['alamat']?></td>
                <td><?=$data_mahasiswa['username']?></td>
                <td><?=$data_mahasiswa['password']?></td>
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
