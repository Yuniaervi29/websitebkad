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
#datatableumur {
  font-family: Verdana, sans-serif;
  border-collapse: collapse;
  border: 1px solid #EBEBEB;
  margin: 10px auto;
  text-align: center;
  width: 100%;
  max-width: 500px;
 
}
#datatableumur caption {
  padding: 1em 0;
  font-size: 1.2em;
  color: #555;
}
#datatableumur th {
	font-weight: 600;
  padding: 0.5em;
}
#datatableumur td, #datatableumur th, #datatableumur caption {
  padding: 0.5em;
}
#datatableumur thead tr, #datatableumur tr:nth-child(even) {
  background: #f8f8f8;
}
#datatableumur tr:hover {
  background: #f1f7ff;
}
#datatableunitnon {
  font-family: Verdana, sans-serif;
  border-collapse: collapse;
  border: 1px solid #EBEBEB;
  margin: 10px auto;
  text-align: center;
  width: 100%;
  max-width: 500px;
 
}
#datatableunitnon caption {
  padding: 1em 0;
  font-size: 1.2em;
  color: #555;
}
#datatableunitnon th {
	font-weight: 600;
  padding: 0.5em;
}
#datatableunitnon td, #datatableunitnon th, #datatableunitnon caption {
  padding: 0.5em;
}
#datatableunitnon thead tr, #datatableunitnon tr:nth-child(even) {
  background: #f8f8f8;
}
#datatableunitnon tr:hover {
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

#datatablependnon {
  font-family: Verdana, sans-serif;
  border-collapse: collapse;
  border: 1px solid #EBEBEB;
  margin: 10px auto;
  text-align: center;
  width: 100%;
  max-width: 500px;
}
#datatablependnon caption {
  padding: 1em 0;
  font-size: 1.2em;
  color: #555;
}
#datatablependnon th {
	font-weight: 600;
  padding: 0.5em;
}
#datatablependnon td, #datatablependnon th, #datatablependnon caption {
  padding: 0.5em;
}
#datatablependnon thead tr, #datatablependnon tr:nth-child(even) {
  background: #f8f8f8;
}
#datatablependnon tr:hover {
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
<section class="block block-counter" id="hero" style="color:white; padding: 40px 0 40px; background-color:#FC6761;">
    <div class="container">
        <div class="text-center  h3 mg-0 mg-b-30" style="color:white;">DATA STATISTIK ASN BKAD</div>

        <!--<div class="row-flex flex-tablet text-center pt-5">-->
        <!--    <div class="post post-counter" style="margin-left: auto;margin-right: auto;">-->
        <!--        <div class="counter-count" style="font-size:64px;">-->
        <!--           	<span class="numscroller" data-min='0' data-max='717852' data-delay='2' data-increment='1000'><b class="number"><?=$jml;?></span></b><span> Orang</span></div>-->
        <!--    </div>-->
        <!--</div>-->
    </div>
</section>

<section class="about-us section-space">
	<div class="container">
    
  
  <h4 class="text-center">JUMLAH ASN BKAD BERDASARKAN </h4>
                  <h4 class="text-center pb-5">JABATAN STRUKTUAL</h4>
		<div class="row">
		
            <div class="col-6">
                <figure class="highcharts-figure">
                  <div id="bar-chart4"></div>
                </figure>
        </div>
        <div class="col-6">
                  <p class="highcharts-description">
                    <!-- TABEL JUMLAH ASN BKAD BERDASARKAN JABATAN STRUKTURAL -->
                  </p>
                
                  <table id="datatable4">
                      <tr>
							  
							  <td width="45%"><b>Jabatan</td>
							  <td width="20%" align="center"><b>Laki-laki</td>
							  <td width="20%" align="center"><b>Perempuan</td>
							</tr>
                   
                    
                        <?php 
							$totallk=0;	
							$totalpr=0;
							foreach($JAB as $jab) { $st = "'jab'"; ?>
                     	    <tr>
								
								<td><?php echo $jab->jab ?></td>
								<td align="center"><?php echo $jab->lk ?></td>
								<td align="center"><?php echo $jab->pr ?></td>
								<?php $totallk += $jab->lk; ?>
								<?php $totalpr += $jab->pr; ?>
							
							</tr>
                     	<?php } ?>
							
                    
                            <tr class="text-center">
							    <td class="text-center"><b>Total</b></td>
							    <td><b><?php echo $totallk ?></b></td>
							    <td><b><?php echo $totalpr ?></b></td>
							</tr>
                  </table>
                  <br>
                  <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url('profil/pegawai') ?>">Selengkapnya >></a>
                </div>

                <div class="col-12 pt-5 pb-5" >
                  <h4 class="text-center">JUMLAH ASN BKAD BERDASARKAN </h4>
                  <h4 class="text-center">GOLONGAN KEPANGKATAN</h4>
                </div>
            <div class="col-6">
                <figure class="highcharts-figure">
                  <div id="bar-chart3"></div>
                </figure>
            </div>
            <!-- kepangkatan -->
            <div class="col-6">
                  <p class="highcharts-description">
                    <!-- TABEL JUMLAH ASN BKAD BERDASARKAN GOLONGAN KEPANGKATAN -->
                  </p>
                
                  <table id="datatable3">
                    <thead>
                      <tr>
                        <td width="45%"><b>Golongan</td>
                        <th width="20%">Laki-Laki</th>
                        <th  width="20%">Perempuan</th>
                      </tr>
                    </thead>
                    <?php 
							$totallk=0;	
							$totalpr=0;
							foreach($GOL as $gol) { $st="'gol'"; ?>
							<tr>
								
								<td><?php echo $gol->gol ?></td>
								<td align="center"><?php echo $gol->lk ?></td>
								<td align="center"><?php echo $gol->pr ?></td>
                                <?php $totallk += $gol->lk; ?>
								<?php $totalpr += $gol->pr; ?>
								
							</tr>
							<?php } ?>
							<tr class="text-center">
							    <td class="text-center"><b>Total</b></td>
							    <td><b><?php echo $totallk ?></b></td>
							    <td><b><?php echo $totalpr ?></b></td>
							</tr>
                  </table>
                </div>
                <!-- kepangkatan end -->

                <!-- unit kerja -->
                <div class="col-12 pt-5 pb-5" >
                  <h4 class="text-center">JUMLAH ASN BKAD BERDASARKAN </h4>
                  <h4 class="text-center">UNIT KERJA</h4>
                </div>
                
            <div class="col-6">
                <figure class="highcharts-figure">
                  <div id="bar-chart5"></div>
                </figure>
            </div>
             <div class="col-6">
                  <p class="highcharts-description">
                    <!-- TABEL JUMLAH ASN BKAD BERDASARKAN JENJANG USIA -->
                  </p>
                
                  <table id="datatable5">
                    <thead>
                      <tr>
                        <td width="45%"><b>Unit</td>
                        <th>Laki-Laki</th>
                        <th>Perempuan</th>
                      </tr>
                    </thead>
                    <?php 
							$totallk=0;	
							$totalpr=0;
							foreach($UNIT as $unt) {$st = "'unit'";?>
							<tr>
								<td><?php echo $unt->unit ?></td>
								<td align="center"><?php echo $unt->lk ?></td>
								<td align="center"><?php echo $unt->pr ?></td>
								<?php $totallk += $unt->lk; ?>
								<?php $totalpr += $unt->pr; ?>
							
							</tr>
							<?php } ?>
							<tr class="text-center">
							    <td  class="text-center"><b>Total</b></td>
							    <td><b><?php echo $totallk ?></b></td>
							    <td><b><?php echo $totalpr ?></b></td>
							</tr>
                  </table>
                </div>
            <!-- unit kerja end -->


              <!-- pendidikan -->
                <div class="col-12 pt-5 pb-5">
                    <h4 class="text-center">JUMLAH ASN BKAD BERDASARKAN </h4>
                    <h4 class="text-center">TINGKAT PENDIDIKAN </h4>
                </div>

		
			<div class="col-6">
			    <p class="highcharts-description">
                <figure class="highcharts-figure">
                  <div id="bar-chart"></div>
                  </figure>
            </div>
        <div class="col-6">
                  <p class="highcharts-description">
                    <!-- TABEL JUMLAH ASN BKAD BERDASARKAN TINGKAT PENDIDIKAN -->
                  </p>
                  <table id="datatable">
                    <thead>
                      <tr>
                        <td width="45%"><b>Pendidikan</td>
                        <th>Laki-Laki</th>
                        <th>Perempuan</th>
                      </tr>
                    </thead>
                    <?php 
							$totallk=0;	
							$totalpr=0;
							foreach($PEND as $pend) { $st="'pend'"; ?>
							<tr>
								<td><?php echo $pend->pend ?></td>
								<td align="center"><?php echo $pend->lk ?></td>
								<td align="center"><?php echo $pend->pr ?></td>
								<?php $totallk += $pend->lk; ?>
								<?php $totalpr += $pend->pr; ?>
								
							</tr>
							<?php } ?>
								<tr class="text-center">
							    <td class="text-center"><b>Total</b></td>
							    <td><b><?php echo $totallk ?></b></td>
							    <td><b><?php echo $totalpr ?></b></td>
							    
							</tr>
                  </table>
                </div>

                <!-- pendidikan end -->
                
            
                <div class="col-12 pt-5 pb-5">
                    <h4 class="text-center">JUMLAH ASN BKAD BERDASARKAN </h4>
                    <h4 class="text-center">JENJANG USIA</h4>
                </div>

		
			<div class="col-6">
			    <p class="highcharts-description">
                <figure class="highcharts-figure">
                  <div id="bar-chartumur"></div>
                  </figure>
            </div>
        <div class="col-6">
                  <p class="highcharts-description">
                  </p>
                  <table id="datatableumur">
                    <thead>
                      <tr>
                        <td width="45%"><b>Usia</td>
                        <th>Laki-Laki</th>
                        <th>Perempuan</th>
                      </tr>
                    </thead>
                    <?php 
							$totallk=0;	
							$totalpr=0;
							foreach($UMUR as $umu) { $st="'umur'"; ?>
							<tr>
								<td><?php echo $umu->tahun ?></td>
								<td align="center"><?php echo $umu->lk ?></td>
								<td align="center"><?php echo $umu->pr ?></td>
								<?php $totallk += $umu->lk; ?>
								<?php $totalpr += $umu->pr; ?>
							</tr>
							<?php } ?>
							<tr class="text-center">
							    <td class="text-center"><b>Total</b></td>
							    <td><b><?php echo $totallk ?></b></td>
							    <td><b><?php echo $totalpr ?></b></td>
							</tr>
                  </table>
                </div>
                
                
</section>
<section class="block block-counter" id="hero" style="color:white; padding: 40px 0 40px; background-color:#FC6761;">
    <div class="container">
        <div class="text-center  h3 mg-0 mg-b-30" style="color:white;">DATA STATISTIK NON ASN BKAD</div>

        <!--<div class="row-flex flex-tablet text-center pt-5">-->
        <!--    <div class="post post-counter" style="margin-left: auto;margin-right: auto;">-->
        <!--        <div class="counter-count" style="font-size:64px;">-->
        <!--           	<span class="numscroller" data-min='0' data-max='717852' data-delay='2' data-increment='1000'><b class="number"><?=$jml;?></span></b><span> Orang</span></div>-->
        <!--    </div>-->
        <!--</div>-->
    </div>
</section>

<section class="about-us section-space">
    <div class="container">
    <h4 class="text-center">JUMLAH ASN NON BKAD BERDASARKAN </h4>
                  <h4 class="text-center pb-5">STATUS MAGANG</h4>
		<div class="row">
		
            <div class="col-6">
                <figure class="highcharts-figure">
                  <div id="bar-chart9"></div>
                </figure>
        </div>
        <div class="col-6">
                  <p class="highcharts-description">
                    <!-- TABEL JUMLAH ASN BKAD BERDASARKAN JABATAN STRUKTURAL -->
                  </p>
                
                  <table id="datatable9">
                    <thead>
                      <tr>
                        <td width="45%"><b>Magang</td>
                        <th>Laki-Laki</th>
                        <th>Perempuan</th>
                      </tr>
                    </thead>
                    <?php 
							$totallk=0;	
							$totalpr=0;
							foreach($MAGANG as $mgn) { $st="'magang'"; ?>
							<tr>
								<td><?php echo $mgn->magang ?></td>
								<td align="center"><?php echo $mgn->lk ?></td>
								<td align="center"><?php echo $mgn->pr ?></td>
								<?php $totallk += $mgn->lk; ?>
								<?php $totalpr += $mgn->pr; ?>
							</tr>
							<?php } ?>
							<tr class="text-center">
							    <td class="text-center"><b>Total</b></td>
							    <td><b><?php echo $totallk ?></b></td>
							    <td><b><?php echo $totalpr ?></b></td>
							</tr>
                  </table>
                  <br>
                  <br>
                    
                </div>
    
                <p class="highcharts-description">
                    <!-- Jumlah Non ASN&emsp;&emsp;&emsp;&emsp;Laki-Laki: <b>59</b> Orang&emsp;&emsp;&emsp;&emsp;Perempuan: <b>46</b> Orang -->
                  </p><hr><br>
                  <div class="col-12 pt-5 pb-5" >
                  <h4 class="text-center">JUMLAH NON ASN BKAD BERDASARKAN </h4>
                  <h4 class="text-center">UNIT KERJA</h4>
                </div>
        <div class="col-6">
                <figure class="highcharts-figure">
                  <div id="bar-chartunitnon"></div>
                </figure>
        </div>
        <div class="col-6">
                  <p class="highcharts-description">
                    <!-- TABEL JUMLAH ASN BKAD BERDASARKAN JENJANG USIA -->
                  </p>
                
                  <table id="datatableunitnon">
                    <thead>
                      <tr>
                        <td width="45%"><b>Unit</td>
                        <th>Laki-Laki</th>
                        <th>Perempuan</th>
                      </tr>
                    </thead>
                    <?php 
							$totallk=0;	
							$totalpr=0;
							foreach($UNITNON as $untnon) {$st = "'unitnon'";?>
							<tr>
								<td><?php echo $untnon->unit ?></td>
								<td align="center"><?php echo $untnon->lk ?></td>
								<td align="center"><?php echo $untnon->pr ?></td>
								<?php $totallk += $untnon->lk; ?>
								<?php $totalpr += $untnon->pr; ?>
							</tr>
							<?php } ?>
							<tr class="text-center">
							    <td class="text-center"><b>Total</b></td>
							    <td><b><?php echo $totallk ?></b></td>
							    <td><b><?php echo $totalpr ?></b></td>
							</tr>
                  </table>
                </div>
                
                

        <div class="col-12 pt-5 pb-5" >
                  <h4 class="text-center">JUMLAH NON ASN BKAD BERDASARKAN </h4>
                  <h4 class="text-center">TINGKAT PENDIDIKAN</h4>
                </div>
        <div class="col-6">
                <figure class="highcharts-figure">
                  <div id="bar-chartpendnon"></div>
                </figure>
        </div>
        <div class="col-6">
                  <p class="highcharts-description">
                    <!-- TABEL JUMLAH NON ASN BKAD BERDASARKAN TINGKAT PENDIDIKAN -->
                  </p>
                
                  <table id="datatablependnon">
                    <thead>
                      <tr>
                        <td width="45%"><b>Pendidikan</td>
                        <th>Laki-Laki</th>
                        <th>Perempuan</th>
                      </tr>
                    </thead>
                    <?php 
							$totallk=0;	
							$totalpr=0;
							foreach($PENDNON as $pendnon) { $st="'pendnon'"; ?>
							<tr>
								<td><?php echo $pendnon->pend ?></td>
								<td align="center"><?php echo $pendnon->lk ?></td>
								<td align="center"><?php echo $pendnon->pr ?></td>
								<?php $totallk += $pendnon->lk; ?>
								<?php $totalpr += $pendnon->pr; ?>
							</tr>
							<?php } ?>
							<tr class="text-center">
							    <td class="text-center"><b>Total</b></td>
							    <td><b><?php echo $totallk ?></b></td>
							    <td><b><?php echo $totalpr ?></b></td>
							</tr>
                  </table>
                </div>
        <br><br>
        <div class="col-12 pt-5 pb-5" >
                  <h4 class="text-center">JUMLAH NON ASN BKAD BERDASARKAN </h4>
                  <h4 class="text-center">JENJANG USIA</h4>
                </div>
        <div class="col-6">
                <figure class="highcharts-figure">
                  <div id="bar-chart7"></div>
                </figure>
        </div>
        <div class="col-6">
                  <p class="highcharts-description">
                    <!-- TABEL JUMLAH NON ASN BKAD BERDASARKAN JENJANG USIA -->
                  </p>
                
                  <table id="datatable7">
                    <thead>
                      <tr>
                        <td width="45%"><b>Usia</td>
                        <th>Laki-Laki</th>
                        <th>Perempuan</th>
                      </tr>
                    </thead>
                    <?php 
							$totallk=0;	
							$totalpr=0;
							foreach($UMURNON as $umunon) { $st="'umurnon'"; ?>
							<tr>
								<td><?php echo $umunon->tahun ?></td>
								<td align="center"><?php echo $umunon->lk ?></td>
								<td align="center"><?php echo $umunon->pr ?></td>
								<?php $totallk += $umunon->lk; ?>
								<?php $totalpr += $umunon->pr; ?>
							</tr>
							<?php } ?>
							<tr class="text-center">
							    <td class="text-center"><b>Total</b></td>
							    <td><b><?php echo $totallk ?></b></td>
							    <td><b><?php echo $totalpr ?></b></td>
							</tr>
                  </table>
                </div>
                <br><br>
                
                <br><br>
                
			</div>
		</div>

    
	</div>
	</div>
</section>



<script>
    Highcharts.chart('bar-chart', {
  data: {
    table: 'datatable',
  },
  colors:['rgb(124,181,236)', 'pink'],
  chart: {
    type: 'column'
  },
  title: {
    text: 'ㅤ'
  },
  yAxis: {
    allowDecimals: false,
    title: {
      text: 'Jumlah'
    }
  },
  tooltip: {
    formatter: function () {
      return '<b>' + this.series.name + '</b><br/>' +
        this.point.y + ' ' + this.point.name.toLowerCase();
    }
  }
});



Highcharts.chart('bar-chart2', {
  chart: {
    type: 'column'
  },
  colors:['rgb(124,181,236)', 'pink'],
  title: {
    text: 'ㅤ'
  },
  subtitle: {
    text: ''
  },
  xAxis: {
    categories: [
      'Bagian Sekretariat',
      'Bidang Perencanaan Anggaran Daerah',
      'Bidang Perbendaharaan Daerah',
      'Bidang Akuntansi dan Pelaporan Keuangan Daerah',
      'Bidang Pengelolaan Barang Milik Daerah',
      'Fungsional'
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
    name: 'Laki-Laki',
    data: [12, 13, 13, 15, 17, 1]

  }, {
    name: 'Perempuan',
    data: [15, 7, 10, 16, 18, 3]

  }]
});

Highcharts.chart('bar-chart6', {
  chart: {
    type: 'column'
  },
  colors:['rgb(124,181,236)', 'pink'],
  title: {
    text: 'ㅤ'
  },
  subtitle: {
    text: ''
  },
  xAxis: {
    categories: [
      'Bagian Sekretariat',
      'Bidang Perencanaan Anggaran Daerah',
      'Bidang Perbendaharaan Daerah',
      'Bidang Akuntansi dan Pelaporan Keuangan Daerah',
      'Bidang Pengelolaan Barang Milik Daerah',
      'Fungsional'
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
    name: 'Laki-Laki',
    data: [19, 7, 11, 8, 14, 0]

  }, {
    name: 'Perempuan',
    data: [19, 4, 9, 8, 6, 0]

  }]
});
</script>


<script>
    Highcharts.chart('bar-chart3', {
  data: {
    table: 'datatable3',
  },
  colors:['rgb(124,181,236)', 'pink'],
  chart: {
    type: 'column'
  },
  title: {
    text: 'ㅤ'
  },
  yAxis: {
    allowDecimals: false,
    title: {
      text: 'Jumlah'
    }
  },
  tooltip: {
    formatter: function () {
      return '<b>' + this.series.name + '</b><br/>' +
        this.point.y + ' ' + this.point.name.toLowerCase();
    }
  }
});
</script>

<script>
    Highcharts.chart('bar-chart4', {
  data: {
    table: 'datatable4',
  },
  colors:['rgb(124,181,236)', 'pink'],
  chart: {
    type: 'column'
  },
  title: {
    text: 'ㅤ'
  },
  yAxis: {
    allowDecimals: false,
    title: {
      text: 'Jumlah'
    }
  },
  tooltip: {
    formatter: function () {
      return '<b>' + this.series.name + '</b><br/>' +
        this.point.y + ' ' + this.point.name.toLowerCase();
    }
  }
});
</script>

<script>
    Highcharts.chart('bar-chart5', {
  data: {
    table: 'datatable5',
  },
  colors:['rgb(124,181,236)', 'pink'],
  chart: {
    type: 'column'
  },
  title: {
    text: 'ㅤ'
  },
  yAxis: {
    allowDecimals: false,
    title: {
      text: 'Usia'
    }
  },
  tooltip: {
    formatter: function () {
      return '<b>' + this.series.name + '</b><br/>' +
        this.point.y + ' ' + this.point.name.toLowerCase();
    }
  }
});
</script>
<script>
    Highcharts.chart('bar-chartumur', {
  data: {
    table: 'datatableumur',
  },
  colors:['rgb(124,181,236)', 'pink'],
  chart: {
    type: 'column'
  },
  title: {
    text: 'ㅤ'
  },
  yAxis: {
    allowDecimals: false,
    title: {
      text: 'Usia'
    }
  },
  tooltip: {
    formatter: function () {
      return '<b>' + this.series.name + '</b><br/>' +
        this.point.y + ' ' + this.point.name.toLowerCase();
    }
  }
});
</script>
<script>
    Highcharts.chart('bar-chartunitnon', {
  data: {
    table: 'datatableunitnon',
  },
  colors:['rgb(124,181,236)', 'pink'],
  chart: {
    type: 'column'
  },
  title: {
    text: 'ㅤ'
  },
  yAxis: {
    allowDecimals: false,
    title: {
      text: 'Usia'
    }
  },
  tooltip: {
    formatter: function () {
      return '<b>' + this.series.name + '</b><br/>' +
        this.point.y + ' ' + this.point.name.toLowerCase();
    }
  }
});
</script>

<script>
    Highcharts.chart('bar-chart7', {
  data: {
    table: 'datatable7',
  },
  colors:['rgb(124,181,236)', 'pink'],
  chart: {
    type: 'column'
  },
  title: {
    text: 'ㅤ'
  },
  yAxis: {
    allowDecimals: false,
    title: {
      text: 'Usia'
    }
  },
  tooltip: {
    formatter: function () {
      return '<b>' + this.series.name + '</b><br/>' +
        this.point.y + ' ' + this.point.name.toLowerCase();
    }
  }
});
</script>

<script>
    Highcharts.chart('bar-chartpendnon', {
  data: {
    table: 'datatablependnon',
  },
  colors:['rgb(124,181,236)', 'pink'],
  chart: {
    type: 'column'
  },
  title: {
    text: 'ㅤ'
  },
  yAxis: {
    allowDecimals: false,
    title: {
      text: 'Jumlah'
    }
  },
  tooltip: {
    formatter: function () {
      return '<b>' + this.series.name + '</b><br/>' +
        this.point.y + ' ' + this.point.name.toLowerCase();
    }
  }
});
</script>

<script>
    Highcharts.chart('bar-chart9', {
  data: {
    table: 'datatable9',
  },
  colors:['rgb(124,181,236)', 'pink'],
  chart: {
    type: 'column'
  },
  title: {
    text: 'ㅤ'
  },
  yAxis: {
    allowDecimals: false,
    title: {
      text: 'Jumlah'
    }
  },
  tooltip: {
    formatter: function () {
      return '<b>' + this.series.name + '</b><br/>' +
        this.point.y + ' ' + this.point.name.toLowerCase();
    }
  }
});
</script>


