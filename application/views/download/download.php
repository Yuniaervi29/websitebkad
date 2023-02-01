
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/') ?>datatables/datatables.min.css">
<!--<meta http-equiv="refresh" content="0;url=<?php echo $Down; ?>">-->
<!-- Breadcrumb -->
<div class="breadcrumbs overlay" style="background-image:url('<?php echo base_url('assets/') ?>img/breadcrumb.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <!-- Bread Menu -->
                    <div class="bread-menu">
                        <ul>
                            <li><a href="<?php echo base_url('ipkd') ?>">Ipkd</a></li>
                            <li><a href="#">All Dokumen</a></li>
                        </ul>
                    </div>
                    <!-- Bread Title -->
                    
                    <div class="bread-title"><h2>All Dokumen</h2></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- / End Breadcrumb -->


<section class="blog-layout blog-latest section-space">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h4><?php echo $TITLE?></h4>
            <table class="table table-bordered table-responsive" id="dok">
                <thead>
                         <th>No</th>
                        <th>Judul</th>
                        <th class="text-center">Tanggal Update</th>
                        <th class="text-center">Jumlah Download</th>
                        <th class="text-center">Aksi</th>
                </thead>
                <tbody>
                <?php if (count($PERDA) < 1) { ?>
                    <tr>
                        <td>Tidak Ada Data...</td>
                    </tr>
                <?php } ?>
                <?php 
                $i=1;
                foreach ($PERDA as $row) { ?>
                        <tr>
                            <td width="5%" align="center"><?php echo $i++ ?></td>
                            <td width="50%"><?php echo $row->title ?></td>
                            <td width="15%" align="center"><?php echo tgl_indo($row->date) ?></td>
                            <td width="5%" align="center"><?php echo $row->jumlah_download ?></td>
                            <td width="25%" align="center">
                            <a id="btn" href="<?php echo base_url(); ?>uploads/file/<?php echo $row->file ?>" target="_blank" class="btn btn-primary">
                                <span class="fa fa-eye"></span> Lihat</a>
                            <a id="btn" href="<?php echo base_url(); ?>download/ambil_file?nm_file=<?= $row->file; ?>" target="_blank" class="btn btn-info download">
                                <span class="fa fa-download"></span>Download</a>
                               
                            
                            
                                
                                
                            </td>
                        </tr>
                </tbody>
                <?php } ?>
            </table>
        </div>
    </div>
</div>
</section>


<script src="<?php echo base_url() ?>assets/datatables/datatables.min.js"></script>
<script>
    $(document).ready(function () {
        $('#dok').DataTable({
            "lengthChange": false,
            "searching": false,
            "paging":false,
            "bInfo" : false,
            "bSort" : false
        });
        
        $(".download").on("click",function(e){
            location.reload();
        });
    });
</script>