<!-- Breadcrumb -->
<div class="breadcrumbs bread-blog">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <!-- Bread Menu -->
                    <div class="bread-menu">
                        <ul>
                            <li><h3>Photo Gallery</h3></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- / End Breadcrumb -->

	<!-- Portfolio -->
    <section class="portfolio section-space">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 offset-lg-3 col-md-6 offset-md-3 col-12">
						<div class="section-title default text-center">
							<div class="section-top">
								<h3><b><?php echo $TITLE ?></b></h3>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="portfolio-main">
							<div id="portfolio-item" class="portfolio-item-active">
                                <!-- Single Portfolio -->
                                <?php if(count($GALLERY)>0){ ?>
                                    <?php foreach($GALLERY as $row){ ?>     
                                        
                                    <div class="cbp-item business animation">
									<div class="single-portfolio">
										<div class="portfolio-head overlay">
											<img src="<?php echo base_url() ?>uploads/gallery/<?php echo $row->image ?>"
                                    alt="<?php echo $row->title ?>" title="<?php echo $row->title ?>">
											<a class="more" href="<?php echo base_url() ?>uploads/gallery/<?php echo $row->image ?>"><i class="fa fa-picture-o"></i></a>
										</div>
										<div class="portfolio-content">
											<h4><a href="<?php echo base_url() ?>uploads/gallery/<?php echo $row->image ?>"><?php echo $row->title ?></a></h4>
										</div>
									</div>
									<!--/ End Single Portfolio -->
                                </div>
                                <?php }}else{
                                        echo "<h3>Tidak ada data...</h3>";
                                    } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Portfolio -->