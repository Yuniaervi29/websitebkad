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
									<li><a href="index.html">Home</a></li>
									<li><a href="blog-standard-sidebar.html">PPID</a></li>
								</ul>
							</div>
							<!-- Bread Title -->
							<div class="bread-title"><h2>Register Permohonan Keberatan</h2></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- / End Breadcrumb -->
<section class="contact-us section-space">
    <div class="container" style="overflow-x:auto;">
        <div class="row">
            <table id="table"  class="table table-bordered table-borderless table-hover table-responsive-xxl" cellspacing="0" width="100%" style="font-size: 14px">
            <thead class="table-light">
            <tr height="20" style='height:15.00pt;'>
    <td class="xl65" height="80" width="64" rowspan="4" style='height:60.00pt;width:48.00pt;border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;' x:str>No.</td>
    <td class="xl65" width="64" rowspan="4" style='width:48.00pt;border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;' x:str>Tgl</td>
    <td class="xl65" width="64" rowspan="4" style='width:48.00pt;border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;' x:str>Nama</td>
    <td class="xl65" width="64" rowspan="4" style='width:48.00pt;border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;' x:str>Alamat</td>
    <td class="xl66" width="72" rowspan="4" style='width:54.00pt;border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;' x:str>Nomor Kontak</td>
    <td class="xl65" width="73" rowspan="4" style='width:54.75pt;border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;' x:str>Pekerjaan</td>
    <td class="xl66" width="142" rowspan="4" style='width:106.50pt;border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;' x:str>No. Pendaftaran permohonan informasi</td>
    <td class="xl66" width="90" rowspan="4" style='width:67.50pt;border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;' x:str>Informasi Yang Diminta</td>
    <td class="xl66" width="75" rowspan="4" style='width:56.25pt;border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;' x:str>Tujuan Penggunan Informasi</td>
    <td class="xl66" width="175" colspan="7" rowspan="2" style='width:131.25pt;border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;' style=text-align:center;>Alasan Pengajuan Keberatan<br>(Pasal 35 ayat(1) UU KIP)</td>
    <td class="xl66" width="123" rowspan="4" style='width:92.25pt;border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;' x:str>Keputusan atasan PPID</td>
    <td class="xl66" width="153" rowspan="4" style='width:114.75pt;border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;' x:str>Hari dan Tanggal Pemberian tanggapan atas Keberatan</td>
    <td class="xl66" width="114" rowspan="4" style='width:85.50pt;border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;' x:str>Nama dan Posisi Atasan PPID</td>
    <td class="xl66" width="85" rowspan="4" style='width:63.75pt;border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;' x:str>Tanggapan Permohonan Informasi</td>
    <td class="xl66" width="85" rowspan="4" style='width:63.75pt;border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;' x:str>Aksi</td>
   </tr>
   <tr height="20" style='height:15.00pt;'/>
   <tr height="20" style='height:15.00pt;'>
    <td class="xl65" rowspan="2" style='border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;' x:str>a*</td>
    <td class="xl65" rowspan="2" style='border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;' x:str>b*</td>
    <td class="xl65" rowspan="2" style='border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;' x:str>c*</td>
    <td class="xl65" rowspan="2" style='border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;' x:str>d*</td>
    <td class="xl65" rowspan="2" style='border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;' x:str>e*</td>
    <td class="xl65" rowspan="2" style='border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;' x:str>f*</td>
    <td class="xl65" rowspan="2" style='border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;' x:str>g*</td>
   </tr>
   
        </thead>

        <tbody>
       
                    <?php 
                    $no=0;
                    $isi = $this->db->query("SELECT a.noreg AS noreg_informasi,b.`noreg` AS noreg_keberatan,b.tujuan AS tujuanx,a.nama,a.tgl,a.pekerjaan,a.alamat,a.hp,a.rincian,a.`tujuan`,c.keputusan,c.tgl_proses,c.namaatasan,c.posisiatasan,c.tgl_proses,
                                            (CASE WHEN b.`rincian`='Permohonan Informasi Ditolak' THEN 'checked' ELSE '' END) AS icon,
                                            (CASE WHEN b.`rincian`='Infomasi Berkala Tidak disediakan' THEN 'checked' ELSE '' END) AS icon1,
                                            (CASE WHEN b.`rincian`='Informasi Tidak Ditanggapi' THEN 'checked' ELSE '' END) AS icon2,
                                            (CASE WHEN b.`rincian`='Permintaan Informasi Dianggap Tidak Sebagaimana Yang Diminta' THEN 'checked' ELSE '' END) AS icon3,
                                            (CASE WHEN b.`rincian`='Permintaan Informasi Tidak Dipenui' THEN 'checked' ELSE '' END) AS icon4,
                                            (CASE WHEN b.`rincian`='Biaya Yang Dikenakan Tidak Wajar' THEN 'checked' ELSE '' END) AS icon5,
                                            (CASE WHEN b.`rincian`='Informasi Disampaikan Melebihi Jangka Waktu Yang Ditentukan' THEN 'checked' ELSE '' END) AS icon6
                                            FROM inbox_permohonan_informasi a
                                            INNER JOIN inbox_pengajuan_keberatan b ON a.`noreg`=b.`noregpermohonan`
                                            left JOIN proses_permohonan_keberatan c ON b.`noregpermohonan`=c.`noregpermohonan`
                                            WHERE a.nama IS NOT NULL");
                    
                    foreach($isi->result() as $row){
                        $no++;
                        $tgl1 =tgl_indo($row->tgl);
                        
                        if($row->icon == 'checked'){
                            $icon="<i class='fa fa-check'></i>";
                        }
                        else{$icon="-";};
                        
                        if($row->icon1 == 'checked'){
                            $icon1="<i class='fa fa-check'></i>";
                        }
                        else{$icon1="-";};
                        
                        if($row->icon2 == 'checked'){
                            $icon2="<i class='fa fa-check'></i>";
                        }
                        else{$icon2="-";};
                        
                        if($row->icon3 == 'checked'){
                            $icon3="<i class='fa fa-check'></i>";
                        }
                        else{$icon3="-";};
                        
                        if($row->icon4 == 'checked'){
                            $icon4="<i class='fa fa-check'></i>";
                        }
                        else{$icon4="-";};
                        
                        if($row->icon5 == 'checked'){
                            $icon5="<i class='fa fa-check'></i>";
                        }
                        else{$icon5="-";};
                        
                        if($row->icon6 == 'checked'){
                            $icon6="<i class='fa fa-check'></i>";
                        }
                        else{$icon6="-";};
                        echo "
                        <tr >
   <tr >
    <td>$row->noreg_keberatan</td>
    <td >$tgl1</td>
    <td >$row->nama</td>
    <td >$row->alamat</td>
    <td >$row->hp</td>
    <td >$row->pekerjaan</td>
    <td >$row->noreg_informasi</td>
    <td >$row->rincian</td>
    <td >$row->tujuan</td>
    <td style=text-align:center;>$icon</td>
    <td style=text-align:center;>$icon1</td>
    <td style=text-align:center;>$icon2</td>
    <td style=text-align:center;>$icon3</td>
    <td style=text-align:center;>$icon4</td>
    <td style=text-align:center;>$icon5</td>
    <td style=text-align:center;>$icon6</td>
    <td>$row->keputusan</td>
    <td>$row->tgl_proses</td>
    <td >$row->namaatasan - $row->posisiatasan</td>
    <td >$row->tujuanx</td>
    <td><a href='".base_url()."admin/pengajuan_keberatan/cetak?no=$row->noreg_keberatan' target='_blank' class='btn btn-primary'>
<span class='fa fa-print'></span> Print</a></td>
   </tr>
                    <tr >
        </tr>
        <tr  >
            
        </tr>
        ";
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