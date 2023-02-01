  <style>
    a.disabled {
      pointer-events: none;
      cursor: default;
    }
  </style>
  <script type="text/javascript">

$(document).ready(function(){
  $('#biaya').hide(); 
  $('#badan_publik').hide();
});

function form_submit() {
    document.getElementById("form").submit();
   }   

function unFormatRp(x){
  return x.replace(/[^0-9]+/g,'');
}

function formatRp2(x) {
    return ('Rp ' + x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, "."));
}

function hitung(){
    let harga = unFormatRp($('#rp_salin').val());
    let lembar = unFormatRp($('#lembar').val());
    let kirim = unFormatRp($('#rp_kirim').val());
    let lain2 = unFormatRp($('#rp_lain_lain').val());
    let jml = harga*lembar;
    total.value = formatRp2(jml);
    let jml2 = parseInt(jml) + parseInt(kirim) + parseInt(lain2);
    rp_total.value = formatRp2(jml2);
   
}




function pilih_badan(){
    let pilih = $('input[name="pilih1"]:checked').val();
    if(pilih == 'Badan Publik yang lain' && $('input[name="pilih1"]').is(':checked')){
        $('#badan_publik').show();
    }else{
        $('#badan_publik').hide();
    }
}

function pilih_biaya()
{
    let pilih = $('input[name="pilih2"]:checked').val();
    if (pilih == 'Hardcopy' && $('input[name="pilih2"]').is(':checked')){
        $('#biaya').fadeIn();
    }else if(pilih == 'Softcopy' && $('input[name="pilih2"]').is(':checked')){
        $('#biaya').fadeOut(); 
    }
    
}
/* Dengan Rupiah */
    var dengan_rupiah = document.getElementById('rp_salin');
    dengan_rupiah.addEventListener('keyup', function(e)
    {
        dengan_rupiah.value = formatRupiah(this.value, 'Rp');
    });
    
    var dengan_rupiah2 = document.getElementById('rp_kirim');
    dengan_rupiah2.addEventListener('keyup', function(e)
    {
        dengan_rupiah2.value = formatRupiah2(this.value, 'Rp');
    });
    
    var dengan_rupiah3 = document.getElementById('rp_lain_lain');
    dengan_rupiah3.addEventListener('keyup', function(e)
    {
        dengan_rupiah3.value = formatRupiah3(this.value, 'Rp');
    });
    
    /* Fungsi */
    function formatRupiah(angka, prefix)
    {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split    = number_string.split(','),
            sisa     = split[0].length % 3,
            rupiah     = split[0].substr(0, sisa),
            ribuan     = split[0].substr(sisa).match(/\d{3}/gi);
            
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }
        
        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp ' + rupiah : '');
    }
    
    function formatRupiah2(angka, prefix)
    {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split    = number_string.split(','),
            sisa     = split[0].length % 3,
            rupiah     = split[0].substr(0, sisa),
            ribuan     = split[0].substr(sisa).match(/\d{3}/gi);
            
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }
        
        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp ' + rupiah : '');
    }
    
    function formatRupiah3(angka, prefix)
    {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split    = number_string.split(','),
            sisa     = split[0].length % 3,
            rupiah     = split[0].substr(0, sisa),
            ribuan     = split[0].substr(sisa).match(/\d{3}/gi);
            
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }
        
        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp ' + rupiah : '');
    }

 $('input[type="checkbox"]').on('change', function() {
    $('input[name="' + this.name + '"]').not(this).prop('checked', false);
}); 
    function proses(id){
        $.ajax({
            type: "post",
            dataType: "json",
            url: "<?=base_url()?>admin/permohonan_pelayanan_publik/get_data",
            data: ({id}),
            success: function(data){
                $('#form_id').val(data.id);
                $('#noreg').val(data.noreg);
                $('#tgl').val(data.tgl);
                $('#nama').val(data.nama);
                $('#alamat').val(data.alamat);
                $('#email').val(data.email);
                $('#hp').val(data.hp);
            }
        });
        
        $('#myModal').modal('show'); 
    }
   
    
    
    
   function hapus(id){
                  
          Swal.fire({
            title: 'Yakin ingin menghapus data ??',
            text: "Data akan terhapus secara permanen!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Ya, Hapus!',
            cancelButtonText: 'Tidak !',
            reverseButtons: true
          }).then((result) => {
            if (result.value) {
              $.ajax({
                        type : "POST",
                        url  : "<?php echo site_url('admin/permohonan_pelayanan_publik/delete')?>",
                        dataType : "JSON",
                        data : {id:id},
                        success: function(){
                          $("#"+id).remove();
                          Swal.fire(
                            'Deleted!',
                            'Data berhasil dihapus !',
                            'success'
                          ).then((value)=>{
                              if(value){
                                 location.href= '<?php echo site_url('admin/register_pelayanan_publik')?>';
                              }
                          });
                        },error:function(){
                          Swal.fire("Batal!", "Data tidak dihapus !", "error",);
                        }
                    });
             
            } else if (
              /* Read more about handling dismissals below */
              result.dismiss === Swal.DismissReason.cancel
            ) {
              Swal.fire(
                'Batal',
                'Tidak ada perubahan data',
                'info'
              )
            }
          });

    }

</script>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/welcome') ?>">Home</a></li>
              <li class="breadcrumb-item active">Register Pelayanan Publik</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">PEMBERITAHUAN TERTULIS</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

            <form  class="form-horizontal" id="form" method="post" action="<?=base_url('admin/proses_pelayanan_publik/simpan');?>">
				<div class="col-md-12">
				<input type="hidden" id="tgl" name="tgl">
				<input type="hidden" id="form_id" name="form_id">
				<input type="hidden" id="status_id" name="status_id" value="proses">
				<div class="form-group row">
						<label  class="col-sm-3 col-form-label">No. Pendaftaran</label>
						<input type="text" class="form-control col-sm-9" name="noreg" id="noreg" readonly>
				</div>
				<div class="form-group row">
						<label  class="col-sm-3 col-form-label">Nama</label>
						<input type="text" class="form-control col-sm-9" name="nama" id="nama" readonly>
				</div>
				<div class="form-group row">
						<label  class="col-sm-3 col-form-label">Alamat</label>
						<input type="text" class="form-control col-sm-9" name="alamat" id="alamat" readonly>
				</div>
				<div class="form-group row">
						<label  class="col-sm-3 col-form-label">Email</label>
						<input type="text" class="form-control col-sm-9" name="email" id="email" readonly>
				</div>
				<div class="form-group row">
						<label  class="col-sm-3 col-form-label">HP</label>
						<input type="text" class="form-control col-sm-9" name="hp" id="hp" readonly>
				</div>
				<br>
				<hr>
				<br>
				<span><h3>A.Informasi Dapat Diberikan</h3></span>
				<label>Penguasaan Informasi Publik</label>
				<div class="form-group">
				<input type="checkbox" name="pilih1" value="Kami" onclick="pilih_badan()"> Kami
				<input type="checkbox" name="pilih1" value="Badan Publik yang lain" onclick="pilih_badan()"> Badan Publik yang lain, yaitu.. <input type="text" id="badan_publik" name="badan_publik" placeholder="Nama Badan Publik">
				</div>
				<br>
				<label>Bentuk Fisik Yang Tersedia</label>
				<div class="form-group">
				<input type="checkbox" name="pilih2" id="pilih2" value="Softcopy" onclick="pilih_biaya()"><em> Softcopy</em> (termasuk rekaman)
				<input type="checkbox" name="pilih2" id="pilih2" value="Hardcopy" onclick="pilih_biaya()"><em> Hardcopy</em>/salinan tertulis
				</div>
				<br>
			<div id="biaya">
				<label>Biaya yang dibutuhkan</label>
				<div class="form-group">
				<label>Penyalinan</label><br>
				<input type="text" id="rp_salin" name="rp_salin" placeholder="Harga" onkeyup="hitung();">&emsp;<input type="number" id="lembar" name="lembar" placeholder="Lembar" min="1" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" onkeyup="hitung();">&emsp;<input type="text" id="total" name="total" placeholder="Total"><br><br>
				<label>Pengiriman</label>
				<input type="text" id="rp_kirim" name="rp_kirim" placeholder="Harga" onkeyup="hitung();"><br>
				<label>Lain-lain &emsp;</label>
				<input type="text" id="rp_lain_lain" name="rp_lain_lain" placeholder="Harga" onkeyup="hitung();"><br>
				<label>Total &nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;</label>
				<input type="text" id="rp_total" name="rp_total" placeholder="Total">
				</div>
			</div>
			<div class="form-group">
			    <label>Waktu Penyediaan</label>
			    <input type="text" name="waktu" id="waktu" placeholder="Hari" size="2" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
			</div>
			<div class="form-group">
			    <label>Penjelasan penghitaman/pengaburan Informasi yang dimohon</label>
			    <textarea name="ket" id="ket" placeholder="Keterangan.." rows="3" cols="50"></textarea>
			</div>
			<br>
			<hr>
				<br>
				<span><h3>B.Informasi tidak dapat diberikan karena</h3></span>
				<div class="form-group">
				<input type="checkbox" name="pilih4" value="Informasi yang diminta belum dikuasai"> Informasi yang diminta belum dikuasai<br>
				<input type="checkbox" name="pilih4" value="Informasi yang diminta belum dikuasai"> Informasi yang diminta belum didokumentasikan
				</div>
				<div class="form-group">
			    <label> Penyediaan informasi yang belum didokumentasikan dilakukan dalam jangka waktu</label>
			    <input type="text" name="waktu_tunda" id="waktu_tunda" placeholder="Hari" size="2" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
			</div>
		</div>
	</div>
</form>

            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button onclick="form_submit()" class="btn btn-primary">Simpan</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>No.reg</th>
                    <th>Nama</th>
                    <th>Pekerjaan</th>
                    <th>Alamat</th>
                    <th>Rincian</th>
                    <!--<th>Tujuan</th>-->
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no=0;
                    $isi = $this->db->query("SELECT a.*,b.status_id FROM inbox_pelayanan_publik a 
                        LEFT JOIN proses_pelayanan_publik b
                        ON a.noreg=b.noreg
                        WHERE a.nama IS NOT NULL ORDER BY a.noreg");
                    
                    foreach($isi->result() as $row){
                        
                        $no++;
                        if($row->status_id == 'proses'){
                        echo "<tr>
                        <td>$no</td>
                        <td>$row->noreg</td>
                        <td>$row->nama</td>
                        <td>$row->alamat</td>
                        <td>$row->pekerjaan</td>
                        <td>$row->rincian</td>
                        
                        <td align='center'>
                        <button class='btn btn-danger btn-sm' onclick='hapus($row->id)'>
                              <i class='fas fa-trash-alt'>
                              </i>
                              Hapus
                          </button><br>
                          <button class='btn btn-success btn-sm' onclick='proses($row->id)' >
                              <i class='fas fa-reply'>
                              </i>
                              Proses
                          </button><br>
                          <a href='".base_url()."admin/proses_pelayanan_publik/cetak?no=$row->noreg' target='_blank' class='btn btn-primary'>
<span class='fa fa-print'></span> Print</a>
                    </td>
                    </tr>";
                        }elseif($row->status_id == null){
                        echo "<tr>
                        <td>$no</td>
                        <td>$row->noreg</td>
                        <td>$row->nama</td>
                        <td>$row->alamat</td>
                        <td>$row->pekerjaan</td>
                        <td>$row->rincian</td>
                        
                        <td align='center'>
                        <button class='btn btn-danger btn-sm' onclick='hapus($row->id)'>
                              <i class='fas fa-trash-alt'>
                              </i>
                              Hapus
                          </button><br>
                          <button class='btn btn-success btn-sm' onclick='proses($row->id)'>
                              <i class='fas fa-reply'>
                              </i>
                              Proses
                          </button><br>
                          <a href='".base_url()."admin/proses_pelayanan_publik/cetak?no=$row->noreg' target='_blank' class='btn btn-primary disabled'>
<span class='fa fa-print'></span> Print</a>
                    </td>
                    </tr>";
                        }
                        
                    }?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>
        </div>
    </div>
</section>
</div>


