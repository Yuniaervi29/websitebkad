<div class="breadcrumbs overlay" style="background-image:url('<?php echo base_url('assets/') ?>img/breadcrumb.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <!-- Bread Menu -->
                    <div class="bread-menu">
                        <ul>
                            <li><a href="<?php echo base_url('welcome') ?>">Home</a></li>
                            <li><a href="<?php echo base_url('video') ?>">Video</a></li>
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
<!-- Portfolio -->
<section class="portfolio section-space">
    <div class="container">
        <!--<div class="row">-->
        <!--    <div class="col-12">-->
        <!--        <div class="portfolio-menu">-->
                    <!-- Portfolio Nav -->
                    <!-- <p><h4 style="padding-bottom: 6px;">KATEGORI<br></h4></p>-->
                    <!--<ul id="portfolio-nav" class="portfolio-nav  list-inline cbp-l-filters-work">-->
                    <!--    <li class="active"></li>-->
                    <!--    <li data-filter=".animation" class="cbp-filter-item">Animation</li>-->
                    <!--    <li data-filter=".branding" class="cbp-filter-item">Branding</li>-->
                    <!--    <li data-filter=".business" class="cbp-filter-item">Business</li>-->
                    <!--    <li data-filter=".consulting" class="cbp-filter-item">Consulting</li>-->
                    <!--    <li data-filter=".marketing" class="cbp-filter-item">Marketing</li>-->
                    <!--    <li data-filter=".seo" class="cbp-filter-item">SEO</li>-->
                    <!--</ul> -->
                    <!--/ End Portfolio Nav -->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        <div class="row">
            <div class="col-12">
                <div class="portfolio-main">
                    <div id="portfolio-item" class="portfolio-item-active" >
                    <?php if (count($POST) > 0) { ?>
                        <?php
                            foreach($POST as $row){
                        ?>
                        <div class="cbp-item business animation">
                            <!-- Single Portfolio -->
                            <div class="single-portfolio">
                                <div class="portfolio-head overlay" height="250px">
                                    <img src="<?php echo base_url() ?>uploads/video/img/<?php echo $row->image ?>" alt=""  style="height:250px;width:400px;object-fit:cover;" >
                                    <a class="more" href="<?php echo base_url('video/video_detail/'.$row->video_id) ?>"><i class="fa fa-play"></i></a>
                                </div>
                                <div class="portfolio-content" style="width:fit-content">
                                    <h4><a href="<?php echo base_url('video/video_detail/'.$row->video_id) ?>"><?php echo $row->title ?></a></h4>
                                    <p><?php echo tgl_indo($row->date_created) ?></p>
                                </div>
                            </div>
                            <!--/ End Single Portfolio -->
                        </div>
                        <?php } } ?>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
</section>
<!--/ End Portfolio -->