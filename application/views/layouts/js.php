  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"
  	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
  	integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
  	integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="<?php echo base_url('assets/js/stisla.js')?>"></script>

  <!-- JS Libraies -->
  <script src="../node_modules/simpleweather/jquery.simpleWeather.min.js"></script>
  <script src="../node_modules/chart.js/dist/Chart.min.js"></script>
  <script src="../node_modules/jqvmap/dist/jquery.vmap.min.js"></script>
  <script src="../node_modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
  <script src="../node_modules/summernote/dist/summernote-bs4.js"></script>
  <script src="../node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

  <!-- Template JS File -->
  <script src="<?php echo base_url('assets/js/scripts.js')?>"></script>
  <script src="<?php echo base_url('assets/js/custom.js')?>"></script>

  <!-- Page Specific JS File -->
  <script src="<?php echo base_url('assets/js/page/index-0.js')?>"></script>

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
  	dd_edit_status.addEventListener('change', function () {
  		if (dd_edit_status.value === "Revisi") {
  			comment_revisi.style.display = 'block'
  		} else {
  			comment_revisi.style.display = 'none'

  		}

  	})

  </script>

  <script>
  	$('#detail_pengajuan').fireModal({
		  title: 'Detail Pengajuan',
		  center : true,
		  body: `
			<ul class="list-group">
			<li class="list-group-item">Judul: </li>
			<li class="list-group-item">Tanggal: </li>
			<li class="list-group-item">Status : </li>
			</ul>
                        `
  	})

  </script>
