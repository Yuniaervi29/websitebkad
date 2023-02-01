<div class="breadcrumbs overlay" style="background-image:url('<?php echo base_url('assets/') ?>img/breadcrumb.jpg')">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="bread-inner">
					<!-- Bread Menu -->
					<div class="bread-menu">
						<ul>
							<li><a href="<?php echo base_url();?>">Home</a></li>
							<li><a href="#">Pengaduan</a></li>
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
<style>

:root{
    --succes-color: #2ecc71;;
    --error-color: #e74c3c;
}

#errmsg
{
color: var(--error-color);
}

#errmsg2
{
color: var(--error-color);
}



.message {
    font: 13px Sans-serif;
    display: none;
    padding: 5px;
    color: #fff;
}

.error {
    color: var(--error-color); 
}

.success {
    color: var(--succes-color);
}
</style>

<?php
$jml= $this->db->query("SELECT COUNT(nama) jml FROM inbox_pelayanan_publik")->row('jml');
$nomor = $this->db->query("SELECT LPAD(MAX(LEFT(noreg,3)+1),3,0) nomor FROM inbox_pelayanan_publik")->row('nomor');
$bulan = date('m');
$thn = date('Y');
function  bulanRom($bln){
        switch  ($bln){
			case 1:return   "I";break;
			case 2:return   "II";break;
			case 3:return   "III";break;
			case 4:return   "IV";break;
			case 5:return   "V";break;
			case 6:return   "VI";break;
			case 7:return   "VII";break;
			case 8:return   "VIII";break;
			case 9:return   "IX";break;
			case 10:return  "X";break;
			case 11:return  "XI";break;
			case 12:return  "XII";break;
		}
    }
?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.min.css"/>
<script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
<style>
    .bs-wizard {
    margin-top: 40px;
}
/*Form Wizard*/
 .bs-wizard {
    border-bottom: solid 1px #e0e0e0;
    padding: 0 0 10px 0;
}
.bs-wizard > .bs-wizard-step {
    padding: 0;
    position: relative;
}
.bs-wizard > .bs-wizard-step + .bs-wizard-step {
}
.bs-wizard > .bs-wizard-step .bs-wizard-stepnum {
    color: #595959;
    font-size: 16px;
    margin-bottom: 5px;
}
.bs-wizard > .bs-wizard-step > .bs-wizard-dot {
    position: absolute;
    width: 30px;
    height: 30px;
    display: block;
    background: #fbe8aa;
    top: 45px;
    left: 50%;
    margin-top: -15px;
    margin-left: -15px;
    border-radius: 50%;
}
.bs-wizard > .bs-wizard-step > .bs-wizard-dot:after {
    content:' ';
    width: 14px;
    height: 14px;
    background: #fbbd19;
    border-radius: 50px;
    position: absolute;
    top: 8px;
    left: 8px;
}
.bs-wizard > .bs-wizard-step > .progress {
    position: relative;
    border-radius: 0px;
    height: 8px;
    box-shadow: none;
    margin: 20px 0;
}
.bs-wizard > .bs-wizard-step > .progress > .progress-bar {
    width:0px;
    box-shadow: none;
    background: #fbe8aa;
}
.bs-wizard > .bs-wizard-step.complete > .progress > .progress-bar {
    width:100%;
}
.bs-wizard > .bs-wizard-step.active > .progress > .progress-bar {
    width:50%;
}
.bs-wizard > .bs-wizard-step:first-child.active > .progress > .progress-bar {
    width:0%;
}
.bs-wizard > .bs-wizard-step:last-child.active > .progress > .progress-bar {
    width: 100%;
}
.bs-wizard > .bs-wizard-step.disabled > .bs-wizard-dot {
    background-color: #f5f5f5;
}
.bs-wizard > .bs-wizard-step.disabled > .bs-wizard-dot:after {
    opacity: 0;
}
.bs-wizard > .bs-wizard-step:first-child > .progress {
    left: 50%;
    width: 50%;
}
.bs-wizard > .bs-wizard-step:last-child > .progress {
    width: 50%;
}
.bs-wizard > .bs-wizard-step.disabled a.bs-wizard-dot {
    /*pointer-events: none;*/
}
/*END Form Wizard*/
</style>




<section class="about-us section-space">
	<div class="container pb-5">
   <!--PELAYANAN PUBLIK-->
    <div class="col-sm-12">
        <div class="row-sm-12">
            <div class="col-sm-12">
                <table width="100%" >
                   
                   <tr height="20" style='height:15.00pt;'>
                    <td class="text-center"><span class="bs-wizard-dot"><i class="fa fa-3x fa-pencil-square-o"></i></span></td>
                    <td class="text-center"><span class="bs-wizard-dot"><i class="fa fa-3x fa-mail-forward"></i></span></td>
                    <td class="text-center"><span class="bs-wizard-dot"><i class="fa fa-3x fa-comments"></i></span></td>
                    <td class="text-center"><span class="bs-wizard-dot"><i class="fa fa-3x fa-commenting-o"></i></span></td>
                    <td class="text-center"><span class="bs-wizard-dot"><i class="fa fa-3x fa-check"></i></span></i></span></td>
                   </tr>
                   <tr height="20" style='height:15.00pt;'>
                    <td><div class="text-center bs-wizard-stepnum"><b>Tulis Laporan</b></div></td>
                    <td><div class="text-center bs-wizard-stepnum"><b>Proses Verifikasi</b></div></td>
                    <td><div class="text-center bs-wizard-stepnum"><b>Proses Tindak Lanjut</b></div></td>
                    <td><div class="text-center bs-wizard-stepnum"><b>Beri Tanggapan</b></div></td>
                    <td><div class="text-center bs-wizard-stepnum"><b>Selesai</b></div></td>
                    
                   </tr>
                   <tr height="20" style='height:15.00pt;'>
                    <td ><div class="bs-wizard-info text-center">
                          Laporkan keluhan atau aspirasi anda dengan jelas dan lengkap
                      </div></td>
                    <td > <div class="bs-wizard-info text-center">
                          Dalam 3 hari, laporan Anda akan diverifikasi
                      </div></td>
                    <td ><div class="bs-wizard-info text-center">
                          Dalam 5 hari, instansi akan menindaklanjuti dan membalas laporan Anda
                      </div></td>
                    <td ><div class="bs-wizard-info text-center">
                          Anda dapat menanggapi kembali balasan yang diberikan  dalam waktu 10 hari
                      </div></td>
                    <td ><div class="bs-wizard-info text-center">
                          Laporan Anda akan terus ditindaklanjuti hingga terselesaikan
                      </div></td>
                    
                   </tr>
                   
                </table>
                
                

                
        </div>
    </div>

    
	</div>
	</div>


</section>

<section class="block block-counter" id="hero" style="color:white; padding: 40px 0 40px; background-color:#FC6761;">
    <div class="container">
        <div class="text-center  h3 mg-0 mg-b-30" style="color:white;">JUMLAH LAPORAN SEKARANG</div>

        <div class="row-flex flex-tablet text-center pt-5">
            <div class="post post-counter" style="margin-left: auto;margin-right: auto;">
                <div class="counter-count" style="font-size:64px;">
                   	<span class="numscroller" data-min='0' data-max='717852' data-delay='2' data-increment='1000'><b class="number"><?=$jml;?></span></b><span> Orang</span></div>
            </div>
        </div>
    </div>
</section>

<section class="contact-us section-space">
    <div class="container">
        <div class="row" style="padding-left:300px">
            <div class="col-lg-8 col-md-8 col-8 " >
                <!-- Contact Form -->
                <div class="contact-form-area m-top-30" >
                    <h4>FORM PENGADUAN PELAYANAN PUBLIK</h4>
                    <form class="form" id="form" method="post" action="<?=base_url('admin/pelayanan_publik/add');?>" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="text" name="noreg" id="noreg" value="<?=$nomor.'/Pelayanan-Publik/'.bulanRom($bulan).'/'.$thn;?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6 col-12">
                                <div class="form-group">
                                
                                    <input type="text" name="nama" id="nama" placeholder="Nama Lengkap" minlength="4" required>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6 col-12">
                                <div class="form-group">
                                    
                                    <input type="text" name="pekerjaan" id="pekerjaan" placeholder="Pekerjaan" minlength="4" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group textarea">
                                    <div class="icon"><i class="fa fa-pencil"></i></div>
                                    <textarea type="textarea" name="alamat" id="alamat" rows="3" placeholder="Alamat.." minlength="4" required></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6 col-12">
                                <div class="form-group">
                                    <input type="text" name="hp" id="hp" placeholder="Nomor HP" maxlength="13" required>&nbsp;<span id="errmsg2"></span>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6 col-12">
                                <div class="form-group">
                                    <input type="text" name="email" id="email" placeholder="Email" maxlength="100" required>&nbsp;<span id="errmsg2"></span>
                                </div>
                            </div>
                            
                            <div class="col-lg-12 col-md-6 col-12">
                                <div class="form-group">
                                    <input type="text" name="namaterlapor" id="namaterlapor" placeholder="Nama Terlapor" maxlength="100" required>&nbsp;<span id="errmsg2"></span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group textarea">
                                    <div class="icon"><i class="fa fa-pencil"></i></div>
                                    <textarea type="textarea" name="rincian" id="rincian" rows="3" placeholder="Isi Pengaduan.." minlength="4" required></textarea>
                                </div>
                            </div>
                            
                    
                            <div class="col-12">
                                <div class="form-group button">
                                    <button type="submit" class="bizwheel-btn theme-2">KIRIM</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!--/ End contact Form -->
            </div>
           
        </div>
    </div>
</section>

    






