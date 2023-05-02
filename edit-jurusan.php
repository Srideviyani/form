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
    $id_jurusan = $_GET['id_jurusan'];
    include "koneksi.php";

    $qry = "SELECT * FROM jurusan WHERE id_jurusan = '$id_jurusan'";
    $exec = mysqli_query($con, $qry);
    $data = mysqli_fetch_assoc($exec);

    ?>
    <div class="container">
        <div class="row align-items-center vh-100">
            <div>
                <div class="col-md-8 mx-auto px-4 py-5" style="border: 2px solid white;border-radius: 10px;">
                <div class="text-white pb-4">
                    <h1 class="h4 fw-bold">Form Edit Jurusan</h1>
                </div>
                <form action="update-jurusan.php" method="POST" class="text-white">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" name="id_jurusan" value="<?= $data['id_jurusan'] ?>" hidden>
                            <label class="form-label">Nama Jurusan</label>
                            <input type="text" name="nama_jurusan" class="form-control" value="<?= $data['nama_jurusan'] ?>">
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