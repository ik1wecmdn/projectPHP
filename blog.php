<!DOCTYPE html>
<html>
	<head>
		<title>Project HTML</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="images/icon.png">
		<!-- bootstrap css -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- font awesome cdn -->
		<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous"> -->
		<!-- font awesome local -->
		<link rel="stylesheet" href="font/fontawesome/css/all.css">
		<!-- animate css -->
		<link rel="stylesheet" href="css/animate.css">
		<!-- my custom css -->
		<link rel="stylesheet" href="css/my-style.css">
	</head>
	<body>
		<?php 
		include('header.php'); 
		include('menu.php');
		?>
		<div class="content">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<h1>Blogs</h1>
						
						<?php
						date_default_timezone_set("Asia/Jakarta");
						require_once('database.php');
						$db = new MyDatabase();
						$dt = $db->GetData("SELECT * FROM blogs WHERE tanggal<=? ORDER BY id_blog DESC", [date('Y-m-d H:i:s')]);
						foreach($dt as $row){
						?>

						<div class="blog-item">
							<h2 class="blog-title"><?php echo $row['judul_blog']; ?></h2>
							<p class="blog-date"><?php echo $row['tanggal'] ?> by <a href="#">@mahasiswa</a></p>
							
							<?php
							echo $row['isi_blog'];
							?>

							
						</div>
						<?php
						} //tutupe foreach
						?>
					</div>
					<div class="col-md-4">
						
						<h4>Ads</h4>
						
							<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
							<!-- ik12018 000webhost side -->
							<ins class="adsbygoogle"
							style="display:block"
							data-ad-client="ca-pub-8734858022219210"
							data-ad-slot="3795049940"
							data-ad-format="auto"
							data-full-width-responsive="true"></ins>
							<script>
							(adsbygoogle = window.adsbygoogle || []).push({});
							</script>
						
						
						<h4>Category</h4>
						<div class="list-group">
							<a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
								Algoritma C#
								<span class="badge badge-primary badge-pill">14</span>
							</a>
							<a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
								HTML+CSS+JS+Bootstrap
								<span class="badge badge-primary badge-pill">9</span>
							</a>
							<a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
								PHP
								<span class="badge badge-primary badge-pill">12</span>
							</a>
							<a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
								Laravel
								<span class="badge badge-primary badge-pill">20</span>
							</a>
							<a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
								Ionic
								<span class="badge badge-primary badge-pill">12</span>
							</a>
							<a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
								AppGameKit
								<span class="badge badge-primary badge-pill">12</span>
							</a>
						</div>
					</div>
					</div> <!-- end row -->
				</div>
			</div>
			<div class="iklan">
			</div>
			<div class="footer">
				<div class="container">
					Developed by Informatika 1 - 2018 <strong>Wearnes Education Center Madiun</strong>
				</div>
			</div>
			<script src="lib/jquery-3.3.1.slim.min.js"></script>
			<script src="lib/popper.min.js"></script>
			<script src="js/bootstrap.min.js"></script>
		</body>
	</html>