<script src="http://demo.itsolutionstuff.com/plugin/croppie.js"></script>

<link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/croppie.css">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Banner Form</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?php echo base_url('admin/welcome') ?>">Home</a></li>
						<li class="breadcrumb-item active">Banner</li>
						<li class="breadcrumb-item active">Banner Form</li>
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
							<h3 class="card-title">Form Input Banner</h3>
						</div>
						<!-- /.card-header -->
						<?php
                    $link="";
                if($EDIT['status']=='add'){
                        $link = "add";
                    }else{
                        $link = "edit/".$EDIT['banner_id'];
                    }
                ?>
						<!-- form start -->
						<form id="form" action="#" method="post" enctype="multipart/form-data">
							<div class="card-body">
								<div class="col-12 row">
									<div class="col-md-6">
										<div class="form-group row">
											<label for="file" class="col-sm-2 col-form-label d-flex justify-content-end">Select Image</label>
											<div class="input-group col-sm-10">
												<div class="custom-file">
													<input type="file" id="upload" name="image" class="custom-file-input">
													<label class="custom-file-label" for="file"><?php echo $EDIT['image'] ?></label>
												</div>
											</div>
										</div>

										<div class="form-group row d-flex justify-content-left">
											<label for="post_tag" class="col-sm-2 col-form-label "></label>
											<img id="blah" src="<?php echo base_url().'uploads/banner/'.$EDIT['image'] ?>" alt=" "
												style="width:20%" />
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group row">
											<label for="title" class="col-sm-2 col-form-label d-flex justify-content-end"
												style="padding-right: 20px;">Title</label>
											<input type="text" class="form-control col-sm-10" name="title" id="title" placeholder="Title"
												value="<?php echo $EDIT['title'] ?>">
										</div>
										<div class="form-group row">
											<label for="content" class="col-sm-2 col-form-label d-flex justify-content-end"
												style="padding-right: 20px;">Content</label>
											<textarea type="text" class="form-control col-sm-10" name="content" id="content"
												placeholder="Content"><?php echo $EDIT['content'] ?></textarea>
										</div>

									</div>
								</div>
								<div class="card-footer d-flex justify-content-end">
									<button type="button" id="submit" class="btn btn-success submit"><span class="fa fa-check"></span>
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

		$uploadCrop = $('#upload-demo').croppie({
			enableExif: true,
			viewport: {
				width: 1152,
				height: 510,
				type: 'square'
			},
			boundary: {
				width: 1155,
				height: 515
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

		$('.submit').on('click', function (ev) {
			var title = $('#title').val();
			var content = $('#content').val();
			// alert(title);
			$uploadCrop.croppie('result', {
				type: 'canvas',
				size: 'viewport'
			}).then(function (resp) {
				$.ajax({
					url: "<?php echo base_url('admin/banner/'.$link) ?>",
					type: "POST",
					data: {
						"image": resp,
						title: title,
						content: content
					},
					success: function (data) {
						window.location.href = "<?php echo base_url('admin/banner') ?>";
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
