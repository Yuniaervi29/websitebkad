
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/') ?>css/panel.css">
<script src="<?php echo base_url() ?>assets/js/highcharts.js"></script>

<script>
    $(document).ready(function(){
  
  	var data_pend_lk = <?php echo $lk; ?>;
    var data_pend_pr = <?php echo $pr; ?>;
    var data_pend = <?php echo $pend; ?>;

    var data_gol_lk = <?php echo $gol_lk; ?>;
    var data_gol_pr = <?php echo $gol_pr; ?>;
    var golongan = <?php echo $golongan; ?>;
    
    var data_unit_lk = <?php echo $unit_lk; ?>;
    var data_unit_pr = <?php echo $unit_pr; ?>;
    var unit = <?php echo $unit; ?>;

    var data_jab_lk = <?php echo $jab_lk; ?>;
    var data_jab_pr = <?php echo $jab_pr; ?>;
    var jab = <?php echo $jab; ?>;


    $('#g_unit_kerja').highcharts({
        chart: {
            type: 'column'
        },
        plotOptions: {
            column: {
                dataLabels: {
                    enabled: true
                }
            }
        },
        title: {
            text: 'JUMLAH ASN BKAD BERDASARKAN UNIT KERJA'
        },
        xAxis: {
            categories: unit,
            lineColor: 'transparent'
        },
        yAxis: {
            labels: {
                enabled: false
            },
            max:60,
            title: {
                text: 'Rate',
                enabled: false
            },
            enabled: false,
            gridLineColor: 'transparent'
        },
        credits: {
            enabled: false
        },
        series: [{

            name: 'Laki-Laki',
            data: data_unit_lk
        }, {
            color : '#f93030',
            name: 'Perempuan',
            data: data_unit_pr
        }]
    });

    $('#g_pend').highcharts({
        chart: {
            type: 'column'
        },
        plotOptions: {
            column: {
                dataLabels: {
                    enabled: true
                }
            }
        },
        title: {
            text: 'JUMLAH ASN BKAD BERDASARKAN PENDIDIKAN'
        },
        xAxis: {
            categories: data_pend,
            lineColor: 'transparent'
        },
        yAxis: {
             labels: {
                enabled: false
            },
            max:60,
            title: {
                text: 'Rate',
                enabled: false
            },
            enabled: false,
            gridLineColor: 'transparent'
        },
        credits: {
            enabled: false
        },
        series: [{

            name: 'Laki-Laki',
            data: data_pend_lk
        }, {
            color : '#f93030',
            name: 'Perempuan',
            data: data_pend_pr
        }]
    });

    $('#g_gol').highcharts({
        chart: {
            type: 'column'
           
        },
        plotOptions: {
            column: {
                dataLabels: {
                    enabled: true
                }
            }
        },
        title: {
            text: 'JUMLAH ASN BKAD BERDASARKAN GOLONGAN'
        },
        xAxis: {
            categories: golongan,
            lineColor: 'transparent'
        },
        yAxis: {
            labels: {
                enabled: false
            },
            max:60,
            title: {
                text: 'Rate',
                enabled: false
            },
            enabled: false,
            gridLineColor: 'transparent'

        },
        credits: {
            enabled: false
        },
        series: [{

            name: 'Laki-Laki',
            data: data_gol_lk
        }, {
            color : '#f93030',
            name: 'Perempuan',
            data: data_gol_pr
        }]
    });

    $('#g_jab').highcharts({
        chart: {
            type: 'column'
             
        },
        plotOptions: {
            column: {
                dataLabels: {
                    enabled: true
                }
            }
        },
        title: {
            text: 'JUMLAH ASN BKAD BERDASARKAN JABATAN'
        },
        xAxis: {
            categories: jab,
            lineColor: 'transparent'

        },
        rangeSelector: {
            enabled: false
        },
        yAxis: {
            labels: {
                enabled: false
            },
            max:60,
            title: {
                text: 'Rate',
                enabled: false
            },
            enabled: false,
            gridLineColor: 'transparent'

        },
        credits: {
            enabled: false
        },
        series: [{

            name: 'Laki-Laki',
            data: data_jab_lk
        }, {
            color : '#f93030',
            name: 'Perempuan',
            data: data_jab_pr
        }]
	});
	
});
</script>


<style type="text/css">

    h1 {
        font-family: Impact
    }

</style>

  <?php
    $sql = "SELECT sum(lk)as lk,sum(pr) as pr from grafik_pend";
    $query = $this->db->query("$sql")->row();
  ?>
<div class="breadcrumbs overlay" style="background-image:url('<?php echo base_url('assets/') ?>img/breadcrumb.jpg')">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="bread-inner">
							<!-- Bread Menu -->
							<div class="bread-menu">
								<ul>
									<li><a href="index.html">Home</a></li>
									<li><a href="blog-standard-sidebar.html">Profil</a></li>
									<li><a href="blog-standard-sidebar.html">Info Kepegawaian</a></li>
								</ul>
							</div>
                            <!-- Bread Title -->
                            
							<div class="bread-title"><h2>Info Kepegawaian BKAD Tahun <?php echo date('Y') ?></h2></div>
						</div>
					</div>
				</div>
			</div>
		</div>
        <!-- / End Breadcrumb -->
        
<section class="blog-layout blog-latest" >        
<div class="container" >
	<br>
	<h2 class="text-center">Jumlah ASN Laki-Laki Dan Perempuan<br></h2>

        <table border="0">
            <tr>
                <td align="right"><h1 style="color: #7cb5ec"><?php echo $query->lk ?><br> ORANG</h1></td>
                <td align="center" style="padding: 10px"><img style="width: 80px; " src="<?php echo base_url('assets/')?>images/manwo1.png"></td>
                <td align="left"><h1 style="color: #f93030"><?php echo $query->pr ?><br>ORANG</h1></td>
            </tr>
        </table>

          <div class="row col-12">
            <div class="col-md-6">
                 <div class="panel panel-default">
                    <div class="panel-body">
                      <div id="g_unit_kerja"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                 <div class="panel panel-default">
                    <div class="panel-body">
                      <div id="g_gol"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                 <div class="panel panel-default">
                    <div class="panel-body">
                      <div id="g_pend"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                 <div class="panel panel-default">
                    <div class="panel-body">
                      <div id="g_jab"></div>
                    </div>
                </div>
            </div>
          </div>
    </div>
</section>
