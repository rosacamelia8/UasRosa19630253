<?php
    include "koneksi.php";
    $id = $_GET['idsiswa'];
    $ambilData = mysqli_query($koneksi, "SELECT * FROM mhs WHERE idsiswa='$id'");
    $data=mysqli_fetch_array($ambilData);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB UAS</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>

    <div class="container col-md-6">
        <div class="card">
              <div class="card-header bg-primary text-white">
                Edit Data Mahasiswa
              </div>
              <div class="card-body">
                <form action="" method="POST" class="form-item">

                <div class="form-group">

                <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" value="<?php echo $data['nama'] ?>" class="form-control col-md-9" placeholder="Masukkan Nama">
                    </div>

                        <label for="npm">NPM</label>
                        <input type="text" name="npm" value="<?php echo $data['npm'] ?>" class="form-control col-md-9" placeholder="Masukkan Npm">
                    </div>

                    <div class="form-group">
                        <label for="tl">Tempat Lahir</label>
                        <input type="text" name="tl" value="<?php echo $data['tl'] ?>"class="form-control col-md-9" placeholder="Masukkan tempat_lahir">
                    </div>

                    <div class="form-group">
                        <label for="ttl">Tanggal Lahir</label>
                        <input type="date" name="tgl" value="<?php echo $data['tgl'] ?> "class="form-control col-md-9" placeholder="Masukkan tanggal_lahir">
                    </div>

                    <div class="form-group">
                        <label for="jk">Jenis Kelamin</label>
                        <input type="enum" name="jk" value="<?php echo $data['jk'] ?> "class="form-control col-md-9" placeholder="Masukkan Jenis_kelamin">
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" value="<?php echo $data['alamat'] ?> "class="form-control col-md-9" placeholder="Masukkan alamat">
                    </div>


                    <div class="form-group">
                        <label for="nama">Kodepos</label>
                        <input type="number" name="kodepos" value="<?php echo $data['kodepos'] ?> "class="form-control col-md-9" placeholder="Masukkan Kodepos">
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
        if(isset($_POST['simpan']))
        {
            $nama          =$_POST['nama'];
            $npm           =$_POST['npm'];
            $tl            =$_POST['tl'];
            $tgl           =$_POST['tgl'];
            $jk            =$_POST['jk'];
            $alamat        =$_POST['alamat'];
            $kodepos       =$_POST['kodepos'];

            mysqli_query($koneksi,"UPDATE mhs 
            SET nama='$nama', npm='$npm',tl='$tl', tgl='$tgl',jk='$jk' ,alamat='$alamat' ,kodepos='$kodepos'
            WHERE idsiswa='$id'") or die(mysqli_error($koneksi));

            echo "<div align='center'><h5> Silahkan Tunggu, Data Sedang DiUpdate.... </h5></div>";
            echo "<meta http-equiv='refresh' content='1;url=http://localhost/web-kampus/data_mahasiswa.php'>";
        }

?>