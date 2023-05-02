<?php

$id_jurusan = $_GET['id_jurusan'];

include "koneksi.php";
$qry = "DELETE FROM jurusan WHERE id_jurusan = '$id_jurusan'";
$exec = mysqli_query($con, $qry);

// if($exec){
//     echo "<script>alert('Data berhasil dihapus'); window.location = 'latihan.php'</script>";
// }else{
//     echo "Data gagal dihapus";
// }