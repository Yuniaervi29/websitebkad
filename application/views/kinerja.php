<div class="breadcrumbs overlay" style="background-image:url('<?php echo base_url('assets/') ?>img/breadcrumb.jpg')">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="bread-inner">
							<!-- Bread Menu -->
							<div class="bread-menu">
								<ul>
									<li><a href="index.html">Home</a></li>
									<li><a href="blog-standard-sidebar.html">Kinerja</a></li>
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
		
		<section class="blog-layout blog-latest section-space">
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
										<h2 class="blog-title"><?php echo htmlspecialchars_decode($TITLE_2) ?></h2>
										<p> <?php echo htmlspecialchars_decode($CONTENT) ?></p>
									
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>