<html>
 <head>
 <Title>Form Registrasi Mahasiswa</Title>
 <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
 </head>
 <nav class="navbar navbar-expand-sm navbar-dark bg-primary mb-3">
<div class="container">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data targer="#mobile-nav">
	<span class="navbar-toggle-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="mobile-nav">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a href="index.php" class="nav-link">Beranda</a>
			</li>
		</ul>
	</div>
</div>
</nav>
<body>
<div class="container">
 <h1>Tambah mahasiswa</h1>
 <p>Masukkan data diri anda setelah itu <strong>Submit</strong> untuk menyimpan.</p>
 <form method="post" action="tambah.php" enctype="multipart/form-data" >
 <div class="form-group">
    <label for="inputnama">Nama</label>
    <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama">
  </div>
  <div class="form-group">
    <label for="inputnama">Alamat</label>
    <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat">
  </div>
  <div class="form-group">
    <label for="inputnama">No telepon</label>
    <input type="number" class="form-control" name="no_telp" placeholder="08xxxxxxxxxxx">
  </div>
  <div class="form-group">
    <label for="inputnama">Asal Sekolah</label>
    <input type="text" class="form-control" name="asal_sekolah" placeholder="Masukkan Asal sekolah">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
 </form>
 </div>
 
 <?php
    include("koneksi.php");

    if (isset($_POST['submit'])) {
        try {
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $no_telp = $_POST['no_telp'];
            $asal_sekolah = $_POST['asal_sekolah'];
            // Insert data
            $sql_insert = "INSERT INTO tbl_mahasiswa2 (Nama,  Alamat, No_telp, Asal_sekolah) 
                        VALUES (?,?,?,?)";
            $stmt = $conn->prepare($sql_insert);
            $stmt->bindValue(1, $nama);
            $stmt->bindValue(2, $alamat);
            $stmt->bindValue(3, $no_telp);
            $stmt->bindValue(4, $asal_sekolah);
            $stmt->execute();
			header('Location: index.php');
        } catch(Exception $e) {
            echo "Failed: " . $e;
        }
    }
 ?>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 </body>
 </html>