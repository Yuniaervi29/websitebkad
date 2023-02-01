
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Gallery Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/welcome') ?>">Home</a></li>
              <li class="breadcrumb-item active">Gallery</li>
              <li class="breadcrumb-item active">Gallery Form</li>
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
                <h3 class="card-title">Form Input Gallery</h3>
              </div>
              <!-- /.card-header -->
                <?php
                    $link="";
                if($EDIT['status']=='add'){
                        $link = "add";
                    }else{
                        $link = "edit/".$EDIT['gallery_id'];
                    }
                ?>
              <!-- form start -->
              <form id="form" action="<?php echo base_url('admin/gallery/'.$link) ?>" method="post" enctype="multipart/form-data">
                <div class="card-body">
               
                  <div class="form-group row">
                    <label for="title" class="col-sm-2 col-form-label d-flex justify-content-end" style="padding-right: 20px;">Title</label>
                    <input type="text" class="form-control col-sm-10" name="title" id="title" placeholder="Title" value="<?php echo $EDIT['title'] ?>">
                  </div>
                  <div class="form-group row">
                    <label for="title" class="col-sm-2 col-form-label d-flex justify-content-end" style="padding-right: 20px;">Album</label>
                    <?php echo form_dropdown('album_id', $album_list, set_value('album_id', $EDIT['album_id']),' class="form-control col-sm-10" ') ?>                  </div>
                  <div class="form-group row">
                    <label for="file" class="col-sm-2 col-form-label d-flex justify-content-end" style="padding-right: 20px;">File</label>
                    <div class="input-group col-sm-10">
                      <div class="custom-file">
                      <!-- <?php
                          if($EDIT['image'] != ''){
                             echo '<a href="'.base_url().'uploads/gallery/'.$EDIT['image'].'" class="fancy"><img src="'.base_url().'uploads/gallery/'.$EDIT['image'].'" alt=""></a>';
                         }
                        ?> -->
                        <input type="file" name="image" class="custom-file-input" id="album_image">
                        <label class="custom-file-label" for="file"></label>
                        </div>
                    </div>
                   </div>
                    <div class="form-group row">
                      <label for="post_tag" class="col-sm-2 col-form-label d-flex justify-content-end" style="padding-right: 20px;"></label>
                      <img id="blah" src="<?php echo base_url().'uploads/gallery/'.$EDIT['image'] ?>" alt=" " style="width:10%" />
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
