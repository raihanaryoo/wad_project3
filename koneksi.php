<?php

//koneksi ke databse
$conn = mysqli_connect('localhost:3306','root','','wad_project3');

//ambil data dari db
$result = mysqli_query($conn,'SELECT * FROM Students');

// ambil data dari object result
var_dump(mysqli_fetch_object($result));

?>