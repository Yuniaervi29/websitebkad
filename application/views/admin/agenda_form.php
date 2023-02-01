
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Agenda Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/welcome') ?>">Home</a></li>
              <li class="breadcrumb-item active">Agenda</li>
              <li class="breadcrumb-item active">Agenda Form</li>
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
                <h3 class="card-title">Form Input Agenda</h3>
              </div>
              <!-- /.card-header -->
                <?php
                    $link="";
                if($EDIT['status']=='add'){
                        $link = "add";
                    }else{
                        $link = "edit/".$EDIT['agenda_id'];
                    }
                ?>
              <!-- form start -->
              <form id="form" action="<?php echo base_url('admin/agenda/'.$link) ?>" method="post" enctype="multipart/form-data">
                <div class="card-body">
               
                  <div class="form-group row">
                    <label for="title" class="col-sm-2 col-form-label d-flex justify-content-end" style="padding-right: 20px;">Title</label>
                    <input type="text" class="form-control col-sm-10" name="title" id="title" placeholder="Title" value="<?php echo $EDIT['title'] ?>">
                  </div>
                  <div class="form-group row">
                    <label for="content" class="col-sm-2 col-form-label d-flex justify-content-end" style="padding-right: 20px;">Content</label>
                    <textarea type="text" class="form-control col-sm-10" name="content" id="content" placeholder="content"><?php echo $EDIT['content'] ?></textarea>
                  </div>
                  <div class="form-group row">
                    <label for="tgl_agenda" class="col-sm-2 col-form-label d-flex justify-content-end" style="padding-right: 20px;">Content</label>
                    <input type="text" class="form-control col-sm-10" name="tgl_agenda" id="tgl_agenda" placeholder="tgl_agenda" value="<?php echo $EDIT['tgl_agenda'] ?>">
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
                        <input type="file" name="file" class="custom-file-input" id="exampleInputFile"  accept="application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint,application/pdf">
                        <label class="custom-file-label" for="file"><?php echo $EDIT['file'] ?></label>
                        </div>
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

  $('#tgl_agenda').daterangepicker({
    format:'YYYY-MM-DD hh:mm:ss A',
    "singleDatePicker": true,
    "timePicker": true,
    "timePickerSeconds": true,
    "startDate": new Date,
    locale: {
        format: 'YYYY-MM-DD hh:mm:ss A'
        }
    });
 

    
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
