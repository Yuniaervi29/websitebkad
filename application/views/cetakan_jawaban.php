<?php
$noreg = $_GET['no'];
$today = date('d-m-Y');

// $data = $this->db->query("SELECT * FROM inbox_permohonan_informasi WHERE noreg ='$noreg'")->row_array();
$data = $this->db->query("SELECT a.*,b.status_id,b.`info_publik`,
(CASE WHEN b.info_publik ='kami' THEN 'checked' ELSE '' END)AS icon ,b.`badan_publik`,
(CASE WHEN b.badan_publik ='badan' THEN 'checked' ELSE '' END) AS icon2,
b.`waktu`,b.`bentuk_fisik`,
(CASE WHEN b.`bentuk_fisik`='softcopy' THEN 'checked' ELSE '' END) AS icon3,
(CASE WHEN b.`bentuk_fisik`='hardcopy' THEN 'checked' ELSE '' END) AS icon4,
b.waktu2,b.lembar,b.harga,b.total_harga,b.kirim,b.lain2,b.total,b.tgl_proses
FROM inbox_permohonan_informasi a 
LEFT JOIN proses_permohonan_informasi b
ON a.noreg=b.noreg
WHERE a.noreg ='$noreg';")->row_array();


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
<style>
    footer {
        position: fixed; 
        bottom: -60px; 
        left: 0px; 
        right: 0px;
        height: 50px; 
        font-size: 10px;
        text-align: right;
    
    }
      #head{
  text-align: center;
}
</style>
<table width="100%" style="border-bottom: groove">
    <tr>
        <td><img src="<?=base_url()?>assets/img/logo sulsel.bmp" alt='logo' width='120' /></td>
		<td id="head" width='100%' style="font-size:14px">
			<b style="font-size:16px">PEJABAT PENGELOLA INFORMASI DAN DOKUMENTASI</b><br>
			<b style="font-size:16px">BADAN KEUANGAN DAN ASET DAERAH</b><br>
			Jalan Jenderal Urip Sumohardjo No.269 Telp. 453050 Makassar 9023
		</td>	
    </tr>
</table>
<table width="100%">
    <tr>
        <td style="text-align: center;font-size: 14px"><b>PEMBERITAHUAN TERTULIS</b></td>
    </tr>
       <tr>
        <td><br></td>
    </tr>
    <tr>
        <td>Berdasarkan permohonan informasi pada <?php echo tgl_indo($data['tgl']) ?> dengan nomer pendaftaran<br> <b><?=$data['noreg'];?></b> Kami menyampaikan kepada saudara/i</td>
        
    </tr>
</table>

<table width="100%">
    
    <tr>
        <td>Nama</td>
        <td style="text-align: center">:</td>
        <td><?=$data['nama'];?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td style="text-align: center">:</td>
        <td><?=$data['alamat'];?></td>
    </tr>
    <tr>
        <td>Nomor Telepon (HP)/Email</td>
        <td style="text-align: center">:</td>
        <td><?=$data['hp'];?> / <?=$data['email'];?></td>
    </tr>
    <tr>
        <td><br></td>
    </tr>
    <tr>
        <td>Pemberitahuan sebagai berikut:</td>
    <!--</tr>-->
    <!--   <tr><td><br></td></tr>-->
    <!--<tr>-->
        
    <!--    <td style="text-align: center">Makassar,<?=tanggal($today);?>*****</td>-->
        
    <!--</tr>-->
    <!--<tr>-->
    <!--    <td></td>-->
    <!--    <td style="text-align: center">Makassar,</td>-->
    <!--    <td><?=tanggal($today);?></td>-->
    <!--</tr>-->
</table>
<table>
     <tr>
        <td style="font-size: 14px"><b>A. Informasi Dapat Diberikan<b></td>
    </tr>
</table>
<table width="100%" border="1" style="border-collapse:collapse">
    <tr height="40" style='height:30.00pt;'>
    <td class="xl65" height="40" width="64" style='text-align: center;height:30.00pt;width:48.00pt;' x:str>No.</td>
    <td class="xl66" width="174" style='width:130.50pt;text-align: center' x:str>Hal-hal terkait Infromasi Publik</td>
    <td class="xl65" width="272" colspan="2" style='text-align: center;width:204.00pt;border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;' x:str>Keterangan</td>
   </tr>
   <tr height="20" style='height:15.00pt;'>
    <td class="xl67" height="40" rowspan="2" style='text-align: center;height:30.00pt;border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;' x:num>1</td>
    <td class="xl68" rowspan="2" style='border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;' x:str>Penguasaan Informasi Publik**</td>
    <td class="xl69" colspan="2" rowspan="2" style='border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;'>
        <div style='top:0'>
            <?php
                if($data['icon']=='checked'){
                    echo '<img src="http://cdn.onlinewebfonts.com/svg/img_521118.png" style="width: 13px;margin: 0px 1px auto 4px;"> Kami<br>';
                }else{
                    echo '<img src="http://cdn.onlinewebfonts.com/svg/img_291170.png" style="width: 13px;margin: 0px 1px auto 4px;"> Kami<br>'; 
                }
            ?>
       </div>
       <div style='top:0'>
           <?php
                if($data['icon2']=='checked'){
                    echo '<img src="http://cdn.onlinewebfonts.com/svg/img_521118.png" style="width: 13px;margin: 0px 1px auto 4px;"> Badan Publik lain, yaitu<br>';
                }else{
                    echo '<img src="http://cdn.onlinewebfonts.com/svg/img_291170.png" style="width: 13px;margin: 0px 1px auto 4px;"> Badan Publik lain, yaitu<br>'; 
                }
            ?>
       </div>
     </td>
   </tr>
   <tr height="20" style='height:15.00pt;'/>
   <tr height="20" style='height:15.00pt;'>
    <td class="xl67" height="40" rowspan="2" style='text-align: center;height:30.00pt;border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;' x:num>2</td>
    <td class="xl67" rowspan="2" style='border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;'>Bentuk fisik yang tersedia**</td>
    <td class="xl69" colspan="2" rowspan="2" style='border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;'>
        <div style='top:0'>
            <?php
                if($data['icon3']=='checked'){
                    echo '<img src="http://cdn.onlinewebfonts.com/svg/img_521118.png" style="width: 13px;margin: 0px 1px auto 4px;"> <i>Softcopy</i>(termasuk rekaman)<br>';
                }else{
                    echo '<img src="http://cdn.onlinewebfonts.com/svg/img_291170.png" style="width: 13px;margin: 0px 1px auto 4px;"> <i>Softcopy</i>(termasuk rekaman)<br>'; 
                }
            ?>
       </div>
       <div style='top:0'>
           <?php
                if($data['icon4']=='checked'){
                    echo '<img src="http://cdn.onlinewebfonts.com/svg/img_521118.png" style="width: 13px;margin: 0px 1px auto 4px;"> <i>Hardcopy</i> salinan tertulis<br>';
                }else{
                    echo '<img src="http://cdn.onlinewebfonts.com/svg/img_291170.png" style="width: 13px;margin: 0px 1px auto 4px;"> <i>Hardcopy</i> salinan tertulis<br>'; 
                }
            ?>
       </div>
        <!--<input type="checkbox"> <i>Softcopy</i>(termasuk rekaman)<br><input type="checkbox"> <i>Hardcopy</i> salinan tertulis-->
    </td>
   </tr>
   <tr height="20" style='height:15.00pt;'/>
   <tr height="20" style='height:15.00pt;'>
    <td class="xl67" height="40" rowspan="2" style='text-align: center;height:30.00pt;border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;' x:num>3</td>
    <td class="xl73" rowspan="2" style='border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;'>Biaya yang dibutukan***</td>
    <td class="xl74">
       Penyalinan
    </td>
    <td class="xl74">Rp<?=$data['harga'];?>x<?=$data['lembar'];?>(jmlh lembaran)=<?=$data['total_harga'];?></td>
   </tr>
   <tr height="20" style='height:15.00pt;'>
    <td class="xl74">Pengiriman</td>
    <td class="xl74">Rp <?=$data['kirim'];?></td>
   </tr>
   <tr height="20" style='height:15.00pt;'>
    <td class="xl74" height="20" style='height:15.00pt;'></td>
    <td class="xl74"></td>
    <td class="xl74">Lain-lain</td>
    <td class="xl74">Rp <?=$data['lain2'];?></td>
   </tr>
   <tr height="20" style='height:15.00pt;'>
    <td class="xl67" height="20" style='height:15.00pt;'></td>
    <td class="xl67"></td>
    <td class="xl67">Jumlah</td>
    <td class="xl74">Rp <?=$data['total'];?></td>
   </tr>
   <tr height="20" style='height:15.00pt;'>
    <td class="xl67" height="20" style='text-align: center;height:15.00pt;' x:num>4</td>
    <td class="xl76">Waktu penyediaan</td>
    <td class="xl67" colspan="2" style='border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;'><?=$data['waktu'];?> hari</td>
   </tr>
   <tr height="20" style='height:15.00pt;'>
    <td class="xl77" height="40" rowspan="2" style='text-align: center;height:30.00pt;border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;' x:num>5</td>
    <td class="xl69" colspan="3" rowspan="2" style='border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;'>Penjelasan penghitaman/pengaburan Informasi yang dimohon****(tambahan kertas bila perlu)
    <br>.........................................................................................................................................................
    <br>.........................................................................................................................................................
    </td>
   </tr>
   <tr height="20" style='height:15.00pt;'/>
   
   
   <!-- <tr height="20" style='height:15.00pt;'>-->
   <!-- <td style="text-align: center">No.</td>-->
   <!-- <td style="text-align: center"><b>Hal-hal terkait Informasi Publik</b></td>-->
   <!-- <td  colspan="2"  style="text-align: center"><b>Keterangan</b></td>-->
   <!--</tr>-->
   <!--<tr height="20" style='height:15.00pt;'>-->
   <!-- <td class="xl66" height="20" style='height:15.00pt;' x:num style="text-align: center" rowspan="2">1</td>-->
   <!-- <td class="xl65">Penguasaan Informasi Publik**</td>-->
   <!-- <td class="xl66" colspan="2" style='border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;'><?=$data['info_publik'];?></td>-->
   <!--</tr>-->
   <!--<tr height="20" style='height:15.00pt;'>-->
   <!-- <td class="xl66" height="20" style='height:15.00pt;' x:num style="text-align: center">2</td>-->
   <!-- <td class="xl65">Bentuk fisik yang tersedia**</td>-->
   <!-- <td class="xl66" colspan="2" style='border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;'><?=$data['bentuk_fisik'];?></td>-->
   <!--</tr>-->
   <!--<tr height="20" style='height:15.00pt;'>-->
   <!-- <td class="xl67" height="40" rowspan="2" style='height:30.00pt;border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;' x:num style="text-align: center">3</td>-->
   <!-- <td class="xl68" rowspan="2">Biaya yang dibutuhkan***</td>-->
   <!-- <td class="xl68"> <input type="checkbox">Penyalinan</td>-->
   <!-- <td class="xl68">Rp. ...</td>-->
   <!--</tr>-->
   <!--<tr height="20" style='height:15.00pt;'>-->
   <!-- <td class="xl65"> <input type="checkbox">Pengiriman</td>-->
   <!-- <td class="xl65">Rp. ...</td>-->
   <!--</tr>-->
   <!--<tr height="20" style='height:15.00pt;'>-->
   <!-- <td class="xl66" height="20" style='height:15.00pt;'></td>-->
   <!-- <td class="xl65"></td>-->
   <!-- <td class="xl65">Lain-lain</td>-->
   <!-- <td class="xl65">Rp. ...</td>-->
   <!--</tr>-->
   <!--<tr height="20" style='height:15.00pt;'>-->
   <!-- <td class="xl66" height="20" style='height:15.00pt;'></td>-->
   <!-- <td class="xl65"></td>-->
   <!-- <td class="xl65">Jumlah</td>-->
   <!-- <td class="xl65">Rp. ...</td>-->
   <!--</tr>-->
   <!--<tr height="20" style='height:15.00pt;'>-->
   <!-- <td class="xl66" height="20" style='height:15.00pt;' x:num style="text-align: center">4</td>-->
   <!-- <td class="xl65">Waktu Penyediaan</td>-->
   <!-- <td class="xl66" colspan="2" style='border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;'><?=$data['waktu'];?> hari</td>-->
   <!--</tr>-->
   <!--<tr height="20" style='height:15.00pt;'>-->
   <!-- <td class="xl66" height="20" style='height:15.00pt;' x:num rowspan="4" style="text-align: center">5</td>-->
   <!-- <td class="xl65" colspan="3" rowspan="4">Penjelasan penghitaman/pengaburan Informasi yang dimohon****(tambahan kertas bila perlu)-->
   <!-- <br>.........................................................................................................................................................-->
   <!-- <br>.........................................................................................................................................................-->
   <!-- </td>-->
    <!--<td class="xl65"></td>-->
    <!--<td class="xl65"></td>-->
   </tr>
</table>
<table>
     <tr>
        <td style="font-size: 14px"><b>B. Informasi tidak dapat diberikan karena:**<b></td>
        
    </tr>
</table>
<table width="100%">
     <tr>
       <td><input type="checkbox">&nbsp;Informasi yang diminta belum dikuasai</td>
        
    </tr>
     <tr>
        <td> <input type="checkbox">&nbsp;Informasi yang diminta belum didokumentasikan</td>
        
    </tr>
   
   
</table>
<table width="100%">
  
     <tr>
        <td>Penyediaan informasi yang belum didokumentasikan dilakukan dalam jangka waktu <?=$data['waktu2'];?>hari*****</td>
    </tr>
   
   
</table>
<br>
<table width="100%">
  
    <tr >
     
        <td></td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td style="text-align: center">Makassar, <?=tgl_indo($data['tgl_proses']);?></td>
    </tr>
   
</table>

<table width="100%" style="padding-top: 10px">
    <tr>
        <td></td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td style="text-align: center"><b>Pejabat Pengelola informasi dan Dokumentasi<br>(PPID)</b></td>
    </tr>
    <tr>
        <td><br><br><br><br></td>
    </tr>
    <tr>
        <td></td>
        <td>&emsp;&emsp;&emsp;</td>
        <td style="text-align: center">(........................................)</td>
    </tr>
    <tr>
        <td></td>
        <td>&emsp;&emsp;&emsp;</td>
        <td style="text-align: center">Nama dan Tanda Tangan</td>
    </tr>
</table>
<br><br>
<table width="100%" style="font-size: 10px;text-muted;" style="padding-top: 10px">
    <tr>
        <td>Keterangan:</td>
    </tr>
    <tr>
        <td>* Diisi sesuai dengan nomer pendaftaran pada formulir permohonan.</td>
    </tr>
    <tr>
        <td>** Pilih salah satu dengan memberi tanda(v)</td>
    </tr>
    <tr>
        <td>*** Biaya penyalinan (fotocopy atau disket)dan/atau biaya pengiriman(khusus kurir dan pos)sesuai dengan standar biaya yang tela ditetapkan.</td>
    </tr>   
    <tr>
        <td>**** Jika ada penghitaman informasidalam suatu dokumen,maka diberikan alasan penghitamannya.</td>
    </tr>
    <tr>
        <td>***** Diisi dengan keterangan waktu yang jelas untuk menyediakan informasi yang diminta.</td>
    </tr>
</table>
<br><br>

<footer>.::Printed By bkad.sulselprov.go.id::.</footer>


