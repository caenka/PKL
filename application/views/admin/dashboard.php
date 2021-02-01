<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<?php $this->load->view("layouts/head.php") ?>

<body>
	<div id="app">
		<div class="main-wrapper">
			<div class="navbar-bg"></div>
			<?php $this->load->view('layouts/navbar.php')?>
			<?php $this->load->view('admin/_partials/sidebar.php')?>
			<!-- Main Content -->
			<div class="main-content">
				<section class="section">
					<div class="section-header">
						<h1>Dashboard</h1>
					</div>
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6 col-12">
							<div class="card card-statistic-1">
								<div class="card-icon bg-primary">
									<i class="far fa-user"></i>
								</div>
								<div class="card-wrap">
									<div class="card-header">
										<h4>Admin Bidang</h4>
									</div>
									<div class="card-body">
										4
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-12">
							<div class="card card-statistic-1">
								<div class="card-icon bg-danger">
									<i class="far fa-newspaper"></i>
								</div>
								<div class="card-wrap">
									<div class="card-header">
										<h4>Berkas Pengajuan</h4>
									</div>
									<div class="card-body">
										42
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-12">
							<div class="card card-statistic-1">
								<div class="card-icon bg-warning">
									<i class="far fa-file"></i>
								</div>
								<div class="card-wrap">
									<div class="card-header">
										<h4>Berkas Acc</h4>
									</div>
									<div class="card-body">
										1,201
									</div>
								</div>
							</div>
						</div>
				</section>
			</div>
			<?php $this->load->view("layouts/footer.php") ?>
		</div>
	</div>

	<?php $this->load->view("layouts/js.php")?>
</body>

</html>
