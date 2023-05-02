<?php
$nama_jurusan = $_POST['nama_jurusan'];

include "koneksi.php";

$qry = "INSERT INTO jurusan VALUES (
    '', '$nama_jurusan'
)";

$exec = mysqli_query($con, $qry);

if($exec){
    echo "<script>alert('Data berhasil di simpan'); window.location = 'latihan.php';</script>";
}else{
    echo "Data gagal di simpan";
}