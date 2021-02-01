<div class="main-sidebar">
	<aside id="sidebar-wrapper">
		<div class="sidebar-brand">
			<a href="admin/dashboard">DISKOMINFO</a>
		</div>
		<div class="sidebar-brand sidebar-brand-sm">
			<a href="admin/dashboard">OFC</a>
		</div>
		<ul class="sidebar-menu">
			<li class="menu-header">Dashboard</li>
			<li class="<?php echo $this->uri->segment(1)=='dashboard' ? 'active' :''?>">
				<a href="<?= site_url('admin/dashboard');?>"><i class="fas fa-fire"></i><span>Dashboard</span></a>
			</li>
			<li class="menu-header">Berkas</li>
			<li class="<?php echo $this->uri->segment(1)=='pengajuan' ? 'active' :''?>">
				<a href="<?= site_url('admin/pengajuan');?>"><i class="fas fa-newspaper"></i><span>Verifikasi Pengajuan</span></a>
			</li>
			<li class="<?php echo $this->uri->segment(1)=='acc' ? 'active' :''?>">
				<a href="<?= site_url('admin/acc');?>"><i class="fas fa-file"></i><span>Berkas Acc</span></a>
			</li>
			<li class='menu-header'>Kelola Akun</li>
			<li class="<?php echo $this->uri->segment(1)=='kelola' ? 'active' :''?>">
				<a href="<?= site_url('admin/kelola');?>"><i class="far fa-user"></i> <span>Kelola Akun</span></a>
			</li>
		</ul>
	</aside>
</div>
