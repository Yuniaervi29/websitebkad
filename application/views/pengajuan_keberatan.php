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
$jml= $this->db->query("SELECT COUNT(nama) jml FROM inbox_pengajuan_keberatan")->row('jml');
$nomor = $this->db->query("SELECT LPAD(MAX(LEFT(noreg,3)+1),3,0) nomor FROM inbox_pengajuan_keberatan")->row('nomor');
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
							<div class="bread-title"><h2><?php echo $TITLE_1 ?></h2></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- / End Breadcrumb -->

        <section class="contact-us section-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-7 col-12">
                <!-- Contact Form -->
                <div class="contact-form-area m-top-30">
                    <h4>FORMULIR KEBERATAN</h4>
                    <form class="form" method="post" action="<?=base_url('admin/pengajuan_keberatan/add');?>" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="text" name="noreg" id="noreg" value="<?=$nomor.'/BKAD/'.bulanRom($bulan).'/'.$thn;?>" readonly>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="text" name="noregpermohonan" id="noregpermohonan" placeholder="No Registrasi Permohonan">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group textarea">
                                    <div class="icon"><i class="fa fa-pencil"></i></div>
                                    <textarea type="textarea" name="tujuan" id="tujuan" rows="3" placeholder="Tujuan Permohonan.."></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    IDENTITAS PEMOHON
                                    <input type="text" name="nama" id="nama" placeholder="Nama Lengkap">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    
                                    <input type="text" name="pekerjaan" id="pekerjaan" placeholder="Pekerjaan">
                                </div>
                            </div><div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    
                                    <input type="text" name="hp" id="hp" placeholder="Nomor HP">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group textarea">
                                    <div class="icon"><i class="fa fa-pencil"></i></div>
                                    <textarea type="textarea" name="alamat" id="alamat" rows="3" placeholder="Alamat.."></textarea>
                                </div>
                            </div>
                            
                           
                            <br>
                            
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                IDENTITAS KUASA PEMOHON**
                                    <input type="text" name="namakuasa" id="namakuasa" placeholder="Nama Lengkap">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group textarea">
                                    <div class="icon"><i class="fa fa-pencil"></i></div>
                                    <textarea type="textarea" name="alamatkuasa" id="alamatkuasa" rows="3" placeholder="Alamat.."></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-6">
                                <div class="form-group">
                                    
                                    <input type="text" name="hpkuasa" id="hpkuasa" placeholder="Nomor HP">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <h4>ALASAN PENGAJUAN KEBERATAN***</h4>
                                        <select name="rincian" id="rincian">
                                            <option value="" class="text-center">:: Pilih Alasan Pengajuan Keberatan ::</option>
                                            <option value="Permohonan Informasi Ditolak">a. Permohonan Informasi Ditolak</option>
                                            <option value="Informasi Berkala TIdak disediakan">b. Informasi Berkala TIdak disediakan</option>
                                            <option value="Informasi Tidak Ditanggapi">c. Informasi Tidak Ditanggapi</option>
                                            <option value=" Permintaan Informasi Dianggap Tidak Sebagaimana Yang Diminta">d. Permintaan Informasi Dianggap Tidak Sebagaimana Yang Diminta</option>
                                            <option value="Permintaan Informasi Tidak Dipenuhi">e. Permintaan Informasi Tidak Dipenuhi</option>
                                            <option value="Biaya Yang Dikenakan Tidak Wajar">f. Biaya Yang Dikenakan Tidak Wajar</option>
                                            <option value="Informasi Disampaikan Melebihi Jangka Waktu Yang Ditentukan">g. Informasi Disampaikan Melebihi Jangka Waktu Yang Ditentukan</option>
                                        </select>
                                        <!-- <label style="text-align: center;font-size: 14px">a. Permohonan Informasi Ditolak<input type="checkbox" id="getsalinanInfo" name="getsalinanInfo[]"  value="Mengambil Langsung">&emsp;</label>&emsp;&emsp;&emsp;
                                        <br>
                                        <label style="text-align: center;font-size: 14px">b. Informasi Berkala TIdak disediakan<input type="checkbox" id="getsalinanInfo" name="getsalinanInfo[]"  value="Email" >&emsp;</label>&emsp;&emsp;&emsp;
                                        <br>
                                        <label style="text-align: center;font-size: 14px">c. Informasi Tidak Ditanggapi<input type="checkbox" id="getsalinanInfo" name="getsalinanInfo[]" value="Kurir/POS" >&emsp;</label>
                                        <br>
                                        <label style="text-align: center;font-size: 14px">d. Permintaan Informasi Dianggap Tidak Sebagaimana Yang Diminta<input type="checkbox" id="getsalinanInfo" name="getsalinanInfo[]" value="Kurir/POS" >&emsp;&emsp;&emsp;&emsp;</label>
                                        <br>
                                        <label style="text-align: center;font-size: 14px">e. Permintaan Informasi Tidak Dipenuhi<input type="checkbox" id="getsalinanInfo" name="getsalinanInfo[]" value="Kurir/POS" >&emsp;</label>&emsp;&emsp;&emsp;
                                        <br>
                                        <label style="text-align: center;font-size: 14px">f. Biaya Yang Dikenakan Tidak Wajar<input type="checkbox" id="getsalinanInfo" name="getsalinanInfo[]" value="Kurir/POS" >&emsp;</label>&emsp;&emsp;&emsp;
                                        <br>
                                        <label style="text-align: center;font-size: 14px">g. Informasi Disampaikan Melebihi Jangka Waktu Yang Ditentukan<input type="checkbox" id="getsalinanInfo" name="getsalinanInfo[]" value="Kurir/POS" >&emsp;&emsp;&emsp;&emsp;</label> -->
                                    
                                </div>
                            </div>

                            <br>
                            <br>
                            <!-- <div class="col-12">
                                <div class="form-group textarea">
                                    <div class="icon"><i class="fa fa-pencil"></i></div>
                                    <textarea type="textarea" name="rincian" id="rincian" rows="3" placeholder="Rincian Permohonan.."></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group textarea">
                                    <div class="icon"><i class="fa fa-pencil"></i></div>
                                    <textarea type="textarea" name="tujuan" id="tujuan" rows="3" placeholder="Tujuan Permohonan.."></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <input type="file" name="upload_lampiran" id="upload_lampiran" accept="application/pdf">Upload Lampiran
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <div class="icon"><i class="fa fa-envelope"></i></div>
                                    <input type="email" name="email" id="email" placeholder="E-mail">
                                    <span class="message success">Email valid!</span>
                                    <span class="message error">Email anda tidak valid!</span>
                                </div>
                            </div> -->
                            <div class="col-12">
                                <div class="form-group button">
                                    <button type="submit" class="bizwheel-btn theme-2">KIRIM</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!--/ End contact Form -->
                <div class="pt-5">
                    <a href="<?=base_url('profil/cetak3');?>"  class="btn btn-primary"><span class="fa fa-print"></span> Cetak Formulir</a>
                    
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-12">
                <div class="contact-box-main m-top-30">
                    <div class="contact-title">
                        <h2>Hubungi Kami</h2>
                        <p>Silahkan sampaikan pengajuan keberatan anda, dengan mengisi form yang tersedia..</p>
                    </div>
                </div>
                <!-- Single Contact -->
                    <div class="single-contact-box">
                        <div class="c-icon"><i class="fa fa-user"></i></div>
                        <div class="c-text">
                            <h4>Jumlah Pengajuan</h4>
                            <h3><b class="number"><?=$jml;?></b><span> Orang</span></h3> 
                            <br>
                            <hr>
                            <h4>Daftar Pengajuan Keberatan</h4>
								<br>
                        	<table id="table" cellspacing="0" width="100%" style="font-size: 12px">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>No.reg</th>
                                        <th>Nama</th>
                                        <th>Pekerjaan</th>
                                        <th>Permohonan</th>
                                        <!-- <th>Tujuan</th> -->
                                    </tr>
                                </thead>
                         
                                <tbody>
                                    <?php 
                                    $isi = $this->db->query("SELECT noreg,nama,pekerjaan,rincian FROM inbox_pengajuan_keberatan WHERE nama IS NOT NULL");
                                    
                                    foreach($isi->result() as $row){
                                        echo "<tr>
                                        <td></td>
                                        <td>$row->noreg</td>
                                        <td>$row->nama</td>
                                        <td>$row->pekerjaan</td>
                                        <td>$row->rincian</td>
                                    </tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                            <br>
                                <div class="col-12">
                                <div class="form-group button">
                                    <a class="button" href="<?=base_url('admin/pengajuan_keberatan/register');?>" target="_blank"><b>Lihat Selengkapnya..</b></a>
                                </div>
                            </div>
                        </div>
                    </div>
            <!--/ End Single Contact -->
            </div>
        </div>
    </div>
</section>



<script>
$(document).ready(function () {
  //called when key is pressed in textbox
  $("#nik").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#errmsg").html("Numbers Only").show().fadeOut("slow");
               return false;
    }
   });
   
   $("#hp").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#errmsg2").html("Numbers Only").show().fadeOut("slow");
               return false;
    }
   });
   
   $("#upload_nik").change(function() {
    readIMG(this);
    });
    
$('input[type="checkbox"]').on('change', function() {
    $('input[name="' + this.name + '"]').not(this).prop('checked', false);
});

var table = $('#table').DataTable({ 
        select: false,
        "columnDefs": [{
            className: "Name", 
            "targets":[0],
            "visible": false,
            "searchable":false
        }]
    });//End of create main table

  //klik info
  $('#table tbody').on( 'click', 'tr', function () {
   
    alert(table.row( this ).data()[0]);

  });

});




function readIMG(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function(e) {
        $('#berkas1').attr('src', e.target.result);
        }
        
        reader.readAsDataURL(input.files[0]); // convert to base64 string
        }
    }


const fileUploader = document.getElementById('upload_lampiran');
const feedback = document.getElementById('info');

fileUploader.addEventListener('change', (event) => {
  const file = event.target.files[0];
  console.log('file', file);
  
  const size = file.size;
  console.log('size', size);
  let msg = '';
  
if (size > 2048 * 1024) {
    msg = `<span style="color:red;">Maksimal file upload 2MB. file yang anda coba upload adalah ${returnFileSize(size)}</span>`;
  } else {
    msg = `<span style="color:green;">${returnFileSize(size)} file yang anda upload berhasil!</span>`;
  }
  feedback.innerHTML = msg;
});

function returnFileSize(number) {
  if(number < 1024) {
    return number + 'bytes';
  } else if(number >= 1024 && number < 1048576) {
    return (number/1024).toFixed(2) + 'KB';
  } else if(number >= 1048576) {
    return (number/1048576).toFixed(2) + 'MB';
  }
}

$(function () {
    var regExp = /^([\w\.\+]{1,})([^\W])(@)([\w]{1,})(\.[\w]{1,})+$/;

    $('[type="email"]').on("keyup", function () {
        $(".message").hide();
        regExp.test($(this).val())
            ? $(".message.success").show()
            : $(".message.error").show();
    });
});

const form = document.querySelector('form');

function insertAfter(newNode, referenceNode) {
  this.insertBefore(newNode, referenceNode.nextElementSibling);
  
  return newNode;
}


class FieldValidator {
  constructor(field) {
    this._field = field;
    this._error = null;
    
    this._onInvalid = this._onInvalid.bind(this);
    this._onInput = this._onInput.bind(this);
    this._onBlur = this._onBlur.bind(this);
    
    this.bindEventListeners();
  }
  
  bindEventListeners() {
    this._field.addEventListener('invalid', this._onInvalid);
    this._field.addEventListener('input', this._onInput);
    this._field.addEventListener('blur', this._onBlur);
  }
  
  // Displays an error message and adds error styles and aria attributes
  showError() {
    let errorNode;
    
    if (this._error !== null) {
      return this.updateError();
    }
    
    this._error = document.createElement('div');
    this._error.className = 'help-block';
    this._error.innerHTML = this._field.validationMessage;
    
    this._field.setAttribute('aria-invalid', 'true');
    this._field.closest('.form-group').classList.add('has-error');
    
    insertAfter.call(this._field.parentNode, this._error, this._field);
  }
  
  // Updates an existing error message
  updateError() {
    if (this._error === null) return;
    
    this._error.innerHTML = this._field.validationMessage;
  }
  
  // Hides an error message if one is being displayed
  // and removes error styles and aria attributes
  hideError() {
    if (this._error !== null) {
      this._error.parentNode.removeChild(this._error);
      this._error = null;
    }

    this._field.removeAttribute('aria-invalid');
    this._field.closest('.form-group').classList.remove('has-error');
  }
  
  // Suppress the browsers default error messages
  _onInvalid(event) {
    event.preventDefault();
  }
  
  // When the user inputs something in to the field,
  // hide the error message if the field is now valid,
  // otherwise update the existing error if one is being shown
  _onInput(event) {
    if (this._field.validity.valid) {
      this.hideError();
    } else {
      this.updateError();
    }
  }
  
  // When this field loses focus and is invalid, then
  // show the error message
  _onBlur(event) {
    if ( ! this._field.validity.valid) {
      this.showError();
    }
  }
}

Array.prototype.slice.call(form.elements).forEach((element) => {
  element._validator = new FieldValidator(element);
});

// For some reason without setting the forms novalidate option
// we are unable to focus on an input inside the form when handling
// the 'submit' event
form.setAttribute('novalidate', true);

// When the form is submitted and fields don't pass validation
// we show the error messages for invalid fields
form.addEventListener('invalid', (event) => {
  event.preventDefault();
  
  event.target._validator.showError();
}, true);

// Suppress the submit event when validation fails and
// focus on the first invalid field
form.addEventListener('submit', (event) => {
  if ( ! form.checkValidity()) {
    event.preventDefault();
    return;
  }
  
  console.log('submit');
  event.preventDefault();
});


</script>