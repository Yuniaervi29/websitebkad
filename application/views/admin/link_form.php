
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Link Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/welcome') ?>">Home</a></li>
              <li class="breadcrumb-item active">Link</li>
              <li class="breadcrumb-item active">Link Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
  <!-- Main content -->
  <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Input Link</h3>
              </div>
              <!-- /.card-header -->
                <?php
                    $link="";
                if($EDIT['status']=='add'){
                        $link = "add";
                    }else{
                        $link = "edit/".$EDIT['link_id'];
                    }
                ?>
              <!-- form start -->
              <form id="form" action="<?php echo base_url('admin/links/'.$link) ?>" method="post" enctype="multipart/form-data">
                <div class="card-body">
               
                  <div class="form-group row">
                    <label for="link_title" class="col-sm-2 col-form-label d-flex justify-content-end" style="padding-right: 20px;">Title</label>
                    <input type="text" class="form-control col-sm-10" name="link_title" id="link_title" placeholder="Title" value="<?php echo $EDIT['link_title'] ?>">
                  </div>
                  <div class="form-group row">
                    <label for="link_url" class="col-sm-2 col-form-label d-flex justify-content-end" style="padding-right: 20px;">Url</label>
                    <input type="text" class="form-control col-sm-10" name="link_url" id="link_url" placeholder="Title" value="<?php echo $EDIT['link_url'] ?>">
                  </div>
                  <div class="form-group row">
                    <label for="link_title" class="col-sm-2 col-form-label d-flex justify-content-end" style="padding-right: 20px;">Target</label>
                    <?php echo form_dropdown('link_target',  array('_self' => '_self', '_blank' => '_blank'),  set_value('link_target',$EDIT['link_target']),' class="form-control col-sm-10" ') ?>
                  </div>
                  <div class="form-group row">
                    <label for="link_status" class="col-sm-2 col-form-label d-flex justify-content-end" style="padding-right: 20px;">Status</label>
                    <?php echo form_dropdown('link_status',  array('publish' => 'Publish', 'unpublish' => 'Unpublish'),  set_value('link_status',$EDIT['link_status']),' class="form-control col-sm-10" ') ?>
                  </div>
                 
                 
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer d-flex justify-content-end">
                  <button type="submit" class="btn btn-primary "><span class="fa fa-check"></span> Save</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
        </div>
        </div>
    </div>
</div>
</div>

<script type="text/javascript">

 $(document).ready(function() {
    
 

    
    $("#album_image").change(function() {
    readIMG(this);
    });
});
  

    function readIMG(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function(e) {
        $('#blah').attr('src', e.target.result);
        }
        
        reader.readAsDataURL(input.files[0]); // convert to base64 string
    }
    }

    

</script>
