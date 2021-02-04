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
												<td>Undangan</td>
												<td>2017-01-09</td>
												<td>
													<img alt="image" src="<?php echo base_url('assets/img/avatar/avatar-1.png')?>"
														class="rounded-circle" width="35" data-toggle="tooltip">
												</td>
												<td>
													<a href="" class="btn btn-danger" id="detail_revisi" data-bs-toggle="modal">Revisi</a>
												</td>
												<td>
													<div class="btn-group mb-3" role="group" aria-label="Basic example">
														<button class="btn btn-primary " id="detail_pengajuan" data-id=""><i class="fas fa-eye"></i></button>
														<a href="" class="btn btn-primary" data-confirm="Apakah anda yakin ?|Data yang sudah dihapus tidak dapat dikembalian. Apakah anda ingin melanjutkan?"
															data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
													</div>
												</td>
											</tr>
											<tr>
												<td>2</td>
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

	<script>
  	$('#detail_pengajuan').fireModal({
  		title: 'Detail Pengajuan',
  		center: true,
  		body: `
			<ul class="list-group">
			<li class="list-group-item">Judul: </li>
			<li class="list-group-item">Tanggal: </li>
			<li class="list-group-item">Status : </li>
			</ul>
                        `
  	})
  	</script>
	
	<script>
  	$('#detail_revisi').fireModal({
  		title: 'Revisi Berkas',
  		center: true,
  		body: `
        <form id="edit_status_form" action="<?=base_url().'index.php/bidang/pengajuan/'?>" method="POST">
				<div class="form-group">
					<label>Komentar Revisi</label>
					<textarea name="comment" class="form-control"></textarea>
        		</div>
				<div class="form-group">
					<label>Judul</label>
					<input name="judu;" type="text" class="form-control">
				</div>
				<div class="form-group">
					<label>File</label>
					<input name="file" type="file" class="form-control">
				</div>
        </form>
      `,
  		buttons: [{
  			text: 'Submit',
  			class: 'btn btn-primary',
  			handler: function () {
  				let form_edit = document.querySelector('#edit_status_form')
  				form_edit.submit()
  			}
  		}, {
  			text: 'Tutup',
  			class: 'btn btn-danger',
  			handler: function (current_modal) {
  				$.destroyModal(current_modal)
  			}
  		}]
  	})
   </script>

</body>

</html>
