  <style>
    a.disabled {
      pointer-events: none;
      cursor: default;
    }
    a2.disabled {
      pointer-events: none;
      cursor: default;
    }
  </style>
  <script type="text/javascript">



function form_submit() {
    document.getElementById("form").submit();
   }   
function form_submit2() {
    document.getElementById("form2").submit();
   }   



 $('input[type="checkbox"]').on('change', function() {
    $('input[name="' + this.name + '"]').not(this).prop('checked', false);
});

    function proses(id){
        $.ajax({
            type: "post",
            dataType: "json",
            url: "<?=base_url()?>admin/permohonan_keberatan/get_data",
            data: ({id}),
            success: function(data){
                $('#form_id').val(data.id);
                $('#noregpermohonan').val(data.noregpermohonan);
                $('#tgl').val(data.tgl);
                $('#nama').val(data.nama);
                $('#alamat').val(data.alamat);
                // $('#email').val(data.email);
                $('#hp').val(data.hp);
            }
        });
        
        $('#myModal').modal('show'); 
    }
    
    function update(id){
        $.ajax({
            type: "post",
            dataType: "json",
            url: "<?=base_url()?>admin/permohonan_keberatan/get_data",
            data: ({id}),
            success: function(data){
                $('#form_id').val(data.id);
                document.getElementById('noreg2').value=data.noreg;
                $('#tgl2').val(data.tgl);
                $('#nama2').val(data.nama);
                $('#alamat2').val(data.alamat);
                $('#email2').val(data.email);
                $('#hp2').val(data.hp);
            }
        });
        
        $('#myModalUpdate').modal('show'); 
    }
   
    
    
    
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
                        url  : "<?php echo site_url('admin/permohonan_keberatan/delete')?>",
                        dataType : "JSON",
                        data : {id:id},
                        success: function(){
                          $("#"+id).remove();
                          Swal.fire(
                            'Deleted!',
                            'Data berhasil dihapus !',
                            'success'
                          ).then((value)=>{
                              if(value){
                                 location.href= '<?php echo site_url('admin/register_keberatan')?>';
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
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/welcome') ?>">Home</a></li>
              <li class="breadcrumb-item active">Register Permohonan Informasi</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">PEMBERITAHUAN TERTULIS</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

            <form  class="form-horizontal" id="form" method="post" action="<?=base_url('admin/proses_permohonan_penolakan/simpan');?>">
				<div class="col-md-12">
				<input type="hidden" id="tgl" name="tgl">
				<input type="hidden" id="form_id" name="form_id">
				<input type="hidden" id="status_id" name="status_id" value="proses">
				<div class="form-group row">
						<label  class="col-sm-3 col-form-label">No.Register</label>
						<input type="text" class="form-control col-sm-9" name="noregpermohonan" id="noregpermohonan" readonly>
				</div>
				<div class="form-group row">
						<label  class="col-sm-3 col-form-label">Nama</label>
						<input type="text" class="form-control col-sm-9" name="nama" id="nama" readonly>
				</div>
				<div class="form-group row">
						<label  class="col-sm-3 col-form-label">Alamat</label>
						<input type="text" class="form-control col-sm-9" name="alamat" id="alamat" readonly>
				</div>
				<!--<div class="form-group row">-->
				<!--		<label  class="col-sm-3 col-form-label">Email</label>-->
				<!--		<input type="text" class="form-control col-sm-9" name="email" id="email" readonly>-->
				<!--</div>-->
				<div class="form-group row">
						<label  class="col-sm-3 col-form-label">HP</label>
						<input type="text" class="form-control col-sm-9" name="hp" id="hp" readonly>
				</div>
				<hr>
				<!--<span><h3>A.Informasi Dapat Diberikan</h3></span>-->
				<div class="form-group row">
    				<label>Keputusan atasan PPID</label>
    				<textarea name="keputusan" id="keputusan" placeholder="Keterangan.." rows="3" cols="50"></textarea>
    			</div>
				<div class="form-group">
    			    <label> Tanggal Pemberian Tanggapan</label><br>
    			    <input type="date" name="tgl_proses" id="tgl_proses" >
			    </div>
			    <div class="form-group">
    				<label>Nama Atasan PPID</label><br>
    				<input name="namaatasan" id="namaatasan" placeholder="Nama"><br>
    				<label>Posisi Atasan PPID</label><br>
    				<input name="posisiatasan" id="posisiatasan" placeholder="Posisi">
    			</div>
    			<div class="form-group row">
    				<label>Tanggapan Permohonan Informasi</label>
    				<textarea name="tanggapan" id="tanggapan" placeholder="Keterangan.." rows="3" cols="50"></textarea>
    			</div>
				<br>
				
				
		</div>
	</div>
</form>

            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button onclick="form_submit()" class="btn btn-primary">Simpan</button>
              <!--<button onclick="update()" class="btn btn-primary">Update</button>-->
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      
      <!--UPDATE-->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">PEMBERITAHUAN TERTULIS</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

            <form  class="form-horizontal" id="form" method="post" action="<?=base_url('admin/proses_permohonan_penolakan/simpan');?>">
				<div class="col-md-12">
				<input type="hidden" id="tgl" name="tgl">
				<input type="hidden" id="form_id" name="form_id">
				<input type="hidden" id="status_id" name="status_id" value="proses">
				<div class="form-group row">
						<label  class="col-sm-3 col-form-label">No.Register</label>
						<input type="text" class="form-control col-sm-9" name="noregpermohonan" id="noregpermohonan" readonly>
				</div>
				<div class="form-group row">
						<label  class="col-sm-3 col-form-label">Nama</label>
						<input type="text" class="form-control col-sm-9" name="nama" id="nama" readonly>
				</div>
				<div class="form-group row">
						<label  class="col-sm-3 col-form-label">Alamat</label>
						<input type="text" class="form-control col-sm-9" name="alamat" id="alamat" readonly>
				</div>
				<!--<div class="form-group row">-->
				<!--		<label  class="col-sm-3 col-form-label">Email</label>-->
				<!--		<input type="text" class="form-control col-sm-9" name="email" id="email" readonly>-->
				<!--</div>-->
				<div class="form-group row">
						<label  class="col-sm-3 col-form-label">HP</label>
						<input type="text" class="form-control col-sm-9" name="hp" id="hp" readonly>
				</div>
				<hr>
				<!--<span><h3>A.Informasi Dapat Diberikan</h3></span>-->
				<div class="form-group row">
    				<label>Keputusan atasan PPID</label>
    				<textarea name="keputusan" id="keputusan" placeholder="Keterangan.." rows="3" cols="50"></textarea>
    			</div>
				<div class="form-group">
    			    <label> Tanggal Pemberian Tanggapan</label><br>
    			    <input type="date" name="tgl_proses" id="tgl_proses" >
			    </div>
			    <div class="form-group">
    				<label>Nama Atasan PPID</label><br>
    				<input name="namaatasan" id="namaatasan" placeholder="Nama"><br>
    				<label>Posisi Atasan PPID</label><br>
    				<input name="posisiatasan" id="posisiatasan" placeholder="Posisi">
    			</div>
    			<div class="form-group row">
    				<label>Tanggapan Permohonan Informasi</label>
    				<textarea name="tanggapan" id="tanggapan" placeholder="Keterangan.." rows="3" cols="50"></textarea>
    			</div>
				<br>
				
				
		</div>
	</div>
</form>

            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button onclick="form_submit2()" class="btn btn-primary">Simpan</button>
              <!--<button onclick="form_submit2()" class="btn btn-primary">Update</button>-->
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>No.reg</th>
                    <th>Nama</th>
                    <th>Pekerjaan</th>
                    <th>Alamat</th>
                    <th>Rincian</th>
                    <th>Tujuan</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no=0;
                    $isi = $this->db->query("SELECT a.*,b.status_id FROM inbox_pengajuan_keberatan a 
                        LEFT JOIN proses_permohonan_keberatan b
                        ON a.noreg=b.noregpermohonan
                        WHERE a.nama IS NOT NULL ORDER BY a.noreg");
                    
                    foreach($isi->result() as $row){
                        
                        $no++;
                        if($row->status_id == 'proses'){
                        echo "<tr>
                        <td>$no</td>
                        <td>$row->noregpermohonan</td>
                        <td>$row->nama</td>
                        <td>$row->alamat</td>
                        <td>$row->pekerjaan</td>
                        <td>$row->rincian</td>
                        <td>$row->tujuan</td>
                        <td align='center'>
                        <button class='btn btn-danger btn-sm' onclick='hapus($row->id)'>
                              <i class='fas fa-trash-alt'>
                              </i>
                              Hapus
                          </button><br>
                         
                          <button class='btn btn-info btn-sm' onclick='update($row->id)' >
                              <i class='fas fa-edit'>
                              </i>
                              Update
                          </button>
                         
                    </td>
                    </tr>";
                        }elseif($row->status_id == null){
                        echo "<tr>
                        <td>$no</td>
                        <td>$row->noregpermohonan</td>
                        <td>$row->nama</td>
                        <td>$row->alamat</td>
                        <td>$row->pekerjaan</td>
                        <td>$row->rincian</td>
                        <td>$row->tujuan</td>
                        <td align='center'>
                        <button class='btn btn-danger btn-sm' onclick='hapus($row->id)'>
                              <i class='fas fa-trash-alt'>
                              </i>
                              Hapus
                          </button><br>
                          <button class='btn btn-success btn-sm' onclick='proses($row->id)'>
                              <i class='fas fa-reply'>
                              </i>
                              Proses
                          </button><br>
                          
                    </td>
                    </tr>";
                        }
                        
                    }?>
                  </tbody>
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


