<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UAS WEB</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>

    <div class="container col-md-6">
        <div class="card">
              <div class="card-header bg-primary text-white">
                Input Data Mahasiswa
              </div>
              <div class="card-body">
                <form action="" method="POST" class="form-item">

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control col-md-9" placeholder="Masukkan nama">
                    </div>

                    <div class="form-group">
                        <label for="npm">NPM</label>
                        <input type="text" name="npm" class="form-control col-md-9" placeholder="Masukkan Npm">
                    </div>

                    <div class="form-group">
                    <label for="tl">Tempat Lahir</label>
                        <input type="text" name="tl" class="form-control col-md-9" placeholder="Masukkan nama">
                    </div>

                    <div class="form-group">
                        <label for="tgl">Tanggal Lahir</label>
                        <input type="date" name="tgl" class="form-control col-md-9" placeholder="Masukkan tanggal lahir">
                    </div>

                    <div class="form-group">
                        <label for="jk">Jenis Kelamin</label>
                        <select name="jk" class="form-control col-md-9">
                        <option value="" disabled selected>-- Pilih Jenis Kelamin --</option>
										
                        <option value="L" <?php isset($_SESSION['jk']) && $_SESSION['jk'] == "L" ? print("selected") : "" ?>>Laki-laki</option>
                        <option value="P" <?php isset($_SESSION['jk']) && $_SESSION['jk'] == "P" ? print("selected") : "" ?>>Perempuan</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control col-md-9" placeholder="Masukkan alamat">
                    </div>


                    <div class="form-group">
                        <label for="nama">Kodepos</label>
                        <input type="number" name="kodepos" class="form-control col-md-9" placeholder="Masukkan Kodepos">
                    </div>

                    <button type="submit" class="btn btn-primary" name="simpan">SIMPAN</button>
                    <button type="reset" class="btn btn-danger">BATAL</button>

                </form>

               
              </div>
        </div>
    </div>


</body>
</html>

<?php

        include "koneksi.php";
        if(isset($_POST['simpan']))
        { 
            $nama          =$_POST['nama'];
            $npm           =$_POST['npm'];
            $tl            =$_POST['tl'];
            $tgl           =$_POST['tgl'];
            $jk            =$_POST['jk'];
            $alamat        =$_POST['alamat'];
            $kodepos       =$_POST['kodepos'];

            mysqli_query($koneksi,"INSERT INTO mhs VALUES('',
                '$nama', '$npm', '$tl', '$tgl', '$jk' ,'$alamat' ,'$kodepos'
            )") or die(mysqli_error($koneksi));

            echo "<div align='center'><h5> Silahkan Tunggu, Data Sedang Disimpan.... </h5></div>";
            echo "<meta http-equiv='refresh' content='1;url=http://localhost/web-kampus/data_mahasiswa.php'>";
        }

?>