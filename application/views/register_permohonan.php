<?php
$today = date('d-m-Y');

function  getBulan($bln){
        switch  ($bln){
			case 1:return   "Januari";break;
			case 2:return   "Februari";break;
			case 3:return   "Maret";break;
			case 4:return   "April";break;
			case 5:return   "Mei";break;
			case 6:return   "Juni";break;
			case 7:return   "Juli";break;
			case 8:return   "Agustus";break;
			case 9:return   "September";break;
			case 10:return  "Oktober";break;
			case 11:return  "November";break;
			case 12:return  "Desember";break;
		}
    }
    
function  tanggal($tgl){
        $tanggal  = explode('-',$tgl);
        $bulan  = $tanggal[1];
        $tahun  =  $tanggal[2];
        return  substr($tanggal[0],0,2).' '.getBulan($bulan).' '.$tahun;
    }
    
    
?>

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
							<div class="bread-title"><h2>Register Permohonan Informasi</h2></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- / End Breadcrumb -->
<section class="contact-us section-space">
    <div class="container" style="overflow-x:auto;">
        <div class="row">
            <table id="table" class="table-bordered table-borderless table-hover table-responsive-xxl" cellspacing="0" width="100%" style="font-size: 14px">
            <thead class="table-light" >
            <tr >
                <td width=26  valign=top  rowspan=3 style="text-align: center;" >NO</td>
                <td width=48  valign=top  rowspan=3   >TANGAL</td>
                <td width=56  valign=top  rowspan=3 style="text-align: center;">NAMA PEMOHON</td>
                <td width=48  valign=top  rowspan=3 style="text-align: center;" >ALAMAT</td>
                <td width=61  valign=top  rowspan=3 style="text-align: center;">NOMOR TELPON/HP</td>
                <td width=64  valign=top  rowspan=3 >PEKERJAAN</td>
                <td width=60  valign=top  rowspan=3  style="text-align: center;">INFORMASI YANG DIMINTA</td>
                <td width=73  valign=top  rowspan=3  style="text-align: center;" >TUJUAN PENGGUNAAN INFORMASI</td>
                <td width=73  valign=top  colspan=2 style="text-align: center;"  >STATUS INFORMASI</td>
                <td width=120  valign=top  colspan=2 style="text-align: center;"  >BENTUK INFORMASI YANG DIKUASAI</td>
                <td width=159  valign=top  colspan=2 style="text-align: center;"  >JENIS PERMOHONAN</td>
                <td width=65  valign=top  rowspan=3   >KEPUTUSAN</td>
                <td width=66  valign=top  rowspan=3  style="text-align: center;" >ALASAN PENOLAKAN</td>
                <td width=148  valign=top  colspan=2 style="text-align: center;"  >HARI DAN TANGGAL</td>
                <td width=76  valign=top  colspan=2 style="text-align: center;" >BIAYA DAN CARA PEMBAYARAN</td>
                <td width=76  valign=top  rowspan=3 style="text-align: center;" >AKSI</td>
            </tr>
        <tr  >
            <td width=73  valign=top  colspan=2 style="text-align: center;"  >DIBAWAH PENGUASAAN</td>
            <td width=59  valign=top  rowspan=2 >SOFTCOPY</td>
            <td width=60  valign=top  rowspan=2   >HARDCOPY</td>
            <td width=107  valign=top  rowspan=2  >MELIHAT/MENGETAHUI</td>
            <td width=51  valign=top  rowspan=2   >MEMINTA SALINAN</td>
            <td width=85  valign=top  rowspan=2 style="text-align: center;"  >PEMBERITAHUAN TERTULIS</td>
            <td width=62  valign=top  rowspan=2 style="text-align: center;"  >PEMBERIAN INFORMASI</td>
            <td width=39  valign=top  rowspan=2   >BIAYA</td>
            <td width=37  valign=top  rowspan=2  >CARA</td>
        </tr>
        <tr  >
            <td width=29  valign=top  >YA</td>
            <td width=44  valign=top   >TIDAK</td>
        </tr>
        </thead>

        <tbody>
       
                    <?php 
                    $no=0;
                    $isi = $this->db->query("SELECT *,(CASE WHEN icon ='checked' THEN 'Informasi Dapat Diberikan' ELSE 'Informasi tidak dapat diberikan' END)AS ket

                                             FROM(SELECT a.*,b.status_id,b.`info_publik`,
                                            (CASE WHEN b.info_publik ='kami' THEN 'checked' ELSE '' END)AS icon ,
                                            b.`badan_publik`,
                                            (CASE WHEN b.badan_publik ='badan' THEN 'checked' ELSE '' END) AS icon2,
                                            b.`waktu`,b.`bentuk_fisik`,
                                            (CASE WHEN b.`bentuk_fisik`='softcopy' THEN 'checked' ELSE '' END) AS icon3,
                                            (CASE WHEN b.`bentuk_fisik`='hardcopy' THEN 'checked' ELSE '' END) AS icon4,
                                            (CASE WHEN b.`ditolak`='Informasi yang diminta belum dikuasai' THEN 'checked' ELSE '' END) AS icon5,
                                            (CASE WHEN b.`ditolak`='Informasi yang diminta belum didokumentasikan' THEN 'checked' ELSE '' END) AS icon6,
                                            (CASE WHEN a.get_info='Melihat/membaca/mendengarkan/mencatat' THEN 'checked' END )AS icon7,
                                            (CASE WHEN a.get_info='Mendapatkan salinan informasi (hardcopy/softcopy)' THEN 'checked' END )AS icon8,
                                            b.waktu2,b.lembar,b.harga,b.total_harga,b.kirim,b.lain2,b.total,IFNULL (b.`tgl_proses`,'')AS proses,IFNULL(DATE(b.`tgl_proses` + b.`waktu`),'')AS pemberian,b.`ditolak`
                                            FROM inbox_permohonan_informasi a 
                                            LEFT JOIN proses_permohonan_informasi b
                                            ON a.noreg=b.noreg
                                            WHERE a.nama IS NOT NULL ORDER BY a.noreg) xx");
                    
                    foreach($isi->result() as $row){
                        $no++;
                        
                        
                        if($row->icon == 'checked'){
                            $icon="<i class='fa fa-check'></i>";
                        }
                        else{$icon="-";};
                        
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
                        
                        if($row->icon7 == 'checked'){
                            $icon7="<i class='fa fa-check'></i>";
                        }
                        else{$icon7="-";};
                        
                        if($row->icon8 == 'checked'){
                            $icon8="<i class='fa fa-check'></i>";
                        }
                        else{$icon8="-";};
                        
                       
                        
                        $tgl1 =tgl_indo($row->tgl);
                        $tgl2 =($row->proses!=''?tgl_indo($row->proses):"");
                        $tgl3 =($row->pemberian!='' ? tgl_indo($row->pemberian) : "");
                        
                    
                        
                        echo "<tr>
                        <td hidden></td>
                        <td  rowspan=3>$row->noreg</td>
                        <td  rowspan=3>$tgl1</td>
                        <td  rowspan=3>$row->nama</td>
                        <td  rowspan=3>$row->alamat</td>
                        <td  rowspan=3>$row->hp</td>
                        <td  rowspan=3>$row->pekerjaan</td>
                        <td  rowspan=3>$row->rincian</td>
                        <td  rowspan=3>$row->tujuan</td>
                        <td style=text-align:center; rowspan=3>$icon</td>
                        <td style=text-align:center; rowspan=3>$icon2</td>
                        <td style=text-align:center; rowspan=3>$icon3</td>
                        <td style=text-align:center; rowspan=3>$icon4</td>
                        <td style=text-align:center; rowspan=3>$icon7</td>
                        <td style=text-align:center; rowspan=3>$icon8</td>
                        <td  rowspan=3>$row->ket</td>
                        <td  rowspan=3>$row->ditolak</td>
                        <td  rowspan=3>$tgl2</td>
                        <td  rowspan=3>$tgl3</td>
                        <td  rowspan=3>$row->total</td>
                        <td  rowspan=3></td>
                        <td rowspan=3 style=text-align:center;>
                            <a href='".base_url()."admin/permohonan_informasi/cetak?no=$row->noreg' target='_blank' class='btn btn-primary'><span class='fa fa-print'></span> Print Permohonan</a>
                            <br>
                            <a href='".base_url()."admin/permohonan_informasi/cetakJawaban?no=$row->noreg' target='_blank' class='btn btn-info'><span class='fa fa-print'></span> Print Jawaban</a>
                        </td>
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