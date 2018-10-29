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

		<!-- lightbox css -->
		<link rel="stylesheet" href="lib/lightbox2/css/lightbox.min.css">

		<!-- my custom css -->
		<link rel="stylesheet" href="css/my-style.css">
		<style>
			.card{
				margin-bottom: 10px;
			}
			.card-title{
				font-weight: bold;
				padding: 5px 10px;
				background-color: rgba(0,0,0,.5);
				margin:0px;
				color: white;
				position: absolute;
				bottom: 0px;
				overflow: hidden;
				width: 100%;
			}
		</style>
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
						<h1>Gallery</h1>
						
						<div class="row">

							<?php 
							require_once('database.php');
							$db = new MyDatabase();
							$dtGalery = $db->GetData("SELECT * FROM gallery");
							foreach($dtGalery as $row){
							?>

							<div class="col-md-4">
								<div class="card">
								  <a href="images/slide1.jpg" data-lightbox="img1" data-title="Console Application - App1"><img class="card-img" src="<?php echo $row['url']; ?>" alt="Card image cap"></a>
								  <a href="#"><div class="card-title"><?php echo $row['nama']; ?></div></a>
								</div>
							</div>
							
							<?php
							} //tutupe foreach
							?>


						</div>
						
					</div>
					<div class="col-md-4">
						<!-- iklan -->
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
		<script src="lib/jquery-3.3.1.min.js"></script>
		<script src="lib/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>

		<!-- lightbox -->
		<script src="lib/lightbox2/js/lightbox.min.js"></script>
	</body>
</html>