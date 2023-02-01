<div class="breadcrumbs overlay" style="background-image:url('<?php echo base_url('assets/') ?>img/breadcrumb.jpg')">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="bread-inner">
							<!-- Bread Menu -->
							<div class="bread-menu">
								<ul>
									<li><a href="index.html">Home</a></li>
									<li><a href="blog-standard-sidebar.html">Gallery</a></li>
								</ul>
							</div>
                            <!-- Bread Title -->
                            
							<div class="bread-title"><h2>Album Kegiatan BKAD</h2></div>
						</div>
					</div>
				</div>
			</div>
		</div>
        <!-- / End Breadcrumb -->
<!-- Portfolio -->
<section class="portfolio section-space" id="gallery">
    <div class="container">
    <div class="row">
            <div class="col-12">
                <div class="section-title style2 text-center">
                    <div class="section-top">
                        <h1><span>Gallery</span><b>Album Kegiatan</b></h1><h4>Menyajikan dokumentasi kegiatan BKAD Prov. Sulawesi Selatan..</h4>
                    </div>
                    
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-12">
                <div class="portfolio-main">
                    <div id="portfolio-item" class="portfolio-item-active">
                        <!-- Single Portfolio -->
                        <?php if(count($ALBUM)>0){ ?>
                            <?php foreach($ALBUM as $row){ ?>
                                <?php
                                $gallery = $this->gallery_model->get_count_gallery_by_album($row->album_id);
                            ?>
                            
                            <div class="cbp-item business animation">
                            <div class="single-portfolio">
                                <div class="portfolio-head overlay">
                                    <?php if ($row->album_image=='') { ?>
                                        <img src="<?php echo base_url() ?>uploads/images/no-image.png ?>" style="height:250px"/>
                                    <?php }else{ ?>
                                    <img src="<?php echo base_url() ?>uploads/album/<?php echo $row->album_image ?>"
                                        alt="<?php echo $row->album_title ?>"
                                        title="<?php echo $row->album_title ?>" style="height:250px" />
                                    <?php } ?>
                                    <a class="more" title="<?php echo $row->album_title ?>" href="<?php echo site_url('gallery/detail/'.$row->album_id) ?>"><i class="fa fa-align-center"></i></a>
                                </div>
                                <div class="portfolio-content">
                                    <h4><a href="<?php echo site_url('gallery/detail/'.$row->album_id) ?>"><?php echo character_limiter($row->album_title,10) ?></a></h4>
                                    <p><?php echo $gallery ?> Photos</p>
                                </div>
                            </div>
                            <!--/ End Single Portfolio -->
                        </div>
                        <?php }} ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Portfolio -->