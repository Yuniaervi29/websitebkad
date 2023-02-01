<div class="breadcrumbs overlay" style="background-image:url('<?php echo base_url('assets/') ?>img/breadcrumb.jpg')">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="bread-inner">
							<!-- Bread Menu -->
							<div class="bread-menu">
								<ul>
									<li><a href="<?php echo base_url('welcome') ?>">Home</a></li>
									<li><a href="<?php echo base_url('agenda') ?>">Pengumuman</a></li>
									<li><a href="#">Detail Pengumuman</a></li>
								</ul>
							</div>
                            <!-- Bread Title -->
                            
							<div class="bread-title"><h2><?php echo $TITLE ?></h2></div>
						</div>
					</div>
				</div>
			</div>
		</div>
        <!-- / End Breadcrumb -->
    <!-- Portfolio Details -->
    <section class="pf-details  section-space">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-12">
                        <!-- Portfolio Image -->
                        <div class="row">
                        <div class="col-12">
                            <!-- Portfolio Content -->
                            <div class="single-content">
                                <h1><?php echo $TITLE_2 ?></h1>
                                <p><?php echo $AGENDA->content ?></p>
                            </div>
                            <div style="padding-top:20px">
                                <a class="btn btn-info" href="<?php echo base_url() ?>uploads/agenda/<?php echo $AGENDA->file ?>" target="_blank"><span class="fa fa-download"></span> Download File</a>
                            </div>
                            <div style="padding-top:20px">
                                <p>Diunggah pada : <b><?php echo nama_hari($AGENDA->date_created).', '.tgl_indo($AGENDA->date_created) ?></b></p>
                                <p>Oleh : <b><?php echo $AGENDA->username ?></b></p>
                            </div>
                            <!--/ End Portfolio Cotnent -->
                        </div>
                    </div>
					</div>
					<div class="col-lg-4 col-12">
						<!-- Blog Sidebar -->
						<div class="blog-sidebar">
							<!-- News Sidebar -->
							<div class="single-sidebar bizwheel_latest_news_widget" style="height: 450px;">
                                <h2 class="sidebar-title">AGENDA TERBARU</h2>
                                <?php 
                                    foreach($NEW->result() as $row){
                                ?>
                                <!-- Single News -->
                                <div class="row" style="height: 56px;"> 
										
										<div class="col-sm-5 d-flex align-items-center">
											<?php $date = str_replace('-', '|', $row->tgl_agenda );
											$newDate = date("d|m|Y", strtotime($row->tgl_agenda)); ?>
											<a href="<?php echo base_url('agenda/detail_agenda') ?>?info=<?php echo $row->agenda_id ?>"><h4><?php echo $newDate ?></h4></a>
										</div>
										<div class="col-sm-7 d-flex align-items-center">
										<a href="<?php echo base_url('agenda/detail_agenda') ?>?info=<?php echo $row->agenda_id ?>"><p><?php echo $row->title ?></p></a>
										</div>	
										</a>
                                    </div>
                                    <hr style="display: block; height: 0px;border: 0; border-top: 1px solid #fc6761;margin: 1em 0; padding: 0;">
								
                                <?php } ?>
							</div>
							<!--/ End Single Sidebar -->
						</div>
						<!--/ End Blog Sidebar -->
					</div>
				</div>
				
			</div>
		</section>	
		<!--/ End Portfolio Details -->