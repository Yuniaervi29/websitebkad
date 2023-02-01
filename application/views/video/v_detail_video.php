<div class="breadcrumbs overlay" style="background-image:url('<?php echo base_url('assets/') ?>img/breadcrumb.jpg')">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="bread-inner">
							<!-- Bread Menu -->
							<div class="bread-menu">
								<ul>
									<li><a href="<?php echo base_url('welcome') ?>">Home</a></li>
								</ul>
							</div>
                            <!-- Bread Title -->
                            
							<div class="bread-title"><h2>Video</h2></div>
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
                        <p>Diunggah pada : <b><?php echo $TANGGAL ?></b></p>
						<div class="embed-responsive embed-responsive-16by9" style="height: 450px;width: auto;">
                            <iframe class="embed-responsive-item" src="<?php echo base_url() ?>uploads/video/<?php echo $VIDEO ?>" allowfullscreen></iframe>
                        </div>
                        <div class="row">
                        <div class="col-12">
                            <!-- Portfolio Content -->
                            <div class="single-content">
                                <h1><?php echo $TITLE_2 ?></h1>
                                <p><?php echo $KET ?></p>
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
                                <h2 class="sidebar-title">Last Update</h2>
                                <?php 
                                    foreach($NEW->result() as $row){
                                ?>
								<!-- Single News -->
								<div class="single-f-news" style="padding: 5px;">
									<div class="post-thumb"><a href="<?php echo base_url('video/video_detail/'.$row->video_id) ?>"><img src="<?php echo base_url() ?>uploads/video/img/<?php echo $row->image ?>" alt="#"></a></div>
									<div class="content">
										<p class="post-meta"><time class="post-date"><i class="fa fa-clock-o"></i><?php echo tgl_indo($row->date_created) ?></time></p>
										<h4 class="title"><a href="<?php echo base_url('video/video_detail/'.$row->video_id) ?>"><?php echo $row->title ?></a></h4>
									</div>
								</div>
                                <!--/ End Single News -->
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