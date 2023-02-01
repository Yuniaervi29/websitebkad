<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

<?php
// $url = 'https://keuangan.sulselprov.go.id/keu_simakda_2022/simakda/index.php/rest_api/api_simakda';
// $json = file_get_contents($url);
// $json_data = json_decode($json,true);


// $realisasi = file_get_contents('https://keuangan.sulselprov.go.id/keu_simakda_2022/simakda/index.php/rest_api/api_simakda/realisasi');
// $obj = json_decode($anggaran);
// $obj2 = json_decode($realisasi);



$url = 'https://keuangan.sulselprov.go.id/keu_simakda_2022/simakda/index.php/rest_api/api_simakda';
$json = file_get_contents($url);
$jo = json_decode($json);
// echo $jo->anggaran_pendapatan;

$url2 = 'https://keuangan.sulselprov.go.id/keu_simakda_2022/simakda/index.php/rest_api/api_simakda/realisasi';
$json2 = file_get_contents($url2);
$jo2 = json_decode($json2);



// $noreg = $_GET['no'];
$today = date('d-m-Y');

// $data = $this->db->query("SELECT * FROM inbox_permohonan_informasi WHERE noreg ='$noreg'")->row_array();
// $data1 = $this->db->query("SELECT SUM(nilai_ubah) FROM db_simakda_sulsel_2022.`trdrka` WHERE LEFT (kd_rek,1)=4;")->row_array();


function  getBulan($bln){
        switch  ($bln){
			case 1:return   "Januari";break;
			case 2:return   "Februari";break;
			case 3:return   "Maret";break;
			case 4:return   "April";break;
			case 5:return   "Mei";break;
			case 6:return   "Juni";break;
			case 7:return   "Juli";break;
			case 8:return   "Agustus";break;
			case 9:return   "September";break;
			case 10:return  "Oktober";break;
			case 11:return  "November";break;
			case 12:return  "Desember";break;
		}
    }
    
function  tanggal($tgl){
        $tanggal  = explode('-',$tgl);
        $bulan  = $tanggal[1];
        $tahun  =  $tanggal[2];
        return  substr($tanggal[0],0,2).' '.getBulan($bulan).' '.$tahun;
    }
?>

<marquee class="pt-3" attribute_name = "attribute_value"....more attributes style="background-color:#FC6761">
   <p style="color:white;"><b>Selamat Datang Di Website Resmi Badan Keuangan dan Aset Daerah Provinsi Sulawesi Selatan<b></p>
</marquee>
<section class="hero-slider style1">
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="5000">
     <div class="single-slider" style="background-image:url('<?php echo base_url() ?>assets/img/slider-image/slider-image4.jpg');">
				<div class="single-slider" style="background: rgb(212,212,212);
background: linear-gradient(90deg, rgba(212,212,212,0.7399334733893557) 9%, rgba(255,255,255,0) 95%);" >
					<div class="container">
						<div class="row">
							<div class="col-lg-7 col-md-8 col-12">
								<div class="welcome-text"> 
									<div class="hero-text"> 
										 <!--<h4>Pelantikan</h4> -->
										<h1 style="text-shadow: rgb(255, 255, 255)2px 0px 0px, rgb(255, 255, 255) 0.540302px 0.841471px 0px, rgb(255, 255, 255) -0.416147px 0.909297px 0px, rgb(255, 255, 255) -0.989992px 0.14112px 0px, rgb(255, 255, 255) -0.653644px -0.756802px 0px, rgb(255, 255, 255) 0.283662px -0.958924px 0px, rgb(255, 255, 255) 0.96017px -0.279415px 0px;">
										Gubernur Sulawesi Selatan</h1>
										<div class="p-text">
											<p style="text-shadow: rgb(255, 255, 255)1px 0px 0px, rgb(255, 255, 255) 0.540302px 0.841471px 0px, rgb(255, 255, 255) -0.416147px 0.909297px 0px, rgb(255, 255, 255) -0.989992px 0.14112px 0px, rgb(255, 255, 255) -0.653644px -0.756802px 0px, rgb(255, 255, 255) 0.283662px -0.958924px 0px, rgb(255, 255, 255) 0.96017px -0.279415px 0px;">
										Andi Sudirman Sulaiman, S.T.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				    </div>
				</div>
    </div>
   
<!--    <div class="carousel-item" >-->
<!--     	<div class="single-slider" style="background-image:url('<?php echo base_url() ?>assets/img/slider-image/slider-image5.jpg');">-->
<!--				<div class="single-slider" style="background: rgb(212,212,212);-->
<!--background: linear-gradient(90deg, rgba(212,212,212,0.7399334733893557) 9%, rgba(255,255,255,0) 95%);" >-->
<!--					<div class="container">-->
<!--						<div class="row">-->
<!--							<div class="col-lg-7 col-md-8 col-12">-->
<!--								<div class="welcome-text"> -->
<!--									<div class="hero-text"> -->
										<!-- <h4>Pelantikan</h4> -->
<!--										<h1 style="text-shadow: rgb(255, 255, 255)2px 0px 0px, rgb(255, 255, 255) 0.540302px 0.841471px 0px, rgb(255, 255, 255) -0.416147px 0.909297px 0px, rgb(255, 255, 255) -0.989992px 0.14112px 0px, rgb(255, 255, 255) -0.653644px -0.756802px 0px, rgb(255, 255, 255) 0.283662px -0.958924px 0px, rgb(255, 255, 255) 0.96017px -0.279415px 0px;">-->
<!--										Foto Bersama Kepala BKAD</h1>-->
<!--										<div class="p-text">-->
<!--											<p style="text-shadow: rgb(255, 255, 255) 1px 0px 0px, rgb(255, 255, 255) 0.540302px 0.841471px 0px, rgb(255, 255, 255) -0.416147px 0.909297px 0px, rgb(255, 255, 255) -0.989992px 0.14112px 0px, rgb(255, 255, 255) -0.653644px -0.756802px 0px, rgb(255, 255, 255) 0.283662px -0.958924px 0px, rgb(255, 255, 255) 0.96017px -0.279415px 0px;">-->
<!--												Foto bersama dengan kepala BKAD Prov. Sul-Sel</p>-->
<!--										</div>-->
<!--									</div>-->
<!--								</div>-->
<!--							</div>-->
<!--						</div>-->
<!--					</div>-->
<!--				    </div>-->
<!--				</div>-->
<!--    </div>-->
 <div class="carousel-item" data-bs-interval="5000">
       <div class="single-slider" style="background-image:url('<?php echo base_url() ?>assets/img/slider-image/PimpinanBKAD.jpg');">
				<div class="single-slider"  >
				    </div>
				</div>
    </div>
     <div class="carousel-item" data-bs-interval="5000">
       <div class="single-slider" style="background-image:url('<?php echo base_url() ?>assets/img/slider-image/ASN.jpeg');">
<!--				<div class="single-slider" style="background: rgb(212,212,212);-->
<!--background: linear-gradient(90deg, rgba(212,212,212,0.7399334733893557) 9%, rgba(255,255,255,0) 95%);" >-->
<!--				    </div>-->
				</div>
    </div>
    
    <div class="carousel-item" data-bs-interval="5000">
       <div class="single-slider" style="background-image:url('<?php echo base_url() ?>assets/img/slider-image/Visi PPID.jpg');">
				<div class="single-slider"  >
				    </div>
				</div>
    </div>
    <div class="carousel-item"  data-bs-interval="5000">
     	<div class="single-slider" style="background-image:url('<?php echo base_url() ?>assets/img/slider-image/17 Agustus 2022.jpg');">
				<div class="single-slider" >
				
				    </div>
				</div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>
<!-- Hero Slider -->
<!--		<section class="hero-slider style1">-->
<!--			<div class="home-slider">-->
                <!-- Single Slider -->
            
<!--            <div class="single-slider" style="background-image:url('<?php echo base_url() ?>assets/img/slider-image/slider-image4.jpg');">-->
<!--				<div class="single-slider" style="background: rgb(212,212,212);-->
<!--background: linear-gradient(90deg, rgba(212,212,212,0.7399334733893557) 9%, rgba(255,255,255,0) 95%);" >-->
<!--					<div class="container">-->
<!--						<div class="row">-->
<!--							<div class="col-lg-7 col-md-8 col-12">-->
<!--								<div class="welcome-text"> -->
<!--									<div class="hero-text"> -->
										<!-- <h4>Pelantikan</h4> -->
<!--										<h1 style="text-shadow: rgb(255, 255, 255)2px 0px 0px, rgb(255, 255, 255) 0.540302px 0.841471px 0px, rgb(255, 255, 255) -0.416147px 0.909297px 0px, rgb(255, 255, 255) -0.989992px 0.14112px 0px, rgb(255, 255, 255) -0.653644px -0.756802px 0px, rgb(255, 255, 255) 0.283662px -0.958924px 0px, rgb(255, 255, 255) 0.96017px -0.279415px 0px;">-->
<!--										Gubernur Sulawesi Selatan</h1>-->
<!--										<div class="p-text">-->
<!--											<p style="text-shadow: rgb(255, 255, 255)1px 0px 0px, rgb(255, 255, 255) 0.540302px 0.841471px 0px, rgb(255, 255, 255) -0.416147px 0.909297px 0px, rgb(255, 255, 255) -0.989992px 0.14112px 0px, rgb(255, 255, 255) -0.653644px -0.756802px 0px, rgb(255, 255, 255) 0.283662px -0.958924px 0px, rgb(255, 255, 255) 0.96017px -0.279415px 0px;">-->
<!--										Andi Sudirman Sulaiman, S.T.</p>-->
<!--										</div>-->
<!--									</div>-->
<!--								</div>-->
<!--							</div>-->
<!--						</div>-->
<!--					</div>-->
<!--				    </div>-->
<!--				</div>-->
				<!--/ End Single Slider -->
				
 <!-- Single Slider -->
            
<!--            <div class="single-slider" style="background-image:url('<?php echo base_url() ?>assets/img/slider-image/ASN.jpeg');">-->
<!--				<div class="single-slider" style="background: rgb(212,212,212);-->
<!--background: linear-gradient(90deg, rgba(212,212,212,0.7399334733893557) 9%, rgba(255,255,255,0) 95%);" >-->
<!--				    </div>-->
<!--				</div>-->
				<!--/ End Single Slider -->
			
				<!-- Single Slider -->
<!--				<div class="single-slider" style="background-image:url('<?php echo base_url() ?>assets/img/slider-image/slider-image5.jpg');">-->
<!--				<div class="single-slider" style="background: rgb(212,212,212);-->
<!--background: linear-gradient(90deg, rgba(212,212,212,0.7399334733893557) 9%, rgba(255,255,255,0) 95%);" >-->
<!--					<div class="container">-->
<!--						<div class="row">-->
<!--							<div class="col-lg-7 col-md-8 col-12">-->
<!--								<div class="welcome-text"> -->
<!--									<div class="hero-text"> -->
										<!-- <h4>Pelantikan</h4> -->
<!--										<h1 style="text-shadow: rgb(255, 255, 255)2px 0px 0px, rgb(255, 255, 255) 0.540302px 0.841471px 0px, rgb(255, 255, 255) -0.416147px 0.909297px 0px, rgb(255, 255, 255) -0.989992px 0.14112px 0px, rgb(255, 255, 255) -0.653644px -0.756802px 0px, rgb(255, 255, 255) 0.283662px -0.958924px 0px, rgb(255, 255, 255) 0.96017px -0.279415px 0px;">-->
<!--										Foto Bersama Kepala BKAD</h1>-->
<!--										<div class="p-text">-->
<!--											<p style="text-shadow: rgb(255, 255, 255) 1px 0px 0px, rgb(255, 255, 255) 0.540302px 0.841471px 0px, rgb(255, 255, 255) -0.416147px 0.909297px 0px, rgb(255, 255, 255) -0.989992px 0.14112px 0px, rgb(255, 255, 255) -0.653644px -0.756802px 0px, rgb(255, 255, 255) 0.283662px -0.958924px 0px, rgb(255, 255, 255) 0.96017px -0.279415px 0px;">-->
<!--												Foto bersama dengan kepala BKAD Prov. Sul-Sel</p>-->
<!--										</div>-->
<!--									</div>-->
<!--								</div>-->
<!--							</div>-->
<!--						</div>-->
<!--					</div>-->
<!--				    </div>-->
<!--				</div>-->
				<!--/ End Single Slider -->
			</div>
		</section>
		<!--/ End Hero Slider -->
		
		
		<!-- Client Area -->
		<div class="clients section-bg">
			<div class="container">
				<div class="row">
					<div class="col-12">
						
						<div class="partner-slider">
							<!-- Single client -->
							<div class="single-slider">
								<div class="single-client">
									<a href="https://sulselprov.sipd.kemendagri.go.id/daerah" target="_blank"><img src="<?php echo base_url('assets/') ?>img/client/link-2.PNG" alt="#"></a>
								</div>
							</div>
							<!--/ End Single client -->
							<!-- Single client -->
							<div class="single-slider">
								<div class="single-client">
									<a href="https://ppid.sulselprov.go.id" target="_blank"><img src="<?php echo base_url('assets/') ?>img/client/link-1.PNG" alt="#"></a>
								</div>
							</div>
							<!--/ End Single client -->
							<!-- Single client -->
							<div class="single-slider">
								<div class="single-client">
									<a href="https://esakip.sulselprov.go.id/auth/#/login" target="_blank"><img src="<?php echo base_url('assets/') ?>img/client/link-3.PNG" alt="#"></a>
								</div>
							</div>
							<!--/ End Single client -->
							<!-- Single client -->
							<div class="single-slider">
								<div class="single-client">
									<a href="https://eplanning.sulselprov.go.id/" target="_blank"><img src="<?php echo base_url('assets/') ?>img/client/link-4.PNG" alt="#"></a>
								</div>
							</div>
							<!--/ End Single client -->
							<!-- Single client -->
							<div class="single-slider">
								<div class="single-client">
									<a href="https://sirup.lkpp.go.id/sirup" target="_blank"><img src="<?php echo base_url('assets/') ?>img/client/link-5.PNG" alt="#"></a>
								</div>
							</div>
							<!--/ End Single client -->
							<!-- Single client -->
							<div class="single-slider">
								<div class="single-client">
									<a href="http://lpse.sulselprov.go.id/" target="_blank"><img src="<?php echo base_url('assets/') ?>img/client/link-6.PNG" alt="#"></a>
								</div>
							</div>
							<!--/ End Single client -->
							<!-- Single client -->
							<div class="single-slider">
								<div class="single-client">
									<a href="http://www.kemenkeu.go.id/" target="_blank"><img src="<?php echo base_url('assets/') ?>img/client/link-7.PNG" alt="#"></a>
								</div>
							</div>
							<!--/ End Single client -->
							<!-- Single client -->
							<div class="single-slider">
								<div class="single-client">
									<a href="http://www.kemendagri.go.id/" target="_blank"><img src="<?php echo base_url('assets/') ?>img/client/link-8.PNG" alt="#"></a>
								</div>
							</div>
							<!--/ End Single client -->
							<!-- Single client -->
							<div class="single-slider">
								<div class="single-client">
									<a href="https://sulselprov.go.id/" target="_blank"><img src="<?php echo base_url('assets/') ?>img/client/link-9.PNG" alt="#"></a>
								</div>
							</div>
							<!--/ End Single client -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Client Area -->
	
    	<!-- About Us -->
		<section class="testimonials section-space" style="background-image:url('<?php echo base_url('assets/') ?>img/about.jpg')" id="tentang">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-9 col-12">
						<div class="section-title default text-left">
						<div class="section-top">
								<h1><span>Tentang</span><b>Badan Keuangan &amp; Aset Daerah</b></h1>
								<p style="text-align: justify">&emsp;&emsp;&emsp;&emsp;Badan Keuangan dan Aset Daerah Provinsi Sulawesi Selatan Terbentuk Pada Tahun 2020, berdasarkan Peraturan Daerah Provinsi Sulawesi Selatan Nomor 11 Tahun 2019 tentang Perubahan Atas Peraturan Daerah Provinsi Sulawesi Selatan Nomor 10 tahun 2016 tentang Pembentukan Dan Susunan Perangkat Daerah  dan Peraturan Gubernur Nomor 52 Tahun 2019 Tentang Kedudukan, Susunan Organisasi, Tugas dan Fungsi Serta Tata Kerja Badan Keuangan dan Aset Daerah Provinsi Sulawesi Selatan...
								<br>
								&emsp;&emsp;&emsp;&emsp;Perangkat daerah ini dibentuk dari gabungan 2 (dua) perangkat daerah yakni Badan Pengelolaan Keuangan Daerah (BPKD) dan Biro Pengelolaan Barang dan Aset Daerah, dengan tugas membantu Gubernur menyelenggarakan fungsi penunjang urusan pemerintahan bidang pengelolaan keuangan yang menjadi kewenangan daerah sebagaimana amanah dari Peraturan Pemerintah Nomor 18 Tahun 2016 tentang Perangkat Daerah serta Peraturan Menteri Dalam Negeri Nomor 5 Tahun 2017 tentang Pedoman Nomenklatur Perangkat Daerah Provinsi dan Daerah Kabupaten/Kota Yang Melaksanakan Fungsi Penunjang Penyelenggaraan Urusan Pemerintahan.
							</p>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

        <!--/ End About Us -->
        
        <!-- Latest Blog -->
		<section class="latest-blog section-space" style="background-color:#f0f0f0" id="berita">
			<div class="container">
				<div class="row">
                    <div class="col-12">
						<div class="section-title style2 text-center">
							<div class="section-top">
								<h1><span>Berita</span><b>Berita Terbaru</b></h1><h4>Menyajikan berita terkini seputar BKAD Prov. Sulawesi Selatan..</h4>
                            </div>
                            <div class="section-bottom" >
								<div class="text-style-two" >
                                    <div class="button" >
                                        <a href="<?php echo base_url('article') ?>" class="bizwheel-btn theme-2" style="box-shadow: 0 0px 7px 0 rgba(0,0,0,0.2), 0 6px 4px 0 rgba(0,0,0,0.19);border-radius:10px" >Selengkapnya<i class="fa fa-arrow-circle-o-right"></i></a>
                                    </div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="blog-latest blog-latest-slider">
                        <?php if (count($POSTS) > 0) { ?>
                                <?php foreach ($POSTS as $row) { ?>
							<div class="single-slider">
                                <!-- Single Blog -->
                               
                                    <div class="single-news " style="border-radius: 10px; " width=" 100%" !important>
                                        <div class="news-head overlay" style="border-radius: 10px; " width=" 100%" !important>
                                            <span class="news-img" style="background-image:url('uploads/images/<?php echo $row->post_image ?>')"></span>
                                            <a href="<?php echo base_url('article/read/'.$row->post_id) ?>" class="bizwheel-btn theme-2">Baca selengkanya</a>
                                        </div>
                                        <div class="news-body" style="border-radius: 10px; " width=" 100px"!important>
                                            <div class="news-content" width=" 100%" !important>
                                                <h3 class="news-title"><a href="<?php echo base_url('article/read/'.$row->post_id) ?>"><?php echo character_limiter(strip_tags($row->post_title), 40) ?></a></h3>
                                                <ul class="news-meta">
												<li class="date"><i class="fa fa-calendar"></i><?php echo date('d M Y', strtotime($row->post_date)) ?></li>
												<li class="heart"><i class="fa fa-bar-chart"></i>
													<?php 
														$tot = $this->db->query("SELECT hits as tot FROM statistik_article WHERE id_article='$row->post_id'");
														echo $output[] = $tot->row('tot');
													?>
												</li>
                                                </ul>
                                                <div class="news-text  limiterx">
                                                    <p >
                                                        <?php 
                $cont = htmlspecialchars_decode($row->post_content); 
                echo str_pad($cont,173," ");
            ?>
            <?php if (strlen($row->post_content)<70) {
                echo "<br><br><br><br>";
                                                        } ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                              
								<!--/ End Single Blog -->
                            </div>
                            <?php } }?>
							
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Latest Blog -->
		
		<script type="text/javascript">
			$(".limiterx").each(function() {
				var t = this;
				var txt= $(t).text();
				if(txt.length > 350){
					$(t).text(txt.substring(0,350) + '.....');
				}
			});
		</script>
			<!-- Latest Blog -->
			<section class="features-area section-bg" id="agenda">
			<div class="container">
				<div class="row">
				    
                    <div class="col-md-6">
						<div style="-webkit-box-shadow: 7px 8px 22px -7px rgba(0,0,0,0.55); 
									box-shadow: 7px 8px 22px -7px rgba(0,0,0,0.55); background-color:#fff">
							<div class="card" style="height:457px">
								<div class="card-header" style="background-color: #fff;">
									<div class="row">
										<div class="col-sm-6">
												<h4><b>Gallery Video</b></h4>
												<hr style="display: block; height: 0px;border: 0; border-top: 3px solid #fc6761;padding: 0;width:40px">	
										</div>
										<div class="col-sm-5">
											<div class="section-bottom" style="right: 8px;position: absolute;" >
												<div class="text-style-two" >
													<div class="button" >
														<a href="<?php echo base_url('video') ?>" class="bizwheel-btn theme-2" style="box-shadow: 0 0px 2px 0 rgba(0,0,0,0.2), 0 2px 3px 0 rgba(0,0,0,0.19);border-radius: 5px;" >Selengkanya<i class="fa fa-arrow-circle-o-right"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>			
									<p>Menyajikan dokumentasi kegiatan terbaru dalam bentuk video</p>
								</div>
									<div class="card-body" style="background-color: #fff;">
									<div class="blog-latest blog-latest-slider" style="margin-top: 0px;">
									<?php if (count($VIDEO) > 0) { ?>
											<?php foreach ($VIDEO as $row) { ?>
										<div class="single-slider" >
											<!-- Single Blog -->
											<div class="portfolio-main">
												<div id="portfolio-item" class="portfolio-item">
													<div class="cbp-item business animation">
														<!-- Single Portfolio -->
														<div class="single-portfolio">
															<div class="portfolio-head overlay">
																<img src="<?php echo base_url() ?>uploads/video/img/<?php echo $row->image?>" alt=""  style="height:150px;width:400px;object-fit:cover;">
																<a class="more" href="<?php echo base_url('video/video_detail/'.$row->video_id) ?>"><i class="fa fa-play"></i></a>
															</div>
															<div class="portfolio-content" style="width:100%;">
																<h4><a href="<?php echo base_url('video/video_detail/'.$row->video_id) ?>"><?php echo $row->title ?></a></h4>
																<p><?php echo tgl_indo($row->date_created) ?></p>
															</div>
														</div>
														<!--/ End Single Portfolio -->
													</div>
												</div>
											</div>
											<!--/ End Single Blog -->
										</div>
										<?php } }?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div style="-webkit-box-shadow: 7px 8px 22px -7px rgba(0,0,0,0.55); 
									box-shadow: 7px 8px 22px -7px rgba(0,0,0,0.55); background-color:#fff">
							<div class="card" style="height:457px">
								<div class="card-header" style="background-color: #fff;">
									<div class="row">
										<div class="col-sm-6">
													<h4><b>Gallery Foto</b></h4>
												<hr style="display: block; height: 0px;border: 0; border-top: 3px solid #fc6761;padding: 0;width:40px">	
										</div>
										<div class="col-sm-5">
											<div class="section-bottom" style="right: 8px;position: absolute;" >
												<div class="text-style-two" >
													<div class="button" >
														<a href="<?php echo base_url('gallery') ?>" class="bizwheel-btn theme-2" style="box-shadow: 0 0px 2px 0 rgba(0,0,0,0.2), 0 2px 3px 0 rgba(0,0,0,0.19);border-radius: 5px;" >Selengkanya<i class="fa fa-arrow-circle-o-right"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>			
									<p>Menyajikan dokumentasi kegiatan BKAD Prov. Sulawesi Selatan..</p>
								</div>
								<div class="card-body" style="background-color: #fff;">
									<div class="blog-latest blog-latest-slider" style="margin-top: 0px;">
								<?php if(count($ALBUM)>0){ ?>
									<?php foreach($ALBUM as $row){ ?>
										<?php
										$gallery = $this->gallery_model->get_count_gallery_by_album($row->album_id);
									    ?>
										<div class="single-slider" >
											<!-- Single Blog -->
											<div class="portfolio-main">
												<div id="portfolio-item" class="portfolio-item">
													<div class="cbp-item business animation">
														<!-- Single Portfolio -->
														<div class="single-portfolio">
															<div class="portfolio-head overlay">
																<?php if ($row->album_image=='') { ?>
    											            	<img  src="<?php echo base_url() ?>uploads/images/no-image.png ?>" style="height:150px;width:400px;object-fit:cover;"/>
                    											<?php }else{ ?>
                    											<img src="<?php echo base_url() ?>uploads/album/<?php echo $row->album_image ?>"
                    												alt="<?php echo $row->album_title ?>"
                    												title="<?php echo $row->album_title ?>" style="height:150px;width:400px;object-fit:cover;"/>
                    											<?php } ?>
                    											<a class="more" title="<?php echo $row->album_title ?>" href="<?php echo site_url('gallery/detail/'.$row->album_id) ?>"><i class="fa fa-search"></i></a>
															</div>
															<div class="portfolio-content" style="width:100%;">
																<h4><a href="<?php echo site_url('gallery/detail/'.$row->album_id) ?>"><?php echo character_limiter($row->album_title,10) ?></a></h4>
											                    <p><?php echo $gallery ?> Photos</p>
															</div>
														</div>
														<!--/ End Single Portfolio -->
													</div>
												</div>
											</div>
											<!--/ End Single Blog -->
										</div>
										<?php } }?>
									</div>
								</div>
							</div>
						</div>
					</div>
		</section>
		<!--/ End Latest Blog -->													
	<!-- Portfolio -->
		<!--/ End Portfolio -->
		
    		<section class="latest-blog section-space" style="background-color:#f0f0f0">
    		    <div class="container">
    			<div class="row">
                        <div class="col-12">
    						<div class="section-title style2 text-center">
    							<div class="section-top">
    								<h1><span>Medsos</span><b>Instagram Feed</b></h1>
                                </div>
                                
    						</div>
    						<!--embed IG-->
    						<div class="embedsocial-hashtag" data-ref="4dc8886ebef8d9d38f1bea5778c85b07d2f6247a"></div><script>(function(d, s, id){var js; if (d.getElementById(id)) {return;} js = d.createElement(s); js.id = id; js.src = "https://embedsocial.com/cdn/ht.js"; d.getElementsByTagName("head")[0].appendChild(js);}(document, "script", "EmbedSocialHashtagScript"));</script>
    					</div>
    				</div>
    			</div>
    		</section>
		
			<!-- Features Area -->
		<!--	<section class="features-area section-bg" id="download">-->
		<!--	<div class="container">-->
		<!--		<div class="row">-->
  <!--              <div class="col-12">-->
		<!--				<ddiv class="section-title style2 text-center">-->
		<!--					<div class="section-top">-->
		<!--						<h1><span>Dokumen</span><b>Download Dokumen</b></h1>-->
  <!--                          </div>-->
                            
		<!--				</ddiv>-->
		<!--			</div>-->
		<!--			<div class="col-lg-3 col-md-6 col-12">-->
						<!-- Single Feature -->
		<!--				<div class="single-feature " style="height:90%">-->
		<!--					<div class="icon-head"><i class="fa fa-book"></i></div>-->
		<!--					<h4><a href="<?php echo base_url('download/perda?val=kua') ?>">KUA</a></h4>-->
		<!--					<p>Kebijakan Umum Anggaran</p>-->
		<!--					<div class="button">-->
		<!--						<a href="<?php echo base_url('download/perda?val=kua') ?>" class="bizwheel-btn"><i class="fa fa-arrow-circle-o-right"></i>Lihat Selengkapnya..</a>-->
		<!--					</div>-->
		<!--				</div>-->
						<!--/ End Single Feature -->
		<!--			</div>-->
		<!--			<div class="col-lg-3 col-md-6 col-12">-->
						<!-- Single Feature -->
		<!--				<div class="single-feature " style="height:90%">-->
		<!--					<div class="icon-head"><i class="fa fa-book"></i></div>-->
		<!--					<h4><a href="<?php echo base_url('download/perda?val=ppas') ?>">PPAS</a></h4>-->
		<!--					<p>Prioritas dan Plafon Anggaran Sementara</p>-->
		<!--					<div class="button">-->
		<!--						<a href="<?php echo base_url('download/perda?val=ppas') ?>" class="bizwheel-btn"><i class="fa fa-arrow-circle-o-right"></i>Lihat Selengkapnya..</a>-->
		<!--					</div>-->
		<!--				</div>-->
						<!--/ End Single Feature -->
		<!--			</div>-->
		<!--			<div class="col-lg-3 col-md-6 col-12">-->
						<!-- Single Feature -->
		<!--				<div class="single-feature " style="height:90%">-->
		<!--					<div class="icon-head"><i class="fa fa-book"></i></div>-->
		<!--					<h4><a href="<?php echo base_url('download/perda?val=apbd') ?>">APBD / APBDP</a></h4>-->
		<!--					<p>Anggaran Pendapatan dan Belanja Daerah &amp; Anggaran Pendapatan dan Belanja Daerah Perubahan</p>-->
		<!--					<div class="button">-->
		<!--						<a href="<?php echo base_url('download/perda?val=apbd') ?>" class="bizwheel-btn"><i class="fa fa-arrow-circle-o-right"></i>Lihat Selengkapnya..</a>-->
		<!--					</div>-->
		<!--				</div>-->
						<!--/ End Single Feature -->
		<!--			</div>-->
		<!--			<div class="col-lg-3 col-md-6 col-12">-->
						<!-- Single Feature -->
		<!--				<div class="single-feature " style="height:90%">-->
		<!--					<div class="icon-head"><i class="fa fa-tasks"></i></div>-->
		<!--					<h4><a href="<?php echo base_url('download/perda?val=rka') ?>">RKA / RKAP</a></h4>-->
		<!--					<p>Rencana Kegiatan dan Anggaran &amp; Rencana Kegiatan dan Anggaran Perubahan <br><br></p>-->
		<!--					<div class="button">-->
		<!--						<a href="<?php echo base_url('download/perda?val=rka') ?>" class="bizwheel-btn"><i class="fa fa-arrow-circle-o-right"></i>Lihat Selengkapnya..</a>-->
		<!--					</div>-->
		<!--				</div>-->
						<!--/ End Single Feature -->
		<!--			</div>-->
		<!--			<div class="col-lg-3 col-md-6 col-12">-->
						<!-- Single Feature -->
		<!--				<div class="single-feature" style="height:90%">-->
		<!--					<div class="icon-head"><i class="fa fa-briefcase"></i></div>-->
		<!--					<h4><a href="<?php echo base_url('download/perda?val=dpa') ?>">DPA / DPPA</a></h4>-->
		<!--					<p>Dokumen Pelaksanaan Anggaran &amp; Dokumen Pelaksanaan Perubahan Anggaran </p>-->
		<!--					<div class="button">-->
		<!--						<a href="<?php echo base_url('download/perda?val=dpa') ?>" class="bizwheel-btn"><i class="fa fa-arrow-circle-o-right"></i>Lihat Selengkapnya..</a>-->
		<!--					</div>-->
		<!--				</div>-->
						<!--/ End Single Feature -->
		<!--			</div>-->
		<!--			<div class="col-lg-3 col-md-6 col-12">-->
						<!-- Single Feature -->
		<!--				<div class="single-feature" style="height:90%">-->
		<!--					<div class="icon-head"><i class="fa fa-podcast"></i></div>-->
		<!--					<h4><a href="<?php echo base_url('download/perda?val=lra') ?>">LRA</a></h4>-->
		<!--					<p>Laporan Realisasi Anggaran <br><br><br><br></p>-->
		<!--					<div class="button">-->
		<!--						<a href="<?php echo base_url('download/perda?val=lra') ?>" class="bizwheel-btn"><i class="fa fa-arrow-circle-o-right"></i>Lihat Selengkapnya..</a>-->
		<!--					</div>-->
		<!--				</div>-->
						<!--/ End Single Feature -->
  <!--                  </div>-->
  <!--                  <div class="col-lg-3 col-md-6 col-12">-->
						<!-- Single Feature -->
		<!--				<div class="single-feature" style="height:90%">-->
		<!--					<div class="icon-head"><i class="fa fa-file-text-o"></i></div>-->
		<!--					<h4><a href="<?php echo base_url('download/perda?val=lak') ?>">LAK</a></h4>-->
		<!--					<p>Laporan Arus Kas <br><br><br><br></p>-->
		<!--					<div class="button">-->
		<!--						<a href="<?php echo base_url('download/perda?val=lak') ?>" class="bizwheel-btn"><i class="fa fa-arrow-circle-o-right"></i>Lihat Selengkapnya..</a>-->
		<!--					</div>-->
		<!--				</div>-->
						<!--/ End Single Feature -->
  <!--                  </div>-->
  <!--                  <div class="col-lg-3 col-md-6 col-12">-->
						<!-- Single Feature -->
		<!--				<div class="single-feature " style="height:90%">-->
		<!--					<div class="icon-head"><i class="fa fa-file-text-o"></i></div>-->
		<!--					<h4><a href="<?php echo base_url('download/perda?val=lkpd') ?>">NERACA</a></h4>-->
		<!--					<p>Laporan Posisi Keuangan <br></p>-->
		<!--					<div class="button">-->
		<!--						<a href="<?php echo base_url('download/perda?val=lkpd') ?>" class="bizwheel-btn"><i class="fa fa-arrow-circle-o-right"></i>Lihat Selengkapnya..</a>-->
		<!--					</div>-->
		<!--				</div>-->
						<!--/ End Single Feature -->
		<!--			</div>-->
		<!--			<div class="col-lg-3 col-md-6 col-12">-->
						<!-- Single Feature -->
		<!--				<div class="single-feature" style="height:90%">-->
		<!--					<div class="icon-head"><i class="fa fa-file-text-o"></i></div>-->
		<!--					<h4><a href="<?php echo base_url('download/perda?val=calk') ?>">CaLK</a></h4>-->
		<!--					<p>Catatan Atas Laporan Keuangan <br><br><br><br></p>-->
		<!--					<div class="button">-->
		<!--						<a href="<?php echo base_url('download/perda?val=calk') ?>" class="bizwheel-btn"><i class="fa fa-arrow-circle-o-right"></i>Lihat Selengkapnya..</a>-->
		<!--					</div>-->
		<!--				</div>-->
						<!--/ End Single Feature -->
  <!--                  </div>-->
		<!--			<div class="col-lg-3 col-md-6 col-12">-->
						<!-- Single Feature -->
		<!--				<div class="single-feature " style="height:90%">-->
		<!--					<div class="icon-head"><i class="fa fa-files-o"></i></div>-->
		<!--					<h4><a href="<?php echo base_url('download/perda?val=renstra') ?>">RENSTRA</a></h4>-->
		<!--					<p>Rencana Strategis <br><br></p>-->
		<!--					<div class="button">-->
		<!--						<a href="<?php echo base_url('download/perda?val=renstra') ?>" class="bizwheel-btn"><i class="fa fa-arrow-circle-o-right"></i>Lihat Selengkapnya..</a>-->
		<!--					</div>-->
		<!--				</div>-->
						<!--/ End Single Feature -->
		<!--			</div>-->
		<!--			<div class="col-lg-3 col-md-6 col-12">-->
						<!-- Single Feature -->
		<!--				<div class="single-feature " style="height:90%">-->
		<!--					<div class="icon-head"><i class="fa fa-caret-square-o-down"></i></div>-->
		<!--					<h4><a href="<?php echo base_url('download/perda?val=renja') ?>">RENJA</a></h4>-->
		<!--					<p>Rencana Kerja <br><br></p>-->
		<!--					<div class="button">-->
		<!--						<a href="<?php echo base_url('download/perda?val=renja') ?>" class="bizwheel-btn"><i class="fa fa-arrow-circle-o-right"></i>Lihat Selengkapnya..</a>-->
		<!--					</div>-->
		<!--				</div>-->
						<!--/ End Single Feature -->
		<!--			</div>-->
		<!--			<div class="col-lg-3 col-md-6 col-12">-->
						<!-- Single Feature -->
		<!--				<div class="single-feature " style="height:90%">-->
		<!--					<div class="icon-head"><i class="fa fa-bar-chart "></i></div>-->
		<!--					<h4><a href="<?php echo base_url('download/perda?val=kinerja') ?>">LAPORAN KINERJA</a></h4>-->
		<!--					<p>Laporan Kinerja Badan Keuangan Daerah </p>-->
		<!--					<div class="button">-->
		<!--						<a href="<?php echo base_url('download/perda?val=kinerja') ?>" class="bizwheel-btn"><i class="fa fa-arrow-circle-o-right"></i>Lihat Selengkapnya..</a>-->
		<!--					</div>-->
		<!--				</div>-->
						<!--/ End Single Feature -->
		<!--			</div>-->
		<!--		</div>-->
		<!--	</div>-->
		<!--</section>-->
		<!--/ End Features Area -->										
		<!-- Our Team -->
		<section class="team section-bg section-space" style="background-color:#f0f0f0">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title  style2 text-center">
							<div class="section-top">
								<h1><span>Profil</span><b>Profil Pejabat</b></h1>
							</div>
							<div class="section-bottom" >
								<div class="text-style-two" >
                                    <div class="button" >
                                        <a href="<?php echo base_url('profil/pejabat') ?>" class="bizwheel-btn theme-2" style="box-shadow: 0 0px 7px 0 rgba(0,0,0,0.2), 0 6px 4px 0 rgba(0,0,0,0.19);border-radius:10px" >Selengkapnya<i class="fa fa-arrow-circle-o-right"></i></a>
                                    </div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
				<div class="team-slider">
					<div class="single-slider">
						<!-- Single Team -->
						<div class="single-team" style="border-radius:10px">
							<div class="team-head">
								<img src="<?php echo base_url('assets/') ?>img/team/<?php echo $KABAN->foto ?>" alt="#" style="width:100%;height:100%;border-radius:10px"> 
							</div>
							<div class="t-content">
								<div class="team-arrow">
									<a  href="#kepalaModal" data-toggle="modal"><i class="fa fa-angle-up"></i></a>
								</div>
								<div class="content-inner">
									<h4 class="name"><a href=""><?php echo $KABAN->nama ?></a></h4>
									<span class="designation">KEPALA BADAN</span>
								</div>
							</div>
						</div>
						<!--/ End Single Team -->
					</div>
					<div class="single-slider">
						<!-- Single Team -->
						<div class="single-team" style="border-radius:10px">
							<div class="team-head">
								<img src="<?php echo base_url('assets/') ?>img/team/<?php echo $SEKRETARIS->foto ?>" alt="#" style="width:100%;height:100%;border-radius:10px">
							</div>
							<div class="t-content">
								<div class="team-arrow">
									<a><i class="fa fa-angle-up"></i></a>
								</div>
								<div class="content-inner">
									<h4 class="name"><a href="#"><?php echo $SEKRETARIS->nama ?></a></h4>
									<span class="designation">SEKRETARIS</span>
								</div>
							</div>
						</div>
						<!--/ End Single Team -->
					</div>
					<div class="single-slider">
						<!-- Single Team -->
						<div class="single-team" style="border-radius:10px">
							<div class="team-head">
								<img src="<?php echo base_url('assets/') ?>img/team/<?php echo $KASUBAG_P->foto ?>" alt="#" style="width:100%;height:100%;border-radius:10px">
							</div>
							<div class="t-content">
								<div class="team-arrow">
									<a><i class="fa fa-angle-up"></i></a>
								</div>
								<div class="content-inner">
									<h4 class="name"><a href="#"><?php echo $KASUBAG_P->nama ?></a></h4>
									<span class="designation">KASUBAG PROGRAM</span>
								</div>
							</div>
						</div>
						<!--/ End Single Team -->
					</div>
					<div class="single-slider">
						<!-- Single Team -->
						<div class="single-team" style="border-radius:10px">
							<div class="team-head">
								<img src="<?php echo base_url('assets/') ?>img/team/<?php echo $KASUBAG_U->foto ?>" alt="#" style="width:100%;height:100%;border-radius:10px">
							</div>
							<div class="t-content">
								<div class="team-arrow">
									<a><i class="fa fa-angle-up"></i></a>
								</div>
								<div class="content-inner">
									<h4 class="name"><a href="#"><?php echo $KASUBAG_U->nama ?></a></h4>
									<span class="designation">KASUBAG Umum, Kepegawaian, dan Hukum</span>
								</div>
							</div>
						</div>
						<!--/ End Single Team -->
					</div>
					<div class="single-slider">
						<!-- Single Team -->
						<div class="single-team" style="border-radius:10px">
							<div class="team-head">
								<img src="<?php echo base_url('assets/') ?>img/team/<?php echo $KASUBAG_K->foto ?>" alt="#" style="width:100%;height:100%;border-radius:10px">
							</div>
							<div class="t-content">
								<div class="team-arrow">
									<a><i class="fa fa-angle-up"></i></a>
								</div>
								<div class="content-inner">
									<h4 class="name"><a href="#"><?php echo $KASUBAG_K->nama ?></a></h4>
									<span class="designation">KASUBAG Keuangan</span>
								</div>
							</div>
						</div>
						<!--/ End Single Team -->
					</div>
					<div class="single-slider">
						<!-- Single Team -->
						<div class="single-team" style="border-radius:10px">
							<div class="team-head">
								<img src="<?php echo base_url('assets/') ?>img/team/<?php echo $kabid_ang->foto ?>" alt="#" style="width:100%;height:100%;border-radius:10px">
							</div>
							<div class="t-content">
								<div class="team-arrow">
									<a><i class="fa fa-angle-up"></i></a>
								</div>
								<div class="content-inner">
									<h4 class="name"><a href="#"><?php echo $kabid_ang->nama ?></a></h4>
									<span class="designation">KABID Perencanaan Anggaran</span>
								</div>
							</div>
						</div>
						<!--/ End Single Team -->
					</div>
					<div class="single-slider">
						<!-- Single Team -->
						<div class="single-team" style="border-radius:10px">
							<div class="team-head">
								<img src="<?php echo base_url('assets/') ?>img/team/<?php echo $kabid_perbend->foto ?>" alt="#" style="width:100%;height:100%;border-radius:10px">
							</div>
							<div class="t-content">
								<div class="team-arrow">
									<a><i class="fa fa-angle-up"></i></a>
								</div>
								<div class="content-inner">
									<h4 class="name"><a href="#"><?php echo $kabid_perbend->nama ?></a></h4>
									<span class="designation">KABID Perbendaharaan</span>
								</div>
							</div>
						</div>
						<!--/ End Single Team -->
					</div>
					<div class="single-slider">
						<!-- Single Team -->
						<div class="single-team" style="border-radius:10px">
							<div class="team-head">
								<img src="<?php echo base_url('assets/') ?>img/team/<?php echo $kabid_akt->foto ?>" alt="#" style="width:100%;height:100%;border-radius:10px">
							</div>
							<div class="t-content">
								<div class="team-arrow">
									<a><i class="fa fa-angle-up"></i></a>
								</div>
								<div class="content-inner">
									<h4 class="name"><a href="#"><?php echo $kabid_akt->nama ?></a></h4>
									<span class="designation">KABID Akuntansi dan Pelaporan Keuangan</span>
								</div>
							</div>
						</div>
						<!--/ End Single Team -->
					</div>
					<div class="single-slider">
						<!-- Single Team -->
						<div class="single-team" style="border-radius:10px">
							<div class="team-head">
								<img src="<?php echo base_url('assets/') ?>img/team/<?php echo $kabid_brg->foto ?>" alt="#" style="width:100%;height:100%;border-radius:10px">
							</div>
							<div class="t-content">
								<div class="team-arrow">
									<a><i class="fa fa-angle-up"></i></a>
								</div>
								<div class="content-inner">
									<h4 class="name"><a href="#"><?php echo $kabid_brg->nama ?></a></h4>
									<span class="designation">KABID Pengelolaan Barang Milik Daerah</span>
								</div>
							</div>
						</div>
						<!--/ End Single Team -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End Team -->
		
		<section class="features-area section-bg" id="grafik">
			<div class="container">
			    	<div class="section-title  style2 text-center">
							<div class="section-top">
								<h1><span>Grafik</span><b>Update Realisasi APBD SulSel</b></h1>
								<!--<p>Data Update Pukul 15:07, Hari Kamis - 23 Juni 2022</p>-->
							</div>
							
						</div>
				<div class="row">
                  <div class="col-sm-4">
                    <div class="card text-dark mb-3">
                      <div class="card-body" style="background-image: linear-gradient(170deg, #01E4F8 0%, #1D3EDE 100%)">
                        <h5 class="card-title text-center" style="color:white;">Target dan Realisasi <br>Pendapatan Daerah</h5>
                        <table>
                            <tr style="color:white;">
                                <td ><b>Target Pendapatan</b></td>
                                <td style="text-align: center;"><b>:</b> </td>
                                <td><b>Rp <?=number_format($jo->anggaran_pendapatan,2);?></b></td>
                            </tr>
                            <tr style="color:white;">
                                <td><b>Realisasi Pendapatan</b></td>
                                <td style="text-align: center;"><b>:</b> </td>
                                <td><b>Rp <?=number_format($jo2->realisasi_pendapatan,2);?></b></td>
                            </tr>
                            <tr style="color:white;">
                                <td><b>Persentase (%)</b></td>
                                <td style="text-align: center;"><b>:</b></td>
                                <td><b><?=number_format($jo2->realisasi_pendapatan/$jo->anggaran_pendapatan*100,2) ?> %</b></td>
                            </tr>
                        </table>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-sm-4">
                    <div class="card text-dark  mb-3">
                      <div class="card-body" style="background-image: linear-gradient(170deg, #B4EC51 0%, #429321 100%)">
                        <h5 class="card-title text-center" style="color:white;">Anggaran dan Realisasi<br>Belanja Daerah</h5>
                        <table>
                            <tr style="color:white;">
                                <td><b>Anggaran Belanja</b></td>
                                <td style="text-align: center;"><b>:</b> </td>
                                <td><b>Rp <?=number_format($jo->anggaran_belanja,2);?></b></td>
                            </tr>
                            <tr style="color:white;">
                                <td><b>Realisasi Belanja</b></td>
                                <td style="text-align: center;"><b>:</b></td>
                                <td><b>Rp <?=number_format($jo2->realisasi_belanja,2);?></b></td>
                            </tr>
                             <tr style="color:white;">
                                <td><b>Persentase (%)</b></td>
                                <td style="text-align: center;"><b>:</b> </td>
                                <td><b><?=number_format($jo2->realisasi_belanja/$jo->anggaran_belanja*100,2) ?> %</b></td>
                            </tr>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="card text-dark  mb-3">
                      <div class="card-body" style="background-image: linear-gradient(170deg, #C86DD7 0%, #3023AE 100%)">
                        <h5 class="card-title text-center" style="color:white;">Target dan Realisasi<br>Pembiayaan Daerah</h5>
                        <table>
                            <tr style="color:white;">
                                <td><b>Target Pembiayaan</b></td>
                                <td style="text-align: center;"><b>:</b> </td>
                                <td><b>Rp <?=number_format($jo->anggaran_pembiaayan,2);?></b></td>
                            </tr>
                            <tr style="color:white;">
                                <td><b>Realisasi Pembiayaan</b></td>
                                <td style="text-align: center;"><b>:</b> </td>
                                <td><b>Rp <?=number_format($jo2->realisasi_pembiayaan,2);?></b></td>
                            </tr>
                             <tr style="color:white;">
                                <td><b>Persentase (%)</b></td>
                                <td style="text-align: center;"><b>:</b> </td>
                                <td><b><?=number_format($jo2->realisasi_pembiayaan/$jo->anggaran_pembiaayan*100,2) ?> %</b></td>
                            </tr>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
						
					</div>
		</section>
		
		<!--grafik pemohon informasi-->
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<style>
#bar-chart2 {
  height: 400px;
}
</style>

<!--	<section class="latest-blog section-space" style="background-color:#f0f0f0">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-12">-->
<!--                <div class="section-title  style2 text-center">-->
<!--                	<div class="section-top">-->
<!--                		<h1><span>Info</span>-->
<!--                	</div>-->
<!--                </div>-->
<!--                <figure class="highcharts-figure">-->
<!--                  <div id="bar-chart2"></div>-->
<!--                </figure>-->

<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<?php
$q = $this->db->query("SELECT MONTH(tgl) bulan,COUNT(nama) jml FROM inbox_permohonan_informasi GROUP BY MONTH(tgl)");
$bln1='';
$bln2='';
$bln3='';
$bln4='';
$bln5='';
$bln6='';
$bln7='';
$bln8='';
$bln9='';
$bln10='';
$bln11='';
$bln12='';
foreach($q->result() as $a){
    
if($a->bulan == 1 && $a->bulan == ''){
    $bln1 = 0;
}elseif($a->bulan == 1 && $a->bulan <> ''){
    $bln1 = $a->jml;
}

if($a->bulan == 9 && $a->bulan == ''){
    $bln9 = 0;
}elseif($a->bulan == 9 && $a->bulan <> ''){
    $bln9 = $a->jml;
}

if($a->bulan == 2 && $a->bulan == ''){
    $bln2 = 0;
}elseif($a->bulan == 2 && $a->bulan <> ''){
    $bln2 = $a->jml;
}

if($a->bulan == 3 && $a->bulan == ''){
    $bln3 = 0;
}elseif($a->bulan == 3 && $a->bulan <> ''){
    $bln3 = $a->jml;
}

if($a->bulan == 4 && $a->bulan == ''){
    $bln4 = 0;
}elseif($a->bulan == 4 && $a->bulan <> ''){
    $bln4 = $a->jml;
}

if($a->bulan == 5 && $a->bulan == ''){
    $bln5 = 0;
}elseif($a->bulan == 5 && $a->bulan <> ''){
    $bln5 = $a->jml;
}

if($a->bulan == 6 && $a->bulan == ''){
    $bln6 = 0;
}elseif($a->bulan == 6 && $a->bulan <> ''){
    $bln6 = $a->jml;
}

if($a->bulan == 7 && $a->bulan == ''){
    $bln7 = 0;
}elseif($a->bulan == 7 && $a->bulan <> ''){
    $bln7 = $a->jml;
}

if($a->bulan == 8 && $a->bulan == ''){
    $bln8 = 0;
}elseif($a->bulan == 8 && $a->bulan <> ''){
    $bln8 = $a->jml;
}

if($a->bulan == 9 && $a->bulan == ''){
    $bln9 = 0;
}elseif($a->bulan == 9 && $a->bulan <> ''){
    $bln9 = $a->jml;
}

if($a->bulan == 10 && $a->bulan == ''){
    $bln10 = 0;
}elseif($a->bulan == 10 && $a->bulan <> ''){
    $bln10 = $a->jml;
}

if($a->bulan == 11 && $a->bulan == ''){
    $bln11 = 0;
}elseif($a->bulan == 11 && $a->bulan <> ''){
    $bln11 = $a->jml;
}

if($a->bulan == 12 && $a->bulan == ''){
    $bln12 = 0;
}elseif($a->bulan == 12 && $a->bulan <> ''){
    $bln12 = $a->jml;
}

}
?>
<script>
Highcharts.setOptions({
        chart: {
            style:{
                    fontFamily:'sans-serif', 
                    fontSize: '2em',
                    color:'#f00'
                }
        }
    });
        $('#bar-chart2').highcharts({
            chart: {
                type: 'column'
            },
            colors: [
               '#ED5565',
               '#5D9CEC', 
               '#A0D468', 
               '#FFCE54',  
               '#48CFAD', 
               '#AC92EC',
               '#AAB2BD', 
               '#D770AD', 
               '#c42525', 
               '#a6c96a',
               '#e28743',
               '#063970'
            ],
            title: {
                text: ' Chart Permohonan Infromasi',
                style: {
                  color: '#555'
                }
            },
            legend: {
                layout: 'horizontal',
                align: 'center',
                verticalAlign: 'bottom',
                borderWidth: 0,
                backgroundColor: '#FFFFFF'
            },
            xAxis: {
                categories: [
                  'Bulan',
                  'Januari',
                  'Februari',
                  'Maret',
                  'April',
                  'Mei',
                  'Juni',
                  'Juli',
                  'Agustus',
                  'September',
                  'Oktober',
                  'Nopember',
                  'Desember'
      
                ]
            },
            yAxis: {
                title: {
                    text: 'Jumlah'
                }
            },
            tooltip: {
                shared: false,
                valueSuffix: ' Orang'
            },
            credits: {
                enabled: false
            },
            plotOptions: {
                areaspline: {
                    fillOpacity: 0.1
                },
            series: {
                groupPadding: .15
            }
            },
            series: [{
                name: 'Januari',
                data: [<?=$bln1;?>]
            }, {
                name: 'Februari',
                data: [<?=$bln2;?>]
            }, {
                name: 'Maret',
                data: [<?=$bln3;?>]
            }, {
                name: 'April',
                data: [<?=$bln4;?>]
            }, {
                name: 'Mei',
                data: [<?=$bln5;?>]
            }, {
                name: 'Juni',
                data: [<?=$bln6;?>]
            }, {
                name: 'Juli',
                data: [<?=$bln7;?>]
            }, {
                name: 'Agustus',
                data: [<?=$bln8;?>]
            }, {
                name: 'September',
                data: [<?=$bln9;?>]
            }, {
                name: 'Oktober',
                data: [<?=$bln10;?>]
            }, {
                name: 'Nopember',
                data: [<?=$bln11;?>]
            }, {
                name: 'Desember',
                data: [<?=$bln12;?>]
            }]
        });
</script>
<!--end-->

<!-- Modal plt.kepala-->
<div class="modal fade" id="kepalaModal" tabindex="-1" role="dialog" aria-labelledby="kepalaModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		<div class="modal-header">
		<h5 class="modal-title" id="kepalaModalLabel">Profile</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
		</div>
		<div class="modal-body">
		<div class="card mb-3" style="max-width: 540px;">
		<div class="row no-gutters">
			<div class="col-md-12 text-center">
			<img src="<?=base_url()?>assets/img/team/rasyid.jpg" class="card-img" alt="" style="width:70%;height:auto">
			</div>
			<div class="col-md-12">
			<div class="card-body">
				<h6 class="card-title"><b>Nama</b> : DRS. MUHAMMAD RASYID</h6>
				<h6 class="card-title"><b>NIP</b>  : 19641231 199203 1 123</h6>
				<h6 class="card-title"><b>Golongan</b> : IV/c</h6>
				<h6 class="card-title"><b>Jabatan</b>  : KEPALA BADAN KEUANGAN DAN ASET DAERAH PROV. SULAWESI SELATAN</h6>
				<h6 class="card-title"><b>Bidang</b>   : Bagian Sekretariat</h6>
				<h6 class="card-title"><b>Eselon</b>   : III</h6>
				<h6 class="card-title"><b>Jenis Kelamin</b>: Laki-Laki</h6>
				<h6 class="card-title"><b>Pendidikan Terakhir</b>: S1</h6>

				<!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
				<!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
			</div>
			</div>
		</div>
	</div>
</div>

</div>
</div>
</div>



<div id="frame-floatb">
    <a href="javascript:void(0)" class="close"><i class="fa fa-times"></i></a>
    <a id="float-botright" href="http://ppid.sulselprov.go.id" target="_blank">
        <img src="<?=base_url()?>assets/img/Visit-PPID.jpg" width="180px" hight="250px">
    </a>
</div>

			
