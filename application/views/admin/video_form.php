
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Video Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/welcome') ?>">Home</a></li>
              <li class="breadcrumb-item active">Video</li>
              <li class="breadcrumb-item active">Video Form</li>
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
                <h3 class="card-title">Form Input Video</h3>
              </div>
              <!-- /.card-header -->
                <?php
                    $link="";
                if($EDIT['status']=='add'){
                        $link = "add";
                    }else{
                        $link = "edit/".$EDIT['video_id'];
                    }
                ?>
              <!-- form start -->
              <form id="upload-form"  action="<?php echo base_url('admin/video/'.$link) ?>"  method="post" enctype="multipart/form-data">
                <div class="card-body">
                 <!--<div class="form-group row">-->
                 <!--   <label for="video_id" class="col-sm-2 col-form-label d-flex justify-content-end" style="padding-right: 20px;">ID</label>-->
                 <!--   <input type="text" class="form-control col-sm-10" name="video_id" id="video_id" placeholder="ID" value="<?php echo $EDIT['video_id'] ?>">-->
                 <!-- </div>-->
                  <div class="form-group row">
                    <label for="title" class="col-sm-2 col-form-label d-flex justify-content-end" style="padding-right: 20px;">Title</label>
                    <input type="text" class="form-control col-sm-10" name="title" id="title" placeholder="Title" value="<?php echo $EDIT['title'] ?>">
                  </div>
                  <div class="form-group row">
                    <label for="content" class="col-sm-2 col-form-label d-flex justify-content-end" style="padding-right: 20px;">Content</label>
                    <input type="text" class="form-control col-sm-10" name="content" id="content" placeholder="Content" value="<?php echo $EDIT['content'] ?>">
                  </div>
                  <div class="form-group row">
                    <label for="content" class="col-sm-2 col-form-label d-flex justify-content-end" style="padding-right: 20px;">Date</label>
                    <input type="date" class="form-control col-sm-10" name="date_created" id="date_created" value="<?php echo $EDIT['date_created'] ?>">
                  </div>
                  <div class="form-group row">
                    <label for="file" class="col-sm-2 col-form-label d-flex justify-content-end" style="padding-right: 20px;">Image</label>
                    <div class="input-group col-sm-10">
                      <div class="custom-file">
                      <!-- <?php
                            if($EDIT['image'] != ''){
                                echo '<a href="'.base_url().'uploads/video/img/'.$EDIT['image'].'" class="fancy"><img src="'.base_url().'uploads/video/img/'.$EDIT['image'].'" alt=""></a>';
                            }
                            ?>  -->
                        <input type="file" name="image" class="custom-file-input" id="image" accept="image/*">
                        <label class="custom-file-label" for="file"></label>
                        </div>
                    </div>
                   </div>
                    <div class="form-group row">
                      <label for="post_tag" class="col-sm-2 col-form-label d-flex justify-content-end" style="padding-right: 20px;"></label>
                      <img id="blah" src="<?php echo base_url().'uploads/video/img/'.$EDIT['image'] ?>" alt=" " style="width:10%" />
                  </div>
                  <div class="form-group row">
                    <label for="video" class="col-sm-2 col-form-label d-flex justify-content-end" style="padding-right: 20px;">Video</label>
                    <div class="input-group col-sm-10">
                      <div class="custom-file">
                        <input type="file" name="video" class="custom-file-input" id="video" accept="video/*">
                         <!-- <?php
                            if($EDIT['video'] != ''){
                                echo '<a href="'.base_url().'uploads/video'.$EDIT['video'].'" class="fancy"><img src="'.base_url().'uploads/video/img'.$EDIT['video'].'" alt=""></a>';
                            }
                            ?>  -->
                        <label class="custom-file-label" for="video"></label>
                        </div>
                        <span id="chk-error"></span>
                    </div>
                   </div>
                    <div class="form-group row">
                      <label for="post_tag" class="col-sm-2 col-form-label d-flex justify-content-end" style="padding-right: 20px;"></label>
                      <img id="blah" src="<?php echo base_url().'uploads/video/'.$EDIT['video'] ?>" alt=" " style="width:10%" />
                  </div>
                   <hr>
                    <div class="row align-items-center">
                      <div class="col">
                        <div class="progress" style="display: none;">
                          <div id="file-progress-bar" class="progress-bar"></div>
                      </div>
                    </div>
                    </div>
                    <div class="row align-items-center">  
                      <div class="col">
                        <div id="uploaded_file"></div>
                    </div>
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
    
    $("#image").change(function() {
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

<script type="text/javascript">
    /*jQuery(document).on('submit', '#upload-form', function(e){
        jQuery("#chk-error").html('');
        jQuery('.progress').show();
        e.preventDefault();
        $.ajax({
            xhr: function() {
                var xhr = new window.XMLHttpRequest();         
                xhr.upload.addEventListener("progress", function(element) {
                    if (element.lengthComputable) {
                        var percentComplete = ((element.loaded / element.total) * 100);
                        $("#file-progress-bar").width(percentComplete + '%');
                        $("#file-progress-bar").html(percentComplete+'%');
                    }
                }, false);
                return xhr;
            },
            type: 'POST',
            url:"<?php echo base_url('admin/video/'.$link) ?>",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            dataType:'json',
            beforeSend: function(){
                $("#file-progress-bar").width('0%');
            },

            success: function(json){
                if(json == 'success'){
           
                  Swal.fire(
                            'Success!',
                            'Data berhasil disimpan !',
                            'success'
                          ).then((value)=>{
                              if(value){
                                window.location = "<?php echo base_url('admin/video') ?>";
                              }
                          });

                }else if(json == 'failed'){
                  Swal.fire("Batal!", "Data tidak tersimpan !", "error",);
                }
            }
            ,
            error: function (xhr, ajaxOptions, thrownError) {
              Swal.fire("Error!", "Data tidak tersimpan !", "error",);
            }
        });
    });*/
   
    // Check File type validation
    $("#upl-file").change(function(){
        var allowedTypes = ['video/mov', 'video/mpeg', 'video/avi', 'video/mp4'];
        var file = this.files[0];
        var fileType = file.type;
        if(!allowedTypes.includes(fileType)) {
            jQuery("#chk-error").html('<small class="text-danger">Please choose a valid file (JPEG/JPG/PNG/GIF/PDF/DOC/DOCX)</small>');
            $("#upl-file").val('');
            return false;
        } else {
          jQuery("#chk-error").html('');
        }
    });
</script>

