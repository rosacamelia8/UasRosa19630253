<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data mahasiswa</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>

    <div class="container col-md-10">
        <div class="card">

        <center><h1>Pencarian Mahasiswa</h1></center>
        
	    <form method="GET" action="data_mahasiswa.php" style="text-align: center;">
		<label>Kata Pencarian : </label>
		<input type="text" name="kata_cari" value="<?php if(isset($_GET['kata_cari'])) { echo $_GET['kata_cari']; } ?>"  />
		<button type="submit">Cari</button>

        <div class="card-header bg-primary text-white">  
                Table Data Mahasiswa
              </div>
              <div class="card-body">
                    <a href="index.php" class="btn btn-primary">Tambah Data</a>
                
                <table class="table table-bordered">
                <tr>
                    <th>ID SISWA</th>
                    <th>NAMA</th>
                    <th>NPM</th>
                    <th>TEMPAT LAHIR</th>
                    <th>TANGGAL LAHIR</th>
                    <th>JENIS KELAMIN</th>
                    <th>ALAMAT</th>
                    <th>KODE POS</th>
                    <th>AKSI</th>

                </tr>
                <?php
                    include "koneksi.php";
                    $no = 1;
                    $tampil = mysqli_query($koneksi, "SELECT * FROM mhs");
                    while($data=mysqli_fetch_array($tampil))
                    {

                ?>
                <tr>
                    <td>  <?php echo $no++;  ?></td>
                    <td>  <?php echo $data['nama'];  ?></td>
                    <td>  <?php echo $data['npm'];  ?></td>
                    <td>  <?php echo $data['tl'];  ?></td>
                    <td>  <?php echo $data['tgl'];  ?></td>
                    <td>  <?php echo $data['jk'];  ?></td>
                    <td>  <?php echo $data['alamat'];  ?></td>
                    <td>  <?php echo $data['kodepos'];  ?></td>
                    <td>  
                        <a href="edit_mahasiswa.php?idsiswa=<?php echo $data['idsiswa']; ?>" class="btn btn-sm btn-warning">Edit</a>
                        <a href="delete.php?idsiswa=<?php echo $data['idsiswa']; ?>" class="btn btn-sm btn-danger">Hapus</a>

                    </td>
                </tr>
                    <?php } ?>
                </table>
               
              </div>
        </div>
    </div>


</body>
</html>
