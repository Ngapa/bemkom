<!DOCTYPE html>
	<html lang="en">
	<head>
		<!-- CSS Bootstrap -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">

		<!-- CSS -->

		<link rel="stylesheet" type="text/css" href="assets/css/style.css">

		<!-- Meta -->

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Sistem Informasi</title>

	</head>
	<body>

		<header>
			<!-- Navbar Begin -->
			<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
				<div class="container container-fluid">
				<a class="navbar-brand" href="#">
					<img src="assets/img/logo.jpg" class="rounded-circle" width="60px" height="60px" class="d-inline-block align-start" alt="" loading="lazy">
					Sistem Informasi
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
	
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="nav navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="index.php">Home</a>
					</li>
	
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Profile
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<li><a class="dropdown-item" href="tentang.php">Tentang</a></li>
						<li><a class="dropdown-item" href="struktur.php">Struktur Organisasi</a></li>
						<li><a class="dropdown-item" href="kontak.php">Kontak Kami</a></li>
						</ul>
					</li>
	
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Informasi
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<li><a class="dropdown-item" href="Pengumuman.php">Pengumuman</a></li>
						<li><a class="dropdown-item" href="Agenda.php">Agenda</a></li>
						<li><a class="dropdown-item" href="Galeri.php">Galeri</a></li>
						</ul>
					</li>
	
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						UKM
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="wanacetta.php">Wanacetta</a></li>
						<li><a class="dropdown-item" href="racana.php">Racana</a></li>
						<li><a class="dropdown-item" href="olahraga.php">Olaharaga</a></li>
						<li><a class="dropdown-item" href="web.php">Web Programing</a></li>
						<li><a class="dropdown-item" href="seni.php">Seni dan Budaya</a></li>
						<li><a class="dropdown-item" href="jurnalis.php">Jurnalistik</a></li>
						<li><a class="dropdown-item" href="robotik.php">Robotika</a></li>
						</ul>
					</li>
	
					<li class="nav-item">
						<a class="nav-link enabled" href="berita.php" tabindex="-1" aria-enabled="true">Berita</a>
					</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
					<li><button type="button" class="btn btn-default" data-dismiss="modal"></button></li>					
					<li><button type="button" class="btn btn-primary navbar-btn" data-toggle="modal" data-target="#modal-daftar">Daftar</button></li>
					</ul>
					</div><!-- /.navbar-collapse -->

					</div><!-- /.container-fluid -->
			</nav>	

			<div class="modal fade" id="modal-daftar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel"></h4>
					</div>
					<div class="modal-body">
					<form>
						<div class="form-group">
							<label>Nama</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group">
							<label>NIM</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group">
							<label>Prodi</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group">
							<label>Semester</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group">
							<label>Alamat</label>
							<input type="text" class="form-control">
						</div>
						</form>
					</div>
					<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					<button type="button" class="btn btn-primary">Daftar</button>
				</div>
			</div>
		</div>
	</div>
	<!-- akhir modal -->
					
  
		  <!-- Navbar End -->
		</header>
			
		<!-- Jumbotron -->
		

			<!-- Kontak kami -->
		</br>
		<div class="content">	
			<div class="container" id="kontak">
				<div class="container">
					<div class="row">
					<div class="container">
						<div class="card">
							<div class="card-body">
								<div class="card-title text-center">
									<marquee width="69%" direction="left" height="55px" scrollamount="10">
										<font face="Microsoft New Tai Lue" size="+6" color="#40423F">
											<b>Racana</b>
										</font>
									</marquee>
								</div>
								<div class="card-subtitle text-justify">
								<div class="card-deck"></div>
								<div class="card">
								<img src="assets/img/racana.jpg" class="img-thumbnail">
								<div class="card-subtitle text-justify">
									<p>
										<h1>Sejarah Umum</h1>
									</p>
									<p>
										Racana merupakan UKM yang bergerak dalam bidang kepramukaan di tingkat perguruan tinggi. Unit Kegiatan Mahasiswa Racana atau biasa disebut dengan UKM Racana di STMIK Komputama Majenang, merupakan organisasi yang dirumuskan sejak tahun 2018 dan baru terbentuk pada tahun 2019 tepatnya pada 10 Oktober 2019, dan secara resmi dilegalkan dan disahkan pada tanggal 21 Desember 2019 oleh Ketua Kwarcab Cilacap (Drs. Farid Ma’ruf, ST.,MM). UKM Racana ini terbentuk atas kerjasama seluruh anggota. Atas beberapa pembentukan dan syarat minimum pembentukan gugus depan, maka keluarlah nomor gudep 15.161-15.162 dengan nama Racana yaitu “Sunan gunung Jati-Nyi Rara Jati” dengan kwarran Cimanggu.	
									</p>
									<p>
										Visi :
									</p>
									<p>
										Menjadi wadah bagi civitas STMIK Komputama Majenang untuk berkarya bagi negara dan sesama melalui Gerakan Pramuka. Mencetak pribadi yang unggul, berwawasan luas, dan bertanggung jawab berlandaskan dasar-dasar kepramukaan asas bela negara dan pancasila untuk berkarya bagi negara dan kemanusiaan.
									</p>
									<p>
										Misi :
									</p>
									<p>
										Menanamkan nilai-nilai pancasila, asas bela negara, dan trisatya. Membangun kekeluargaan antar sesama anggota pramuka dalam berbagai tingkat. Menjadi gerakan kepanduan yang bersinergi dengan segala bidang. Membentuk pribadi yang berkarakter dan tangguh
									</p>

								</div>
							</div>
						</div>
					</div>
					<div class="col">
						</div>
						</div>
					


		<!-- End Kontak Kami -->

		 <!--===== FOOTER =====-->
        <footer class="footer">
        	<center></center>
			<ul>
				<br>
					<center>
						<a href="https://www.facebook.com/profile.php?id=100005613469219&ref=bookmarksm"><img src="assets/img/facebook.png" style="width: 30PX; height: 30px; margin-right: 20px;" alt=""/></a> 
						<a href="https://www.instagram.com/henky_fajars"><img src="assets/img/instagram.png" style="width: 30px; height: 30px; margin-right: 20px;" alt=""></a>
						<a href="https://web.whatsapp.com/"><img src="assets/img/whatsapp.png" style="width: 30px; height: 30px; margin-right: 20px" alt=""></a>
					</center>
			</ul>	
					</center>
						<ul>
							<center>
								<b>© 2020 Copyright. ALL RIGHT RESERVED.</b>
							</center>
						</ul>	
		</footer>

		<!-- JS Script -->
		<script src="assets/js/jquery-3.5.1.slim.min.js" type="text/javascript"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>
		<!-- End JS Script -->
	</body>
</html>