<?php
$noreg = $_GET['no'];
$today = date('d-m-Y');

$data = $this->db->query("SELECT noreg,tgl,nama,pekerjaan,alamat,hp,nik,upload_nik,rincian,tujuan,upload_lampiran,email,get_info,
(CASE WHEN get_info='Melihat/membaca/mendengarkan/mencatat' THEN 'checked' END )AS icon,
(CASE WHEN get_info='Mendapatkan salinan informasi (hardcopy/softcopy)' THEN 'checked' END )AS icon2,
get_salinan_info,
(CASE WHEN get_salinan_info='Mengambil Langsung' THEN 'checked' END )AS icon3,
(CASE WHEN get_salinan_info='Email' THEN 'checked' END )AS icon4,
(CASE WHEN get_salinan_info='Kurir/POS' THEN 'checked' END )AS icon5
FROM inbox_permohonan_informasi 
WHERE noreg ='$noreg';")->row_array();

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
<br>
<table width="100%">
    <tr>
        <td style="text-align: center;font-size: 14px"><b>FORMULIR PERMOHONAN INFORMASI PUBLIK</b></td>
    </tr>
    <br>
    <tr>
        <td style="text-align: center">Nomor Pendaftaran*: <?=$noreg;?></td>
        
    </tr>
</table>

<table width="100%">
   
    
    <tr>
        <td>Nama Lengkap**</td>
        <td style="text-align: center">:</td>
        <td><?=$data['nama'];?></td>
    </tr>
    <tr>
        <td>Pekerjaan</td>
        <td style="text-align: center">:</td>
        <td><?=$data['pekerjaan'];?></td>
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
        <td style="vertical-align: top">Rincian Informasi yang Dibutuhkan</td>
        <td style="text-align: center;vertical-align: top">:</td>
        <td><?=$data['rincian'];?></td>
    </tr>
    <tr>
        <td>Tujuan Penggunaan Informasi</td>
        <td style="text-align: center">:</td>
        <td><?=$data['tujuan'];?></td>
    </tr>
    <tr>
        <td style="vertical-align: top">Cara Memperoleh Informasi***</td>
        <td style="text-align: center;vertical-align: top">:</td>
        <td style="vertical-align: middle">
            <div>
            <?php
            if($data['icon'] == 'checked'){
                echo '<img src="http://cdn.onlinewebfonts.com/svg/img_521118.png" style="width: 13px;margin: 0px 1px auto 4px;"> 1. Melihat/membaca/mendengarkan/mencatat<br>';
            }else{
                echo' <img src="http://cdn.onlinewebfonts.com/svg/img_291170.png" style="width: 13px;margin: 0px 1px auto 4px;"> 1. Melihat/membaca/mendengarkan/mencatat<br>';
                 
            }
            ?>
            </div>
            
            <div>
                <?php
            if($data['icon2'] == 'checked'){
                echo '<img src="http://cdn.onlinewebfonts.com/svg/img_521118.png" style="width: 13px;margin: 0px 1px auto 4px;"> 2. Mendapatkan salinan informasi (hardcopy/softcopy)';
            }else{
                echo '<img src="http://cdn.onlinewebfonts.com/svg/img_291170.png" style="width: 13px;margin: 0px 1px auto 4px;"> 2. Mendapatkan salinan informasi (hardcopy/softcopy)<br>';
            }
            ?>
            </div>
            
            
    </tr>
    <tr>
        <td>Cara Mendapatkan Salinan Informasi***</td>
        <td style="text-align: center;">:</td>
        <td>
             <div>
            <?php
            if($data['icon3'] == 'checked'){
                echo '<img src="http://cdn.onlinewebfonts.com/svg/img_521118.png" style="width: 13px;margin: 0px 1px auto 4px;"> 1. Mengambil Langsung';
            }else{
                echo '<img src="http://cdn.onlinewebfonts.com/svg/img_291170.png" style="width: 13px;margin: 0px 1px auto 4px;"> 1. Mengambil Langsung<br>';
                 
            }
            ?>
            </div>
            
            <div>
                <?php
            if($data['icon4'] == 'checked'){
                echo '<img src="http://cdn.onlinewebfonts.com/svg/img_521118.png" style="width: 13px;margin: 0px 1px auto 4px;"> 2. Email';
            }else{
                echo' <img src="http://cdn.onlinewebfonts.com/svg/img_291170.png" style="width: 13px;margin: 0px 1px auto 4px;"> 2. Email<br>';
            }
            ?>
            </div>
            <div>
                <?php
            if($data['icon5'] == 'checked'){
                echo '<img src="http://cdn.onlinewebfonts.com/svg/img_521118.png" style="width: 13px;margin: 0px 1px auto 4px;"> 3. Kurir/POS';
            }else{
                echo' <img src="http://cdn.onlinewebfonts.com/svg/img_291170.png" style="width: 13px;margin: 0px 1px auto 4px;"> 3. Kurir/POS<br>';
            }
            ?>
            </div>
            
           
    </tr>
    <br>
    <tr>
        <td></td>
        <td style="text-align: center">Makassar,</td>
        <td><?=tgl_indo($data['tgl']);?></td>
    </tr>
</table>
<br>
<table width="100%" style="padding-top: 10px">
    <tr>
        <td><b>Petugas PPID Pembantu<br>(Penerima Permohonan)</b></td>
        <td>&emsp;&emsp;&emsp;</td>
        <td><b>Pemohon Informasi</b></td>
    </tr>
    <tr>
        <td><br><br><br><br></td>
    </tr>
    <tr>
        <td>(......................................)</td>
        <td>&emsp;&emsp;&emsp;</td>
        <td>( <?=$data['nama'];?> )</td>
    </tr>
    <tr>
        <td>Nama dan Tanda Tangan</td>
        <td>&emsp;&emsp;&emsp;</td>
        <td>Nama dan Tanda Tangan</td>
    </tr>
</table>
<br><br><br><br><br><br>
<table width="100%" style="font-size: 10px;text-muted;" style="padding-top: 10px">
    <tr>
        <td>Keterangan:</td>
    </tr>
    <tr>
        <td>* Diisi oleh petugas berdasarkan nomor registrasi permohonan Informasi Publik</td>
    </tr>
    <tr>
        <td>** Wajib melampirkan FC KTP/SIM/Tanda Pengenal</td>
    </tr>
    <tr>
        <td>*** Pilih salah satu dengan memberi tanda (x)</td>
    </tr>
    <tr>
        <td>**** Coret yang tidak perlu</td>
    </tr>
</table>
<br><br><br><br>
<table width="100%" style="font-size: 13px;">
    <tr>
        <td style="text-align: center;font-size: 16px"><b>Hak-Hak Pemohon Informasi<br>Berdasarkan Undang-undang Keterbukaan Informasi Publik No. 14/2008</b></td>
    </tr>
    <br><br>
    <tr>
        <td style="text-align: justify">I.&nbsp;Pemohon Informasi berhak untuk meminta seluruh informasi yang berada di Badan Publik kecuali (a) informasi yang apabila dibuka dan diberikan kepada pemohon informasi dapat: Menghambat proses penegakan hukum; Menganggu kepentingan perlindungan hak atas kekayaan intelektual dan perlindungan dari persaingan usaha tidak sehat; Membahayakan pertahanan dan keamanan Negara; Mengungkap kekayaan alam Indonesia; Merugikan ketahanan ekonomi nasional; Merugikan kepentingan hubungan luar negeri; Mengungkap isi akta otentik yang bersifat pribadi dan kemauan terakhir ataupun wasiat seseorang; Mengungkap rahasia pribadi; Memorandum atau surat-suat antar Badan Publik atau intra Badan Publik yang menurut sifatnya dirahasiakan kecuali atas putusan Komisi Informasi atau Pengadilan; Informasi yang tidak boleh diungkapkan berdasarkan Undang- undang. (b) Badan Publik juga dapat tidak memberikan informasi yang belum dikuasai atau didokumentasikan.</td>
    </tr>
    <tr>
        <td style="text-align: justify">II.&nbsp;<b>PASTIKAN ANDA MENDAPAT TANDA BUKTI PERMOHONAN INFORMASI BERUPA NOMOR PENDAFTARAN KE PETUGAS INFORMASI/PPID.</b> Bila tanda bukti permohonan informasi tidak diberikan, tanyakan kepada petugas informasi alasannya, mungkin permintaan informasi anda kurang lengkap.</td>
    </tr>
    <tr>
        <td style="text-align: justify">III.&nbsp;Pemohon Informasi berhak mendapatkan pemberitahuan tertulis tentang diterima atau tidaknya permohonan informasi dalam jangka waktu <b>10 (sepuluh) hari</b> kerja sejak diterimanya permohonan informasi oleh Badan Publik. Badan Publik dapat memperpanjang waktu untuk memberi jawaban tertulis <b>1 x 7 hari kerja,</b> dalam hal: informasi yang diminta belum dikuasai/didokumentasikan/ belum dapat diputuskan apakah informasi yang diminta termasuk informasi yang dikecualikan atau tidak.</td>
    </tr>
    <tr>
        <td style="text-align: justify">IV.&nbsp;<b>Biaya</b>yang dikenakan bagi permintaan atas salinan informasi berdasarkan surat keputusan Pimpinan  Badan Publik adalah (diisi sesuai dengan surat keputusan Pimpinan Badan Publik)</td>
    </tr>
    <tr>
        <td style="text-align: justify">V.&nbsp;<b>Apabila Pemohon Informasi tidak puas dengan keputusan Badan Publik (misal: menolak permintaan Anda atau memberikan hanya sebagian yang diminta),</b> maka pemohon informasi dapat mengajukan <b>keberatan</b> kepada <b>atasan PPID</b> dalam jangka waktu <b>30 (tiga puluh) hari kerja</b> sejak permohonan informasi ditolak/ditemukannya alasan keberatan lainnya. Atasan PPID wajib memberikan tanggapan tertulis atas keberatan yang diajukan Pemohon Informasi selambat-lambatnya <b>30 (tiga puluh) hari kerja</b> sejak diterima/dicatatnya pengajuan keberatan dalam register keberatan.</td>
    </tr>
    <tr>
        <td style="text-align: justify">VI.&nbsp;Apabila Pemohon Informasi tidak puas dengan keputusan Atasan PPID, maka pemohon informasi dapat  mengajukan <b>keberatan</b> kepada <b>Komisi Informasi</b> dalam jangka waktu <b>14 (empat belas) hari kerja</b> sejak diterimanya keputusan atasan PPID oleh Pemohon Informasi Publik.</td>
    </tr>
</table>
<table>
     <tr>
        <td><img src="<?=base_url()?>uploads/permohonan-informasi/<?=$data['upload_nik'];?>" width="220px" height="140px"></td>
    </tr>
</table>
<footer>.::Printed By bkad.sulselprov.go.id::.</footer>


