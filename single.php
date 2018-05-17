<!doctype html>
<html>
<head>
	<?php
	include("partials/head.php");
	?>

</head>
<body>
	
	<?php
	include("partials/navbar.php");
	?>

	<section class="kajian-section kajian-detail mt-5">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="embed-responsive embed-responsive-16by9" id="player">
						<iframe src="https://www.youtube.com/embed/XWfGKTR_Ryo?iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1" allowfullscreen allowtransparency allow="autoplay"></iframe>
					</div>

					<h1 class="mt-4 kajian-title h3">Menyikapi Berita Hoax</h1>

					<div class="kajian-info mb-2">
						<i class="fas fa-microphone"></i> Adi Hidayat
						<i class="far fa-clock ml-2"></i> Dec 24, 2016
					</div>

					<div class="kajian-description mt-4">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>

					<div class="kajian-source h5 mt-4 mb-5">
						<a href="#" class="btn btn-secondary"><i class="fab fa-youtube"></i> Akhyar TV</a>
					</div>
				</div>
				<div class="col-md-3">
					<h2 class="mt-0 h4 mb-3">Most Popular</h2>
					<?php for($x = 1; $x <= 5; $x++){ ?>
					<div class="kajian-item mb-4">
						<a href="single.php"><img src="assets/img/demo/nuzul.jpg" class="mw-100 mb-2"></a>
						<h4 class="mt-0 mb-0 kajian-title h6"><a href="single.php">Dosa yang Dianggap Remeh</a></h4>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</section>

	<?php
	include("partials/footer.php");
	?>

</body>
</html>
