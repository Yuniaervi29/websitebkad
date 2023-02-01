<!-- Breadcrumb -->
  <!--  <div class="breadcrumbs bread-blog">-->
		<!--	<div class="container">-->
		<!--		<div class="row">-->
		<!--			<div class="col-12">-->
		<!--				<div class="bread-inner">-->
							<!-- Bread Menu -->
		<!--					<div class="bread-menu">-->
		<!--						<ul>-->
		<!--							<li><h3>Detail Berita</h3></li>-->
		<!--						</ul>-->
		<!--					</div>-->
		<!--				</div>-->
		<!--			</div>-->
		<!--		</div>-->
		<!--	</div>-->
		<!--</div>-->
		<!-- / End Breadcrumb -->
		
		<!-- Blog Single -->
		<section class="news-area archive blog-single section-padding">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-12">
						<div class="row">
							<div class="col-12">
								<div class="blog-single-main">
									<div class="main-image">
										<img src="<?php echo base_url('uploads/') ?>images/<?php echo $IMAGE ?>" alt="#">
									</div>
									<div class="blog-detail">
										<!-- News meta -->
										<ul class="news-meta">
											<li><i class="fa fa-user"></i><?php echo $AUTHOR ?></li>
											<li><i class="fa fa-calendar"></i><?php echo $TANGGAL ?></li>
											<li><i class="fa fa-bar-chart"></i><?php echo $TOTALVIEW ?> Kunjungan</li>
											<li><i class="fa fa-tag"></i><?php echo $TAG ?></li>
										</ul>
										<h2 class="blog-title"><?php echo htmlspecialchars_decode($TITLE_2) ?></h2>
										<p> <?php echo htmlspecialchars_decode($CONTENT) ?></p>
									
										<!-- Post Nav -->
										<!-- <div class="posts_nav">
											<div class="post-left"><a href="https://www.themelamp.com/templates/bizwheel/asdf">Previous Post</a></div>
											<div class="post-right"><a href="https://www.themelamp.com/templates/bizwheel/asdf">Next Post</a></div>
										</div> -->
									</div>
								</div>
							</div>
						</div>
													
					</div>		
					<div class="col-lg-4 col-12">
						<!-- Blog Sidebar -->
						<div class="blog-sidebar">
							<!-- Single Sidebar -->
							<div class="single-sidebar blog_search">
								<form class="searchform" action="#">
									<input type="text" placeholder="Search anything.." value="" name="s" id="s">
									<button type="submit" id="searchsubmit"><i class="fa fa-search"></i></button>
								</form>
							</div>
							<!--/ End Single Sidebar -->
							<!-- News Sidebar -->
							<div class="single-sidebar bizwheel_latest_news_widget">
								<h2 class="sidebar-title">Berita Populer</h2>
								<?php $sql  =  $this->db->query("SELECT a.post_id,a.post_date,a.post_title,a.post_image,b.hits FROM posts a left join statistik_article b on a.post_id=b.id_article group by a.post_date,a.post_title,b.hits,a.post_id,a.post_image order by b.hits desc limit 5 "); ?>
                                <?php foreach ($sql->result() as $row) { ?>
								<!-- Single News -->
								<div class="single-f-news">
									<div class="post-thumb"><a href="#"><img src="<?php echo base_url()?>uploads/images/<?php echo $row->post_image ?>" alt="#"></a></div>
									<div class="content">
										<p class="post-meta"><time class="post-date"><i class="fa fa-clock-o"></i><?php echo date('d M Y', strtotime($row->post_date)) ?></time></p>
										<h4 class="title"><a href="<?php echo base_url('article/read/'.$row->post_id) ?>"><?php echo character_limiter($row->post_title,45) ?></a></h4>
									</div>
								</div>
								<!--/ End Single News -->
								<?php }  ?>
							</div>
							<!--/ End Single Sidebar -->
							<!-- News Tags -->
							<div class="single-sidebar tagcloud">
								<h2 class="sidebar-title">Tags</h2>
								<ul>
									<?php foreach($TAGS->result() as $row){ ?>
										<li><a href="<?php echo base_url('article/get_article_by_tag/?cari='.$row->post_tag) ?>"><?php echo $row->post_tag ?></a></li>
									<?php } ?>
								</ul>
							</div>
							<!--/ End News Tags -->
						</div>
						<!--/ End Blog Sidebar -->
					</div>	
				</div>
			</div>
		</section>	
		<!--/ End Services -->