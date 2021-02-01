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
													<a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i
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
</body>

</html>
