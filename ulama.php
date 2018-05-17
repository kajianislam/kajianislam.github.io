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

	<section class="kajian-section kajian-ulama mt-5">
		<div class="container">

			<?php for($x = 1; $x <= 5; $x++){ ?>
			<div class="ulama-list">
				<div class="row">
					<div class="col-md-4">
						<div class="ulama-item">
							<div class="media">
								<a href="ulama-detail.php"><img src="assets/img/demo/aagym-icon.jpg" class="rounded-circle mr-4"></a>
								<div class="media-body">
									<h4 class="ulama-name mt-0 mb-1"><a href="ulama-detail.php">Abdullah Gymnastiar</a></h4>
									<div class="ulama-kunyah">Aa Gym</div>
									<div class="ulama-bio">Pimpinan Pondok Pesantren Daarut Tauhiid Bandung</div>
									<div class="ulama-video"><i class="far fa-play-circle"></i> 210 kajian</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="ulama-item">
							<div class="media">
								<a href="ulama-detail.php"><img src="assets/img/demo/aagym-icon.jpg" class="rounded-circle mr-4"></a>
								<div class="media-body">
									<h4 class="ulama-name mt-0 mb-1"><a href="ulama-detail.php">Abdullah Gymnastiar</a></h4>
									<div class="ulama-kunyah">Aa Gym</div>
									<div class="ulama-bio">Pimpinan Pondok Pesantren Daarut Tauhiid Bandung</div>
									<div class="ulama-video"><i class="far fa-play-circle"></i> 210 kajian</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="ulama-item">
							<div class="media">
								<a href="ulama-detail.php"><img src="assets/img/demo/aagym-icon.jpg" class="rounded-circle mr-4"></a>
								<div class="media-body">
									<h4 class="ulama-name mt-0 mb-1"><a href="ulama-detail.php">Abdullah Gymnastiar</a></h4>
									<div class="ulama-kunyah">Aa Gym</div>
									<div class="ulama-bio">Pimpinan Pondok Pesantren Daarut Tauhiid Bandung</div>
									<div class="ulama-video"><i class="far fa-play-circle"></i> 210 kajian</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>

			<div class="loading text-center">
				<img src="assets/img/loading.gif">
			</div>

		</div>
	</section>

	<?php
	include("partials/footer.php");
	?>

</body>
</html>
