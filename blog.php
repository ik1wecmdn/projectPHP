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
						
						<div class="blog-item">
							<h2 class="blog-title">Blog Title</h2>
							<p class="blog-date">22 September 2018 by <a href="#">@mahasiswa</a></p>
							<p class="blog-content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
							<a class="blog-more btn btn-outline-info" href="#">Read More</a>
						</div>
						<div class="blog-item">
							<h2 class="blog-title">Blog Title</h2>
							<p class="blog-date">22 September 2018 by <a href="#">@mahasiswa</a></p>
							<p class="blog-content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
							<a class="blog-more btn btn-outline-info" href="#">Read More</a>
						</div>
						<div class="blog-item">
							<h2 class="blog-title">Blog Title</h2>
							<p class="blog-date">22 September 2018 by <a href="#">@mahasiswa</a></p>
							<p class="blog-content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
							<a class="blog-more btn btn-outline-info" href="#">Read More</a>
						</div>
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