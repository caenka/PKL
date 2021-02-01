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
						<div class="section-header-back">
							<a href="profil" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
						</div>
						<h1>Edit Profil</h1>
						<div class="section-header-breadcrumb">
							<div class="breadcrumb-item"><a href="profil">Profil</a></div>
							<div class="breadcrumb-item active">Edit Profil</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12 col-md-12 col-lg-7">
							<div class="card">
								<form method="post" class="needs-validation" novalidate="">
									<div class="card-header">
										<h4>Edit Profil</h4>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="form-group col-md-6 col-12">
												<label>Nama Lengkap</label>
												<input type="text" class="form-control" value="" required="">
												<div class="invalid-feedback">
													Silahkan isi nama lengkap
												</div>
											</div>
										</div>
										<div class="row">
											<div class="form-group col-md-6 col-12">
												<label>Username</label>
												<input type="text" class="form-control" value="" required="">
												<div class="invalid-feedback">
													Silahkan isi username
												</div>
											</div>
										</div>
										<div class="row">
											<div class="form-group col-md-6 col-12">
												<label>Password</label>
												<input type="password" class="form-control" value="" required="">
												<div class="invalid-feedback">
													Silahkan isi password
												</div>
											</div>
											<div class="form-group col-md-6 col-12">
												<label>Konfirmasi Password</label>
												<input type="password" class="form-control" value="" required="">
												<div class="invalid-feedback">
													Silahkan isi konfirmasi password
												</div>
											</div>
										</div>
										<div class="row">
											<div class="form-group col-md-6 col-12">
												<label>Bidang</label>
												<input type="text" class="form-control" value="" required="">
												<div class="invalid-feedback">
													Silahkan isi bidang
												</div>
											</div>
										</div>
									</div>
									<div class="card-footer text-right">
										<button class="btn btn-primary">Simpan</button>
									</div>
								</form>
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
