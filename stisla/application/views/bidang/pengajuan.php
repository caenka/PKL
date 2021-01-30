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
						<h1>Berkas Pengajuan</h1>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<a href="tambahPengajuan" class="btn btn-primary">Tambah Berkas Pengajuan</a>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-bordered table-md">
											<tr>
												<th>No</th>
												<th>Judul</th>
												<th>Tanggal</th>
												<th>File</th>
												<th>Status</th>
												<th>Aksi</th>
											</tr>
											<tr>
												<td>1</td>
												<td>Perihal</td>
												<td>2017-01-09</td>
												<td>
													<img alt="image" src="<?php echo base_url('assets/img/avatar/avatar-5.png')?>"
														class="rounded-circle" width="35" data-toggle="tooltip">
												</td>
												<td>
													<div class="badge badge-success">Acc</div>
												</td>
												<td>
													<div class="btn-group mb-3" role="group" aria-label="Basic example">
														<button class="btn btn-primary " id="detail_pengajuan" data-id=""><i class="fas fa-eye"></i></button>
														<button class="btn btn-primary " id="" data-id=""><i class="fas fa-edit"></i></button>
														<a href="" class="btn btn-primary" data-confirm="Apakah anda yakin ?|Data yang sudah dihapus tidak dapat dikembalian. Apakah anda ingin melanjutkan?"
															data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
													</div>
												</td>
											</tr>
											<tr>
												<td>2</td>
												<td>Undangan</td>
												<td>2017-01-09</td>
												<td>
													<img alt="image" src="<?php echo base_url('assets/img/avatar/avatar-1.png')?>"
														class="rounded-circle" width="35" data-toggle="tooltip">
												</td>
												<td>
													<div class="badge badge-danger">Revisi</div>
												</td>
												<td>
													<div class="btn-group mb-3" role="group" aria-label="Basic example">
														<button class="btn btn-primary " id="detail_pengajuan" data-id=""><i class="fas fa-eye"></i></button>
														<button class="btn btn-primary " id="" data-id=""><i class="fas fa-edit"></i></button>
														<a href="" class="btn btn-primary" data-confirm="Apakah anda yakin ?|Data yang sudah dihapus tidak dapat dikembalian. Apakah anda ingin melanjutkan?"
															data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
													</div>
												</td>
											</tr>
											<tr>
												<td>3</td>
												<td>Proposal</td>
												<td>2017-01-09</td>
												<td>
													<img alt="image" src="<?php echo base_url('assets/img/avatar/avatar-3.png')?>"
														class="rounded-circle" width="35" data-toggle="tooltip">
												</td>
												<td>Sedang dalam pengajuan</td>
												<td>
													<div class="btn-group mb-3" role="group" aria-label="Basic example">
														<button class="btn btn-primary " id="detail_pengajuan" data-id=""><i class="fas fa-eye"></i></button>
														<button class="btn btn-primary " id="" data-id=""><i class="fas fa-edit"></i></button>
														<a href="" class="btn btn-primary" data-confirm="Apakah anda yakin ?|Data yang sudah dihapus tidak dapat dikembalian. Apakah anda ingin melanjutkan?"
															data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
													</div>
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
