<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Selamat Datang Di Website Resmi E-Kinerja  BKAD (Badan Keuangan & Aset Daerah) Provinsi Sulawesi Selatan">
    <meta name="keywords" content="Login Ekinerja, Kinerja BKAD, Prov Sulsel">
    <meta name="author" content="Kinerja BKAD">

    <meta name="description" content="Website BKAD - Badan Keuangan & Aset Daerah Provinsi Sulawesi Selatan">
    <meta property='og:type' content='article' />
    <meta property='og:url' content='https://kinerjabkad.sulselprov.go.id/' />
    <meta property='og:title' content='E-Kinerja BKAD - Provinsi Sulawesi Selatan' />
    <meta property='og:description' content='Selamat Datang Di Website Resmi E-Kinerja  BKAD (Badan Keuangan & Aset Daerah) Provinsi Sulawesi Selatan'>

    <title>Login Page - E-Kinerja</title>
    <link rel="apple-touch-icon" href="<?php echo base_url('assets') ?>/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets') ?>/img/sulsel.png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CMuli:300,400,500,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets') ?>/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets') ?>/vendors/css/extensions/sweetalert.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets') ?>/css/app.min.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets') ?>/css/core/menu/menu-types/vertical-menu.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets') ?>/css/core/colors/palette-gradient.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets') ?>/css/pages/login-register.min.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets') ?>/css/style.css">

	<script src="<?php echo base_url('assets') ?>/vendors/js/vendors.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="<?php echo base_url('assets') ?>/vendors/js/extensions/sweetalert.min.js"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <script src="<?php echo base_url('assets') ?>/js/core/app-menu.min.js"></script>
    <script src="<?php echo base_url('assets') ?>/js/core/app.min.js"></script>
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="<?php echo base_url('assets') ?>/js/scripts/forms/form-login-register.min.js"></script>
    <script src="<?php echo base_url('assets') ?>/js/scripts/extensions/sweet-alerts.min.js"></script>
    <!-- END PAGE LEVEL JS-->

	<script src="<?php echo base_url('assets') ?>/vendors/js/vendors.min.js"></script>
  <script src="<?php echo base_url('assets') ?>/vendors/js/tables/datatable/datatables.min.js"></script>
  <script src="<?php echo base_url('assets') ?>/js/scripts/tables/datatables/datatable-basic.min.js"></script>

  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets') ?>/vendors/css/tables/datatable/datatables.min.css">

</head>
<style>
    .wrap {
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .button {
        min-width: 300px;
        min-height: 60px;
        font-family: 'Nunito', sans-serif;
        font-size: 16px;
        text-transform: uppercase;
        letter-spacing: 1.3px;
        font-weight: 600;
        color: #313133;
        background: #4FD1C5;
        background: linear-gradient(90deg, rgba(129, 230, 217, 1) 0%, rgba(79, 209, 197, 1) 100%);
        border: none;
        border-radius: 1000px;
        box-shadow: 12px 12px 24px rgba(79, 209, 197, .64);
        transition: all 0.3s ease-in-out 0s;
        cursor: pointer;
        outline: none;
        position: relative;
        padding: 10px;
    }

    .button::before {
        content: '';
        border-radius: 1000px;
        min-width: calc(300px + 12px);
        min-height: calc(60px + 12px);
        border: 6px solid #00FFCB;
        box-shadow: 0 0 60px rgba(0, 255, 203, .64);
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        opacity: 0;
        transition: all .3s ease-in-out 0s;
    }

    .button:hover,
    .button:focus {
        color: #313133;
        transform: translateY(-6px);
    }

    .button:hover::before,
    .button:focus::before {
        opacity: 1;
    }

    .button::after {
        content: '';
        width: 30px;
        height: 30px;
        border-radius: 100%;
        border: 6px solid #00FFCB;
        position: absolute;
        z-index: 0;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        animation: ring 1.5s infinite;
    }

    .button:hover::after,
    .button:focus::after {
        animation: none;
        display: none;
    }

    @keyframes ring {
        0% {
            width: 20px;
            height: 20px;
            opacity: 1;
        }

        100% {
            width: 150px;
            height: 150px;
            opacity: 0;
        }
    }


    #ads .animated {
        animation: up-down 2s ease-in-out infinite alternate-reverse both;
    }


    @-webkit-keyframes up-down {
        0% {
            transform: translateY(10px);
        }

        100% {
            transform: translateY(-10px);
        }
    }

    @keyframes up-down {
        0% {
            transform: translateY(10px);
        }

        100% {
            transform: translateY(-10px);
        }
    }

    @media (min-width: 992px) {
        .right-0 {
            right: 0;
        }

        .ps-relative {
            position: relative;
        }

        .ps-absolute {
            position: absolute;
        }
    }
</style>
<style>
	html body .content{
		top:17%;
	}
	.wrimagecard{
		/* top: 80px; */
		height: 65%;
		width: 100%;
		margin-top: 20;
    margin-bottom: 1.5rem;
    text-align: left;
    position: relative;
    background: #fff;
    box-shadow: 12px 15px 20px 0px rgba(46,61,73,0.15);
    border-radius: 4px;
    transition: all 0.3s ease;
}
.wrimagecard .fa{
	position: relative;
    font-size: 70px;
}
.wrimagecard-topimage_header{
padding: 20px;
}
a.wrimagecard:hover, .wrimagecard-topimage:hover {
    box-shadow: 2px 4px 8px 0px rgba(46,61,73,0.2);
}
.wrimagecard-topimage a {
    width: 100%;
    height: 100%;
    display: block;
}
.wrimagecard-topimage_title {
    padding: 20px 24px;
    height: 300px;
    padding-bottom: 0.75rem;
    position: relative;
		text-align: center;
}
.wrimagecard-topimage a {
    border-bottom: none;
    text-decoration: none;
    color: #525c65;
    transition: color 0.3s ease;
}



</style>
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css"> -->

<script>
	var table = '';
    var lgate = '';

    $(document).ready(function() {
		
		
    });

	

    function batal() {
        $('#grid').show();
        // $('#inputan').hide();
    }

    
	function kembali() {
        location.reload();

    }
	   
	function get_list(val) {
		det = $('#listdoc').DataTable({
            "searching": false,
            "info": false,
            "paging": true,
            "cache": false,
            "destroy": true,
            "order": [],
            ajax: {
                url: '<?php echo base_url(); ?>index.php/c_Document/ambil_data',
                type: 'POST',
                data: {
                    gid:val
                }
            },
            "language": {
                "emptyTable": "Tidak Ada Data.."
            },
            "columns": [{
                    "data": 'no'
                },
				{
					"data": 'ket',
				},
                {
                    "data": 'tahun'
                },
                {
                    "data": 'tgl_upload',
                },
				{
                    "data": 'gkd',
                    render: function(value, type, row, data) {
                        s = '<a type="button" href="<?php echo base_url("./file/") ?>' + row.nm_file + ' " target="_blank"' +
                            'class="btn btn-sm btn-info  lihat_dok" id="lihat_dok" title="Lihat Dokumen"><span class="fa fa-download">&nbsp;Download</span>&nbsp;</a>&nbsp;'	;
                        return s;
                    }
                }
            ],
            'columnDefs': [{
                "targets": [0, 1, 2, 3],
                "className": "medium",
            }, {
                "targets": [0, 1, 4],
                "orderable": false,
            }, {
                "className": "clickable dt-middle text-center",
                "targets": [0]
            }, {
                "targets": [1],
                "createdCell": function(td, cellData, rowData, row, col) {
                    $(td).addClass('text-left');
                }
            }],
            "aLengthMenu": [
                [25, 50, 100, 200, -1],
                [25, 50, 100, 200, "All"]
            ],
           


        });

		

		$('#modal-list').modal('show');


}

</script>

<body class="vertical-layout vertical-menu 1-column   menu-expanded blank-page blank-page" data-open="click" data-menu="vertical-menu" data-col="1-column">
    <!-- ////////////////////////////////////////////////////////////////////////////-->

    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-light navbar-shadow">
        <div class="d-flex flex-grow-1">
            <span class="w-100 d-lg-none d-block">
                <!-- hidden spacer to center brand on mobile -->
            </span>
            <a class="navbar-brand d-none d-lg-inline-block ml-2" href="#">
                <img src="<?php echo base_url('assets') ?>/img/logo_bkad.png" width="40" height="30" alt="logo"> <strong>e-Kinerja</strong>
            </a>
            <a class="navbar-brand-two mx-auto d-lg-none d-inline-block" href="#">
                <img src="<?php echo base_url('assets') ?>/img/logo_bkad.png" width="40" height="30" alt="Ekinerja">
            </a>
            <div class="w-100 text-right">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
        <div class="collapse navbar-collapse flex-grow-1 text-right mr-2" id="myNavbar">
            <ul class="navbar-nav ml-auto flex-nowrap">
                <li class="nav-item">
                    <a href="login" class="nav-link active">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url(); ?>C_Document" class="nav-link">Document</a>
                </li>

            </ul>
        </div>
    </nav>

    <div class="app-content content" id="konten">
        <div class="content-wrapper">

            <div class="content-body">
                <section class="navbar-container">
					<div class="container">
						
						<div class="row">
						<div class="col-md-3 col-sm-4">
							<div class="wrimagecard wrimagecard-topimage">
								<a href="#" onclick="get_list('01')" >
									<div class="wrimagecard-topimage_header" style="background-color:rgba(187, 120, 36, 0.1) ">
										<center><i class="fa fa-book" style="color:#BB7824"></i></center>
									</div>
									<div class="wrimagecard-topimage_title">
										<h4>KUA</h4>
										<p>Kebijakan Umum Anggaran</p>
										<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-list">List</button> -->
									</div>
								</a>
							</div>
						</div>
							<div class="col-md-3 col-sm-4">
								<div class="wrimagecard wrimagecard-topimage">
										<a href="#" onclick="get_list('02')">
										<div class="wrimagecard-topimage_header" style="background-color: rgba(22, 160, 133, 0.1)">
											<center><i class = "fa fa-cubes" style="color:#16A085"></i></center>
										</div>
										<div class="wrimagecard-topimage_title">
											<h4>PPAS</h4>
											<p>Prioritas dan Plafon Anggaran Sementara</p>
										</div>
									</a>
								</div>
					</div>
					<div class="col-md-3 col-sm-4">
								<div class="wrimagecard wrimagecard-topimage">
										<a href="#" onclick="get_list('03')">
										<div class="wrimagecard-topimage_header" style="background-color:  rgba(213, 15, 37, 0.1)">
											<center><i class="fa fa-pencil-square-o" style="color:#d50f25"> </i></center>
										</div>
										<div class="wrimagecard-topimage_title" >
											<h4>APBD/APBDP</h4>
											<P>Anggaran Pendapatan dan Belanja Daerah & Anggaran Pendapatan dan Belanja Daerah Perubahan</P>
										</div>
										
									</a>
								</div>
						</div>
						<div class="col-md-3 col-sm-4">
								<div class="wrimagecard wrimagecard-topimage">
										<a href="#" onclick="get_list('04')">
										<div class="wrimagecard-topimage_header" style="background-color:  rgba(51, 105, 232, 0.1)">
											<center><i class="fa fa-table" style="color:#3369e8"> </i></center>
										</div>
										<div class="wrimagecard-topimage_title">
											<h4>RKA / RKAP</h4>
											<P>Rencana Kegiatan dan Anggaran & Rencana Kegiatan dan Anggaran Perubahan </P>
										</div>
										
									</a>
								</div>
						</div>
						<div class="col-md-3 col-sm-4">
								<div class="wrimagecard wrimagecard-topimage">
										<a href="#" onclick="get_list('05')">
											<div class="wrimagecard-topimage_header" style="background-color: rgba(121, 90, 71, 0.1)">
										<center><i class="fa fa-bars" style="color:#795a47"> </i></center> 
										</div>
										<div class="wrimagecard-topimage_title">
											<h4>DPA / DPPA</h4>
											<p>Dokumen Pelaksanaan Anggaran & Dokumen Pelaksanaan Perubahan Anggaran </p>
										</div>
										
									</a>
								</div>
						</div>
						<div class="col-md-3 col-sm-4">
								<div class="wrimagecard wrimagecard-topimage">
										<a href="#" onclick="get_list('06')">
									<div class="wrimagecard-topimage_header" style="background-color:rgba(187, 120, 36, 0.1) ">
											<center><i class="fa fa-cubes" style="color:#825d09"></i></center>
										</div>
										<div class="wrimagecard-topimage_title">
											<h4>LRA</h4>
											<p>Laporan Realisasi Anggaran </p>
										</div>
									</a>
								</div>
						</div>
						<div class="col-md-3 col-sm-4">
								<div class="wrimagecard wrimagecard-topimage">
										<a href="#" onclick="get_list('07')">
									<div class="wrimagecard-topimage_header" style="background-color: rgba(22, 160, 133, 0.1)">
											<center><i class="fa fa-file-text-o" style="color:#16A085"></i></center>
										</div>
										<div class="wrimagecard-topimage_title">
											<h4>LAK</h4>
											<p>Laporan Arus Kas</p>
										</div>
									</a>
								</div>
						</div>
						<div class="col-md-3 col-sm-4">
								<div class="wrimagecard wrimagecard-topimage">
										<a href="#" onclick="get_list('08')">
									<div class="wrimagecard-topimage_header" style="background-color:  rgba(213, 15, 37, 0.1)">
											<center><i class="fa fa-file-text-o" style="color:#d50f25"></i></center>
										</div>
										<div class="wrimagecard-topimage_title">
											<h4>NERACA</h4>
											<p>Laporan Posisi Keuangan</p>
										</div>
									</a>
								</div>
						</div>
						<div class="col-md-3 col-sm-4">
								<div class="wrimagecard wrimagecard-topimage">
										<a href="#" onclick="get_list('09')">
									<div class="wrimagecard-topimage_header" style="background-color:  rgba(51, 105, 232, 0.1)">
											<center><i class="fa fa-file-text-o" style="color:#3369e8"></i></center>
										</div>
										<div class="wrimagecard-topimage_title">
											<h4>CALK</h4>
											<p>Catatan Atas Laporan Keuangan </p>
										</div>
									</a>
								</div>
						</div>
						<div class="col-md-3 col-sm-4">
								<div class="wrimagecard wrimagecard-topimage">
										<a href="#" onclick="get_list('10')">
									<div class="wrimagecard-topimage_header" style="background-color: rgba(121, 90, 71, 0.1)">
											<center><i class="fa fa-file-text-o"  style="color:#795a47"></i></center>
										</div>
										<div class="wrimagecard-topimage_title">
											<h4>RENSTRA</h4>
											<p>Rencana Strategis</p>
										</div>
									</a>
								</div>
						</div>
						<div class="col-md-3 col-sm-4">
								<div class="wrimagecard wrimagecard-topimage">
										<a href="#" onclick="get_list('11')">
									<div class="wrimagecard-topimage_header" style="background-color:rgba(187, 120, 36, 0.1) ">
											<center><i class="fa fa-files-o" style="color:#825d09"></i></center>
										</div>
										<div class="wrimagecard-topimage_title">
											<h4>RENJA</h4>
											<p>Rencana Kerja</p>
										</div>
									</a>
								</div>
						</div>
						<div class="col-md-3 col-sm-4">
								<div class="wrimagecard wrimagecard-topimage">
										<a href="#" onclick="get_list('12')">
									<div class="wrimagecard-topimage_header" style="background-color: rgba(22, 160, 133, 0.1)">
											<center><i class="fa fa-bar-chart " style="color:#16A085"></i></center>
										</div>
										<div class="wrimagecard-topimage_title">
											<h4>LAPORAN KERJA</h4>
											<p>Laporan Kinerja Badan Keuangan Daerah </p>
										</div>
									</a>
								</div>
						</div>
					</div>
					</div>

                </section>
            </div>
        </div>
    </div>

		<div class="modal" id="modal-list">
                <div class="modal-dialog modal-xl" >
                    <div class="modal-content">
                        <div class="modal-header">
							<h4>List Dokumen</h4>
                            <button class="close" data-dismiss="modal">x</button>
                        </div>
                        <div class="modal-body">
						<table id="listdoc" class="table table-bordered w-100 text-center">
                                        <thead>
                                            <tr>
                                                <th width="2%"><b>No</b></th>
                                                <th width="30%"><b>Nama</b></th>
                                                <th width="10%"><b>Tahun</b></th>
                                                <th width="15%"><b>Tanggal Upload</b></th>
                                                <th width="8%"><b>Aksi</b></th>
                                            </tr>
                                        </thead>
                                        
                                    </table>
                                    
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>

					

	
</body>	

</html>

