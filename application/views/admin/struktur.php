<style type="text/css">
  .popup {
    zoom:1.0;
    position:relative;
    text-decoration:none;
  }
  .popup span {
    position:fixed;
    top:170px;
    left:1900px;
    height:auto;
    width:450px;
    padding:8px;
    border:1px solid #000;
    border-radius:10px;
    left:-999em;
    z-index:990;
          
  }
  .popup:hover {visibility:visible}
  .popup:hover span {left:350px;}
  * html .popup span {position:absolute;}
</style>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Struktur</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/welcome') ?>">Home</a></li>
              <li class="breadcrumb-item active">Struktur</li>
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
                <h3 class="card-title">STRUKTUR ORGANISASI BKAD</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th width="5%">No</th>
                    <th width="20%">Nama</th>
                    <th width="15%">NIP</th>
                    <th width="20%">Jabatan</th>
                    <th width="20%">Bidang</th>
                    <th width="10%">Foto</th>
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
                    <td><?php echo $row->nama ?></td>
                    <td><?php echo $row->nip ?></td>
                    <td><?php echo $row->jab_s ?></td>
                    <td><?php echo $row->bid ?></td>
                    <td align="center">
                          <a class="popup" href="<?php echo base_url() ?>/assets/img/team/<?php echo $row->foto ?>" target="_blank"><img src="<?php echo base_url() ?>/assets/img/team/<?php echo $row->foto ?>" width="40%">
                          <span> <img src="<?php echo base_url() ?>/assets/img/team/<?php echo $row->foto ?>" width="100%"></span></a>
                    </td>
                    <td align="center">
                        <a class="btn btn-info btn-sm" href="<?php echo base_url('admin/struktur_org/edit/'.$row->id) ?>">
                              <i class="fas fa-edit">
                              </i>
                             
                          </a>
                    </td>
                  </tr>
                  
                  <?php } ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th width="5%">No</th>
                    <th width="20%">Nama</th>
                    <th width="15%">NIP</th>
                    <th width="20%">Jabatan</th>
                    <th width="15%">Bidang</th>
                    <th width="15%">Foto</th>
                    <th width="10%">Action</th>
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
    function hapus(id){
      
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
                        url  : "<?php echo site_url('admin/album/delete')?>",
                        dataType : "JSON",
                        data : {album_id:album_id},
                        success: function(){
                          $("#"+album_id).remove();
                          Swal.fire(
                            'Deleted!',
                            'Data berhasil dihapus !',
                            'success'
                          ).then((value)=>{
                              if(value){
                                  location.reload();
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