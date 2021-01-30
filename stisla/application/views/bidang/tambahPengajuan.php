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
			<?php $this->load->view('bidang/_partials/sidebar.php')?>

			<!-- Main Content -->
			<div class="main-content">
				<section class="section">
					<div class="section-header">
						<div class="section-header-back">
							<a href="pengajuan" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
						</div>
						<h1>Tambah Berkas Pengajuan</h1>
						<div class="section-header-breadcrumb">
							<div class="breadcrumb-item"><a href="pengajuan">Berkas Pengajuan</a></div>
							<div class="breadcrumb-item active">Tambah Berkas Pengajuan</div>
						</div>
					</div>

					<div class="row">
						<div class="col-12 col-md-12 col-lg-12">
							<div class="card">
								<div class="card-header">
									<h4>Informasi Berkas</h4>
								</div>
								<div class="card-body">
									<div class="form-group">
										<label>Judul</label>
										<input type="text" class="form-control">
									</div>
									<div class="form-group">
										<label>Tanggal</label>
										<input type="date" class="form-control">
									</div>
									<div class="form-group">
										<label>File</label>
										<input type="file" class="form-control">
									</div>
									<div class="card-footer text-right">
										<button class="btn btn-primary mr-1" type="submit">Submit</button>
										<button class="btn btn-secondary" type="reset">Reset</button>
									</div>
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
