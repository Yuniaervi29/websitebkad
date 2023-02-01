<?php
$noreg = $_GET['no'];
$data = $this->db->query("SELECT * FROM proses_permohonan_informasi WHERE noreg ='$noreg'")->row_array();

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
    
$tanggal = explode('-', $data['tgl']);
$tgl = $tanggal[2];
$bln = $tanggal[1];
$thn = $tanggal[0];

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
</style>
<table width="100%" style="border-bottom: groove">
    <tr>
        <td><img src="<?=base_url()?>assets/img/logo sulsel.bmp" alt='logo' width='120' /></td>
		<td width='100%' style="font-size:14px">
			<b style="font-size:16px">PEJABAT PENGELOLA INFORMASI DAN DOKUMENTASI</b><br>
			<b style="font-size:16px">BADAN KEUANGAN DAN ASET DAERAH</b><br>
			Jalan Jenderal Urip Sumohardjo No.269 Telp. 453050 Makassar 9023
		</td>	
    </tr>
</table>
<br>
<table width="100%">
    <tr>
        <td style="text-align: center;font-size: 14px"><b>PEMBERITAHUAN TERTULIS</b></td>
    </tr>
    <tr>
        <td style="text-align: justify">Berdasarkan permohonan informasi pada tanggal <?=$tgl?> bulan <?=getBulan($bln)?> tahun <?=$thn?> Dengan nomor pendaftaran <?=$noreg?>, kami menyampaikan kepada saudara/I :</td>
    </tr>
</table>
<br>
<table width="70%">
    <tr>
        <td>Nama Lengkap</td>
        <td style="text-align: center">:</td>
        <td><?=$data['nama'];?></td>
    </tr>
    <tr>
        <td style="vertical-align:top">Alamat</td>
        <td style="text-align: center;vertical-align:top">:</td>
        <td style="vertical-align:top"><?=$data['alamat'];?></td>
    </tr>
    <tr>
        <td>Nomor Telepon (HP)/Email</td>
        <td style="text-align: center">:</td>
        <td><?=$data['hp'];?> / <?=$data['email'];?></td>
    </tr>
</table>
<br>
<table>
    <tr>
        <td>Pemberitahuan sebagai berikut.</td>
    </tr>
     <tr>
        <td><b>A. Informasi Dapat Diberikan</b></td>
    </tr> 
</table>

<table width="100%" style="border-collapse: collapse" border="1">
    <thead>
    <tr>
        <td style="text-align: center">No</td>
        <td>Hal-Hal Terkait Informasi Publik</td>
        <td>Keterangan</td>
    </tr>
    </thead>
    <tbody>
        <tr>
            <?php
            if($data['info_publik'] == 'Kami'){
                echo'<td style="text-align: center">1.</td>
                    <td>Penguasaan Informasi  Publik**</td>
                    <td><input type="checkbox" checked="checked"> Kami&emsp;<input type="checkbox"> Badan Publik lain, yaitu </td>';
            }elseif($data['badan_publik'] != ''){
                echo'<td style="text-align: center">1.</td>
                    <td>Penguasaan Informasi  Publik**</td>
                    <td><input type="checkbox"> Kami&emsp;<input type="checkbox" checked="checked"> Badan Publik lain, yaitu '. $data['badan_publik'].'</td>';
            }
            ?>
        </tr>
        <tr>
            <?php
            if($data['bentuk_fisik'] == 'Softcopy'){
                echo'<td style="text-align: center">2.</td>
                    <td>Bentuk Fisik Yang Tersedia**</td>
                    <td><input type="checkbox" checked="checked"> <em>Softcopy</em> (termasuk rekaman).&emsp;<input type="checkbox"> <em>Hardcopy</em>/salinan tertulis.</td>';
            }else{
                echo'<td style="text-align: center">2.</td>
                    <td>Bentuk Fisik Yang Tersedia**</td>
                    <td><input type="checkbox"> <em>Softcopy</em> (termasuk rekaman).&emsp;<input type="checkbox" checked="checked"> <em>Hardcopy</em>/salinan tertulis.</td>';
            }
            ?>
            
        </tr>
        <tr>
            <?php
            if($data['bentuk_fisik'] == 'Hardcopy'){
                echo'<td style="text-align: center">3.</td>
                    <td>Biaya yang dibutuhkan***</td>
                    <td><input type="checkbox" checked="checked"> Penyalinan&emsp;'.$data['harga'].' x '.$data['lembar'].'  lembar = '.$data['total_harga'].'</td>';
            }else{
                echo'<td style="text-align: center">3.</td>
                    <td>Biaya yang dibutuhkan***</td>
                    <td><input type="checkbox"> Penyalinan&emsp; Rp...x (jumlah lembaran) = Rp...</td>';
            }
            ?>
            
        </tr>
        
        <tr>
        <?php
        if($data['bentuk_fisik'] == 'Hardcopy'){
            echo '<td style="text-align: center"></td>
            <td></td>
            <td><input type="checkbox" checked="checked"> Pengiriman&emsp;'. $data['kirim'].'</td>';
        }else{
            echo '<td style="text-align: center"></td>
            <td></td>
            <td><input type="checkbox"> Pengiriman&emsp</td>';
        }
        ?>
            
        </tr>
        <tr>
            <?php
            if($data['bentuk_fisik'] == 'Hardcopy'){
              echo '<td style="text-align: center"></td>
            <td></td>
            <td><input type="checkbox" checked="checked"> Lain-lain&emsp;'. $data['lain2'].'</td>';  
            }else{
            echo '<td style="text-align: center"></td>
            <td></td>
            <td><input type="checkbox"> Lain-lain&emsp;</td>';
            }
            ?>
            
        </tr>
        <tr>
            <?php
            if($data['bentuk_fisik'] == 'Hardcopy'){
                echo '<td style="text-align: center"></td>
            <td></td>
            <td><input type="checkbox" checked="checked"> Jumlah&emsp;'.$data['total'].'</td>';
            }else{
              echo '<td style="text-align: center"></td>
            <td></td>
            <td><input type="checkbox"> Jumlah&emsp;</td>'; 
            }
            ?>
            
        </tr>
        <tr>
            <td style="text-align: center">4.</td>
            <td>Waktu penyediaan</td>
            <td><?=$data['waktu']?> Hari</td>
        </tr>
        <tr>
            <td style="text-align: center">5.</td>
            <td colspan="2">Penjelasan penghitaman/pengaburan Informasi yang dimohon**** (tambahkan kertas bila perlu)</td>
        </tr>
        <tr>
            <td colspan="3">keterangan:<br><?=$data['ket']?></td>
        </tr>
    </tbody>
</table>
<table>
    <tr>
        <td>B. Informasi tidak dapat diberikan karena :**</td>
    </tr>
    <tr>
        <td><input type="checkbox"> Informasi yang diminta belum dikuasai</td>
    </tr>
    <tr>
       <td><input type="checkbox"> Informasi yang diminta belum didokumentasikan</td> 
    </tr>
    <tr>
        <td>Penyediaan informasi yang belum didokumentasikan dilakukan dalam jangka waktu <?=$data['waktu2']?> *****</td>
    </tr>
</table>

<table width="100%" style="padding-top: 10px">
    <tr>
        <td style="visibility: hidden">kosongkosongkosong</td>
        <td>&emsp;&emsp;&emsp;</td>
        <td>Makassar, <?=tanggal($today);?></td>
    </tr>
    <tr>
        <td style="visibility: hidden">kosongkosongkosong</td>
        <td>&emsp;&emsp;&emsp;</td>
        <td><b>Petugas PPID Pembantu<br>(Penerima Permohonan)</b></td>
    </tr>
    <tr>
        <td><br><br></td>
    </tr>
    <tr>
        <td style="visibility: hidden">kosongkosongkosong</td>
        <td>&emsp;&emsp;&emsp;</td>
        <td>(......................................)</td>
    </tr>
    <tr>
        <td style="visibility: hidden">kosongkosongkosong</td>
        <td>&emsp;&emsp;&emsp;</td>
        <td>Nama dan Tanda Tangan</td>
    </tr>
</table>
<br>
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
<footer>.::Printed By bkad.sulselprov.go.id::.</footer>


