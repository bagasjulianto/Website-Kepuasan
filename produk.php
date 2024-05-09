<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>SURVEY KEPUASAN!</title>
  </head>
  <body>
	  <div class="jumbotron jumbotron-fluid bg-dark text-white">
		  <div class="container text-center">
		    <h1 class="display-4">KEPUASAN KONSUMEN</h1>
		    <p class="lead">
		    	<a class="text-primary" href="https://www.draco.co.id/id/dracoengine.html"> <h2> PT. Draco Engine </h2> </a>
		    </p>
			<p> Kami Sangat Menghargai Penilaian Anda.</p>
		  </div>
	  </div>

	 <style type="text/css">
		.box{
			padding: 30px 40px;
			border-radius: 5px;
		} 	
	 </style>

	<?php
		//panggil koneksi database
		include "koneksi.php";

		//tampilkan data dari tabel tikm
		$tampil = mysqli_query($koneksi, "SELECT * from tbskk");
		$data = mysqli_fetch_array($tampil);

	?>
	
	 <div class="container">
		<a class="btn btn-dark text-warning" href="pelayanan.php" role="button">PELAYANAN</a>
		<a class="btn btn-dark text-warning" href="harga.php" role="button">HARGA</a>
      <div> <p>Klik Tombol diatas untuk beri Penilaian.</p> </div>
	 	<div class="alert alert-warning text-center" role="alert">
		  Perhatian!!! Untuk memberikan Penilaian silahkan Klik Emoji.
		</div>
	 	<div class="row text-center">
	 		<div class="col-md-4">
	 			<div class="bg-success box text-white">
	 				<div class="row">
	 					<div class="col-md-6">
	 						<h5>BAIK</h5>
	 						<h2 id="data-mati"> [ <?=$data['puas']?> ] </h2>
	 						<h5>konsumen </h5>
	 					</div>
		 					<div class="col-md-4">
		 						<a href="simpan.php?ket=puas" title="Jika Anda Merasa Puas dengan Pelayanan kami, Klik Icon ini!">
		 							<img src="img/puas.png" style="width: 100px;">
		 						</a>
		 					</div>
	 					
	 				</div>
	 			</div>
	 		</div>

	 		<div class="col-md-4">
	 			<div class="bg-primary box text-white">
	 				<div class="row">
	 					<div class="col-md-6">
	 						<h5>CUKUP BAIK</h5>
	 						<h2 id="data-mati"> [ <?=$data['cukup']?> ] </h2>
	 						<h5>konsumen </h5>
	 					</div>
	 					<div class="col-md-4">
	 						<a href="simpan.php?ket=cukup" title="Jika Anda Merasa Cukup dengan Pelayanan kami, Klik Icon ini!">
	 							<img src="img/cukup.png" style="width: 100px;">
	 						</a>
	 					</div>
	 				</div>
	 			</div>
	 		</div>

	 		<div class="col-md-4">
	 			<div class="bg-danger box text-white">
	 				<div class="row">
	 					<div class="col-md-6">
	 						<h6>KURANG BAIK</h6>
	 						<h2 id="data-sembuh"> [ <?=$data['kurang']?> ] </h2>
	 						<h5>konsumen </h5>
	 					</div>
	 					<div class="col-md-4">
	 						<a href="simpan.php?ket=kurang" title="Jika Anda Merasa Kurang dengan Pelayanan kami, Klik Icon ini!">
	 							<img src="img/kurang.png" style="width: 100px;">
	 						</a>
	 					</div>
	 				</div>
	 			</div>
	 		</div>

	 	</div>
	 	<!-- Akhir Row -->
	 </div>
	<!-- Akhir Container -->
	 <footer class="bg-dark text-center text-white mt-3 bt-2 pb-2">
	 	Creater By. M Bagas Yulianto
	 </footer>

	 
  </body>
</html>
