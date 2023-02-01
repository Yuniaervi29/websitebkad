<div class="breadcrumbs overlay" style="background-image:url('<?php echo base_url('assets/') ?>img/breadcrumb.jpg')">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="bread-inner">
							<!-- Bread Menu -->
							<div class="bread-menu">
								<ul>
									<li><a href="index.html">Home</a></li>
									<li><a href="blog-standard-sidebar.html">Berita</a></li>
								</ul>
							</div>
							<!-- Bread Title -->
							<div class="bread-title"><h2>Berita & Artikel</h2></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- / End Breadcrumb -->
		
		<section class="blog-layout blog-latest section-space">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-12">
						<div class="row">
							<div class="col-12">
							<?php if (count($POSTS) > 0) { ?>
                                <?php foreach ($POSTS as $row) { ?>
								<!-- Single Blog -->
								<div class="single-news">
									<div class="news-head overlay">
										<span class="news-img" style="background-image:url('<?php echo base_url() ?>uploads/images/<?php echo $row->post_image ?>')"></span>
										<a href="<?php echo base_url('article/read/'.$row->post_id) ?>" class="bizwheel-btn theme-2">Lihat berita</a>
									</div>
									<div class="news-body">
										<div class="news-content">
											<h3 class="news-title"><a href="<?php echo base_url('article/read/'.$row->post_id) ?>" title="<?php echo $row->post_title ?>"><?php echo character_limiter(strip_tags($row->post_title), 45) ?></a></h3>
											<ul class="news-meta">
												<li class="date"><i class="fa fa-calendar"></i><?php echo date('d M Y', strtotime($row->post_date)) ?></li>
												<li class="heart"><i class="fa fa-bar-chart"></i>
													<?php 
														$tot = $this->db->query("SELECT hits as tot FROM statistik_article WHERE id_article='$row->post_id'");
														echo $output[] = $tot->row('tot');
													?>
												</li>
											</ul>
											<div class="news-text"><p>
													<?php 
														$cont = character_limiter(htmlspecialchars_decode($row->post_content), 150); 
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
							<?php } }?>
								<!--/ End Single Blog -->
							</div>
							
						</div>
						<div class="row">
							<div class="col-12">
								<!-- Pagination -->
								<div class="pagination-plugin">
										<?php echo $pagination ?>
								</div>
								<!--/ End Pagination -->
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-12">
						<!-- Blog Sidebar -->
						<div class="blog-sidebar">
							<!-- Single Sidebar -->
							<div class="single-sidebar blog_search">
								<form class="searchform" action="<?php echo base_url('article/index') ?>">
									<input type="text" placeholder="Cari Berita.." value="" name="s" id="s">
									<button type="submit" id="searchsubmit"><i class="fa fa-search"></i></button>
								</form>
							</div>
							<!--/ End Single Sidebar -->
							<!-- News Sidebar -->
							<div class="single-sidebar bizwheel_latest_news_widget">
								<h2 class="sidebar-title">Berita Populer</h2>
								<?php $sql  =  $this->db->query("SELECT a.post_id,a.post_date,a.post_title,a.post_image,b.hits FROM posts a left join statistik_article b on a.post_id=b.id_article group by a.post_date,a.post_title,b.hits,a.post_id,a.post_image order by b.hits desc limit 5  "); ?>
                                <?php foreach ($sql->result() as $row) { ?>
								<!-- Single News -->
								<div class="single-f-news">
									<div class="post-thumb"><a href="#"><img src="<?php echo base_url()?>uploads/images/<?php echo $row->post_image ?>" alt="#"></a></div>
									<div class="content">
										<p class="post-meta"><time class="post-date"><i class="fa fa-clock-o"></i><?php echo date('d M Y', strtotime($row->post_date)) ?></time></p>
										<h4 class="title"><a href="https://www.themelamp.com/templates/bizwheel/blog-sngle.html"><?php echo character_limiter(strip_tags($row->post_title), 45) ?></a></h4>
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