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
		<style>
		.card:hover{
		background-color: green;
		color: white;
				}
		.card:hover .card-title{
		color: white;
		}
		.card, .card .card-title{
		transition: background-color 2s, color 2s;
		}
		
		</style>
	</head>
	<body>
		<?php
		include('header.php');
		include('menu.php');
		?>
		
		<div class="slider">
			<div class="container">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
						<li data-target="#myCarousel" data-slide-to="3"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img class="d-block w-100" src="images/slide1.jpg" alt="First slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="images/slide2.jpg" alt="Second slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="images/slide3.jpg" alt="Third slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="images/slide4.jpg" alt="Fourth slide">
						</div>
					</div>
					<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
		<div class="platform">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<!-- card -->
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">WEB APP</h5>
								<p class="card-title">Mampu membuat Applikasi berbasis web menggunakan bahasa html, css, jquery dengan back end php dan mysql server.</p>
								<a href="#" class="btn btn-primary"><i class="fas fa-arrow-alt-circle-right"></i> Read More</a>
							</div>
						</div>
						<!-- end -->
					</div>
					<div class="col-md-4 col-sm-6">
						<!-- card -->
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">MOBILE APP</h5>
								<p class="card-title">Mampu membuat Applikasi berbasis mobile Android dan IOS menggunakan ionicframework dan cordova.</p>
								<a href="#" class="btn btn-primary"><i class="fas fa-arrow-alt-circle-right"></i> Read More</a>
							</div>
						</div>
						<!-- end -->
					</div>
					<div class="col-md-4 col-sm-6">
						<!-- card -->
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">GAME DEVELOPMENT</h5>
								<p class="card-title">Mampu membuat GAME SEDERHANA yang berjalan di platform Desktop, Web ataupun Mobile Android.</p>
								<a href="#" class="btn btn-primary"><i class="fas fa-arrow-alt-circle-right"></i> Read More</a>
							</div>
						</div>
						<!-- end -->
					</div>
				</div>
			</div>
		</div>
		<div class="content">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<!--  List Group -->
						<div class="list-group">
							<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
								<div class="d-flex w-100 justify-content-between">
									<h5 class="mb-1">Judul Artikel</h5>
									<small>3 days ago</small>
								</div>
								<p class="mb-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								<small>@namasiswa</small>
							</a>
							<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
								<div class="d-flex w-100 justify-content-between">
									<h5 class="mb-1">Judul Artikel</h5>
									<small>3 days ago</small>
								</div>
								<p class="mb-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								<small>@namasiswa</small>
							</a>
							<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
								<div class="d-flex w-100 justify-content-between">
									<h5 class="mb-1">Judul Artikel</h5>
									<small>3 days ago</small>
								</div>
								<p class="mb-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								<small>@namasiswa</small>
							</a>
						</div>
						<!-- End List Group -->
					</div>
					<div class="col-md-8">
						<h1>
						WELCOME TO INFORMATIKA 1 @WEARNES MADIUN 2018
						</h1>
						<p>
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
						</p>
					</div>
					</div> <!-- end row -->
				</div>
			</div>
			<div class="iklan">
				<div class="container">
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
			    </div>
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