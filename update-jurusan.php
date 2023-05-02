<?php

$id_jurusan = $_POST['id_jurusan'];
$nama_jurusan = $_POST['nama_jurusan'];

include "koneksi.php";

$qry = "UPDATE jurusan SET 
        nama_jurusan = '$nama_jurusan'
        WHERE id_jurusan = '$id_jurusan'
        ";

$exec = mysqli_query($con, $qry);

if($exec){
    echo "<script>alert('Data berhasil di update'); window.location = 'latihan.php';</script>";
}else{
    echo "Data gagal di simpan";
}