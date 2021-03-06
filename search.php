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

	<section class="kajian-section kajian-list mt-5">
		<div class="container">
			<h3 class="mb-5">Ditemukan 21 kajian dengan kata kunci pencarian "Hati"</h3>

			<div class="row">
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
			</div>
		</div>
	</section>



	<?php
	include("partials/footer.php");
	?>

</body>
</html>
