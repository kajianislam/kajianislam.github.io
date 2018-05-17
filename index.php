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


	<section class="kajian-section kajian-featured mt-5">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-md-6">
					<a class="headline-cover" href="single.php">
						<div class="headline-image" style="background-image: url(assets/img/demo/aagym.jpg);"></div>
						<div class="headline-caption">
							<div class="caption-wrapper">
								<h3 class="caption-title">Membangun Kepasrahan Kepada Sang Pencipta</h3>
								<div class="caption-info">
									<i class="fas fa-microphone"></i> Abdullah Gymnastiar
									<i class="far fa-clock ml-2"></i> Dec 24, 2016
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-6">
					<div class="row no-gutters">
						<div class="col-md-6">
							<a href="single.php" class="headline-item">
								<div class="headline-image" style="background-image: url(assets/img/demo/abdulsomad.jpg);"></div>
								<div class="headline-caption headline-sm">
									<div class="caption-wrapper">
										<h3 class="caption-title">Pentingnya Menuntut Ilmu Agama</h3>
										<div class="caption-info">
											<i class="fas fa-microphone"></i> Abdul Somad
											<i class="far fa-clock ml-2"></i> Dec 24, 2016
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-md-6">
							<a href="single.php" class="headline-item">
								<div class="headline-image" style="background-image: url(assets/img/demo/khalid.jpg);"></div>
								<div class="headline-caption headline-sm">
									<div class="caption-wrapper">
										<h3 class="caption-title">Pentingnya Menuntut Ilmu Agama</h3>
										<div class="caption-info">
											<i class="fas fa-microphone"></i> Khalid Basalamah
											<i class="far fa-clock ml-2"></i> Dec 24, 2016
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-md-6">
							<a href="single.php" class="headline-item">
								<div class="headline-image" style="background-image: url(assets/img/demo/felix.jpg);"></div>
								<div class="headline-caption headline-sm">
									<div class="caption-wrapper">
										<h3 class="caption-title">Pentingnya Menuntut Ilmu Agama</h3>
										<div class="caption-info">
											<i class="fas fa-microphone"></i> Felix Siauw
											<i class="far fa-clock ml-2"></i> Dec 24, 2016
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-md-6">
							<a href="single.php" class="headline-item">
								<div class="headline-image" style="background-image: url(assets/img/demo/arifinilham.jpg);"></div>
								<div class="headline-caption headline-sm">
									<div class="caption-wrapper">
										<h3 class="caption-title">Pentingnya Menuntut Ilmu Agama</h3>
										<div class="caption-info">
											<i class="fas fa-microphone"></i> Arifin Ilham
											<i class="far fa-clock ml-2"></i> Dec 24, 2016
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="kajian-section kajian-list mt-5">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-md-8">
					<div class="kajian-latest">
						<ul class="list-unstyled">
							<?php for($x = 1; $x <= 10; $x++){ ?>
								<li class="kajian-item">
									<div class="row">
										<div class="col-md-5">
											<a href="single.php">
												<img src="assets/img/demo/nuzul.jpg" class="mw-100 mb-2">
											</a>
										</div>
										<div class="col-md-7">
											<h4 class="mt-0 mb-2 kajian-title h5"><a href="single.php">Dosa yang Dianggap Remeh</a></h4>
											<div class="kajian-info mb-2">
												<i class="fas fa-microphone"></i> Nuzul Dzikri
												<i class="far fa-clock ml-2"></i> Dec 24, 2016
											</div>
											<div class="kajian-desc">
												Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
											</div>
										</div>
									</div>
								</li>
							<?php } ?>
						</ul>
					</div>

					<div class="loading text-center">
						<img src="assets/img/loading.gif">
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
