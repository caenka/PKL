<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('layouts/head.php') ?>

<body>
	<div id="app">
		<div class="main-wrapper">
			<div class="navbar-bg"></div>
			<?php $this->load->view('layouts/navbar.php') ?>
			<?php $this->load->view('admin/_partials/sidebar.php') ?>

			<!-- Main Content -->
			<div class="main-content">
				<section class="section">
					<div class="section-header">
						<h1>Kelola Akun</h1>
					</div>

					<button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
						Tambah Akun
					</button>
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h4>Tabel Akun</h4>
								</div>

								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-bordered table-md">
											<tr>
												<th>No</th>
												<th>Nama</th>
												<th>Username</th>
												<th>Password</th>
												<th>Bidang</th>
												<th>Aksi</th>
											</tr>
											<tr>
												<td>1</td>
												<td>Jono</td>
												<td>Jono123</td>
												<td>123123</td>
												<td>TIK</td>
												<td>
													<a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
													<a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
												</td>
											</tr>
										</table>
									</div>
								</div>
								<?php $this->load->view('layouts/pagination.php') ?>
							</div>
						</div>
					</div>
			</div>
			</section>
		</div>
		<?php $this->load->view('layouts/footer.php') ?>
	</div>
	</div>

	<?php $this->load->view('layouts/js.php') ?>
</body>
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Masukan Data User</h5>
				<button type="button" id="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="POST" action="<?= base_url('admin/KelolaAkun/addAkun') ?>">
					<div class="form-group">
						<label for="exampleInputEmail1">Full Name</label>
						<input type="text" id="name" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Email address</label>
						<input name="email" id="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Password</label>
						<input type="password" id="password" class="form-control" id="exampleInputPassword1" name="password">

					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Head of Bidang</label>
						<select class="form-control form-control-sm" id="bidang" name="bidang">
							<option value="Bidang TI">Bidang TI</option>
							<option value="Bidang Sandi">Bidang Sandi</option>
							<option value="Bidang IKP">Bidang IKP</option>
							<option value="Bidang Kesekretariatan">Bidang Kesekretariatan</option>
						</select>
					</div>
					<div id="alert-msg"></div>
					<button type="submit" id="submit" class="btn btn-primary">Save Changes</button>
				</form>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$('#submit').click(function() {
		var form_data = {
			name: $('#name').val(),
			email: $('#email').val(),
			password: $('#password').val(),
			bidang: $('#bidang').val(),
		};
		$.ajax({
			url: "<?= base_url('admin/KelolaAkun/addAkun') ?>",
			type: 'POST',
			data: form_data,
			success: function(msg) {
				if (msg == 'YES') {
					$('#alert-msg').html('<div class="alert alert-success text-center">Account Craeted successfully!</div>');
				} else if (msg == 'NO') {
					$('#alert-msg').html('<div class="alert alert-danger text-center">Account Created failed!</div>');
				} else {
					$('#alert-msg').html('<div class="alert alert-danger">' + msg + '</div>');
				}
			}
		});
		return false;
	});
</script>

</html>