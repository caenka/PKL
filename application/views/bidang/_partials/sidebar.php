<div class="main-sidebar">
	<aside id="sidebar-wrapper">
		<div class="sidebar-brand">
			<a href="bidang/dashboard">DISKOMINFO</a>
		</div>
		<div class="sidebar-brand sidebar-brand-sm">
			<a href="bidang/dashboard">OFC</a>
		</div>
		<ul class="sidebar-menu">
			<li class="menu-header">Dashboard</li>
			<li class="<?php echo $this->uri->segment(1)=='dashboard' ? 'active' :''?>">
				<a href="<?= site_url('bidang/dashboard');?>"><i class="fas fa-fire"></i><span>Dashboard</span></a>
			</li>
			<li class="menu-header">Berkas</li>
			<li class="<?php echo $this->uri->segment(1)=='pengajuan' ? 'active' :''?>">
				<a href="<?= site_url('bidang/pengajuan');?>"><i class="fas fa-newspaper"></i><span>Pengajuan</span></a>
			</li>
			<li class="<?php echo $this->uri->segment(1)=='acc' ? 'active' :''?>">
				<a href="<?= site_url('bidang/acc');?>"><i class="fas fa-file"></i><span>Berkas Acc</span></a>
			</li>
		</ul>
	</aside>
</div>
