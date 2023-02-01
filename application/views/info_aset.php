<div class="breadcrumbs overlay" style="background-image:url('<?php echo base_url('assets/') ?>img/breadcrumb.jpg')">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="bread-inner">
					<!-- Bread Menu -->
					<div class="bread-menu">
						<ul>
							<li><a href="<?php echo base_url();?>">Home</a></li>
							<li><a href="#">Profil</a></li>
						</ul>
					</div>
					<!-- Bread Title -->
					<div class="#"><h2><?php echo $TITLE_2 ?></h2></div>
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
    #bar-chart {
  height: 400px;
}

.highcharts-figure, .highcharts-data-table table {
  min-width: 310px;
  max-width: 800px;
  margin: 1em auto;
}

#datatable {
  font-family: Verdana, sans-serif;
  border-collapse: collapse;
  border: 1px solid #EBEBEB;
  margin: 10px auto;
  text-align: center;
  width: 100%;
  max-width: 500px;
 
}
#datatable caption {
  padding: 1em 0;
  font-size: 1.2em;
  color: #555;
}
#datatable th {
	font-weight: 600;
  padding: 0.5em;
}
#datatable td, #datatable th, #datatable caption {
  padding: 0.5em;
}
#datatable thead tr, #datatable tr:nth-child(even) {
  background: #f8f8f8;
}
#datatable tr:hover {
  background: #f1f7ff;
}

#datatable3 {
  font-family: Verdana, sans-serif;
  border-collapse: collapse;
  border: 1px solid #EBEBEB;
  margin: 10px auto;
  text-align: center;
  width: 100%;
  max-width: 500px;
}
#datatable3 caption {
  padding: 1em 0;
  font-size: 1.2em;
  color: #555;
}
#datatable3 th {
	font-weight: 600;
  padding: 0.5em;
}
#datatable3 td, #datatable3 th, #datatable3 caption {
  padding: 0.5em;
}
#datatable3 thead tr, #datatable3 tr:nth-child(even) {
  background: #f8f8f8;
}
#datatable3 tr:hover {
  background: #f1f7ff;
}

#datatable4 {
  font-family: Verdana, sans-serif;
  border-collapse: collapse;
  border: 1px solid #EBEBEB;
  margin: 10px auto;
  text-align: center;
  width: 100%;
  max-width: 500px;
}
#datatable4 caption {
  padding: 1em 0;
  font-size: 1.2em;
  color: #555;
}
#datatable4 th {
	font-weight: 600;
  padding: 0.5em;
}
#datatable4 td, #datatable4 th, #datatable4 caption {
  padding: 0.5em;
}
#datatable4 thead tr, #datatable4 tr:nth-child(even) {
  background: #f8f8f8;
}
#datatable4 tr:hover {
  background: #f1f7ff;
}

#datatable5 {
  font-family: Verdana, sans-serif;
  border-collapse: collapse;
  border: 1px solid #EBEBEB;
  margin: 10px auto;
  text-align: center;
  width: 100%;
  max-width: 500px;
}
#datatable5 caption {
  padding: 1em 0;
  font-size: 1.2em;
  color: #555;
}
#datatable5 th {
	font-weight: 600;
  padding: 0.5em;
}
#datatable5 td, #datatable5 th, #datatable5 caption {
  padding: 0.5em;
}
#datatable5 thead tr, #datatable5 tr:nth-child(even) {
  background: #f8f8f8;
}
#datatable5 tr:hover {
  background: #f1f7ff;
}


#datatable7 {
  font-family: Verdana, sans-serif;
  border-collapse: collapse;
  border: 1px solid #EBEBEB;
  margin: 10px auto;
  text-align: center;
  width: 100%;
  max-width: 500px;
}
#datatable7 caption {
  padding: 1em 0;
  font-size: 1.2em;
  color: #555;
}
#datatable7 th {
	font-weight: 600;
  padding: 0.5em;
}
#datatable7 td, #datatable7 th, #datatable7 caption {
  padding: 0.5em;
}
#datatable7 thead tr, #datatable7 tr:nth-child(even) {
  background: #f8f8f8;
}
#datatable7 tr:hover {
  background: #f1f7ff;
}

#datatable8 {
  font-family: Verdana, sans-serif;
  border-collapse: collapse;
  border: 1px solid #EBEBEB;
  margin: 10px auto;
  text-align: center;
  width: 100%;
  max-width: 500px;
}
#datatable8 caption {
  padding: 1em 0;
  font-size: 1.2em;
  color: #555;
}
#datatable8 th {
	font-weight: 600;
  padding: 0.5em;
}
#datatable8 td, #datatable8 th, #datatable8 caption {
  padding: 0.5em;
}
#datatable8 thead tr, #datatable8 tr:nth-child(even) {
  background: #f8f8f8;
}
#datatable8 tr:hover {
  background: #f1f7ff;
}

#datatable9 {
  font-family: Verdana, sans-serif;
  border-collapse: collapse;
  border: 1px solid #EBEBEB;
  margin: 10px auto;
  text-align: center;
  width: 100%;
  max-width: 500px;
}
#datatable9 caption {
  padding: 1em 0;
  font-size: 1.2em;
  color: #555;
}
#datatable9 th {
	font-weight: 600;
  padding: 0.5em;
}
#datatable9 td, #datatable9 th, #datatable9 caption {
  padding: 0.5em;
}
#datatable9 thead tr, #datatable9 tr:nth-child(even) {
  background: #f8f8f8;
}
#datatable9 tr:hover {
  background: #f1f7ff;
}


#bar-chart2 {
  height: 400px;
}

#bar-chart3 {
  height: 400px;
}

#bar-chart4 {
  height: 400px; 
}

#bar-chart5 {
  height: 400px;
}

#bar-chart6 {
  height: 400px;
}

#bar-chart7 {
  height: 400px;
}

#bar-chart8 {
  height: 400px;
}

#bar-chart9 {
  height: 400px;
}

.highcharts-data-table table {
	font-family: Verdana, sans-serif;
	border-collapse: collapse;
	border: 1px solid #EBEBEB;
	margin: 10px auto;
	text-align: center;
	width: 100%;
	max-width: 500px;
}
.highcharts-data-table caption {
  padding: 1em 0;
  font-size: 1.2em;
  color: #555;
}
.highcharts-data-table th {
	font-weight: 600;
  padding: 0.5em;
}
.highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
  padding: 0.5em;
}
.highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
  background: #f8f8f8;
}
.highcharts-data-table tr:hover {
  background: #f1f7ff;
}
</style>


<section class="about-us section-space">
	<div class="container">
    
  

		
            
    

         
            <!-- kepangkatan -->
         
                <!-- kepangkatan end -->

                <!-- unit kerja -->
                <div class="col-12 pt-5 pb-5" >
                  <h4 class="text-center">STATISTIK ASET </h4>
                </div>
                
            <div class="col-12">
                <figure class="highcharts-figure">
                  <div id="bar-chart2"></div>
                </figure>
            </div>
            
                
                
			</div>
		</div>

    
	</div>
</section>


<script>
    



Highcharts.chart('bar-chart2', {
  chart: {
    type: 'column'
  },
colors:['red', 'yellow','green','blue','purple','black','orange','grey'],
  title: {
    text: 'ㅤ'
  },
  subtitle: {
    text: ''
  },
  xAxis: {
    categories: [
      '2019',
      '2020',
      '2021'
    ],
    crosshair: true
  },
  yAxis: {
    min: 0,
    title: {
      text: 'Jumlah(triliun Rupiah)'
    }
  },
  tooltip: {
    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
      '<td style="padding:0"><b>{point.y}</b></td></tr>',
    footerFormat: '</table>',
    shared: true,
    useHTML: true
  },
  plotOptions: {
    column: {
      pointPadding: 0.2,
      borderWidth: 0
    }
  },
  series: [{
    name: 'Aset Tetap',
    data: [16003767948423, 17104695717547, 18352944551931]

  }, {
    name: 'Tanah',
    data: [7547507931059, 7956691535838, 8333334376330]

  },
  {
    name: 'Peralatan dan Mesin',
    data: [2354696198490,2843703447686, 3274051002355]

  },{
    name: 'Gedung dan Bangunan',
    data: [5597004530828,6001640680425,6418299068361]

  },
  {
    name: 'Jalan, Irigasi dan Jaringan',
    data: [7339519431320, 7770859969435, 9012130183947]

  },
  {
    name: 'Aset Tetap Lainnya',
    data: [306632027360,368205002465, 427450835201]

  },
  {
    name: 'Konstruksi dalam Pengerjaan',
    data: [711656972094, 849429285505, 341179058376]

  },
  {
    name: 'Akumulasi Penyusutan Aset Tetap',
    data: [7853249142730, 8685834203808, 9453499972642]

  }
]
});


</script>


