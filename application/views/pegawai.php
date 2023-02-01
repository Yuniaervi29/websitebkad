<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.min.css"/>
<script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
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
					<div class="#"><h2>Daftar Pegawai BKAD</h2></div>
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

<section class="contact-us section-space">
    <div class="container" >
        <div class="row">
            <table id="table"  class="table table-bordered table-borderless table-hover table-responsive-xxl" cellspacing="0" width="100%" style="font-size: 14px">
            <thead class="table-light">
            <tr >
                <td width=10  valign=top   style="text-align: center;" >NO</td>
                <td width=60  valign=top   style="text-align: center;">NIP</td>
                <td width=48  valign=top   style="text-align: center;" >NAMA</td>
                <td width=64  valign=top   style="text-align: center;">JABATAN</td>
                <td width=50  valign=top    style="text-align: center;">PANGKAT</td>
                <td width=50  valign=top  style="text-align: center;" >ESELON</td>
                <!--<td width=73  valign=top  colspan=2 style="text-align: center;"  >STATUS INFORMASI</td>-->
                <!--<td width=120  valign=top  colspan=2 style="text-align: center;"  >BENTUK INFORMASI YANG DIKUASAI</td>-->
                <!--<td width=159  valign=top  colspan=2 style="text-align: center;"  >JENIS PERMOHONAN</td>-->
                <!--<td width=65  valign=top  rowspan=3   >KEPUTUSAN</td>-->
                <!--<td width=66  valign=top  rowspan=3  style="text-align: center;" >ALASAN PENOLAKAN</td>-->
                <!--<td width=148  valign=top  colspan=2 style="text-align: center;"  >HARI DAN TANGGAL</td>-->
                <!--<td width=76  valign=top  colspan=2 style="text-align: center;" >BIAYA DAN CARA PEMBAYARAN</td>-->
                <!--<td width=76  valign=top  rowspan=3 style="text-align: center;" >AKSI</td>-->
            </tr>
        <tr  >
            <!--<td width=73  valign=top  colspan=2 style="text-align: center;"  >DIBAWAH PENGUASAAN</td>-->
            <!--<td width=59  valign=top  rowspan=2 >SOFTCOPY</td>-->
            <!--<td width=60  valign=top  rowspan=2   >HARDCOPY</td>-->
            <!--<td width=107  valign=top  rowspan=2  >MELIHAT/MENGETAHUI</td>-->
            <!--<td width=51  valign=top  rowspan=2   >MEMINTA SALINAN</td>-->
            <!--<td width=85  valign=top  rowspan=2 style="text-align: center;"  >PEMBERITAHUAN TERTULIS</td>-->
            <!--<td width=62  valign=top  rowspan=2 style="text-align: center;"  >PEMBERIAN INFORMASI</td>-->
            <!--<td width=39  valign=top  rowspan=2   >BIAYA</td>-->
            <!--<td width=37  valign=top  rowspan=2  >CARA</td>-->
        </tr>
        <tr  >
            <!--<td width=29  valign=top  >YA</td>-->
            <!--<td width=44  valign=top   >TIDAK</td>-->
        </tr>
        </thead>

        <tbody>
       
                    <?php 
                    $no=0;
                    $isi = $this->db->query("SELECT * FROM ms_pegawai_all WHERE bulan='6' AND tahun='2022'");
                    
                    foreach($isi->result() as $row){
                        $no++;
                        echo "<tr>
                        <td hidden></td>
                        <td >$no</td>
                        
                        <td  >$row->nip</td>
                        <td  >$row->nama</td>
                        
                        <td  >$row->jabatan</td>
                        <td  >$row->pangkat</td>
                        <td  >$row->eselon</td>
                        
                        
                    </tr>
                    <tr >
        </tr>
        <tr  >
            
        </tr>";
                    }
                    ?>
                </tbody>
</table>
        
            
            
        </div>
    </div>
</section>

<script>
$(document).ready(function () {
  
var table = $('#table').DataTable({ 
        select: false,
        "columnDefs": [{
            className: "Name", 
            "targets":[0],
            "visible": false,
            "searchable":false
        }]
    });//End of create main table


});
</script>


