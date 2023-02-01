
<div class="breadcrumbs overlay" style="background-image:url('<?php echo base_url('assets/') ?>img/breadcrumb.jpg')">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="bread-inner">
					<!-- Bread Menu -->
					<div class="bread-menu">
						<ul>
							<li><a href="<?php echo base_url('welcome') ?>">Informasi</a></li>
							<li><a href="#">Laporan Layanan</a></li>
						</ul>
					</div>
					<!-- Bread Title -->
					<!--<div class="bread-title"><h2><?php echo $TITLE ?></h2></div>-->
				</div>
			</div>
		</div>
	</div>
</div>
<!-- / End Breadcrumb -->
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<style>
#bar-chart2 {
  height: 400px;
}
</style>
<section class="latest-blog section-space" style="background-color:#f0f0f0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title  style2 text-center">
                	<div class="section-top">
                		<h1><span>Info</span>
                	</div>
                </div>
                <figure class="highcharts-figure">
                  <div id="bar-chart2"></div>
                </figure>

            </div>
        </div>
    </div>
</section>
<?php
$q = $this->db->query("SELECT MONTH(tgl) bulan,COUNT(nama) jml FROM inbox_permohonan_informasi GROUP BY MONTH(tgl)");
$bln1='';
$bln2='';
$bln3='';
$bln4='';
$bln5='';
$bln6='';
$bln7='';
$bln8='';
$bln9='';
$bln10='';
$bln11='';
$bln12='';
foreach($q->result() as $a){
    
if($a->bulan == 1 && $a->bulan == ''){
    $bln1 = 0;
}elseif($a->bulan == 1 && $a->bulan <> ''){
    $bln1 = $a->jml;
}

if($a->bulan == 9 && $a->bulan == ''){
    $bln9 = 0;
}elseif($a->bulan == 9 && $a->bulan <> ''){
    $bln9 = $a->jml;
}

if($a->bulan == 2 && $a->bulan == ''){
    $bln2 = 0;
}elseif($a->bulan == 2 && $a->bulan <> ''){
    $bln2 = $a->jml;
}

if($a->bulan == 3 && $a->bulan == ''){
    $bln3 = 0;
}elseif($a->bulan == 3 && $a->bulan <> ''){
    $bln3 = $a->jml;
}

if($a->bulan == 4 && $a->bulan == ''){
    $bln4 = 0;
}elseif($a->bulan == 4 && $a->bulan <> ''){
    $bln4 = $a->jml;
}

if($a->bulan == 5 && $a->bulan == ''){
    $bln5 = 0;
}elseif($a->bulan == 5 && $a->bulan <> ''){
    $bln5 = $a->jml;
}

if($a->bulan == 6 && $a->bulan == ''){
    $bln6 = 0;
}elseif($a->bulan == 6 && $a->bulan <> ''){
    $bln6 = $a->jml;
}

if($a->bulan == 7 && $a->bulan == ''){
    $bln7 = 0;
}elseif($a->bulan == 7 && $a->bulan <> ''){
    $bln7 = $a->jml;
}

if($a->bulan == 8 && $a->bulan == ''){
    $bln8 = 0;
}elseif($a->bulan == 8 && $a->bulan <> ''){
    $bln8 = $a->jml;
}

if($a->bulan == 9 && $a->bulan == ''){
    $bln9 = 0;
}elseif($a->bulan == 9 && $a->bulan <> ''){
    $bln9 = $a->jml;
}

if($a->bulan == 10 && $a->bulan == ''){
    $bln10 = 0;
}elseif($a->bulan == 10 && $a->bulan <> ''){
    $bln10 = $a->jml;
}

if($a->bulan == 11 && $a->bulan == ''){
    $bln11 = 0;
}elseif($a->bulan == 11 && $a->bulan <> ''){
    $bln11 = $a->jml;
}

if($a->bulan == 12 && $a->bulan == ''){
    $bln12 = 0;
}elseif($a->bulan == 12 && $a->bulan <> ''){
    $bln12 = $a->jml;
}

}
?>
<script>
Highcharts.setOptions({
        chart: {
            style:{
                    fontFamily:'sans-serif', 
                    fontSize: '2em',
                    color:'#f00'
                }
        }
    });
        $('#bar-chart2').highcharts({
            chart: {
                type: 'column'
            },
            colors: [
               '#ED5565',
               '#5D9CEC', 
               '#A0D468', 
               '#FFCE54',  
               '#48CFAD', 
               '#AC92EC',
               '#AAB2BD', 
               '#D770AD', 
               '#c42525', 
               '#a6c96a',
               '#e28743',
               '#063970'
            ],
            title: {
                text: ' Chart Permohonan Infromasi',
                style: {
                  color: '#555'
                }
            },
            legend: {
                layout: 'horizontal',
                align: 'center',
                verticalAlign: 'bottom',
                borderWidth: 0,
                backgroundColor: '#FFFFFF'
            },
            xAxis: {
                categories: [
                  'Bulan',
                  'Januari',
                  'Februari',
                  'Maret',
                  'April',
                  'Mei',
                  'Juni',
                  'Juli',
                  'Agustus',
                  'September',
                  'Oktober',
                  'Nopember',
                  'Desember'
      
                ]
            },
            yAxis: {
                title: {
                    text: 'Jumlah'
                }
            },
            tooltip: {
                shared: false,
                valueSuffix: ' Orang'
            },
            credits: {
                enabled: false
            },
            plotOptions: {
                areaspline: {
                    fillOpacity: 0.1
                },
            series: {
                groupPadding: .15
            }
            },
            series: [{
                name: 'Januari',
                data: [<?=$bln1;?>]
            }, {
                name: 'Februari',
                data: [<?=$bln2;?>]
            }, {
                name: 'Maret',
                data: [<?=$bln3;?>]
            }, {
                name: 'April',
                data: [<?=$bln4;?>]
            }, {
                name: 'Mei',
                data: [<?=$bln5;?>]
            }, {
                name: 'Juni',
                data: [<?=$bln6;?>]
            }, {
                name: 'Juli',
                data: [<?=$bln7;?>]
            }, {
                name: 'Agustus',
                data: [<?=$bln8;?>]
            }, {
                name: 'September',
                data: [<?=$bln9;?>]
            }, {
                name: 'Oktober',
                data: [<?=$bln10;?>]
            }, {
                name: 'Nopember',
                data: [<?=$bln11;?>]
            }, {
                name: 'Desember',
                data: [<?=$bln12;?>]
            }]
        });
</script>

	