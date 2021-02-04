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
												<th>Keterangan</th>
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
													<div class="badge badge-danger">Revisi</div>
												</td>
												<td>
													<button id="ed_status" class="btn btn-sm btn-info" style="border-radius : 14px">Edit
														Status</button>
												</td>
												<td>Ini revisi</td>
											</tr>
											<tr>
												<td>2</td>
												<td>Undangan</td>
												<td>2017-01-09</td>
												<td>IKP</td>
												<td>
													<img alt="image" src="<?php echo base_url('assets/img/avatar/avatar-4.png')?>"
														class="rounded-circle" width="35" data-toggle="tooltip">
												</td>
												<td>
													<div>Menunggu Verifikasi</div>
												</td>
												<td>
													<button id="ed_status" class="btn btn-sm btn-info" style="border-radius : 14px">Edit
														Status</button>
												</td>
												<td>-</td>
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
  	$('#ed_status').fireModal({
  		title: 'Edit Status Dialog',
  		center: true,
  		body: `
        <form id="edit_status_form" action="<?=base_url().'index.php/admin/pengajuan/update'?>" method="POST">
        	<div class="form-group">
        		<label>Pilih Status</label>
        		<select name="status" id="dd_edit_status" class="form-control">
        			<option>--Pilih Status--</option>
        			<option>Acc</option>
        			<option>Revisi</option>
        			
        		</select>
        	</div>
			<div id="comment_acc" class="form-group" style="display : none">
				<div class="form-group">
					<label>Tanggal Acc</label>
					<input name="tanggal" type="date" class="form-control">
				</div>
				<div class="form-group">
					<label>File</label>
					<input name="file" type="file" class="form-control">
				</div>
			</div>
        	<div id="comment_revisi" class="form-group" style="display : none">
        		<label>Komentar Revisi</label>
        		<textarea name="comment" class="form-control"></textarea>
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

  	let dd_edit_status = document.querySelector('#dd_edit_status')
  	let comment_revisi = document.querySelector('#comment_revisi')
  	let comment_acc = document.querySelector('#comment_acc')
  	dd_edit_status.addEventListener('change', function () {
  		if (dd_edit_status.value === "Revisi") {
  			comment_revisi.style.display = 'block'
  		} else if (dd_edit_status.value === "Acc") {
			comment_revisi.style.display ='none'
		}

  	})
	dd_edit_status.addEventListener('change', function () {
  		if (dd_edit_status.value === "Acc") {
  			comment_acc.style.display = 'block'
  		} else {
			comment_acc.style.display ='none'
		}

  	})

   </script>

</body>

</html>
