
<div class="breadcrumbs overlay" style="background-image:url('<?php echo base_url('assets/') ?>img/breadcrumb.jpg')">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="bread-inner">
					<!-- Bread Menu -->
					<div class="bread-menu">
						<ul>
							<li><a href="<?php echo base_url('welcome') ?>">Informasi</a></li>
							<li><a href="#">Ringaksan Akses Inforamsi Publik</a></li>
						</ul>
					</div>
					<!-- Bread Title -->
					<div class="bread-title"><h2>Chart Informasi Publik</h2></div>
					
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
                <!--<figure class="highcharts-figure">-->
                <!--  <div id="bar-chart2"></div>-->
                <!--</figure>-->
                <h4 class="text-center">Chart Permohonan Informasi</h4>
                <br>
                <br>
                <figure class="highcharts-figure">
                  <div id="container"></div>
                </figure>
                <br>
                <br>
                <br>
                <h4 class="text-center">Tanggapan Permohonan Informasi</h4>
   <br>
   <br>
  <section>
   
    <div class="row">
      
      <div class="col-xl-6 col-sm-6 col-12 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-5">
              <div>
                <h3 class="text-success"><?=$bisa?> Orang</h3>
                <p class="mb-0">Informasi Dapat Diberikan</p>
              </div>
              <div class="align-self-center">
                <i class="fa fa-user text-success fa-4x"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6 col-sm-6 col-12 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-5">
              <div>
                <h3 class="text-danger"><?=$tidak?> Orang</h3>
                <p class="mb-0">Informasi Tidak Dapat Diberikan</p>
              </div>
              <div class="align-self-center">
                <i class="fa fa-user text-danger fa-4x"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
     
     
    </div>
  </section>
                <br>
                <br>
                <br>
                <h4 class="text-center"> Status Pemohon Informasi</h4>
   <br>
   <br>
  <section>
   
    <div class="row">
      
      <div class="col-xl-6 col-sm-6 col-12 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-5">
              <div>
                <h3 class="text-success"><?=$pegawai?> Orang</h3>
                <p class="mb-0">Pegawai/Dosen</p>
              </div>
              <div class="align-self-center">
                <i class="fa fa-user text-success fa-4x"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6 col-sm-6 col-12 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-5">
              <div>
                <h3 class="text-primary"><?=$ormas?> Orang</h3>
                <p class="mb-0">LSM/Ormas/Parpol</p>
              </div>
              <div class="align-self-center">
                <i class="fa fa-user text-primary fa-4x"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6 col-sm-6 col-12 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-5">
              <div>
                <h3 class="text-dark"><?=$pemerintah?> Orang</h3>
                <p class="mb-0">Kementerian/Instansi Pemerintah</p>
              </div>
              <div class="align-self-center">
                <i class="fa fa-user text-dark fa-4x"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6 col-sm-6 col-12 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-5">
              <div>
                <h3 class="text-warning"><?=$siswa?> Orang</h3>
                <p class="mb-0">Pelajar/Mahasiswa</p>
              </div>
              <div class="align-self-center">
                <i class="fa fa-user text-warning fa-4x"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6 col-sm-6 col-12 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-5">
              <div>
                <h3 class="text-info"><?=$lainnya?> Orang</h3>
                <p class="mb-0">Lainnya</p>
              </div>
              <div class="align-self-center">
                <i class="fa fa-user text-info fa-4x"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
     
     
    </div>
  </section>
</div>
                  </div>
            

            </div>
        </div>
    </div>
</section>
<?php
$q = $this->db->query("SELECT a.id as bulan,IFNULL(b.jml,0)jml FROM ms_bulan a
LEFT JOIN (
	SELECT MONTH(tgl)bln ,COUNT(*)jml FROM inbox_permohonan_informasi
	GROUP BY bln
)b ON a.id=b.bln
ORDER BY a.id;");
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

        
        
     
Highcharts.chart('container', {
  chart: {
    type: 'column'
  },
  title: {
    text: ''
  },
  subtitle: {
    text: ''
  },
  
  xAxis: {
    type: 'category',
    labels: {
      rotation: -45,
      style: {
        fontSize: '13px',
        fontFamily: 'Verdana, sans-serif'
      }
    }
  },
  yAxis: {
    min: 0,
    title: {
      text: 'Jumlah'
    }
  },
  legend: {
    enabled: false
  },
  tooltip: {
    pointFormat: ''
  },
  series: [{
    name: 'Population',
    data: [
      ['Januari', <?=$bln1;?>],
      ['Februari', <?=$bln2;?>],
      ['Maret', <?=$bln3;?>],
      ['April', <?=$bln4;?>],
      ['Mei', <?=$bln5;?>],
      ['Juni', <?=$bln6;?>],
      ['Juli', <?=$bln7;?>],
      ['Agustus', <?=$bln8;?>],
      ['September', <?=$bln9;?>],
      ['Oktober', <?=$bln10;?>],
      ['November', <?=$bln11;?>],
      ['Desember', <?=$bln12;?>]
     
    ],
    dataLabels: {
      enabled: true,
      rotation: 360,
      color: '#FFFFFF',
      align: 'right',
      format: '{point.y: 1f}', // one decimal
      y: 30, // 10 pixels down from the top
      style: {
        fontSize: '13px',
        fontFamily: 'Verdana, sans-serif'
      }
    }
  }]
});
        
        
</script>

	