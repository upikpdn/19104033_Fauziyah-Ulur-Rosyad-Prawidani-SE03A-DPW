<?php
    // menampilkan seluruh data
    include "koneksi.php";
    $kelas = ['SE-03-A', 'SE-03-B'];
    $sql = "SELECT * FROM data";
    $data = $conn->query($sql);
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>CRUD PHP</title>
</head>

<body>


    <div class="container">
        <h1 class="text-center mt-5 mb-5">Form Mahasiswa</h1>
        <div class="row">
            <div class="col-lg-6 mb-5">
                <h4>Input Data</h4>
                <!-- disimpan ke dalam file simpan.php -->
                <form action="simpan.php" method="post">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" placeholder="Nama" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <select name="kelas" class="form-control" required>
                            <option value="">Pilih</option>
                            <!-- menu drop down kelas -->
                            <?php foreach ($kelas as $kl) : ?>
                                <option value="<?= $kl; ?>"><?= $kl; ?></option>
                            <?php endforeach; ?>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" placeholder="Alamat" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </form>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-muted">Data Mahasiswa</span>

                        </h4>
                    </div>
                    <div class="col-lg-6" style="text-align: right;">
                        <p>Jumlah Mahasiswa : <b>
                                <!-- menampilkan jumlah data yang ada di dalam tabel data -->
                                <?php
                                if ($result = mysqli_query($conn, $sql)) {
                                    $rowcount = mysqli_num_rows($result);
                                    echo $rowcount;
                                }
                                ?>
                                
                            </b>
                        </p>
                    </div>
                </div>

                <!-- menampilkan data yang ada di dalam mysql -->
                <?php foreach ($data as $dt) : ?>
                    <div class="card mb-2">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">

                                    <h4><?= $dt['nama']; ?></h4>
                                </div>
                                <div class="col-md-6">
                                    <p class="text-right"><?= $dt['kelas']; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p><?= $dt['alamat']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


</body>

</html>