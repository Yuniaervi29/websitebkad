
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kategori Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/welcome') ?>">Home</a></li>
              <li class="breadcrumb-item active">Kategori</li>
              <li class="breadcrumb-item active">Kategori Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
  <!-- Main content -->
  <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Input Kategori</h3>
              </div>
              <!-- /.card-header -->
                <?php
                    $link="";
                if($EDIT['status']=='add'){
                        $link = "add";
                    }else{
                        $link = "edit/".$EDIT['category_id'];
                    }
                ?>
              <!-- form start -->
              <form id="form" action="<?php echo base_url('admin/kategori/'.$link) ?>" method="post" enctype="multipart/form-data">
                <div class="card-body">
              
                  <div class="form-group row">
                    <label for="category" class="col-sm-2 col-form-label d-flex justify-content-end" style="padding-right: 20px;">Title</label>
                    <input type="text" class="form-control col-sm-10" id="category" name="category" placeholder="Title" value="<?php echo $EDIT['category'] ?>">
                  </div>
                  <div class="form-group row">
                      <label for="jenis" class="col-sm-2 col-form-label d-flex justify-content-end" style="padding-right: 20px;">Category</label>
                  <select class="form-control col-sm-2 selectpicker" name="jenis" data-live-search="true">
                          <option>-Pilih-</option>
                          <option value="KUA">KUA</option>
                          <option value="PPAS">PPAS</option>
                          <option value="RKA_SKPD">RKA-SKPD</option>
                          <option value="RKA_PPKD">RKA-PPKD</option>
                          <option value="RANPERDA_APBD">RANPERDA APBD</option>
                          <option value="PERDA_APBD">PERDA APBD</option>
                          <option value="PERKADA_APBD">PERKADA APBD</option>
                          <option value="DPA_SKPD">DPA-SKPD</option>
                          <option value="DPA_PPKD">DPA-PPKD</option>
                          <option value="RANPERDA_PERUBAHAN_APBD">RANPERDA PERUBAHAN APBD</option>
                          <option value="PERDA_PERUBAHAN_APBD">PERDA PERUBAHAN APBD</option>
                          <option value="PERKADA_PERUBAHAN_APBD">PERKADA PERUBAHAN APBD</option>
                          <option value="RKAP_SKPD">RKAP-SKPD</option>
                          <option value="DPPA_SKPD">DPPA-SKPD</option>
                          <option value="SK_PPKD">SK PPKD</option>
                          <option value="REALISASI_PENDAPATAN_DAERAH">REALISASI PENDAPATAN DAERAH</option>
                          <option value="REALISASI_BELANJA_DAERAH">REALISASI BELANJA DAERAH</option>
                          <option value="REALISASI_PEMBIAYAAN_DAERAH">REALISASI PEMBIAYAAN DAERAH</option>
                          <option value="PERKADA_KEBIJAKAN_AKUNTANSI">PERKADA KEBIJAKAN AKUNTANSI</option>
                          <option value="LAK">LAK</option>
                          <option value="LRA_SKPD">LRA-SKPD</option>
                          <option value="LRA_PPKD">LRA-PPKD</option>
                          <option value="NERACA">NERACA</option>
                          <option value="CaLK">CaLK</option>
                          <option value="PERDA_PERTANGGUNGJAWABAN">PERDA PERTANGGUNGJAWABAN</option>
                          <option value="RENSTRA">RENSTRA</option>
                          <option value="RENJA">RENJA</option>
                          <option value="IKU">IKU</option>
                          <option value="PERJANJIAN_KINERJA">PERJANJIAN KINERJA</option>
                          <option value="PENGUKURAN_KINERJA">PENGUKURAN KINERJA</option>
                          <option value="RENCANA_AKSI">RENCANA AKSI</option>
                          <option value="MONITORING_RENCANA_AKSI">MONITORING RENCANA AKSI</option>
                          <option value="LHPK">LHPK</option>
                          <option value="LRAF">LRAF</option>
                          <option value="LAPORAN_EVALUASI_RENJA">LAPORAN EVALUASI RENJA</option>
                          <option value="LKj_IP">LKj.IP</option>
                          <option value="LKPj">LKPj</option>
                          <option value="LPPD">LPPD</option>
                          <option value="LAPORAN_GWPP">LAPORAN GWPP</option>
                          <option value="PROBIS">PROBIS</option>
                          <option value="SOP">SOP</option>
                          <option value="DUK">DUK</option>
                          <option value="RKBMD">RKBMD</option>
                          <option value="RUP">RUP</option>
                    </select>
                 </div>
                </div>

                <div class="card-footer d-flex justify-content-end">
                    <button class="btn btn-danger "onclick="goBack()"><span class="fa fa-arrow-left"></span> Back</button>&nbsp;&nbsp;
                  <button type="submit" class="btn btn-primary "><span class="fa fa-check"></span> Save</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
        </div>
        </div>
    </div>
</div>
</div>

<script>
function goBack() {
  window.history.back();
}
</script>


