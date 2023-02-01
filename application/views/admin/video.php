  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Video</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/welcome') ?>">Home</a></li>
              <li class="breadcrumb-item active">Video</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><a class="btn btn-primary" href="<?php echo base_url('admin/video/add') ?>"><span class="fa fa-plus"></span> Tambah Data</a></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th width="5%">No</th>
                    <th width="30%">Title</th>
                    <th width="20%">Content</th>
                    <th width="15%">Image</th>
                    <th width="15%">Video</th>
                    <th width="15%">Date</th>
                    <th width="15%">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                        $no=1;
                        foreach($POST as $row){
                    ?>
                  <tr>
                    <td align="center"><?php echo $no++ ?></td>
                    <td><?php echo $row->title ?></td>
                    <td><?php echo $row->content ?></td>
                    <td>
                          <a href="<?php echo base_url() ?>/uploads/video/img/<?php echo $row->image ?>" target="_blank">
                          <img src="<?php echo base_url() ?>/uploads/video/img/<?php echo $row->image ?>" width="40%"></a>
                    </td>
                    <td>
                        <a href="<?php echo base_url() ?>/uploads/video/<?php echo $row->video ?>" target="_blank">
                        <video  src="<?php echo base_url() ?>/uploads/video/<?php echo $row->video ?>" width="60%" ></a>
                    </td>
                    <td><?php echo $row->date_created ?></td>
                    <td align="center">
                        <a class="btn btn-info btn-sm" href="<?php echo base_url('admin/video/edit/'.$row->video_id) ?>">
                              <i class="fas fa-edit">
                              </i>
                             
                          </a>
                         <button class="btn btn-danger btn-sm" onclick="hapus(<?php echo $row->video_id ?>)">
                              <i class="fas fa-trash-alt">
                              </i>
                              
                          </button>
                    </td>
                  </tr>
                  
                  <?php } ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Image</th>
                    <th>Video</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>
        </div>
    </div>
</section>
</div>

<script type="text/javascript">
    function hapus(video_id){
      
          Swal.fire({
            title: 'Yakin ingin menghapus data ??',
            text: "Data akan terhapus secara permanen!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Ya, Hapus!',
            cancelButtonText: 'Tidak !',
            reverseButtons: true
          }).then((result) => {
            if (result.value) {
              $.ajax({
                        type : "POST",
                        url  : "<?php echo site_url('admin/video/delete')?>",
                        dataType : "JSON",
                        data : {video_id:video_id},
                        success: function(){
                          $("#"+video_id).remove();
                          Swal.fire(
                            'Deleted!',
                            'Data berhasil dihapus !',
                            'success'
                          ).then((value)=>{
                              if(value){
                                  location.reload(xxx);
                              }
                          });
                        },error:function(){
                          Swal.fire("Batal!", "Data tidak dihapus !", "error",);
                        }
                    });
             
            } else if (
              /* Read more about handling dismissals below */
              result.dismiss === Swal.DismissReason.cancel
            ) {
              Swal.fire(
                'Cancelled',
                'Your imaginary file is safe :)',
                'error'
              )
            }
          });

    }

</script>


