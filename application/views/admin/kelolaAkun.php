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
						<h1>Kelola Akun</h1>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<a href="#" id="tambah_akun" data-bs-toggle="modal" class="btn btn-primary">Tambah Akun</a>
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
													<a class="btn btn-primary btn-action mr-1" id="edit_akun" data-bs-toggle="modal" data-toggle="tooltip" title="Edit"><i
															class="fas fa-pencil-alt"></i></a>
													<a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"
														data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
														data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
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
  	$('#tambah_akun').fireModal({
  		title: 'Tambah Akun',
  		center: true,
  		body: `
        <form id="edit_status_form" action="<?=base_url().'index.php/admin/kelolaAkun/'?>" method="POST">
			<div class="form-group">
				<label>Nama Lengkap</label>
				<input name="nama" type="text" class="form-control">
            </div>
			<div class="form-group">
				<label>Username</label>
				<input name="username" type="text" class="form-control">
            </div>
			<div class="form-group">
				<label>Password</label>
				<input name="password" type="password" class="form-control">
			</div>
			<div class="form-group">
        		<label>Pilih Bidang</label>
        		<select name="bidang" id="" class="form-control">
        			<option>--Pilih Bidang--</option>
        			<option>TI</option>
        			<option>IKP</option>
        			<option>Statistika Sandi</option>
        			<option>Kesekretariatan</option>
        		</select>
        	</div>
                   
            <button class="btn btn-primary" type="submit">Simpan</button>
        </form>
      `
  	})
	</script>

	<script>
		$('#edit_akun').fireModal({
			title: 'Edit Akun',
			center: true,
			body: `
			<form id="edit_status_form" action="<?=base_url().'index.php/admin/kelolaAkun/'?>" method="POST">
				<div class="form-group">
					<label>Nama Lengkap</label>
					<input name="nama" type="text" class="form-control">
				</div>
				<div class="form-group">
					<label>Username</label>
					<input name="username" type="text" class="form-control">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input name="password" type="password" class="form-control">
				</div>
				<div class="form-group">
					<label>Pilih Bidang</label>
					<select name="bidang" id="" class="form-control">
						<option>--Pilih Bidang--</option>
						<option>TI</option>
						<option>IKP</option>
						<option>Statistika Sandi</option>
						<option>Kesekretariatan</option>
					</select>
				</div>
					
				<button class="btn btn-primary" type="submit">Simpan</button>
			</form>
		`
	})
	</script>
</body>

</html>
