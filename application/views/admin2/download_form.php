
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>APBD Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/welcome') ?>">Home</a></li>
              <li class="breadcrumb-item active">APBD</li>
              <li class="breadcrumb-item active">APBD Form</li>
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
                <h3 class="card-title">Form Input APBD</h3>
              </div>
              <!-- /.card-header -->
                <?php
                    $link="";
                if($EDIT['status']=='add'){
                        $link = "add";
                    }else{
                        $link = "edit/".$EDIT['download_id'];
                    }
                ?>
              <!-- form start -->
              <form id="form" action="<?php echo base_url('admin/download/'.$link) ?>" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="post_title" class="col-sm-2 col-form-label d-flex justify-content-end" style="padding-right: 20px;">Category</label>
                    <select class="form-control col-sm-10 selectpicker" data-live-search="true">
                          <option>Pilih Kategori</option>
                         <?php foreach($CATEGORY as $cat): ?>
                          <option value="<?php echo $cat->category_id;?>" ><?php echo $cat->category;?></option>
                         <?php endforeach ?>
                          
                    </select>
                    <!-- <input type="text" class="form-control col-sm-10" name="post_title" id="post_title" placeholder="Title" value="<?php echo $EDIT['download_id'] ?>"> -->
                  </div>
                  <div class="form-group row">
                    <label for="post_name" class="col-sm-2 col-form-label d-flex justify-content-end" style="padding-right: 20px;">SEO</label>
                    <input type="text" class="form-control col-sm-10" id="post_name" name="post_name" placeholder="SEO" value="<?php echo $EDIT['title'] ?>">
                  </div>
                  <div class="form-group row">
                    <label for="post_date" class="col-sm-2 col-form-label d-flex justify-content-end" style="padding-right: 20px;">Date</label>
                    <input type="text" class="form-control col-sm-10 " id="post_date" name="post_date" placeholder="Date" value="<?php echo $EDIT['date'] ?>">
                  </div>
                  <div class="form-group row">
                    <label for="file" class="col-sm-2 col-form-label d-flex justify-content-end" style="padding-right: 20px;">File</label>
                    <div class="input-group col-sm-10">
                      <div class="custom-file">
                       <!-- <?php
                            if($EDIT['file'] != ''){
                                echo '<a href="'.base_url().'uploads/file/'.$EDIT['file'].'" class="fancy"><img src="'.base_url().'uploads/file/'.$EDIT->file.'" alt=""></a>';
                            }
                            ?>  -->
                        <input type="file" name="file" class="custom-file-input" id="file"  accept="application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint,application/pdf">
                        <label class="custom-file-label" for="file">Choose File</label>
                        </div>
                    </div>
                   
                  </div>
                 
                  <div class="form-group row">
                    <label for="post_tag" class="col-sm-2 col-form-label d-flex justify-content-end" style="padding-right: 20px;">Status</label>
                    <?php echo form_dropdown('status',  array('publish' => 'Publish', 'unpublish' => 'Unpublish'), $EDIT['status']) ?>
                    <!-- <input type="text" class="form-control col-sm-10" id="post_tag" name="post_tag" placeholder="Tag" value="<?php echo $EDIT['publish'] ?>"> -->
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

    
    $("#file").change(function() {
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