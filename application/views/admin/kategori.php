  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kategori</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/welcome') ?>">Home</a></li>
              <li class="breadcrumb-item active">Kategori</li>
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
                <h3 class="card-title"><a class="btn btn-primary" href="<?php echo base_url('admin/kategori/add') ?>"><span class="fa fa-plus"></span> Tambah Data</a></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th width="5%">No</th>
                    <th width="85%">Category</th>
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
                    <td><?php echo $row->category ?></td>
                    <td align="center">
                        <a class="btn btn-info btn-sm" href="<?php echo base_url('admin/kategori/edit/'.$row->category_id) ?>">
                              <i class="fas fa-edit">
                              </i>
                             
                          </a>
                         <button class="btn btn-danger btn-sm" onclick="hapus(<?php echo $row->category_id ?>)">
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
                    <th>Category</th>
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
    function hapus(category_id){
                  
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
                        url  : "<?php echo site_url('admin/kategori/delete')?>",
                        dataType : "JSON",
                        data : {category_id:category_id},
                        success: function(){
                          $("#"+category_id).remove();
                          Swal.fire(
                            'Deleted!',
                            'Data berhasil dihapus !',
                            'success'
                          ).then((value)=>{
                              if(value){
                                 location.href= '<?php echo site_url('admin/kategori')?>';
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
                'Batal',
                'Tidak ada perubahan data',
                'info'
              )
            }
          });

    }

</script>
