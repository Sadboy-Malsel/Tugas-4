<?php
$koneksi=mysqli_connect('localhost', 'root', '', 'perpusuniga');
/* check connetion */
if (mysqli_connect_error()){
    printf("Connect failed:", mysqli_connect_error());
    exit();
}
?>