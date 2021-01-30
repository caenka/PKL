<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('layouts/head.php')?>

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
						<h1>Profil</h1>
					</div>
					<div class="row">
						<div class="col-12 col-sm-12 col-lg-7">
							<div class="card author-box card-primary">
								<div class="card-body">
									<div class="author-box-left">
										<img alt="image" src="<?php echo base_url('assets/img/avatar/avatar-1.png')?>"
											class="rounded-circle author-box-picture">
										<div class="clearfix"></div>
										<a href="edit_profil" class="btn btn-primary mt-3 primary-btn"><i class="far fa-edit"></i>Edit</a>
									</div>
									<div class="author-box-details">
										<div class="author-box-name">
											<a href="#">Nama Lengkap</a>
										</div>
										<div class="author-box-job">Admin FO</div><br>
										<div class="author-box-name">
											<a href="#">Username</a>
										</div>
										<div class="author-box-job">Admin123</div><br>
										<div class="author-box-name">
											<a href="#">Bidang</a>
										</div>
										<div class="author-box-job">Admin Front Office</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
			<?php $this->load->view('layouts/footer.php')?>
		</div>
	</div>

	<?php $this->load->view('layouts/js.php')?>
</body>

</html>
