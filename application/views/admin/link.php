<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Link</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/welcome') ?>">Home</a></li>
              <li class="breadcrumb-item active">Link</li>
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
                <h3 class="card-title"><a class="btn btn-primary" href="<?php echo base_url('admin/links/add') ?>"><span class="fa fa-plus"></span> Tambah Data</a></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th width="5%">No</th>
                    <th width="35%">Link Title</th>
                    <th width="30%">Link Url </th>
                    <th width="20%">Link Status </th>
                    <th width="10%">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                        $no=1;
                        foreach($POST as $row){

                        
                    ?>
                  <tr>
                    <td align="center"><?php echo $no++ ?></td>
                    <td><?php echo $row->link_title ?></td>
                    <td><?php echo $row->link_url ?></td>
                    <td><?php echo $row->link_status ?></td>
                   
                    <td align="center">
                        <a class="btn btn-info btn-sm" href="<?php echo base_url('admin/links/edit/'.$row->link_id) ?>">
                              <i class="fas fa-edit">
                              </i>
                             
                          </a>
                         <button class="btn btn-danger btn-sm" onclick="hapus(<?php echo $row->link_id ?>)">
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
                    <th>Link Title</th>
                    <th>Link Url</th>
                    <th>Link Status</th>
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
    function hapus(link_id){
      
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
                        url  : "<?php echo site_url('admin/links/delete')?>",
                        dataType : "JSON",
                        data : {link_id:link_id},
                        success: function(){
                          $("#"+link_id).remove();
                          Swal.fire(
                            'Deleted!',
                            'Data berhasil dihapus !',
                            'success'
                          ).then((value)=>{
                              if(value){
                                  window.location.href = "<?php echo base_url('admin/links') ?>";
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