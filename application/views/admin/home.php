<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Dashboard</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Dashboard</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<!-- ./col -->
			<div class="row">
				<div class="col-lg-12 col-12 ">
					<!-- small box -->
					
            <div class="alert disabled alert-dismissible" style="background-color:#dbe9ff">
                  <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> -->
                  <h5><i class="icon fas fa-info"></i> <b>Penting !</b></h5>
                    <p>Pastikan bahwa Anda selalu memperbaharui konten website, seperti mempublikasi artikel, 
                      mengunggah dokumentasi,video,agenda, dokumen terbaru dll.</p>
            <!-- <div class="col-md-3">
              <img src="<?php echo base_url('assets/') ?>img/ibkad_large.png" style="width:240px;position:absolute">
            </div> -->
					</div>

					<!-- ./col -->
					<!-- Info boxes -->
					<div class="row">
						<div class="col-12 col-sm-6 col-md-3">
							<div class="info-box">
								<span class="info-box-icon  bg-info elevation-1"><i class="fas fa-clipboard-list"></i></span>

								<div class="info-box-content">
									<span class="info-box-text">Data Agenda</span>
									<span class="info-box-number">
										<?php echo $AGENDA ?>
									</span>
								</div>
								<!-- /.info-box-content -->
							</div>
							<!-- /.info-box -->
						</div>
						<!-- fix for small devices only -->
						<div class="clearfix hidden-md-up"></div>

						<div class="col-12 col-sm-6 col-md-3">
							<div class="info-box mb-3">
								<span class="info-box-icon bg-success elevation-1"><i class="far fa-images"></i></i></span>

								<div class="info-box-content">
									<span class="info-box-text">Data Images</span>
									<span class="info-box-number"><?php echo $IMG ?></span>
								</div>
								<!-- /.info-box-content -->
							</div>
							<!-- /.info-box -->
						</div>
						<!-- /.col -->
						<div class="col-12 col-sm-6 col-md-3">
							<div class="info-box mb-3">
								<span class="info-box-icon bg-warning elevation-1"><i class="fas fa-link"></i></span>

								<div class="info-box-content">
									<span class="info-box-text">Data Links</span>
									<span class="info-box-number"><?php echo $LINKS ?></span>
								</div>
								<!-- /.info-box-content -->
							</div>
							<!-- /.info-box -->
						</div>
						<!-- /.col -->
						<div class="col-12 col-sm-6 col-md-3">
							<div class="info-box mb-3">
								<span class="info-box-icon bg-danger elevation-1"><i class="far fa-play-circle"></i></span>

								<div class="info-box-content">
									<span class="info-box-text">Data Video</span>
									<span class="info-box-number"><?php echo $VID ?></span>
								</div>
								<!-- /.info-box-content -->
							</div>
							<!-- /.info-box -->
						</div>
						<!-- /.col -->

					</div>
					<!-- /.row -->
					<!-- Small boxes (Stat box) -->
					<div class="row">
						<div class="col-lg-3 col-6">
							<!-- small box -->
							<div class="small-box bg-info ">
								<div class="inner">
									<h3><?php echo $USER ?></h3>

									<p>Total User</p>
								</div>
								<div class="icon">
									<i class="fas fa-users"></i>
								</div>
								<a href="#" class="small-box-footer"></a>
							</div>
						</div>
						<!-- ./col -->
						<div class="col-lg-3 col-6">
							<!-- small box -->
							<div class="small-box bg-success">
								<div class="inner">
									<h3><?php echo $PEG ?></h3>

									<p>Total Pegawai BKAD</p>
								</div>
								<div class="icon">
									<i class="ion ion-stats-bars"></i>
								</div>
								<a href="#" class="small-box-footer"> </a>
							</div>
						</div>
						<!-- ./col -->
						<div class="col-lg-3 col-6">
							<!-- small box -->
							<div class="small-box bg-warning">
								<div class="inner">
									<h3><?php echo $POST ?></h3>

									<p>Total Artikel</p>
								</div>
								<div class="icon">
									<i class="far fa-newspaper"></i>
								</div>
								<a href="#" class="small-box-footer"></i></a>
							</div>
						</div>
						<!-- ./col -->
						<div class="col-lg-3 col-6">
							<!-- small box -->
							<div class="small-box bg-danger">
								<div class="inner">
									<h3><?php echo $DOC ?></h3>

									<p>Total Dokumen</p>
								</div>
								<div class="icon">
									<i class="fas fa-swatchbook"></i>
								</div>
								<a href="#" class="small-box-footer"></a>
							</div>
						</div>
						<!-- ./col -->
					</div>
					<!-- /.row -->


				</div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>