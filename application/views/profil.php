<div class="breadcrumbs overlay" style="background-image:url('<?php echo base_url('assets/') ?>img/breadcrumb.jpg')">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="bread-inner">
					<!-- Bread Menu -->
					<div class="bread-menu">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="blog-standard-sidebar.html">Profil</a></li>
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

<section class="about-us section-space">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div style="padding:10px">
					<div class="main-image">
						<img src="<?php echo base_url('uploads/') ?>images/<?php echo $IMAGE ?>" alt="">
					</div>
					<div class="about-content ">
						<!-- News meta -->
						<h2 class="blog-title"><?php echo htmlspecialchars_decode($TITLE_2) ?></h2>
						<p> <?php echo htmlspecialchars_decode($CONTENT) ?></p>
					
					</div>
				</div>
			</div>
		</div>
	</div>
</section>