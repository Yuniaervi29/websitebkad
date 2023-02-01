<?php
$noreg = $_REQUEST['no'];
$today = date('d-m-Y');

$data = $this->db->query("SELECT a.*,b.`noreg`,b.`pekerjaan`,b.`namakuasa`,b.`alamatkuasa`,b.`hpkuasa`,b.`rincian` FROM proses_permohonan_keberatan a
LEFT JOIN inbox_pengajuan_keberatan b ON a.`noregpermohonan`=b.`noregpermohonan` WHERE noreg ='$noreg'")->row_array();

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

<!--<table width="100%" style="border-bottom: groove">-->
<!--    <tr>-->
<!--        <td style="text-align: center;font-size: 16px"><b>FORMAT FORMULIR KEBERATAN</b></td>-->
<!--    </tr>-->
<!--    <tr>-->
<!--        <td style="text-align: center;font-size: 16px"><b>(RANGKAP DUA)</b></td>-->
<!--    </tr>-->
<!--</table>-->

<table width="100%">
    <tr>
        <td><img src="<?=base_url()?>assets/img/logo sulsel.bmp" alt='logo' width='120' /></td>
		<td id="head" width='100%'>
			<b style="font-size:14px;text-align: center;">PEJABAT PENGELOLA INFORMASI DAN DOKUMENTASI</b><br>
			<b style="font-size:14px">BADAN KEUANGAN DAN ASET DAERAH</b><br>
			Jalan Jenderal Urip Sumohardjo No.269 Telp. 453050 Makassar 9023
		</td>	
		
    </tr>
</table>
<hr>
<table width="100%" >
     <tr><td></td></tr>
    <tr>
        
		<td width='100%' style="font-size:14px;text-align:center;">
			<b style="font-size:14px">PERNYATAAN KEBERATAN ATAS PERMOHONAN INFORMASI</b>
		</td>	
    </tr>
    <tr><td><br></td></tr>
</table>

<table>
     <tr>
        <td style="font-size: 12px"><b>A. INFORMASI PENGAJUAN KEBERATAN<b></td>
    </tr>
</table>
<table width="100%" >
    <!-- <tr>
        <td><img src="uploads/permohonan-informasi/<?=$data['upload_nik'];?>" width="220px" height="140px"></td>
    </tr> -->
   
    <tr>
        <td>Nomor Registrasi Keberatan</td>
        <td style="text-align: center;">: </td>
        <td><?=$data['noreg'];?></td>
        
    </tr>
    <tr>
        <td>Nomor Pendaftaran Permohonan Informasi</td>
        <td style="text-align: center;">: </td>
        <td><?=$data['noregpermohonan'];?></td>
    </tr>
    <tr>
        <td><b>Identitas Pemohon</b></td>
    </tr>
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
        <td>Pekerjaan</td>
        <td style="text-align: center">:</td>
        <td><?=$data['pekerjaan'];?></td>
    </tr>
    <tr>
        <td>Nomor Telepon (HP)/Email</td>
        <td style="text-align: center">:</td>
        <td><?=$data['hp'];?> / <?=$data['email'];?></td>
    </tr>
   
    <tr>
        <td><b>Identitas Kuasa Pemohon**</b></td>
    </tr>
    <tr>
        <td>Nama</td>
        <td style="text-align: center">:</td>
        <td><?=$data['namakuasa'];?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td style="text-align: center">:</td>
        <td><?=$data['alamatkuasa'];?></td>
    </tr>
    <tr>
        <td>Nomor Telepon(HP)</td>
        <td style="text-align: center">:</td>
        <td><?=$data['hpkuasa'];?></td>
    </tr>
    
   
</table>
<table width="100%">
     <tr>
        <td style="font-size: 12px"><b>B. ALASAN PENGAJUAN KEBERATAN***<b></td>
    </tr>
     <tr>
        <!--<td>Rincian Informasi yang Dibutuhkan</td>-->
        <!--<td style="text-align: center">:</td>-->
        <td><?=$data['rincian'];?></td>
    </tr>
</table>
<table width="100%">
     <tr>
        <td style="font-size: 12px"><b>C. KASUS POSISI(tambahan kertas bila perlu)<b></td>
    </tr>
     <tr>
        <td><br></td>
    </tr>
     <tr>
        <td><hr></td>
    </tr>
    
</table>
<table width="100%">
     <tr>
        <td style="font-size: 12px"><b>D. HARI/TANGGAL TANGGAPAN ATAS KEBERATAN AKAN DIBERIKAN:<b></td>
    </tr>
     <tr>
        <td><br></td>
    </tr>
     <tr>
        <td><hr></td>
    </tr>
    <tr>
        <td>Demikian keberatan ini saya sampaikan, atas perhatian dan tanggapannya, saya ucapkan terimakasih.<td>
    </tr>
    <tr><td><br></td></tr>
    <tr>
        <td style="text-align: center">Makassar,<?=tanggal($today);?></td>
    </tr>
   
</table>

<table width="100%" style="padding-top: 10px">
    <tr><td>Mengetahui,******</td></tr>
    <tr>
        
        <td class"text-center"><b>Petugas Informasi<br>(Penerima Keberatan)</b></td>
        <td>&emsp;&emsp;&emsp;</td>
        <td><b>Pengajuan Keberatan</b></td>
    </tr>
    <tr>
        <td><br><br><br><br></td>
    </tr>
    <tr>
        <td>( <?=$data['namaatasan'];?> )</td>
        <td>&emsp;&emsp;&emsp;</td>
        <td>( <?=$data['nama'];?> )</td>
    </tr>
    <tr>
        <!--<td>Nama dan Tanda Tangan</td>-->
        <td>&emsp;&emsp;&emsp;</td>
        <!--<td>Nama dan Tanda Tangan</td>-->
    </tr>
</table>
<table width="100%" style="font-size: 10px;">
    <tr>
        <td>Keterangan:</td>
    </tr>
    <tr>
        <td>* &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nomer register pengajuan keberatan diisi berdasarkan buku registrasi pengajuan keberatan</td>
    </tr>
    <tr>
        <td>** &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Identitas Kuasa pemohon diisi jika ada kuasa pemohonnya dan melamprkan Surat Kuasa</td>
    </tr>
    <tr>
        <td>*** &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sesuai dengan Pasal 35 UU KIP, dipilih oleh pengaju keberatan sesuai dengan alasan keberatan yang diajukan</td>
    </tr>
    <tr>
        <td>**** &nbsp;&nbsp;&nbsp;&nbsp;Diisi sesuai dengan ketentuan jangan waktu dalam UU KIP</td>
    </tr>
    <tr>
        <td>***** &nbsp;&nbsp;Tanggal diisi dengan tanggal diterimanya pengajuan keberatan yaitu sejak keberatan dinyatakan lengkap sesuai dengan buku register pengajuan keberatan</td>
    </tr>
    <tr>
        <td>****** Dalam hal keberatan diajukan secara langsung maka formulir keratan juga ditandatangani oleh petugas yang menerima pengajuan keberatan.</td>
    </tr>
</table>

<footer>.::Printed By bkad.sulselprov.go.id::.</footer>


