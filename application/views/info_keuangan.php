

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
<script>
<?= 
// Realisasi Pendapatan
// $url = 'https://keuangan.sulselprov.go.id/keu_simakda_2022/simakda/index.php/rest_api/api_simakda/ang_belanja';
$url = 'https://keuangan.sulselprov.go.id/keu_simakda_2022/simakda/index.php/rest_api/api_simakda/ang_realpend';
$json = file_get_contents($url);
$jo = json_decode($json,true);
// Realisasi Belanja
// $url = 'https://keuangan.sulselprov.go.id/keu_simakda_2022/simakda/index.php/rest_api/api_simakda/ang_belanja';
$url = 'https://keuangan.sulselprov.go.id/keu_simakda_2022/simakda/index.php/rest_api/api_simakda/ang_realbelj';
$json = file_get_contents($url);
$jo1 = json_decode($json,true);



?>
</script>
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


#datatable2 {
  font-family: Verdana, sans-serif;
  border-collapse: collapse;
  border: 1px solid #EBEBEB;
  margin: 10px auto;
  text-align: center;
  width: 100%;
  max-width: 500px;
  
 
}
#datatable2 caption {
  padding: 1em 0;
  font-size: 1.2em;
  color: #555;
}
#datatable2 th {
	font-weight: 600;
  padding: 0.5em;
}
#datatable2 td, #datatable2 th, #datatable2 caption {
  padding: 0.5em;
}
#datatable2 thead tr, #datatable2 tr:nth-child(even) {
  background: #f8f8f8;
}
#datatable2 tr:hover {
  background: #f1f7ff;
}
</style>


<section class="about-us section-space">
	<div class="container">
	    <!--cari realisasi pendapatan daerah-->
	    <!--SELECT (SELECT nama FROM ms_rekening WHERE kode=LEFT(kd_rek5,3)),kd_rek5, SUM(nilai) -->
     <!--   FROM `v_realisasi_akt` WHERE LEFT (kd_rek5,1)=4 GROUP BY LEFT(kd_rek5,3);-->
     <!--   cari anggaran-->
     <!--   SELECT (SELECT nama FROM ms_rekening WHERE kode=LEFT(kd_rek,3)),kd_rek, SUM(nilai) -->
     <!--   FROM `trdrka` WHERE LEFT (kd_rek,1)=4 GROUP BY LEFT(kd_rek,3);-->
  <h4 class="text-center">REALISASI PENDAPATAN DAERAH</h4>
    <!--<h4 class="text-center pb-5">PER BULAN AGUSTUS 2021 </h4>-->
		<div class="row">
		   	<div class="col-6">
			    <p class="highcharts-description">
                <figure class="highcharts-figure">
                  <div id="bar-chart"></div>
                  </figure>
            </div>
			<!--<div class="col-6">-->
			    
   <!--             <figure class="highcharts-figure">-->
   <!--               <div id="bar-chart"></div>-->
   <!--               </figure>-->
   <!--         </div>-->
        <div class="col-6">
                  <p class="highcharts-description">
                    <!-- Tabel Realisasi Pendapatan Daerah Per Bulan Agustus 2021 -->
                  </p>
                  <table id="datatable">
                    <thead>
                      <tr>
                        <th>Jenis Pendapatan</th>
                        <th>Anggaran</th>
                        <th>Realisasi</th>
                        <th>(%)</th>
                      </tr>
                    </thead>
                    <tbody>
                        
                       <?php 
                       $totreal = 0;
                       $totang = 0;
                       $totper = 0;
                       foreach($jo as $j){
                           $persen = ($j['nreal']/$j['nang'])*100;
                           $totreal = $totreal + $j['nreal'];
                           $totang = $totang + $j['nang'];
                           $totper = ($totreal / $totang) * 100;
                       ?>
                      <tr>
                        <!--<th class="text-left"></th>-->
                        <td> <?php echo $j['nama']?> </td>
                        <td  style="text-align:right;"><?php echo number_format($j['nang'],2)?> </td>
                        <td  style="text-align:right;"><?php echo number_format($j['nreal'],2)?> </td>
                        <td> <?php echo number_format($persen,2)?></td>
                        
                       
                      </tr>
                      <?php }?>
                      <tr>
                          <td>Total</td>
                          <td><?php echo number_format($totang,2)?></td>
                          <td><?php echo number_format($totreal,2)?></td>
                          <td><?php echo number_format($totper,2)?>%</td>
                          
                          
                      </tr>
                        
                      
                     
    
                    </tbody>
                  </table>
                </div>
        <br>
        <br>
        <br>
        <br>
        <div class="col-12 pt-5 pb-5" >
                  <h4 class="text-center">REALISASI BELANJA DAERAH</h4>
                  <!--<h4 class="text-center">PER BULAN AGUSTUS 2021</h4>-->
                </div>
                <div class="col-6">
			    <p class="highcharts-description">
                <figure class="highcharts-figure">
                  <div id="bar-chart2"></div>
                  </figure>
            </div>
        <!--<div class="col-6">-->
        <!--        <figure class="highcharts-figure">-->
        <!--          <div id="bar-chart2"></div>-->
        <!--          </figure>-->
        <!--    </div>-->
        <div class="col-6">
                  <p class="highcharts-description">
                    <!-- Realisasi Belanja Daerah Per Bulan Agustus 2021 -->
                  </p>
                  <table id="datatable2">
                    <thead>
                      <tr>
                        <th>Jenis Belanja</th>
                        <th>Anggaran</th>
                        <th>Realisasi</th>
                        <th>(%)</th>
                      </tr>
                    </thead>
                    <tbody>
                        
                       <?php  
                       
                       $totreal = 0;
                       $totang = 0;
                       $totper = 0;
                       foreach($jo1 as $j1){
                           $persen = ($j1['nreal']/$j1['nang'])*100;
                           $totreal = $totreal + $j1['nreal'];
                           $totang = $totang + $j1['nang'];
                           $totper = ($totreal / $totang) * 100;
                       ?>
                      <tr>
                        <!--<th class="text-left"></th>-->
                        <td> <?php echo $j1['nama']?> </td>
                        <td  style="text-align:right;"><?php echo number_format($j1['nang'],2)?> </td>
                        <td  style="text-align:right;"><?php echo number_format($j1['nreal'],2)?> </td>
                        <td> <?php echo number_format($persen,2)?> </td>
                       
                      </tr>
                      <?php }?>
                       <tr>
                          <td>Total</td>
                          <td><?php echo number_format($totang,2)?></td>
                          <td><?php echo number_format($totreal,2)?></td>
                          <td><?php echo number_format($totper,2)?>%</td>
                          
                          
                      </tr>
                     
    
                    </tbody>
                  </table>
                </div>
    </section>



<script>
    $(function () {
    Highcharts.setOptions({
		lang: {
			thousandsSep: '.'
		}
	});
    
Highcharts.chart('bar-chart', {
    
  chart: {
    type: 'column'
  },
  
  title: {
    text: 'ㅤ'
  },
  subtitle: {
    text: ''
  },
  xAxis: {
    categories: [
      'PENDAPATAN ASLI DAERAH',
      'PENDAPATAN TRANSFER',
      'LAIN – LAIN PENDAPATAN DAERAH YANG SAH'
    ],
    crosshair: true
  },
  yAxis: {
    min: 0,
    title: {
      text: 'Jumlah'
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
    name: 'Anggaran',
    data: [5003467478294.00, 4095273480415.00, 124389159861.00]

  }, {
    name: 'Realisasi',
    data: [2655870346804.75, 2411138955336.00, 226164545883.02]

  }]
});

Highcharts.chart('bar-chart2', {
  chart: {
    type: 'column'
  },
  title: {
    text: 'ㅤ'
  },
  subtitle: {
    text: ''
  },
  xAxis: {
    categories: [
      'BELANJA OPERASI',
      'BELANJA MODAL',
      'BELANJA TIDAK TERDUGA',
      'BELANJA TRANSFER'
    ],
    crosshair: true
  },
  yAxis: {
    min: 0,
    title: {
      text: 'Jumlah'
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
    name: 'Anggaran',
    data: [5532311259558.00, 1673395114550.00, 1823575631356.00,1823575631356.00]

  }, {
    name: 'Realisasi',
    data: [2739064899953.60, 198803529999.70, 1136428740103.86,1136428740103.86]

  }]
});

});
</script>


