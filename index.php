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
				<a href="tambah.php" class="nav-link">Tambah</a>
			</li>
		</ul>
	</div>
</div>
</nav>
<body>
<div class="container">
 <h1>Registrasi Mahasiswa</h1>
 <?php
    include("koneksi.php");
	try {
            $sql_select = "SELECT * FROM [dbo].[tbl_mahasiswa2]";
            $stmt = $conn->query($sql_select);
            $mahasiswa = $stmt->fetchAll(); 
	?>
 
 <table class="table">
		<thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No telpon</th>
            <th>Asal Sekolah</th>
        </tr>
		</thead>
        <?php if(count($mahasiswa) > 0) { ?>
        <?php
            foreach($mahasiswa as $mhs) {
        ?>
        <tr>
            <td><?php echo $mhs['ID'] ?></td>
            <td><?php echo $mhs['Nama'] ?></td>
            <td><?php echo $mhs['Alamat'] ?></td>
            <td><?php echo $mhs['No_telp'] ?></td>
            <td><?php echo $mhs['Asal_sekolah'] ?></td>
        </tr>
        <?php } ?>
        <?php }else {
					echo "<td colspan='5'><center>Tidak Ada Data<center></td>";
					}
			}
		catch(Exception $e) {
            echo "Failed: " . $e;
		}?>
    </table>
 </div>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 </body>
 </html>