<div class="breadcrumbs overlay" style="background-image:url('<?php echo base_url('assets/') ?>img/breadcrumb.jpg')">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="bread-inner">
					<!-- Bread Menu -->
					<div class="bread-menu">
						<ul>
							<li><a href="<?php echo base_url();?>">Home</a></li>
							<li><a href="#">Profil</a></li>
						</ul>
					</div>
					<!-- Bread Title -->
					<div class="#"><h2><?php echo $TITLE_2 ?></h2></div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- / End Breadcrumb -->
<style>
    .fc-event {
        font-size: 10px !important;
        width: auto;
        
    }
    
    .fc-time {
        font-size: 0px !important;
    }
    
    .fc-day-grid-event .fc-content {
        white-space: normal !important;//to make event block more than a line
        overflow: hidden !important;
    }
</style>
    
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
    
    <script>
    $(document).ready(function(){
        var calendar = $('#calendar1').fullCalendar({
            
            editable:true,
            header:{
                left: 'today',
				center: 'title',
				right: 'prev,next'
            },
			editable: false,
            events:"<?php echo base_url(); ?>admin/fullcalendar/load",
            
        });
    });      
    </script>

<section class="about-us section-space">
	<div class="container">
		<div class="row">
			<div class="col-12">
			    
                    <div id="calendar1" data-bs-toggle="modal" data-bs-target="#staticBackdrop" ></div>
                
                
			</div>
		</div>
	</div>
	
	<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>
</section>

