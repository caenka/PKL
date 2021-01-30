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
						<h1>Verifikasi Pengajuan</h1>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h4>Tabel Pengajuan</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-bordered table-md">
											<tr>
												<th>No</th>
												<th>Judul</th>
												<th>Tanggal</th>
												<th>Bidang</th>
												<th>File</th>
												<th>Status</th>
												<th>Aksi</th>
											</tr>
											<tr>
												<td>1</td>
												<td>Perihal</td>
												<td>2017-01-09</td>
												<td>TIK</td>
												<td>
													<img alt="image" src="<?php echo base_url('assets/img/avatar/avatar-5.png')?>"
														class="rounded-circle" width="35" data-toggle="tooltip">
												</td>
												<td>
													<div class="badge badge-success">Acc</div>
												</td>
												<td>
													<button id="ed_status" class="btn btn-sm btn-info" style="border-radius : 14px">Edit
														Status</button>
												</td>
											</tr>

										</table>
									</div>
								</div>
								<?php $this->load->view('layouts/pagination.php')?>
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
