    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Struktur Organisasi PPID Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/welcome') ?>">Home</a></li>
              <li class="breadcrumb-item active">Struktur Organisasi PPID</li>
              <li class="breadcrumb-item active">Struktur Organisasi PPID Form</li>
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
                <h3 class="card-title">Form Input Struktur Organisasi PPID</h3>
              </div>
              <!-- /.card-header -->
                <?php
                    $link="";
                if($EDIT['status']=='add'){
                        $link = "add";
                    }else{
                        $link = "edit/".$EDIT['post_id'];
                    }
                ?>
              <!-- form start -->
              <form id="form" action="<?php echo base_url('admin/struktur_ppid/'.$link) ?>" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="post_title" class="col-sm-2 col-form-label d-flex justify-content-end" style="padding-right: 20px;">Title</label>
                    <input type="text" class="form-control col-sm-10" name="post_title" id="post_title" placeholder="Title" value="<?php echo $EDIT['post_title'] ?>">
                  </div>
                  <div class="form-group row">
                    <label for="post_name" class="col-sm-2 col-form-label d-flex justify-content-end" style="padding-right: 20px;">SEO</label>
                    <input type="text" class="form-control col-sm-10" id="post_name" name="post_name" placeholder="SEO" value="<?php echo $EDIT['post_name'] ?>">
                  </div>
                  <div class="form-group row">
                    <label for="post_date" class="col-sm-2 col-form-label d-flex justify-content-end" style="padding-right: 20px;">Date</label>
                    <input type="text" class="form-control col-sm-10 " id="post_date" name="post_date" placeholder="Date" value="<?php echo $EDIT['post_date'] ?>">
                  </div>
                  <div class="form-group row">
                  <label for="post_content" class="col-sm-2 col-form-label d-flex justify-content-end" style="padding-right: 20px;">Content</label>
                    <textarea id="post_content" name="post_content" class="form-control col-sm-10"><?php echo $EDIT['post_content'] ?></textarea>
                  </div>
                  <div class="form-group row">
                    <label for="file" class="col-sm-2 col-form-label d-flex justify-content-end" style="padding-right: 20px;">Image</label>
                    <div class="input-group col-sm-10">
                      <div class="custom-file">
                       <!-- <?php
                            if($EDIT['post_image'] != ''){
                                echo '<a href="'.base_url().'uploads/images/'.$EDIT['post_image'].'" class="fancy"><img src="'.base_url().'uploads/images/'.$EDIT->post_image.'" alt=""></a>';
                                echo '<label style="padding-left:10px;"><input type="checkbox" name="remove_image" value="'.$EDIT['post_image'].'"> Remove current image</label><br>';
                            }
                            ?>  -->
                        <input type="file" name="post_image" class="custom-file-input" id="post_image">
                        <label class="custom-file-label" for="customFile">Choose File</label>
                        </div>
                    </div>
                   
                  </div>
                  <div class="form-group row">
                    <label for="post_tag" class="col-sm-2 col-form-label d-flex justify-content-end" style="padding-right: 20px;"></label>
                    <img id="blah" src="<?php echo base_url().'uploads/images/'.$EDIT['post_image'] ?>" alt=" " style="width:10%" />
                </div>
                  <div class="form-group row">
                    <label for="post_tag" class="col-sm-2 col-form-label d-flex justify-content-end" style="padding-right: 20px;">Tag</label>
                    <input type="text" class="form-control col-sm-10" id="post_tag" name="post_tag" placeholder="Tag" value="<?php echo $EDIT['post_tag'] ?>">
                  </div>
                  <!-- ardi --->
                  <div class="form-group row">
                    <label for="post_tag" class="col-sm-2 col-form-label d-flex justify-content-end" style="padding-right: 20px;">Type</label>
                    <input type="text" class="form-control col-sm-10" id="post_type" name="post_type" readonly value="struktur_ppid">
                  </div>
                  <!-- ardi -->
                  
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
    
    $('#post_date').daterangepicker({
    format:'YYYY-MM-DD hh:mm:ss A',
    "singleDatePicker": true,
    "timePicker": true,
    "timePickerSeconds": true,
    "startDate": new Date,
    locale: {
        format: 'YYYY-MM-DD hh:mm:ss A'
        }
    });

	post_title();
	$('#post_title').change(function(){
		post_title();
	});
	$('#post_title').keyup(function(){
		post_title();
	});

    
    $("#post_image").change(function() {
    readIMG(this);
    });
});
    function post_title(){
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url('admin/ajax/post_name') ?>',
            data: { post_title : $('#post_title').val() },
            dataType: 'text',
            success: function(r){
                $('#post_name').val(r);
            }
        });
    }


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