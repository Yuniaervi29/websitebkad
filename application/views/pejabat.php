<div class="breadcrumbs overlay" style="background-image:url('<?php echo base_url('assets/') ?>img/breadcrumb.jpg')">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="bread-inner">
							<!-- Bread Menu -->
							<div class="bread-menu">
								<ul>
									<li><a href="#">Home</a></li>
									<li><a href="#">Profil</a></li>
								</ul>
							</div>
							<!-- Bread Title -->
							<div class="bread-title"><h2><?php echo $TITLE_1 ?></h2></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- / End Breadcrumb -->
		<?php
		function limit_text($text, $limit) {
            if (str_word_count($text, 0) > $limit) {
            $words = str_word_count($text, 2);
            $pos   = array_keys($words);
            $text  = substr($text, 0, $pos[$limit]) . '.....';
            }
            return $text;
            }
		?>
	
		
<section class="blog-layout blog-latest section-space">
			<div class="container">
				<div class="row" id='page1'>
					<div class="col-lg-6 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news" style=" border-radius: 10px;">
							<div class="news-head overlay" style=" border-radius: 10px;">
								<span class="news-img" style="background-image:url('<?=base_url('assets/');?>img/team/<?=$KABAN->foto;?>')"></span>
								<a href="<?php echo base_url('article/baca/'.$KABAN->id) ?>" target="_blank" class="bizwheel-btn theme-2">Lihat profil</a>
								
							</div>
							<div class="news-body" style="height: 570px; border-radius: 10px;">
								<div class="news-content">
									<h3 class="news-title"><a href="<?php echo base_url('article/baca/'.$KABAN->id) ?>" target="_blank""><?=$KABAN->nama;?></a></h3>
									<ul class="news-meta">
										<li><?=$KABAN->jab;?></li>
									</ul>
									<div class="news-text"><p>Tempat Tgl Lahir: <?=$KABAN->ttl;?></p></div>
									<div class="news-text"><p>Pangkat/Golongan: <?=$KABAN->gol;?></p></div>
									<div class="news-text"><p>Eselon: <?=$KABAN->esel;?></p></div>
									<div class="news-text"><p>Riwayat Pendidikan : <?= limit_text($KABAN->pend,5);?></p></div>
									<div class="news-text"><p>Karir: <?=limit_text($KABAN->karir,5);?></p></div>
									<div class="news-text"><p>Penghargaan: <?=limit_text($KABAN->penghargaan,5);?></p></div>
									<div class="news-text"><p>LHKPN: <a href="<?=base_url()?>uploads/LHKPN/<?=$KABAN->LHKPN;?>" target="_blank">Lihat</a></p></div>
								</div>
							</div>
						</div>
						<!--/ End Single Blog -->
					</div>
					<div class="col-lg-6 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news" style=" border-radius: 10px;">
							<div class="news-head overlay" style=" border-radius: 10px;">
								<span class="news-img" style="background-image:url('<?=base_url('assets/');?>img/team/<?=$SEKRETARIS->foto;?>')"></span>
								<a href="<?php echo base_url('article/baca/'.$SEKRETARIS->id) ?>" target="_blank" class="bizwheel-btn theme-2">Lihat profil</a>
								
							</div>
							<div class="news-body" style="height: 570px; border-radius: 10px;">
								<div class="news-content">
									<h3 class="news-title"><a href="<?php echo base_url('article/baca/'.$SEKRETARIS->id) ?>" target="_blank"><?=$SEKRETARIS->nama;?></a></h3>
									<ul class="news-meta">
										<li><?=$SEKRETARIS->jab;?></li>
									</ul>
									<div class="news-text"><p>Tempat Tgl Lahir: <?=$SEKRETARIS->ttl;?></p></div>
									<div class="news-text"><p>Pangkat/Golongan: <?=$SEKRETARIS->gol;?></p></div>
									<div class="news-text"><p>Eselon: <?=$SEKRETARIS->esel;?></p></div>
									<div class="news-text"><p>Riwayat Pendidikan : <?=limit_text($SEKRETARIS->pend,5);?></p></div>
									<div class="news-text"><p>Karir: <?=limit_text($SEKRETARIS->karir,5);?></p></div>
									<div class="news-text"><p>Penghargaan: <?=limit_text($SEKRETARIS->penghargaan,5);?></p></div>
									<div class="news-text"><p>LHKPN: <a href="<?=base_url()?>uploads/LHKPN/<?=$SEKRETARIS->LHKPN;?>" target="_blank">Lihat</a></p></div>
								</div>
							</div>
						</div>
						<!--/ End Single Blog -->
					</div>
					<div class="col-lg-6 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news" style=" border-radius: 10px;">
							<div class="news-head overlay" style=" border-radius: 10px;">
								<span class="news-img" style="background-image:url('<?=base_url('assets/');?>img/team/<?=$KASUBAG_P->foto;?>')"></span>
								<a href="<?php echo base_url('article/baca/'.$KASUBAG_P->id) ?>" target="_blank" class="bizwheel-btn theme-2">Lihat profil</a>
								
							</div>
							<div class="news-body" style="height: 570px; border-radius: 10px;">
								<div class="news-content">
									<h3 class="news-title"><a href="<?php echo base_url('article/baca/'.$KASUBAG_P->id) ?>" target="_blank"><?=$KASUBAG_P->nama;?></a></h3>
									<ul class="news-meta">
										<li><?=$KASUBAG_P->jab;?></li>
									</ul>
									<div class="news-text"><p>Tempat Tgl Lahir: <?=$KASUBAG_P->ttl;?></p></div>
									<div class="news-text"><p>Pangkat/Golongan: <?=$KASUBAG_P->gol;?></p></div>
									<div class="news-text"><p>Eselon: <?=$KASUBAG_P->esel;?></p></div>
									<div class="news-text"><p>Riwayat Pendidikan : <?= limit_text($KASUBAG_P->pend,5);?></p></div>
									<div class="news-text"><p>Karir: <?=limit_text($KASUBAG_P->karir,5);?></p></div>
									<div class="news-text"><p>Penghargaan: <?=limit_text($KASUBAG_P->penghargaan,5);?></p></div>
									<div class="news-text"><p>LHKPN: <a href="<?=base_url()?>uploads/LHKPN/<?=$KASUBAG_P->LHKPN;?>" target="_blank">Lihat</a></p></div>
								</div>
							</div>
						</div>
						<!--/ End Single Blog -->
					</div>
					<div class="col-lg-6 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news" style=" border-radius: 10px;">
							<div class="news-head overlay" style=" border-radius: 10px;">
								<span class="news-img" style="background-image:url('<?=base_url('assets/');?>img/team/<?=$KASUBAG_U->foto;?>')"></span>
								<a href="<?php echo base_url('article/baca/'.$KASUBAG_U->id) ?>" target="_blank" class="bizwheel-btn theme-2">Lihat profil</a>
								
							</div>
							<div class="news-body" style="height: 570px; border-radius: 10px;">
								<div class="news-content">
									<h3 class="news-title"><a href="<?php echo base_url('article/baca/'.$KASUBAG_U->id) ?>" target="_blank"><?=$KASUBAG_U->nama;?></a></h3>
									<ul class="news-meta">
										<li><?=$KASUBAG_U->jab;?></li>
									</ul>
									<div class="news-text"><p>Tempat Tgl Lahir: <?=$KASUBAG_U->ttl;?></p></div>
									<div class="news-text"><p>Pangkat/Golongan: <?=$KASUBAG_U->gol;?></p></div>
									<div class="news-text"><p>Eselon: <?=$KASUBAG_U->esel;?></p></div>
									<div class="news-text"><p>Riwayat Pendidikan : <?=limit_text($KASUBAG_U->pend,5);?></p></div>
									<div class="news-text"><p>Karir: <?=limit_text($KASUBAG_U->karir,5);?></p></div>
									<div class="news-text"><p>Penghargaan: <?=limit_text($KASUBAG_U->penghargaan,5);?></p></div>
									<div class="news-text"><p>LHKPN: <a href="<?=base_url()?>uploads/LHKPN/<?=$KASUBAG_U->LHKPN;?>" target="_blank">Lihat</a></p></div>
								</div>
							</div>
						</div>
						<!--/ End Single Blog -->
					</div>
					<div class="col-lg-6 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news" style=" border-radius: 10px;">
							<div class="news-head overlay" style=" border-radius: 10px;">
								<span class="news-img" style="background-image:url('<?=base_url('assets/');?>img/team/<?=$KASUBAG_K->foto;?>')"></span>
								<a href="<?php echo base_url('article/baca/'.$KASUBAG_K->id) ?>" target="_blank" class="bizwheel-btn theme-2">Lihat profil</a>
								
							</div>
							<div class="news-body" style="height: 570px; border-radius: 10px;">
								<div class="news-content">
									<h3 class="news-title"><a href="<?php echo base_url('article/baca/'.$KASUBAG_K->id) ?>" target="_blank"><?=$KASUBAG_K->nama;?></a></h3>
									<ul class="news-meta">
										<li><?=$KASUBAG_K->jab;?></li>
									</ul>
									<div class="news-text"><p>Tempat Tgl Lahir: <?=$KASUBAG_K->ttl;?></p></div>
									<div class="news-text"><p>Pangkat/Golongan: <?=$KASUBAG_K->gol;?></p></div>
									<div class="news-text"><p>Eselon: <?=$KASUBAG_K->esel;?></p></div>
									<div class="news-text"><p>Riwayat Pendidikan : <?=limit_text($KASUBAG_K->pend,5);?></p></div>
									<div class="news-text"><p>Karir: <?=limit_text($KASUBAG_K->karir,5);?></p></div>
									<div class="news-text"><p>Penghargaan: <?=limit_text($KASUBAG_K->penghargaan,5);?></p></div>
									<div class="news-text"><p>LHKPN: <a href="<?=base_url()?>uploads/LHKPN/<?=$KASUBAG_K->LHKPN;?>" target="_blank">Lihat</a></p></div>
								</div>
							</div>
						</div>
						<!--/ End Single Blog -->
					</div>
					
				</div>
				<!--page2-->
				<div class="row" id='page2'>
					<div class="col-lg-6 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news" style=" border-radius: 10px;">
							<div class="news-head overlay" style=" border-radius: 10px;">
								<span class="news-img" style="background-image:url('<?=base_url('assets/');?>img/team/<?=$kabid_ang->foto;?>')"></span>
								<a href="<?php echo base_url('article/baca/'.$kabid_ang->id) ?>" target="_blank" class="bizwheel-btn theme-2">Lihat profil</a>
								
							</div>
							<div class="news-body" style="height: 570px; border-radius: 10px;">
								<div class="news-content">
									<h3 class="news-title"><a href="<?php echo base_url('article/baca/'.$kabid_ang->id) ?>" target="_blank"><?=$kabid_ang->nama;?></a></h3>
									<ul class="news-meta">
										<li><?=$kabid_ang->jab;?></li>
									</ul>
									<div class="news-text"><p>Tempat Tgl Lahir: <?=$kabid_ang->ttl;?></p></div>
									<div class="news-text"><p>Pangkat/Golongan: <?=$kabid_ang->gol;?></p></div>
									<div class="news-text"><p>Eselon: <?=$kabid_ang->esel;?></p></div>
									<div class="news-text"><p>Riwayat Pendidikan : <?=limit_text($kabid_ang->pend,5);?></p></div>
									<div class="news-text"><p>Karir: <?=limit_text($kabid_ang->karir,5);?></p></div>
									<div class="news-text"><p>Penghargaan: <?=limit_text($kabid_ang->penghargaan,5);?></p></div>
									<div class="news-text"><p>LHKPN: <a href="<?=base_url()?>uploads/LHKPN/<?=$kabid_ang->LHKPN;?>" target="_blank">Lihat</a></p></div>
								</div>
							</div>
						</div>
						<!--/ End Single Blog -->
					</div>
					<div class="col-lg-6 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news" style=" border-radius: 10px;">
							<div class="news-head overlay" style=" border-radius: 10px;">
								<span class="news-img" style="background-image:url('<?=base_url('assets/');?>img/team/<?=$kasubid_ang1->foto;?>')"></span>
								<a href="<?php echo base_url('article/baca/'.$kasubid_ang1->id) ?>" target="_blank" class="bizwheel-btn theme-2">Lihat profil</a>
								
							</div>
							<div class="news-body" style="height: 570px; border-radius: 10px;">
								<div class="news-content">
									<h3 class="news-title"><a href="<?php echo base_url('article/baca/'.$kasubid_ang1->id) ?>" target="_blank"><?=$kasubid_ang1->nama;?></a></h3>
									<ul class="news-meta">
										<li><?=$kasubid_ang1->jab;?></li>
									</ul>
									<div class="news-text"><p>Tempat Tgl Lahir: <?=$kasubid_ang1->ttl;?></p></div>
									<div class="news-text"><p>Pangkat/Golongan: <?=$kasubid_ang1->gol;?></p></div>
									<div class="news-text"><p>Eselon: <?=$kasubid_ang1->esel;?></p></div>
									<div class="news-text"><p>Riwayat Pendidikan : <?=limit_text($kasubid_ang1->pend,5);?></p></div>
									<div class="news-text"><p>Karir: <?=limit_text($kasubid_ang1->karir,5);?></p></div>
									<div class="news-text"><p>Penghargaan: <?=limit_text($kasubid_ang1->penghargaan,5);?></p></div>
									<div class="news-text"><p>LHKPN: <a href="<?=base_url()?>uploads/LHKPN/<?=$kasubid_ang1->LHKPN;?>" target="_blank">Lihat</a></p></div>
								</div>
							</div>
						</div>
						<!--/ End Single Blog -->
					</div>
					<div class="col-lg-6 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news" style=" border-radius: 10px;">
							<div class="news-head overlay" style=" border-radius: 10px;">
								<span class="news-img" style="background-image:url('<?=base_url('assets/');?>img/team/<?=$kasubid_ang2->foto;?>')"></span>
								<a href="<?php echo base_url('article/baca/'.$kasubid_ang2->id) ?>" target="_blank" class="bizwheel-btn theme-2">Lihat profil</a>
								
							</div>
							<div class="news-body" style="height: 570px; border-radius: 10px;">
								<div class="news-content">
									<h3 class="news-title"><a href="<?php echo base_url('article/baca/'.$kasubid_ang2->id) ?>" target="_blank"><?=$kasubid_ang2->nama;?></a></h3>
									<ul class="news-meta">
										<li><?=$kasubid_ang2->jab;?></li>
									</ul>
									<div class="news-text"><p>Tempat Tgl Lahir: <?=$kasubid_ang2->ttl;?></p></div>
									
									<div class="news-text"><p>Pangkat/Golongan: <?=$kasubid_ang2->gol;?></p></div>
									<div class="news-text"><p>Eselon: <?=$kasubid_ang2->esel;?></p></div>
									<div class="news-text"><p>Riwayat Pendidikan : <?=limit_text($kasubid_ang2->pend,5);?></p></div>
									<div class="news-text"><p>Karir: <?=limit_text($kasubid_ang2->karir,5);?></p></div>
									<div class="news-text"><p>Penghargaan: <?=limit_text($kasubid_ang2->penghargaan,5);?></p></div>
									<div class="news-text"><p>LHKPN: <a href="<?=base_url()?>uploads/LHKPN/<?=$kasubid_ang2->LHKPN;?>" target="_blank">Lihat</a></p></div>
								</div>
							</div>
						</div>
						<!--/ End Single Blog -->
					</div>
					<div class="col-lg-6 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news" style=" border-radius: 10px;">
							<div class="news-head overlay" style=" border-radius: 10px;">
								<span class="news-img" style="background-image:url('<?=base_url('assets/');?>img/team/<?=$kasubid_ang3->foto;?>')"></span>
								<a href="<?php echo base_url('article/baca/'.$kasubid_ang3->id) ?>" target="_blank" class="bizwheel-btn theme-2">Lihat profil</a>
								
							</div>
							<div class="news-body" style="height: 570px; border-radius: 10px;">
								<div class="news-content">
									<h3 class="news-title"><a href="<?php echo base_url('article/baca/'.$kasubid_ang3->id) ?>" target="_blank"><?=$kasubid_ang3->nama;?></a></h3>
									<ul class="news-meta">
										<li><?=$kasubid_ang3->jab;?></li>
									</ul>
									<div class="news-text"><p>Tempat Tgl Lahir: <?=$kasubid_ang3->ttl;?></p></div>
									
									<div class="news-text"><p>Pangkat/Golongan: <?=$kasubid_ang3->gol;?></p></div>
									<div class="news-text"><p>Eselon: <?=$kasubid_ang3->esel;?></p></div>
									<div class="news-text"><p>Riwayat Pendidikan : <?=limit_text($kasubid_ang3->pend,5);?></p></div>
									<div class="news-text"><p>Karir: <?=limit_text($kasubid_ang3->karir,5);?></p></div>
									<div class="news-text"><p>Penghargaan: <?=limit_text($kasubid_ang3->penghargaan,5);?></p></div>
									<div class="news-text"><p>LHKPN: <a href="<?=base_url()?>uploads/LHKPN/<?=$kasubid_ang3->LHKPN;?>" target="_blank">Lihat</a></p></div>
								</div>
							</div>
						</div>
						<!--/ End Single Blog -->
					</div>
				</div>
				
				<!--page4-->
				<div class="row" id='page4'>
					<div class="col-lg-6 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news" style=" border-radius: 10px;">
							<div class="news-head overlay" style=" border-radius: 10px;">
								<span class="news-img" style="background-image:url('<?=base_url('assets/');?>img/team/<?=$kabid_akt->foto;?>')"></span>
								<a href="<?php echo base_url('article/baca/'.$kabid_akt->id) ?>" target="_blank" class="bizwheel-btn theme-2">Lihat profil</a>
								
							</div>
							<div class="news-body" style="height: 610px; border-radius: 10px;">
								<div class="news-content">
									<h3 class="news-title"><a href="<?php echo base_url('article/baca/'.$kabid_akt->id) ?>" target="_blank"><?=$kabid_akt->nama;?></a></h3>
									<ul class="news-meta">
										<li><?=$kabid_akt->jab;?></li>
									</ul>
									<div class="news-text"><p>Tempat Tgl Lahir: <?=$kabid_akt->ttl;?></p></div>
								
									<div class="news-text"><p>Pangkat/Golongan: <?=$kabid_akt->gol;?></p></div>
									<div class="news-text"><p>Eselon: <?=$kabid_akt->esel;?></p></div>
									<div class="news-text"><p>Riwayat Pendidikan : <?=limit_text($kabid_akt->pend,5);?></p></div>
									<div class="news-text"><p>Karir: <?=limit_text($kabid_akt->karir,5);?></p></div>
									<div class="news-text"><p>Penghargaan: <?=limit_text($kabid_akt->penghargaan,5);?></p></div>
									<div class="news-text"><p>LHKPN: <a href="<?=base_url()?>uploads/LHKPN/<?=$kabid_akt->LHKPN;?>" target="_blank">Lihat</a></p></div>
								</div>
							</div>
						</div>
						<!--/ End Single Blog -->
					</div>
					<div class="col-lg-6 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news" style=" border-radius: 10px;">
							<div class="news-head overlay" style=" border-radius: 10px;">
								<span class="news-img" style="background-image:url('<?=base_url('assets/');?>img/team/<?=$kasubid_akt1->foto;?>')"></span>
								<a href="<?php echo base_url('article/baca/'.$kasubid_akt1->id) ?>" target="_blank" class="bizwheel-btn theme-2">Lihat profil</a>
								
							</div>
							<div class="news-body" style="height: 570px; border-radius: 10px;">
								<div class="news-content">
									<h3 class="news-title"><a href="<?php echo base_url('article/baca/'.$kasubid_akt1->id) ?>" target="_blank"><?=$kasubid_akt1->nama;?></a></h3>
									<ul class="news-meta">
										<li><?=$kasubid_akt1->jab;?></li>
									</ul>
									<div class="news-text"><p>Tempat Tgl Lahir: <?=$kasubid_akt1->ttl;?></p></div>
									
									<div class="news-text"><p>Pangkat/Golongan: <?=$kasubid_akt1->gol;?></p></div>
									<div class="news-text"><p>Eselon: <?=$kasubid_akt1->esel;?></p></div>
									<div class="news-text"><p>Riwayat Pendidikan : <?=limit_text($kasubid_akt1->pend,5);?></p></div>
									<div class="news-text"><p>Karir: <?=$kasubid_akt1->karir;?></p></div>
									<div class="news-text"><p>Penghargaan: <?=limit_text($kasubid_akt1->penghargaan,5);?></p></div>
									<div class="news-text"><p>LHKPN: <a href="<?=base_url()?>uploads/LHKPN/<?=$kasubid_akt1->LHKPN;?>" target="_blank">Lihat</a></p></div>
								</div>
							</div>
						</div>
						<!--/ End Single Blog -->
					</div>
					<div class="col-lg-6 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news" style=" border-radius: 10px;">
							<div class="news-head overlay" style=" border-radius: 10px;">
								<span class="news-img" style="background-image:url('<?=base_url('assets/');?>img/team/<?=$kasubid_akt2->foto;?>')"></span>
								<a href="<?php echo base_url('article/baca/'.$kasubid_akt2->id) ?>" target="_blank" class="bizwheel-btn theme-2">Lihat profil</a>
								
							</div>
							<div class="news-body" style="height: 570px; border-radius: 10px;">
								<div class="news-content">
									<h3 class="news-title"><a href="<?php echo base_url('article/baca/'.$kasubid_akt2->id) ?>" target="_blank"><?=$kasubid_akt2->nama;?></a></h3>
									<ul class="news-meta">
										<li><?=$kasubid_akt2->jab;?></li>
									</ul>
									<div class="news-text"><p>Tempat Tgl Lahir: <?=$kasubid_akt2->ttl;?></p></div>
									
									<div class="news-text"><p>Pangkat/Golongan: <?=$kasubid_akt2->gol;?></p></div>
									<div class="news-text"><p>Eselon: <?=$kasubid_akt2->esel;?></p></div>
									<div class="news-text"><p>Riwayat Pendidikan : <?=limit_text($kasubid_akt2->pend,5);?></p></div>
									<div class="news-text"><p>Karir: <?=limit_text($kasubid_akt2->karir,5);?></p></div>
									<div class="news-text"><p>Penghargaan: <?=limit_text($kasubid_akt2->penghargaan,5);?></p></div>
									<div class="news-text"><p>LHKPN: <a href="<?=base_url()?>uploads/LHKPN/<?=$kasubid_akt2->LHKPN;?>" target="_blank">Lihat</a></p></div>
								</div>
							</div>
						</div>
						<!--/ End Single Blog -->
					</div>
					<div class="col-lg-6 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news" style=" border-radius: 10px;">
							<div class="news-head overlay" style=" border-radius: 10px;">
								<span class="news-img" style="background-image:url('<?=base_url('assets/');?>img/team/<?=$kasubid_akt3->foto;?>')"></span>
								<a href="<?php echo base_url('article/baca/'.$kasubid_akt3->id) ?>" target="_blank" class="bizwheel-btn theme-2">Lihat profil</a>
								
							</div>
							<div class="news-body" style="height: 570px; border-radius: 10px;">
								<div class="news-content">
									<h3 class="news-title"><a href="<?php echo base_url('article/baca/'.$kasubid_akt3->id) ?>" target="_blank"><?=$kasubid_akt3->nama;?></a></h3>
									<ul class="news-meta">
										<li><?=$kasubid_akt3->jab_s;?></li>
									</ul>
									<div class="news-text"><p>Tempat Tgl Lahir: <?=$kasubid_akt3->ttl;?></p></div>
									<div class="news-text"><p>Jabatan: <?=$kasubid_akt3->jab;?></p></div>
									<div class="news-text"><p>Pangkat/Golongan: <?=$kasubid_akt3->gol;?></p></div>
									<div class="news-text"><p>Eselon: <?=$kasubid_akt3->esel;?></p></div>
									<div class="news-text"><p>Riwayat Pendidikan : <?=limit_text($kasubid_akt3->pend,5);?></p></div>
									<div class="news-text"><p>Karir: <?=limit_text($kasubid_akt3->karir,5);?></p></div>
									<div class="news-text"><p>Penghargaan: <?=limit_text($kasubid_akt3->penghargaan,5);?></p></div>
									<div class="news-text"><p>LHKPN: <a href="<?=base_url()?>uploads/LHKPN/<?=$kasubid_akt3->LHKPN;?>" target="_blank">Lihat</a></p></div>
								</div>
							</div>
						</div>
						<!--/ End Single Blog -->
					</div>
				</div>
				
				<!--page5-->
				<div class="row" id='page5'>
					<div class="col-lg-6 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news" style=" border-radius: 10px;">
							<div class="news-head overlay" style=" border-radius: 10px;">
								<span class="news-img" style="background-image:url('<?=base_url('assets/');?>img/team/<?=$kabid_brg->foto;?>')"></span>
								<a href="<?php echo base_url('article/baca/'.$kabid_brg->id) ?>" target="_blank" class="bizwheel-btn theme-2">Lihat profil</a>
								
							</div>
							<div class="news-body" style="height: 570px; border-radius: 10px;">
								<div class="news-content">
									<h3 class="news-title"><a href="<?php echo base_url('article/baca/'.$kabid_brg->id) ?>" target="_blank"><?=$kabid_brg->nama;?></a></h3>
									<ul class="news-meta">
										<li><?=$kabid_brg->jab;?></li>
									</ul>
									<div class="news-text"><p>Tempat Tgl Lahir: <?=$kabid_brg->ttl;?></p></div>
									
									<div class="news-text"><p>Pangkat/Golongan: <?=$kabid_brg->gol;?></p></div>
									<div class="news-text"><p>Eselon: <?=$kabid_brg->esel;?></p></div>
									<div class="news-text"><p>Riwayat Pendidikan : <?=limit_text($kabid_brg->pend,5);?></p></div>
									<div class="news-text"><p>Karir: <?=limit_text($kabid_brg->karir,5);?></p></div>
									<div class="news-text"><p>Penghargaan: <?=limit_text($kabid_brg->penghargaan,5);?></p></div>
									<div class="news-text"><p>LHKPN: <a href="<?=base_url()?>uploads/LHKPN/<?=$kabid_brg->LHKPN;?>" target="_blank">Lihat</a></p></div>
								</div>
							</div>
						</div>
						<!--/ End Single Blog -->
					</div>
					<div class="col-lg-6 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news" style=" border-radius: 10px;">
							<div class="news-head overlay" style=" border-radius: 10px;">
								<span class="news-img" style="background-image:url('<?=base_url('assets/');?>img/team/<?=$kasubid_brg1->foto;?>')"></span>
								<a href="<?php echo base_url('article/baca/'.$kasubid_brg1->id) ?>" target="_blank" class="bizwheel-btn theme-2">Lihat profil</a>
								
							</div>
							<div class="news-body" style="height: 570px; border-radius: 10px;">
								<div class="news-content">
									<h3 class="news-title"><a href="<?php echo base_url('article/baca/'.$kasubid_brg1->id) ?>" target="_blank"><?=$kasubid_brg1->nama;?></a></h3>
									<ul class="news-meta">
										<li><?=$kasubid_brg1->jab;?></li>
									</ul>
									<div class="news-text"><p>Tempat Tgl Lahir: <?=$kasubid_brg1->ttl;?></p></div>
									
									<div class="news-text"><p>Pangkat/Golongan: <?=$kasubid_brg1->gol;?></p></div>
									<div class="news-text"><p>Eselon: <?=$kasubid_brg1->esel;?></p></div>
									<div class="news-text"><p>Riwayat Pendidikan : <?=limit_text($kasubid_brg1->pend,5);?></p></div>
									<div class="news-text"><p>Karir: <?=limit_text($kasubid_brg1->karir,5);?></p></div>
									<div class="news-text"><p>Penghargaan: <?=limit_text($kasubid_brg1->penghargaan,5);?></p></div>
									<div class="news-text"><p>LHKPN: <a href="<?=base_url()?>uploads/LHKPN/<?=$kasubid_brg1->LHKPN;?>" target="_blank">Lihat</a></p></div>
								</div>
							</div>
						</div>
						<!--/ End Single Blog -->
					</div>
					<div class="col-lg-6 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news" style=" border-radius: 10px;">
							<div class="news-head overlay" style=" border-radius: 10px;">
								<span class="news-img" style="background-image:url('<?=base_url('assets/');?>img/team/<?=$kasubid_brg2->foto;?>')"></span>
								<a href="<?php echo base_url('article/baca/'.$kasubid_brg2->id) ?>" target="_blank" class="bizwheel-btn theme-2">Lihat profil</a>
								
							</div>
							<div class="news-body" style="height: 570px; border-radius: 10px;">
								<div class="news-content">
									<h3 class="news-title"><a href="<?php echo base_url('article/baca/'.$kasubid_brg2->id) ?>" target="_blank"><?=$kasubid_brg2->nama;?></a></h3>
									<ul class="news-meta">
										<li><?=$kasubid_brg2->jab;?></li>
									</ul>
									<div class="news-text"><p>Tempat Tgl Lahir: <?=$kasubid_brg2->ttl;?></p></div>
									
									<div class="news-text"><p>Pangkat/Golongan: <?=$kasubid_brg2->gol;?></p></div>
									<div class="news-text"><p>Eselon: <?=$kasubid_brg2->esel;?></p></div>
									<div class="news-text"><p>Riwayat Pendidikan : <?=limit_text($kasubid_brg2->pend,5);?></p></div>
									<div class="news-text"><p>Karir: <?=limit_text($kasubid_brg2->karir,5);?></p></div>
									<div class="news-text"><p>Penghargaan: <?=limit_text($kasubid_brg2->penghargaan,5);?></p></div>
									<div class="news-text"><p>LHKPN: <a href="<?=base_url()?>uploads/LHKPN/<?=$kasubid_brg2->LHKPN;?>" target="_blank">Lihat</a></p></div>
								</div>
							</div>
						</div>
						<!--/ End Single Blog -->
					</div>
					<div class="col-lg-6 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news" style=" border-radius: 10px;">
							<div class="news-head overlay" style=" border-radius: 10px;">
								<span class="news-img" style="background-image:url('<?=base_url('assets/');?>img/team/<?=$kasubid_brg3->foto;?>')"></span>
								<a href="<?php echo base_url('article/baca/'.$kasubid_brg3->id) ?>" target="_blank" class="bizwheel-btn theme-2">Lihat profil</a>
								
							</div>
							<div class="news-body" style="height: 570px; border-radius: 10px;">
								<div class="news-content">
									<h3 class="news-title"><a href="<?php echo base_url('article/baca/'.$kasubid_brg3->id) ?>" target="_blank"><?=$kasubid_brg3->nama;?></a></h3>
									<ul class="news-meta">
										<li><?=$kasubid_brg3->jab;?></li>
									</ul>
									<div class="news-text"><p>Tempat Tgl Lahir: <?=$kasubid_brg3->ttl;?></p></div>
									
									<div class="news-text"><p>Pangkat/Golongan: <?=$kasubid_brg3->gol;?></p></div>
									<div class="news-text"><p>Eselon: <?=$kasubid_brg3->esel;?></p></div>
									<div class="news-text"><p>Riwayat Pendidikan : <?=limit_text($kasubid_brg3->pend,5);?></p></div>
									<div class="news-text"><p>Karir: <?=limit_text($kasubid_brg3->karir,5);?></p></div>
									<div class="news-text"><p>Penghargaan: <?=limit_text($kasubid_brg3->penghargaan,5);?></p></div>
									<div class="news-text"><p>LHKPN: <a href="<?=base_url()?>uploads/LHKPN/<?=$kasubid_brg3->LHKPN;?>" target="_blank">Lihat</a></p></div>
								</div>
							</div>
						</div>
						<!--/ End Single Blog -->
					</div>
				</div>
				
				<!--page3-->
				<div class="row" id='page3'>
					<div class="col-lg-6 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news" style=" border-radius: 10px;">
							<div class="news-head overlay" style=" border-radius: 10px;">
								<span class="news-img" style="background-image:url('<?=base_url('assets/');?>img/team/<?=$kabid_perbend->foto;?>')"></span>
								<a href="<?php echo base_url('article/baca/'.$kabid_perbend->id) ?>" target="_blank" class="bizwheel-btn theme-2">Lihat profil</a>
								
							</div>
							<div class="news-body" style="height: 570px; border-radius: 10px;">
								<div class="news-content">
									<h3 class="news-title"><a href="<?php echo base_url('article/baca/'.$kabid_perbend->id) ?>" target="_blank"><?=$kabid_perbend->nama;?></a></h3>
									<ul class="news-meta">
										<li><?=$kabid_perbend->jab;?></li>
									</ul>
									<div class="news-text"><p>Tempat Tgl Lahir: <?=$kabid_perbend->ttl;?></p></div>
									
									<div class="news-text"><p>Pangkat/Golongan: <?=$kabid_perbend->gol;?></p></div>
									<div class="news-text"><p>Eselon: <?=$kabid_perbend->esel;?></p></div>
									<div class="news-text"><p>Riwayat Pendidikan : <?=limit_text($kabid_perbend->pend,5);?></p></div>
									<div class="news-text"><p>Karir: <?=limit_text($kabid_perbend->karir,5);?></p></div>
									<div class="news-text"><p>Penghargaan: <?=limit_text($kabid_perbend->penghargaan,5);?></p></div>
									<div class="news-text"><p>LHKPN: <a href="<?=base_url()?>uploads/LHKPN/<?=$kabid_perbend->LHKPN;?>" target="_blank">Lihat</a></p></div>
								</div>
							</div>
						</div>
						<!--/ End Single Blog -->
					</div>
					<div class="col-lg-6 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news" style=" border-radius: 10px;">
							<div class="news-head overlay" style=" border-radius: 10px;">
								<span class="news-img" style="background-image:url('<?=base_url('assets/');?>img/team/<?=$kasubid_perbend1->foto;?>')"></span>
								<a href="<?php echo base_url('article/baca/'.$kasubid_perbend1->id) ?>" target="_blank" class="bizwheel-btn theme-2">Lihat profil</a>
								
							</div>
							<div class="news-body" style="height: 570px; border-radius: 10px;">
								<div class="news-content">
									<h3 class="news-title"><a href="<?php echo base_url('article/baca/'.$kasubid_perbend1->id) ?>" target="_blank"><?=$kasubid_perbend1->nama;?></a></h3>
									<ul class="news-meta">
										<li><?=$kasubid_perbend1->jab;?></li>
									</ul>
									<div class="news-text"><p>Tempat Tgl Lahir: <?=$kasubid_perbend1->ttl;?></p></div>
									
									<div class="news-text"><p>Pangkat/Golongan: <?=$kasubid_perbend1->gol;?></p></div>
									<div class="news-text"><p>Eselon: <?=$kasubid_perbend1->esel;?></p></div>
									<div class="news-text"><p>Riwayat Pendidikan : <?=limit_text($kasubid_perbend1->pend,5);?></p></div>
									<div class="news-text"><p>Karir: <?=limit_text($kasubid_perbend1->karir,5);?></p></div>
									<div class="news-text"><p>Penghargaan: <?=limit_text($kasubid_perbend1->penghargaan,5);?></p></div>
									<div class="news-text"><p>LHKPN: <a href="<?=base_url()?>uploads/LHKPN/<?=$kasubid_perbend1->LHKPN;?>" target="_blank">Lihat</a></p></div>
								</div>
							</div>
						</div>
						<!--/ End Single Blog -->
					</div>
					<div class="col-lg-6 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news" style=" border-radius: 10px;">
							<div class="news-head overlay" style=" border-radius: 10px;">
								<span class="news-img" style="background-image:url('<?=base_url('assets/');?>img/team/<?=$kasubid_perbend2->foto;?>')"></span>
								<a href="<?php echo base_url('article/baca/'.$kasubid_perbend2->id) ?>" target="_blank" class="bizwheel-btn theme-2">Lihat profil</a>
								
							</div>
							<div class="news-body" style="height: 570px; border-radius: 10px;">
								<div class="news-content">
									<h3 class="news-title"><a href="<?php echo base_url('article/baca/'.$kasubid_perbend2->id) ?>" target="_blank"><?=$kasubid_perbend2->nama;?></a></h3>
									<ul class="news-meta">
										<li><?=$kasubid_perbend2->jab;?></li>
									</ul>
									<div class="news-text"><p>Tempat Tgl Lahir: <?=$kasubid_perbend2->ttl;?></p></div>
									
									<div class="news-text"><p>Pangkat/Golongan: <?=$kasubid_perbend2->gol;?></p></div>
									<div class="news-text"><p>Eselon: <?=$kasubid_perbend2->esel;?></p></div>
									<div class="news-text"><p>Riwayat Pendidikan : <?=limit_text($kasubid_perbend2->pend,5);?></p></div>
									<div class="news-text"><p>Karir: <?=limit_text($kasubid_perbend2->karir,5);?></p></div>
									<div class="news-text"><p>Penghargaan: <?=limit_text($kasubid_perbend2->penghargaan,5);?></p></div>
									<div class="news-text"><p>LHKPN: <a href="<?=base_url()?>uploads/LHKPN/<?=$kasubid_perbend2->LHKPN;?>" target="_blank">Lihat</a></p></div>
								</div>
							</div>
						</div>
						<!--/ End Single Blog -->
					</div>
					<div class="col-lg-6 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news" style=" border-radius: 10px;">
							<div class="news-head overlay" style=" border-radius: 10px;">
								<span class="news-img" style="background-image:url('<?=base_url('assets/');?>img/team/<?=$kasubid_perbend3->foto;?>')"></span>
								<a href="<?php echo base_url('article/baca/'.$kasubid_perbend3->id) ?>" target="_blank" class="bizwheel-btn theme-2">Lihat profil</a>
								
							</div>
							<div class="news-body" style="height: 570px; border-radius: 10px;">
								<div class="news-content">
									<h3 class="news-title"><a href="<?php echo base_url('article/baca/'.$kasubid_perbend3->id) ?>" target="_blank"><?=$kasubid_perbend3->nama;?></a></h3>
									<ul class="news-meta">
										<li><?=$kasubid_perbend3->jab;?></li>
									</ul>
									<div class="news-text"><p>Tempat Tgl Lahir: <?=$kasubid_perbend3->ttl;?></p></div>
									
									<div class="news-text"><p>Pangkat/Golongan: <?=$kasubid_perbend3->gol;?></p></div>
									<div class="news-text"><p>Eselon: <?=$kasubid_perbend3->esel;?></p></div>
									<div class="news-text"><p>Riwayat Pendidikan : <?=limit_text($kasubid_perbend3->pend,5);?></p></div>
									<div class="news-text"><p>Karir: <?=limit_text($kasubid_perbend3->karir,5);?></p></div>
									<div class="news-text"><p>Penghargaan: <?=limit_text($kasubid_perbend3->penghargaan,5);?></p></div>
									<div class="news-text"><p>LHKPN: <a href="<?=base_url()?>uploads/LHKPN/<?=$kasubid_perbend3->LHKPN;?>" target="_blank">Lihat</a></p></div>
								</div>
							</div>
						</div>
						<!--/ End Single Blog -->
					</div>
					</div>
				
				
				<div class="row">
					<div class="col-12">
						<!-- Pagination -->
						<div class="pagination-plugin">
							<ul class="pagination-list">
								<!--<li class="prev"><a href="" onclick="goBack()">Prev</a></li>-->
								<li class="page-numbers" onclick="lihat(1)"><a href="#page1">1</a></li>
								<li class="page-numbers" onclick="lihat(2)"><a href="#page2">2</a></li>
								<li class="page-numbers" onclick="lihat(3)"><a href="#page3">3</a></li>
								<li class="page-numbers" onclick="lihat(4)"><a href="#page4">4</a></li>
								<li class="page-numbers" onclick="lihat(5)"><a href="#page5">5</a></li>
								<!--<li class="next"><a href="#">Next</a></li>-->
							</ul>
						</div>
						<!--/ End Pagination -->
					</div>
				</div>
			</div>
		</section>
		<script>
		    $(document).ready(function(){
		        $('#page2').hide();
		        $('#page3').hide();
		        $('#page4').hide();
		        $('#page5').hide();
		    });
		    
            
            
            
		    
            function goBack() {
            window.history.back();
            }
            
            function goForward() {
            window.history.forward();
            }
		    
		    function lihat(val){
		        if(val == 1){
		            $('#page2').hide();
		            $('#page3').hide();
		            $('#page4').hide();
		            $('#page5').hide();
		            $('#page1').show();
		        }
		        if(val == 2){
		            $('#page1').hide();
		            $('#page3').hide();
		            $('#page4').hide();
		            $('#page5').hide();
		            $('#page2').show();
		        }
		        if(val == 3){
		            $('#page1').hide();
		            $('#page2').hide();
		            $('#page4').hide();
		            $('#page5').hide();
		            $('#page3').show();
		        }
		        if(val == 4){
		            $('#page1').hide();
		            $('#page2').hide();
		            $('#page3').hide();
		            $('#page5').hide();
		            $('#page4').show();
		        }
		        if(val == 5){
		            $('#page1').hide();
		            $('#page2').hide();
		            $('#page3').hide();
		            $('#page4').hide();
		            $('#page5').show();
		        }
		      
		    }
		</script>