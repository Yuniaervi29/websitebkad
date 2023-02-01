  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  	<!-- Content Header (Page header) -->
  	<section class="content-header">
  		<div class="container-fluid">
  			<div class="row mb-2">
  				<div class="col-sm-6">
  					<h1>Info Grafik</h1>
  				</div>
  				<div class="col-sm-6">
  					<ol class="breadcrumb float-sm-right">
  						<li class="breadcrumb-item"><a href="<?php echo base_url('admin/welcome') ?>">Home</a></li>
  						<li class="breadcrumb-item active">Info Kepegawian</li>
  					</ol>
  				</div>
  			</div>
  		</div><!-- /.container-fluid -->
  	</section>
	  <?php $st = ''; ?>
    	  <div class="container">
  		<div class="row row-cols-2">

  			<div class="col-md-6">
  				<div class="card">
  					<div class="card-header">
					  <h3 class="card-title">Data Berdasarkan Unit Kerja</h3>
  					</div>
  					 <!--/.card-header -->
  					<div class="card-body">
					  <table class="table table-bordered table-striped" >
  							<tr>
							  <td width="5%"><b>No</td>
							  <td width="45%"><b>Unit</td>
							  <td width="20%" align="center"><b>LK</td>
							  <td width="20%" align="center"><b>PR</td>
							  <td width="10%"><b>Aksi</td>
							</tr>
							
							<?php 
							 $totallk=0;	
							 $totalpr=0;	
							foreach($UNIT as $unt) {$st = "'unit'";?>
							<tr>
								<td><?php echo $unt->no ?></td>
								<td><?php echo $unt->unit ?></td>
								<td align="center"><?php echo $unt->lk ?></td>
								<td align="center"><?php echo $unt->pr ?></td>
								<?php $totallk += $unt->lk; ?>
								<?php $totalpr += $unt->pr; ?>
								<td>
									<a class="btn btn-sm btn-block btn-outline-warning btn-flat" onclick="get_data(<?php echo $unt->no ?>,<?php echo $unt->lk ?>,<?php echo $unt->pr ?>,<?php echo $st ?>)"><span class="fas fa-edit"></span></a>
								</td>
							</tr>
							
							<?php } ?>
							<tr class="text-center">
							    <td colspan="2" class="text-center"><b>Total</b></td>
							    <td><b><?php echo $totallk ?></b></td>
							    <td><b><?php echo $totalpr ?></b></td>
							    
							</tr>
						</table>
  					</div>
  					 <!--/.card-body -->
  				</div>

  			</div>
  			<div class="col-md-6">
        <div class="card">
  					<div class="card-header">
					  <h3 class="card-title">Data Berdasarkan Pendidikan</h3>
  					</div>
  					 <!--/.card-header -->
  					<div class="card-body">
					  <table class="table table-bordered table-striped" >
  							<tr>
							  <td width="5%"><b>No</td>
							  <td width="45%"><b>Pendidikan</td>
							  <td width="20%" align="center"><b>LK</td>
							  <td width="20%" align="center"><b>PR</td>
							  <td width="10%"><b>Aksi</td>
							</tr>
							<?php 
							$totallk=0;	
							$totalpr=0;
							foreach($PEND as $pend) { $st="'pend'"; ?>
							<tr>
								<td><?php echo $pend->no ?></td>
								<td><?php echo $pend->pend ?></td>
								<td align="center"><?php echo $pend->lk ?></td>
								<td align="center"><?php echo $pend->pr ?></td>
								<?php $totallk += $pend->lk; ?>
								<?php $totalpr += $pend->pr; ?>
								<td>
									<a class="btn btn-sm btn-block btn-outline-warning btn-flat" onclick="get_data(<?php echo $pend->no ?>,<?php echo $pend->lk ?>,<?php echo $pend->pr ?>,<?php echo $st ?>)"><span class="fas fa-edit"></span></a>
								</td>
							</tr>
							<?php } ?>
								<tr class="text-center">
							    <td colspan="2" class="text-center"><b>Total</b></td>
							    <td><b><?php echo $totallk ?></b></td>
							    <td><b><?php echo $totalpr ?></b></td>
							    
							</tr>
						</table>
  					</div>
  					 <!--/.card-body -->
  				</div>

        </div>
  			<div class="col-md-6">
        <div class="card">
  					<div class="card-header">
					  <h3 class="card-title">Data Berdasarkan Jabatan</h3>
  					</div>
  					 <!--/.card-header -->
  					<div class="card-body">
					  <table class="table table-bordered table-striped" >
  							<tr>
							  <td width="5%"><b>No</td>
							  <td width="45%"><b>Jabatan</td>
							  <td width="20%" align="center"><b>LK</td>
							  <td width="20%" align="center"><b>PR</td>
							  <td width="10%"><b>Aksi</td>
							</tr>
							<?php 
							$totallk=0;	
							$totalpr=0;
							foreach($JAB as $jab) { $st = "'jab'"; ?>
							<tr>
								<td><?php echo $jab->no ?></td>
								<td><?php echo $jab->jab ?></td>
								<td align="center"><?php echo $jab->lk ?></td>
								<td align="center"><?php echo $jab->pr ?></td>
								<?php $totallk += $jab->lk; ?>
								<?php $totalpr += $jab->pr; ?>
								<td>
									<a class="btn btn-sm btn-block btn-outline-warning btn-flat" onclick="get_data(<?php echo $jab->no ?>,<?php echo $jab->lk ?>,<?php echo $jab->pr ?>,<?php echo $st ?>)"><span class="fas fa-edit"></span></a>
								</td>
							</tr>
							<?php } ?>
							<tr class="text-center">
							    <td colspan="2" class="text-center"><b>Total</b></td>
							    <td><b><?php echo $totallk ?></b></td>
							    <td><b><?php echo $totalpr ?></b></td>
							</tr>
						</table>
  					</div>
  					 <!--/.card-body -->
  				</div>

        </div>
  			<div class="col-md-6">
        <div class="card">
  					<div class="card-header">
  						<h3 class="card-title">Data Berdasarkan Golongan</h3>
  					</div>
  					 <!--/.card-header -->
  					<div class="card-body">
					  <table class="table table-bordered table-striped" >
  							<tr>
							  <td width="5%"><b>No</td>
							  <td width="45%"><b>Golongan</td>
							  <td width="20%" align="center"><b>LK</td>
							  <td width="20%" align="center"><b>PR</td>
							  <td width="10%"><b>Aksi</td>
							</tr>
							<?php 
							$totallk=0;	
							$totalpr=0;
							foreach($GOL as $gol) { $st="'gol'"; ?>
							<tr>
								<td><?php echo $gol->no ?></td>
								<td><?php echo $gol->gol ?></td>
								<td align="center"><?php echo $gol->lk ?></td>
								<td align="center"><?php echo $gol->pr ?></td>
                                <?php $totallk += $gol->lk; ?>
								<?php $totalpr += $gol->pr; ?>
								<td>
								<a class="btn btn-sm btn-block btn-outline-warning btn-flat" onclick="get_data(<?php echo $gol->no ?>,<?php echo $gol->lk ?>,<?php echo $gol->pr ?>,<?php echo $st ?>)"><span class="fas fa-edit"></span></a>
								</td>
							</tr>
							<?php } ?>
							<tr class="text-center">
							    <td colspan="2" class="text-center"><b>Total</b></td>
							    <td><b><?php echo $totallk ?></b></td>
							    <td><b><?php echo $totalpr ?></b></td>
							</tr>
						</table>
  					</div>
  					 <!--/.card-body -->
  				</div>
            </div>
            <div class="col-md-6">
        <div class="card">
  					<div class="card-header">
  						<h3 class="card-title">Data Berdasarkan Umur</h3>
  					</div>
  					 <!--/.card-header -->
  					<div class="card-body">
					  <table class="table table-bordered table-striped" >
  							<tr>
							  <td width="5%"><b>No</td>
							  <td width="45%"><b>Umur</td>
							  <td width="20%" align="center"><b>LK</td>
							  <td width="20%" align="center"><b>PR</td>
							  <td width="10%"><b>Aksi</td>
							</tr>
							<?php 
							$totallk=0;	
							$totalpr=0;
							foreach($UMUR as $umu) { $st="'umur'"; ?>
							<tr>
								<td><?php echo $umu->no ?></td>
								<td><?php echo $umu->tahun ?></td>
								<td align="center"><?php echo $umu->lk ?></td>
								<td align="center"><?php echo $umu->pr ?></td>
								<?php $totallk += $umu->lk; ?>
								<?php $totalpr += $umu->pr; ?>
								<td>
								<a class="btn btn-sm btn-block btn-outline-warning btn-flat" onclick="get_data(<?php echo $umu->no ?>,<?php echo $umu->lk ?>,<?php echo $umu->pr ?>,<?php echo $st ?>)"><span class="fas fa-edit"></span></a>
								</td>
							</tr>
							<?php } ?>
							<tr class="text-center">
							    <td colspan="2" class="text-center"><b>Total</b></td>
							    <td><b><?php echo $totallk ?></b></td>
							    <td><b><?php echo $totalpr ?></b></td>
							</tr>
						</table>
  					</div>
  					 <!--/.card-body -->
  				</div>

        </div>
   
                <!--NON ASN-->
        <div class="col-md-12">
            <br>
            <br>
            <br>
        <h3>Data Non ASN</h3>
        <br>
        </div>
  		<div class="col-md-6">
  				<div class="card">
  					<div class="card-header">
					  <h3 class="card-title">Data Berdasarkan Unit Kerja</h3>
  					</div>
  					 <!--/.card-header -->
  					<div class="card-body">
					  <table class="table table-bordered table-striped" >
  							<tr>
							  <td width="5%"><b>No</td>
							  <td width="45%"><b>Unit</td>
							  <td width="20%" align="center"><b>LK</td>
							  <td width="20%" align="center"><b>PR</td>
							  <td width="10%"><b>Aksi</td>
							</tr>
							<?php 
							$totallk=0;	
							$totalpr=0;
							foreach($UNITNON as $untnon) {$st = "'unitnon'";?>
								
							<tr>
								<td><?php echo $untnon->no ?></td>
								<td><?php echo $untnon->unit ?></td>
								<td align="center"><?php echo $untnon->lk ?></td>
								<td align="center"><?php echo $untnon->pr ?></td>
								<?php $totallk += $untnon->lk; ?>
								<?php $totalpr += $untnon->pr; ?>
								<td>
									<a class="btn btn-sm btn-block btn-outline-warning btn-flat" onclick="get_data(<?php echo $untnon->no ?>,<?php echo $untnon->lk ?>,<?php echo $untnon->pr ?>,<?php echo $st ?>)"><span class="fas fa-edit"></span></a>
								</td>
							</tr>
							<?php } ?>
							<tr class="text-center">
							    <td colspan="2" class="text-center"><b>Total</b></td>
							    <td><b><?php echo $totallk ?></b></td>
							    <td><b><?php echo $totalpr ?></b></td>
							</tr>
						</table>
  					</div>
  					 <!--/.card-body -->
  				</div>

  			</div>
  			<div class="col-md-6">
        <div class="card">
  					<div class="card-header">
					  <h3 class="card-title">Data Berdasarkan Pendidikan</h3>
  					</div>
  					 <!--/.card-header -->
  					<div class="card-body">
					  <table class="table table-bordered table-striped" >
  							<tr>
							  <td width="5%"><b>No</td>
							  <td width="45%"><b>Pendidikan</td>
							  <td width="20%" align="center"><b>LK</td>
							  <td width="20%" align="center"><b>PR</td>
							  <td width="10%"><b>Aksi</td>
							</tr>
							<?php 
							$totallk=0;	
							$totalpr=0;
							foreach($PENDNON as $pendnon) { $st="'pendnon'"; ?>
							<tr>
								<td><?php echo $pendnon->no ?></td>
								<td><?php echo $pendnon->pend ?></td>
								<td align="center"><?php echo $pendnon->lk ?></td>
								<td align="center"><?php echo $pendnon->pr ?></td>
								<?php $totallk += $pendnon->lk; ?>
								<?php $totalpr += $pendnon->pr; ?>
								<td>
									<a class="btn btn-sm btn-block btn-outline-warning btn-flat" onclick="get_data(<?php echo $pendnon->no ?>,<?php echo $pendnon->lk ?>,<?php echo $pendnon->pr ?>,<?php echo $st ?>)"><span class="fas fa-edit"></span></a>
								</td>
							</tr>
							<?php } ?>
							<tr class="text-center">
							    <td colspan="2" class="text-center"><b>Total</b></td>
							    <td><b><?php echo $totallk ?></b></td>
							    <td><b><?php echo $totalpr ?></b></td>
							</tr>
						</table>
  					</div>
  					 <!--/.card-body -->
  				</div>

        </div>
  			<div class="col-md-6">
        <div class="card">
  					<div class="card-header">
					  <h3 class="card-title">Data Berdasarkan Jabatan</h3>
  					</div>
  					 <!--/.card-header -->
  					<div class="card-body">
					  <table class="table table-bordered table-striped" >
  							<tr>
							  <td width="5%"><b>No</td>
							  <td width="45%"><b>Jabatan</td>
							  <td width="20%" align="center"><b>LK</td>
							  <td width="20%" align="center"><b>PR</td>
							  <td width="10%"><b>Aksi</td>
							</tr>
							<?php 
							$totallk=0;	
							$totalpr=0;
							foreach($JABNON as $jabnon) { $st = "'jabnon'"; ?>
							<tr>
								<td><?php echo $jabnon->no ?></td>
								<td><?php echo $jabnon->jab ?></td>
								<td align="center"><?php echo $jabnon->lk ?></td>
								<td align="center"><?php echo $jabnon->pr ?></td>
								<?php $totallk += $jabnon->lk; ?>
								<?php $totalpr += $jabnon->pr; ?>
								<td>
									<a class="btn btn-sm btn-block btn-outline-warning btn-flat" onclick="get_data(<?php echo $jabnon->no ?>,<?php echo $jabnon->lk ?>,<?php echo $jabnon->pr ?>,<?php echo $st ?>)"><span class="fas fa-edit"></span></a>
								</td>
							</tr>
							<?php } ?>
							<tr class="text-center">
							    <td colspan="2" class="text-center"><b>Total</b></td>
							    <td><b><?php echo $totallk ?></b></td>
							    <td><b><?php echo $totalpr ?></b></td>
							</tr>
						</table>
  					</div>
  					 <!--/.card-body -->
  				</div>

        </div>
  			<div class="col-md-6">
        <div class="card">
  					<div class="card-header">
  						<h3 class="card-title">Data Berdasarkan Golongan</h3>
  					</div>
  					 <!--/.card-header -->
  					<div class="card-body">
					  <table class="table table-bordered table-striped" >
  							<tr>
							  <td width="5%"><b>No</td>
							  <td width="45%"><b>Golongan</td>
							  <td width="20%" align="center"><b>LK</td>
							  <td width="20%" align="center"><b>PR</td>
							  <td width="10%"><b>Aksi</td>
							</tr>
							<?php 
							$totallk=0;	
							$totalpr=0;
							foreach($GOLNON as $golnon) { $st="'golnon'"; ?>
							<tr>
								<td><?php echo $golnon->no ?></td>
								<td><?php echo $golnon->gol ?></td>
								<td align="center"><?php echo $golnon->lk ?></td>
								<td align="center"><?php echo $golnon->pr ?></td>
								<?php $totallk += $golnon->lk; ?>
								<?php $totalpr += $golnon->pr; ?>
								<td>
								<a class="btn btn-sm btn-block btn-outline-warning btn-flat" onclick="get_data(<?php echo $golnon->no ?>,<?php echo $golnon->lk ?>,<?php echo $golnon->pr ?>,<?php echo $st ?>)"><span class="fas fa-edit"></span></a>
								</td>
							</tr>
							<?php } ?>
							<tr class="text-center">
							    <td colspan="2" class="text-center"><b>Total</b></td>
							    <td><b><?php echo $totallk ?></b></td>
							    <td><b><?php echo $totalpr ?></b></td>
							</tr>
						</table>
  					</div>
  					 <!--/.card-body -->
  				</div>

        </div>
  		<div class="col-md-6">
        <div class="card">
  					<div class="card-header">
  						<h3 class="card-title">Data Berdasarkan Umur</h3>
  					</div>
  					 <!--/.card-header -->
  					<div class="card-body">
					  <table class="table table-bordered table-striped" >
  							<tr>
							  <td width="5%"><b>No</td>
							  <td width="45%"><b>Umur</td>
							  <td width="20%" align="center"><b>LK</td>
							  <td width="20%" align="center"><b>PR</td>
							  <td width="10%"><b>Aksi</td>
							</tr>
							<?php 
							$totallk=0;	
							$totalpr=0;
							foreach($UMURNON as $umunon) { $st="'umurnon'"; ?>
							<tr>
								<td><?php echo $umunon->no ?></td>
								<td><?php echo $umunon->tahun ?></td>
								<td align="center"><?php echo $umunon->lk ?></td>
								<td align="center"><?php echo $umunon->pr ?></td>
								<?php $totallk += $umunon->lk; ?>
								<?php $totalpr += $umunon->pr; ?>
								<td>
								<a class="btn btn-sm btn-block btn-outline-warning btn-flat" onclick="get_data(<?php echo $umunon->no ?>,<?php echo $umunon->lk ?>,<?php echo $umunon->pr ?>,<?php echo $st ?>)"><span class="fas fa-edit"></span></a>
								</td>
							</tr>
							<?php } ?>
							<tr class="text-center">
							    <td colspan="2" class="text-center"><b>Total</b></td>
							    <td><b><?php echo $totallk ?></b></td>
							    <td><b><?php echo $totalpr ?></b></td>
							</tr>
						</table>
  					</div>
  					 <!--/.card-body -->
  				</div>

        </div>
  		<div class="col-md-6">
        <div class="card">
  					<div class="card-header">
  						<h3 class="card-title">Data Berdasarkan Status Magang</h3>
  					</div>
  					 <!--/.card-header -->
  					<div class="card-body">
					  <table class="table table-bordered table-striped" >
  							<tr>
							  <td width="5%"><b>No</td>
							  <td width="45%"><b>Umur</td>
							  <td width="20%" align="center"><b>LK</td>
							  <td width="20%" align="center"><b>PR</td>
							  <td width="10%"><b>Aksi</td>
							</tr>
							<?php 
							$totallk=0;	
							$totalpr=0;
							foreach($MAGANG as $mgn) { $st="'magang'"; ?>
							<tr>
								<td><?php echo $mgn->no ?></td>
								<td><?php echo $mgn->magang ?></td>
								<td align="center"><?php echo $mgn->lk ?></td>
								<td align="center"><?php echo $mgn->pr ?></td>
								<?php $totallk += $mgn->lk; ?>
								<?php $totalpr += $mgn->pr; ?>
								<td>
								<a class="btn btn-sm btn-block btn-outline-warning btn-flat" onclick="get_data(<?php echo $mgn->no ?>,<?php echo $mgn->lk ?>,<?php echo $mgn->pr ?>,<?php echo $st ?>)"><span class="fas fa-edit"></span></a>
								</td>
							</tr>
							<?php } ?>
							<tr class="text-center">
							    <td colspan="2" class="text-center"><b>Total</b></td>
							    <td><b><?php echo $totallk ?></b></td>
							    <td><b><?php echo $totalpr ?></b></td>
							</tr>
						</table>
  					</div>
  					 <!--/.card-body -->
  				</div>

        </div>
    
  		</div>
  	</div>  
  </div>
	  
	  


  	

  <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Default Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

            <form  class="form-horizontal">
				<div class="col-md-12">
				<div class="form-group row">
						<label for="lk" class="col-sm-3 col-form-label">Laki-Laki</label>
						<input type="text" class="form-control col-sm-9" name="st" id="st" hidden=true>
						<input type="text" class="form-control col-sm-9" name="no" id="no" hidden=true>
						<input type="text" class="form-control col-sm-9" name="lk" id="lk" placeholder="Laki-Laki" >
					</div>
				</div>
				<div class="form-group row">
						<label for="pr" class="col-sm-3 col-form-label ">Perempuan</label>
						<input type="text" class="form-control col-sm-9" name="pr" id="pr" placeholder="Perempuan">
					</div>
				</div>
			</form>

            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary" onclick="edit_unit()">Save Update</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

  <script type="text/javascript">

  function get_data(no,lk,pr,st){

	  $('#no').attr('value',no);
	  $('#lk').attr('value',lk);
	  $('#pr').attr('value',pr);
	  $('#st').attr('value',st);

	  $('#modal-default').modal('show');
	  $('.modal-title').text('Edit Unit');

  }
  	function edit_unit() {
		var no = $("#no").val();
		var lk = $("#lk").val();
		var pr = $("#pr").val();
		var st = $("#st").val();
		// alert(st);
		$.ajax({
			type: "POST",
			url: "<?php echo site_url('admin/grafik/edit_data')?>",
			dataType: "JSON",
			data: {
				no: no,lk:lk,pr:pr,st:st
			},
			success: function () {
				$('#modal-default').modal('hide');
				Swal.fire(
					'Success!',
					'Data berhasil diupdate !',
					'success'
				).then((value) => {
					if (value) {
						location.reload();
						kosong();
						
					}
				});
				
			},
			error: function () {
				Swal.fire("Batal!", "Data tidak diupdate !", "error", );
			}
		});


	  }
	  
	  function kosong(){
		$('#no').attr('value','');
		$('#lk').attr('value','');
		$('#pr').attr('value','');
		$('#st').attr('value','');
	  }

  </script>
