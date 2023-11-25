<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>

<link href="<?php echo base_url();?>css/bootstrap.css" rel="stylesheet">
<script src="<?php echo base_url();?>js/jquery.min.js"></script>
<link href="<?php echo base_url();?>css/bootstrap-table.css" rel="stylesheet">
<link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>css/datepicker3.css" rel="stylesheet">
<link href="<?php echo base_url();?>css/styles.css" rel="stylesheet">
<script src="<?php echo base_url();?>js/lumino.glyphs.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/time.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.js"></script>
</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="http://www.java-valley.com/"><span>Sistem Informasi</span>&nbsp;Pegawai</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="<?php echo base_url();?>index.php/profil"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
							<li><a href="<?php echo base_url();?>index.php/user"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li>
							<li><a href="<?php echo base_url();?>index.php/login"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>					
		</div>
		<!-- /.container-fluid -->
	</nav>

	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form>
			<center><br>
				Logo
            <br></center>
		</form>
		<ul class="nav menu">
			<li class="active">
				<a href="<?php echo base_url();?>index.php/dashboard">
					<svg class="glyph stroked dashboard-dial">
						<use xlink:href="#stroked-dashboard-dial"></use>
					</svg> Dashboard
				</a>
			</li>
			<li>
				<a class="" href="<?php echo base_url();?>index.php/pegawai">
					<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Pegawai
				</a>
			</li>
			<li>
				<a class="" href="<?php echo base_url();?>index.php/mutasi_pegawai">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Mutasi Pegawai
						</a>
			</li>
			<li>
				<a class="" href="<?php echo base_url();?>index.php/pelatihan">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Pelatihan
						</a>
			</li>
			<li>
				<a class="" href="<?php echo base_url();?>index.php/riwayat_pendidikan">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Riwayat Pendidikan
						</a>
			</li>
			<li>
				<a class="" href="<?php echo base_url();?>index.php/cuti">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Cuti
						</a>
			</li>
			<li>
				<a href="<?php echo base_url();?>index.php/laporan_pensiun"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg> Laporan Pensiun</a>
			</li>
			<li>
				<a href="<?php echo base_url();?>index.php/user"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg> Data User</a>
			</li>
				<li role="presentation" class="divider"></li>	
			</li>
		</ul>
	</div>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main"><br><br><br>
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg>&nbsp;<?php echo $judul; ?></a></li>
				<li class="active"><?php echo $sub_judul; ?></li>&nbsp;&nbsp;&nbsp;&nbsp;
			</ol>
		</div>
		<?php echo $this->load->view($tampil,null, true);  ?><br><br>
	</div>

	<script src="<?php echo base_url();?>js/chart.min.js"></script>
	<script src="<?php echo base_url();?>js/chart-data.js"></script>
	<script src="<?php echo base_url();?>js/easypiechart.js"></script>
	<script src="<?php echo base_url();?>js/easypiechart-data.js"></script>
	<script src="<?php echo base_url();?>js/bootstrap-datepicker.js"></script>
	<script src="<?php echo base_url();?>js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>js/bootstrap-table.js"></script>


</body>

</html>
