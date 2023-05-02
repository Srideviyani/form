<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap');

      body{
        font-family: 'Poppins', sans-serif;
      }
    </style>
</head>
<body style="background: #152733;">
    <?php
    $nim = $_GET['nim'];
    include "koneksi.php";

    $qry = "SELECT * FROM mahasiswa WHERE nim = '$nim'";
    $exec = mysqli_query($con, $qry);
    $data = mysqli_fetch_assoc($exec);

    ?>
    <div class="container">
        <div class="row align-items-center vh-100">
            <div>
                <div class="col-md-8 mx-auto px-4 py-5" style="border: 2px solid white;border-radius: 10px;">
                <div class="text-white pb-4">
                    <h1 class="h4 fw-bold">Form Edit Data Mahasiswa</h1>
                    <h2 class="h5">Update biodata dengan benar</h2>
                </div>
                <form action="update.php" method="POST" class="text-white">
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-label">Nama mahasiswa</label>
                            <input type="text" name="nama" class="form-control" value="<?= $data['nama_mhs'] ?>">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Email</label> </br>
                            <input type="email" name="email" class="form-control" value="<?= $data['email'] ?>">
                        </div>
                        <div class="col">
                        </div>
                    </div>
                    <div class="row pt-4">
                        <div class="col-md-6">
                            <label class="form-label">NIM (Nomor induk mahasiswa)</label>
                            <input type="number" name="nim" class="form-control" value="<?= $data['nim'] ?>" readonly>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Jurusan</label>
                            <select name="jurusan" class="form-select">
                            <?php 
                                $qry1 = "SELECT * FROM jurusan";
                                $exec1 = mysqli_query($con, $qry1);
                                $no=1;
                                while($jurusan = mysqli_fetch_assoc($exec1)){
                            ?> 
                                <option value="<?= $jurusan['id_jurusan'] ?>" <?php if($jurusan['id_jurusan'] == $data['kude_jurusan']) { echo "selected"; }?>><?= $jurusan['nama_jurusan'] ?></option>
                            <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="row pt-4">
                        <div class="col-md-6">
                            <label class="form-label">Gender</label> </br>
                            <input type="radio" name="gender" value="1" class="form-check-input" <?php if($data['gender'] == 1) { echo "checked"; }?>> laki-laki 
                            <input type="radio" name="gender" value="2" class="form-check-input" <?php if($data['gender'] == 2) { echo "checked"; }?>> Perempuan
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">No. HP</label> </br>
                            <input type="number" name="nohp" class="form-control" value="<?= $data['no_hp'] ?>">
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="alamat"><?= $data['alamat'] ?></textarea>
                            <label for="floatingTextarea">Alamat</label>
                        </div>
                    </div>
                    <div>
                        <input type="submit" value="simpan" class="btn btn-secondary mt-3">
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>