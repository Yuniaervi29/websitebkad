
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Struktur Organisasi Form</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?php echo base_url('admin/welcome') ?>">Home</a></li>
						<li class="breadcrumb-item active">Struktur Organisasi</li>
						<li class="breadcrumb-item active">Struktur Organisasi Form</li>
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
					<div class="card card-success">
						<div class="card-header">
							<h3 class="card-title">Form Input Struktur Organisasi</h3>
						</div>
						<!-- /.card-header -->
						<?php
							$link="";
							if($EDIT['status']=='add'){
								$link = "add";
							}else{
								$link = "edit/".$EDIT['id'];
							}
						?>
						<!-- form start -->
						<form id="form" method="post" enctype="multipart/form-data">
							<div class="card-body">
								<div class="col-12 row">
									<div class="col-md-6">
										<div class="form-group row">
											<label for="nama" class="col-sm-2 col-form-label d-flex justify-content-end"
												style="padding-right: 20px;">Nama</label>
											<input type="text" class="form-control col-sm-10" name="nama" id="nama" placeholder="Nama"
												value="<?php echo $EDIT['nama'] ?>">
										</div>
										<div class="form-group row">
											<label for="nip" class="col-sm-2 col-form-label d-flex justify-content-end"
												style="padding-right: 20px;">Nip</label>
												<input type="text" class="form-control col-sm-10" name="nip" id="nip" placeholder="nip"
												value="<?php echo $EDIT['nip'] ?>">
										</div>

										<div class="form-group row">
											<label for="file" class="col-sm-2 col-form-label d-flex justify-content-end">Select foto</label>
											<div class="input-group col-sm-10">
												<div class="custom-file">
													<input type="file" id="upload" name="foto" class="custom-file-input">
													<label class="custom-file-label" for="file"><?php echo $EDIT['foto'] ?></label>
												</div>
											</div>
										</div>
										<div class="form-group row d-flex justify-content-left">
											<label for="post_tag" class="col-sm-2 col-form-label "></label>
											<img id="blah" src="<?php echo base_url().'assets/img/team/'.$EDIT['foto'] ?>" alt=" "
												style="width:20%" />
										</div>

									</div>
									<div class="col-md-6">
										<div class="form-group row">
											<label for="gol" class="col-sm-2 col-form-label d-flex justify-content-end"
												style="padding-right: 20px;">Golongan</label>
											<input type="text" class="form-control col-sm-10" name="gol" id="gol" placeholder="golongan"
												value="<?php echo $EDIT['gol'] ?>">
										</div>
										<div class="form-group row">
											<label for="esel" class="col-sm-2 col-form-label d-flex justify-content-end"
												style="padding-right: 20px;">Eselon</label>
											<input type="text" class="form-control col-sm-10" name="esel" id="esel"
												placeholder="eselon" value="<?php echo $EDIT['esel'] ?>"></input>
										</div>
										<div class="form-group row">
											<label for="jk" class="col-sm-2 col-form-label d-flex justify-content-end"
												style="padding-right: 20px;">Title</label>
												<select name="jk" id="jk" class="form-control col-sm-10">
													<option value="Laki-Laki"<?php echo $EDIT['jk']=='Laki-Laki'?'selected':'' ?>>Laki-Laki</option>
													<option value="Perempuan"<?php echo $EDIT['jk']=='Perempuan'?'selected':'' ?>>Perempuan</option>
												</select>
										</div>
										
										<!--ardi-->
										<div class="form-group row">
											<label for="ttl" class="col-sm-2 col-form-label d-flex justify-content-end"
												style="padding-right: 20px;">TTL</label>
											<input type="text" class="form-control col-sm-10" name="ttl" id="ttl" placeholder="Ex: Ujung Pandang, 01 Januari 1991" value="<?php echo $EDIT['ttl'] ?>">
										</div>
										<!--ardi-->
										
										<!--ardi-->
										<div class="form-group row">
										<label for="pend" class="col-sm-2 col-form-label d-flex justify-content-end"
										style="padding-right: 20px;">Riwayat Pendidikan</label>
										<textarea class="form-control col-sm-10" name="pend" id="pend" rows="12"><?php echo $EDIT['pend'] ?></textarea>
										</div>
										<!--ardi-->
										
										<!--ardi-->
										<div class="form-group row">
										<label for="karir" class="col-sm-2 col-form-label d-flex justify-content-end"
										style="padding-right: 20px;">Karir</label>
										<textarea class="form-control col-sm-10" name="karir" id="karir" rows="12"><?php echo $EDIT['karir'] ?></textarea>
										</div>
										<!--ardi-->
										
										<!--ardi-->
										<div class="form-group row">
										<label for="penghargaan" class="col-sm-2 col-form-label d-flex justify-content-end"
										style="padding-right: 20px;">Penghargaan</label>
										<textarea class="form-control col-sm-10" name="penghargaan" id="penghargaan" rows="12"><?php echo $EDIT['penghargaan'] ?></textarea>
										</div>
										<!--ardi-->
										
										<div class="form-group row">
											<label for="LHKPN" class="col-sm-2 col-form-label d-flex justify-content-end">LHKPN/LHKASN</label>
											<div class="input-group col-sm-10">
												<div class="custom-file">
													<input type="file" accept="application/pdf" id="upload2" name="LHKPN" class="custom-file-input">
													<label class="custom-file-label" for="file"></label>
												</div>
											</div>
										</div>
										<div class="form-group row d-flex justify-content-left">
											<label for="post_tag" class="col-sm-2 col-form-label "></label>
											<img id="blah2" src="<?php echo base_url().'uploads/LHKPN/'.$EDIT['LHKPN'] ?>" alt=" "
												style="width:20%" /><?php echo $EDIT['LHKPN'] ?>
										</div>
										
										

									</div>
								</div>
								<div class="card-footer d-flex justify-content-end"><button class="btn btn-danger " id="cancel"><span class="fa fa-arrow-left"></span> Back</button>&nbsp;&nbsp;
									<button type="button" id="submits" class="btn btn-success submits"><span class="fa fa-check"></span>
										Save</button>
								</div>

								<div class="form-group row">
									<div class="col-md-12 text-center">
										<h3>Geser untuk mengatur posisi gambar</h3>
										<div id="upload-demo"></div>

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
	$(document).ready(function () {
	    
	    $('#cancel').on('click', function(e){
        e.preventDefault();
        window.location = "<?php echo base_url('admin/struktur_org') ?>";
    });

		$uploadCrop = $('#upload-demo').croppie({
			enableExif: true,
			viewport: {
				width: 560,
				height: 560,
				type: 'square'
			},
			boundary: {
				width: 570,
				height: 570
			}
		});

		$('#upload').on('change', function () {
			var reader = new FileReader();
			reader.onload = function (e) {
				$uploadCrop.croppie('bind', {
					url: e.target.result
				}).then(function () {
					console.log('jQuery bind complete');
				});

			}
			reader.readAsDataURL(this.files[0]);
		});
		
		

		$('.submits').on('click', function (ev) {
			var nama = $('#nama').val();
			var nip = $('#nip').val();
			var gol = $('#gol').val();
			var esel = $('#esel').val();
			var pend = $('#pend').val();
			var jk = $('#jk').val();
			var ttl = $('#ttl').val();
			var karir = $('#karir').val();
			var penghargaan = $('#penghargaan').val();
			
			
            var file_data = $('#upload2').prop('files')[0];   
            var form_data = new FormData();                  
            form_data.append('LHKPN', file_data);
            form_data.append('nama', nama);
            form_data.append('nip', nip);
            form_data.append('gol', gol);
            form_data.append('esel', esel);
            form_data.append('jk', jk);
            form_data.append('pend', pend);
            form_data.append('ttl', ttl);
            form_data.append('karir', karir);
            form_data.append('penghargaan', penghargaan);
			// alert(title);
			$uploadCrop.croppie('result', {
				type: 'canvas',
				size: 'viewport'
			}).then(function (resp) {
			    form_data.append('foto', resp);
				$.ajax({
					url: "<?php echo base_url('admin/struktur_org/'.$link) ?>",
					type: "POST",
					contentType: false,
                    cache: false,
                    processData:false,
					data:form_data,
					success: function (data) {
						if (data=='1') {
							Swal.fire(
                            'Success!',
                            'Data berhasil disimpan !',
                            'success'
                          ).then((value)=>{
                              if(value){
								window.location.href = "<?php echo base_url('admin/struktur_org') ?>";
                              }
                          });
						}else{
							Swal.fire("Error!", "Data tidak Tersimpan !", "error",);
						}
						// window.location.href = "<?php echo base_url('admin/struktur_org') ?>";
					}
				});
			});
		});


		$("#upload").change(function () {
			readIMG(this);
		});
		
		
	});


	function readIMG(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function (e) {
				$('#blah').attr('src', e.target.result);
			}

			reader.readAsDataURL(input.files[0]); // convert to base64 string
		}
	}
	
	

</script>
