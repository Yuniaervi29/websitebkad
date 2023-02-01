<!DOCTYPE html>
<html lang="en">
	
<head>
		<!-- Meta Tag -->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
		<!-- ardi -->
    	<meta name="description" content="Website BKAD - Badan Keuangan & Aset Daerah Provinsi Sulawesi Selatan">
        <meta property='og:type' content='article' />
        <meta property='og:url' content='http://bkad.sulselprov.go.id/' />
        <meta property='og:title' content='BKAD - Provinsi Sulawesi Selatan' />
        <meta property='og:image' content='https://bkad.sulselprov.go.id/assets/img/slider-image/slider-image4.jpg' />
        <meta property='og:description' content='Selamat Datang Di Website Resmi  BKAD (Badan Keuangan & Aset Daerah) Provinsi Sulawesi Selatan'>
        
        
		<!-- Title Tag  -->
		<title>BKAD - Provinsi Sulawesi Selatan</title>
		
		<!-- Favicon -->
		<link rel="icon" type="image/favicon.png" href="<?php echo base_url('assets/') ?>img/favicon.png">
		
		<!-- Web Font -->
		<link href="<?php echo base_url('assets/') ?>css/css2.css" rel="stylesheet" type="text/css">
		
		<!-- Bizwheel Plugins CSS -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/') ?>css/animate.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/') ?>css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/') ?>css/cubeportfolio.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/') ?>css/font-awesome.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/') ?>css/jquery.fancybox.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/') ?>css/magnific-popup.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/') ?>css/owl-carousel.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/') ?>css/slicknav.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


		<!-- Bizwheel Stylesheet -->  
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/') ?>css/reset.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/') ?>css/style.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/') ?>css/responsive.css">
		
		
		
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/') ?>css/skin-2.css" id="elena_custom">
		<script src="<?php echo base_url('assets/') ?>js/jquery.min.js"></script>
		
		<style>
		a:link{text-decoration:none;}
		
		    #frame-floatb {
            position: fixed;
            z-index: 1;
            bottom: 20px;
            right: 20px;
        }
        #frame-floatb .close {
            text-align: center;
            border-radius: 100%;
            border: 1px solid grey;
            padding: 5px;
            width: 32px;
            background: #e3e3e321;
            display: inline-block;
            position: absolute;
            top: -17px;
            left: -20px;
            color: red;
            opacity: 1
        }

        #float-botright {
            display: block;
        }
		</style>
		
	</head>
	
	

	<body id="bg" >
		
		<!-- Boxed Layout -->
		<div id="page" class="site"> 
	
		<!-- Preloader -->
		<div class="preeloader">
			<div class="preloader-spinner"></div>
		</div>
		<!--/ End Preloader -->
		
		<!-- Header -->
		<header class="header ">
			<!-- Topbar -->
			<div class="topbar">
				<div class="container-fluid text-center">
					<div class="row">
						<div class="col-md-12">
							<!-- Top Contact -->
							<div class="top-contact">
								<div class="single-contact"><i class="fa fa-phone-square"></i>Fax: <?php echo $SETTINGS->fax ?>  </div> 
								<div class="single-contact"><i class="fa fa-phone"></i>Phone: <?php echo $SETTINGS->phone ?>  </div> 
								<div class="single-contact"><i class="fa fa-envelope-open"></i>Email: <?php echo $SETTINGS->email ?> </div>	
								<div class="single-contact"><i class="fa fa-clock-o"></i><?php echo  nama_hari(date('Y-m-d')).' '.date('d-m-Y') ?></div> 
								
								<!--<div class="single-contact"><a href="https://www.facebook.com/bkadsulsel/" target="_blank"><i class="fa fa-facebook"></i></a></div> -->
								<!--<div class="single-contact"><a href="https://www.instagram.com/bkadsulsel/?hl=id" target="_blank"><i class="fa fa-instagram"></i></a></div> -->
								<img src="assets/img/bkadreal.png" style="padding-left: 50px;" height="8%" width="8%">
								
							</div>
							
							<!-- End Top Contact -->
						</div>	
					
						<!--<div class="col-md-2 col-2">-->
						<!--	<div class="topbar-right">-->
								
												
					
						<!--	</div>-->
						<!--</div>-->
						
					</div>
				</div>
			</div>
			<!--/ End Topbar -->
			<!-- Middle Header -->
			<div class="middle-header">
				<div class="container-fluid" >
					<div class="row">
						<div class="col-lg">
							<div class="middle-inner">
								<div class="row">
									<div class="col-lg-2 col-md-3 col-12">
										<!-- Logo -->
										<div class="logo">
											<!-- Image Logo -->
											<div >
												<a href="<?php echo base_url('welcome') ?>" style="text-decoration: none;">
													<img src="<?php echo base_url('assets/') ?>img/logo-BKAD1.png" alt="#" style="width:200px" class="pt-3">
												</a>
											</div>
										</div>								
										<!--<div class="mobile-nav"></div>-->
									</div>
									<div class="col-lg-10 col-md-12 col-12">
										<div class="menu-area">
											<!-- Main Menu -->
											<nav class="navbar navbar-expand-lg" >
												<div class="navbar-collapse">	
													<div class="nav-inner">	
														<div class="menu-home-menu-container" id="myNavbar">
															<!-- Naviagiton -->
															<ul id="nav" class="nav main-menu menu navbar-nav">
																<li ><a href="<?php echo base_url('welcome') ?>" style="text-decoration: none;">HOME</a>
																	
																</li>
																<li class="icon-active"><a href="#profil">PROFIL</a>
																	<ul class="sub-menu">
                                                                        <li><a href="<?php echo base_url('profil/sejarah_singkat') ?>" style="text-decoration: none;">Sejarah Singkat</a></li>
																		<li><a href="<?php echo base_url('profil/tujuan_sasaran') ?>">Tujuan dan Sasaran BKAD</a></li>
																		<li><a href="<?php echo base_url('profil/tugas_pokok') ?>">Tugas Pokok dan Fungsi</a></li>
																		<li><a href="<?php echo base_url('profil/program_kerja') ?>">Program Kerja</a></li>
																		<li><a href="<?php echo base_url('profil/struktur_organisasi') ?>">Struktur Organisasi</a></li>
																		<li><a href="<?php echo base_url('profil/pejabat') ?>">Profil Pejabat</a></li>
                                										<li><a href="#">Data Statistik</a>
                                                						        <ul class="sub-menu">
                                                                                <li><a href="<?php echo base_url('profil/info_pegawai') ?>">Statistik Kepegawaian</a></li>
                                                                                <li><a href="<?php echo base_url('profil/info_keuangan') ?>">Statistik Keuangan</a></li>
                                                                                <li><a href="<?php echo base_url('profil/info_aset') ?>">Statistik BMD/Aset</a></li>
                                                                                </ul>
                                										</li>								
										                                <li><a href="<?php echo base_url('profil/agenda_kegiatan') ?>">Agenda Kegiatan</a></li>
										                                <li><a href="<?php echo base_url('profil/alamatkontak') ?>">Alamat dan Kontak</a></li>
																	</ul>							
																</li>
																<!--//LAYANAN-->
																<li  class="icon-active"><a href="<?=base_url('profil/layanan')?>">LAYANAN</a>
                                									<ul class="sub-menu">
                                                                        <li><a href="#">Sekretariat</a><ul class="sub-menu">
                                                                        <li><a href="http://sippdeh.sulselprov.go.id/login/" target="_blank">SIPPDEH</a></li>
                                                                        </ul></li>
                                                                        <!--bidang perencanaan-->
                                                                        <li><a href="#">Perencanaan Anggaran Daerah</a><ul class="sub-menu">
                                                                                <li><a href="https://keuangan.sulselprov.go.id/" target="_blank">Simkeuda</a></li>
                                                                                <li><a href="http://simbantuan.sulselprov.go.id/simbansos_2022/" target="_blank">Simbantuan</a></li>
                                                                                <li><a href="http://sisiline.sulselprov.go.id/" target="_blank">Sisiline</a></li>
                                                                                </ul></li>
                                                                        <!--perbend-->
                                                                        <li><a href="#">Perbendaharaan Daerah</a><ul class="sub-menu">
                                                                        <li><a href="https://keuangan.sulselprov.go.id/keu_simakda_2022/siss/" target="_blank">SP2D Online</a></li>
                                                                        <li><a href="https://keuangan.sulselprov.go.id/aidp" target="_blank">Tracking SP2D</a></li>
                                                                                </ul></li>
                                                                        <!--aset-->
                                                                        <li><a href="#">Pengelolaan BMD</a><ul class="sub-menu">
                                                                                <li><a href="https://simbakda.sulselprov.go.id/" target="_blank">Simbakda</a></li>
                                                                                </ul></li>
                                                                    </ul>
                        										</li>
										
																
																
															<li class="icon-active" >
																	<a href="#">GALLERY</a>
																	<ul class="sub-menu">
																	    <li><a href="<?php echo base_url('article')?>">Galery Berita</a></li>
																		<li><a href="<?php echo base_url('video')?>">Galery Video</a></li>
																		<li><a href="<?php echo base_url() ?>gallery">Galery Foto</a></li>
																		<!--<li><a href="#">Galery Media Sosial</a></li>-->
																		<li><a >Galery Media Sosial</a>
                                                						        <ul class="sub-menu">
                                                                                <li><a href="<?php echo base_url() ?>sosmed">Instagram</a></li>
                                                                                <!--<li><a href="<?php echo base_url() ?>sosmed2">Facebook</a></li>-->
                                                                                </ul>
                                										</li>
                                										<li ><a href="#">Galery Regulasi</a>
																	<ul class="sub-menu">
																		<li><a href="<?php echo base_url('hukum/undang_undang') ?>">Undang-Undang</a></li>
																		<li><a href="<?php echo base_url('hukum/peraturan_pemerintah') ?>">Peraturan Pemerintah</a></li>
																		<li><a href="<?php echo base_url('hukum/peraturan_presiden') ?>">Peraturan Presiden</a></li>
																		<li><a href="<?php echo base_url('hukum/peraturan_menteri') ?>">Peraturan Menteri</a></li>
																		<li><a href="<?php echo base_url('hukum/peraturan_daerah') ?>">Peraturan Daerah</a></li>
																		<li><a href="<?php echo base_url('hukum/peraturan_gubernur') ?>">Peraturan Gubernur</a></li>
																		<li><a href="<?php echo base_url('hukum/keputusan_gubernur') ?>">Keputusan Gubernur</a></li>
																		<li><a href="<?php echo base_url('hukum/instruksi_gubernur') ?>">Keputusan Kepala BKAD</a></li>
																		<!--<li><a href="<?php echo base_url('hukum/surat_edaran_bpkd') ?>">Surat Edaran BKAD</a></li>-->
																	</ul>								
																</li>
																	</ul>
																	
																</li>
																	<li>
																	
																		<a href="<?php echo base_url('ipkd') ?>">DOKUMEN</a>	
																</li>
																<!--<li><a href="<?php echo base_url('profil/kinerja_bkad') ?>">Kinerja BKAD</a></li>-->


																
											<li class="icon-active">
																	
																		<a href="#agenda">INFORMASI KOTA/KAB</a>
																
																	<ul class="sub-menu">
																	     <li><a href="<?php echo base_url('profil/opini') ?>">Opini BPK-RI</a> </li>
																	</ul>
																</li>
																
																
																
																<li class="icon-active"><a href="#profil">PPID</a>
																	<ul class="sub-menu">
                                                                        
							            <li><a href="<?php echo base_url('profil/profil_ppid') ?>">Profil Singkat</a>
							            </li>
							            
							            <li><a href="<?php echo base_url('profil/visi_misi') ?>">Visi & Misi</a></li>
																		<li><a href="<?php echo base_url('profil/struktur_ppid') ?>">Struktur Organisasi</a></li>
																		<li><a href="<?php echo base_url('profil/tugas_pokok_ppid') ?>">Tugas Pokok dan Fungsi</a></li>
																		
										<li><a href="<?php echo base_url('profil/maklumat') ?>">Maklumat Pelayanan Informasi Publik</a></li>
										
										<li><a href="<?php echo base_url('profil/jadwal') ?>">Jadwal dan Biaya Pelayanan</a></li>
										
										<li><a href="#">Permohonan Informasi</a>
        										<ul class="sub-menu">
                                                <li><a href="<?php echo base_url('profil/prosedur_informasi'); ?>">Prosedur Permohonan Informasi</a></li>
                                                <li><a href="<?php echo base_url('profil/permohonan_informasi') ?>">Formulir Permohonan Informasi</a></li>
                                        <li><a href="<?php echo base_url('admin/permohonan_informasi/register') ?>">Register Permohonan Informasi</a></li>
                                                </ul>
										</li>
										
										
										<li><a href="<?php echo base_url('profil/prosedur_keberatan'); ?>">Pengajuan Keberatan</a>
                						        <ul class="sub-menu">
                                                <li><a href="<?php echo base_url('profil/prosedur_keberatan'); ?>">Prosedur Pengajuan Keberatan</a></li>
                                                <li><a href="<?php echo base_url('profil/pengajuan_keberatan') ?>">Formulir Pengajuan Keberatan</a></li>
                                                <li><a href="<?php echo base_url('admin/pengajuan_keberatan/register') ?>">Register Pengajuan Keberatan</a></li>
                                                </ul>
										</li>
										
										<li><a >Informasi Publik</a>
                						        <ul class="sub-menu">
                                                <li><a href="<?php echo base_url('informasi/daftar_informasi_publik') ?>">Daftar Informasi Publik</a></li>
                                                <li><a href="<?php echo base_url('informasi/informasi_berkala') ?>">Informasi Berkala</a></li>
                                                <li><a href="<?php echo base_url('informasi/informasi_serta_merta') ?>">Informasi Serta Merta</a></li>
                                                <li><a href="<?php echo base_url('informasi/informasi_setiap_saat') ?>">Informasi Tersedia Setiap Saat</a></li>
                                                <!--<li><a href="<?php echo base_url('informasi/ringkasan_akses') ?>">Ringkasan Akses Informasi Publik</a></li>-->
                                                <!--<li><a href="<?php echo base_url('download/perda?val=LAPORAN_LAYANAN_INFORMASI_PUBLIK') ?>">Laporan Layanan Informasi Publik</a></li>-->
                                                </ul>
										</li>
										<li><a >Laporan Informasi Publik</a>
                						        <ul class="sub-menu">
                                                <li><a href="<?php echo base_url('informasi/ringkasan_akses') ?>">Ringkasan Akses Informasi Publik</a></li>
                                                <li><a href="<?php echo base_url('download/perda?val=LAPORAN_LAYANAN_INFORMASI_PUBLIK') ?>">Laporan Layanan Informasi Publik</a></li>
                                                </ul>
										</li>
										                    
										
																	</ul>	
																	
																	
																
																</li>
																	<li class="icon-active">
																	
																		<a href="">PENGADUAN</a>
																
																	<ul class="sub-menu">
																	    <!--<li><a href="<?php echo base_url('') ?>">Formulir Pengaduan</a> </li>-->
																	     <li><a href="<?php echo base_url('profil/pelayanan_publik') ?>">Pelayanan Publik</a> </li>
																	     <li><a href="<?php echo base_url('profil/penyalahgunaan_wewenang') ?>">Penyalahgunaan Wewenang</a> </li>
																	</ul>
																</li>
																<!--<li><a href="https://www.lapor.go.id/" target="_blank" title="Layanan Aspirasi dan Pengaduan Online Rakyat">LAPOR!</a></li>-->
																<li><a href="<?php echo base_url('profil/tusibkad') ?>" target="_blank" title="Istusi Terkait">LINK TERKAIT</a></li>
															
																
										
										
										
															</ul>
															
															<!--/ End Naviagiton -->
														</div>
													</div>
												</div>
											</nav>
											<!--/ End Main Menu -->	
											<!-- Right Bar -->
											<div class="right-bar">
												<!-- Search Bar -->
												<ul class="right-nav" >
													<li class="top-search"><a href="#0"><i class="fa fa-search"></i></a></li>
													<li class="bar"><a class="fa fa-bars"></a></li>
												</ul>
											
												<!--/ End Search Bar -->
												<!-- Search Form -->
												<div class="search-top">
													<form action="<?php echo base_url('article/cari') ?>" class="search-form" method="get">
														<input type="text" name="cari" value="" placeholder="Search here"/>
														<button type="submit" id="searchsubmit"><i class="fa fa-search"></i></button>
													</form>
												</div>
												<!--/ End Search Form -->
											</div>	
											<!--/ End Right Bar -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Middle Header -->
			<!-- Sidebar Popup -->
			<div class="sidebar-popup">
				<div class="cross">
					<a class="btn"><i class="fa fa-close"></i></a>
				</div>
				<div class="single-content">
					<h4>BKAD</h4>
					<p>Badan Keuangan dan Aset Daerah Provinsi Sulawesi Selatan.</p>
					<!-- Social Icons 
					<ul class="social">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
					</ul>-->
				</div>
				<div class="single-content">
					<h4>Quick Links</h4>  
					<?php  
						$sql = "SELECT * FROM links where link_status='publish' order by link_title";
						$query = $this->db->query($sql);

						foreach($query->result() as $row) {

					?> 
					<ul class="links">
						<li><a href="<?php echo $row->link_url ?>" target="<?php echo $row->link_target ?>"><span class="fa fa-chevron-right"></span> <?php echo $row->link_title ?></a></li>
						
					</ul>
					<?php } ?>
				</div>	
			</div>
			<!--/ Sidebar Popup -->	
		</header>
		<!--/ End Header -->
		