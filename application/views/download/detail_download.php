
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/') ?>datatables/datatables.min.css">
<script>
    function back(){
        window.history.back();
    }
</script>
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
                            <li><a href="#" onclick="back()">All Dokumen</a></li>
                            <li><a href="#">Download Dokumen</a></li>
                        </ul>
                    </div>
                    <!-- Bread Title -->
                    
                    <div class="bread-title"><h2>Download Dokumen</h2></div>
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
            <h4><?php echo $TITLE?><br></h4>
            <table class="table table-bordered table-responsive" id="det_down">
                <thead>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Tgl Update</th>
                        <th>Aksi</th>
                </thead>
                <tbody>
                <?php if (count($DOWNLOAD) < 1) { ?>
                    <tr>
                        <td colspan='4' style='text-align:center'>Tidak Ada Data...</td>
                    </tr>
                <?php } ?>
                <?php 
                $i=1;
                foreach ($DOWNLOAD as $row) { ?>
                        <tr>
                            <td width="5%" align="center"><?php echo $i++ ?></td>
                            <td width="65%"><?php echo $row->title ?></td>
                            <td width="20%"><?php echo tgl_indo($row->date) ?></td>
                            <td width="10%" align="center">
                                <a href="<?php echo base_url(); ?>uploads/file/<?php echo $row->file ?>" target="_blank" class="btn btn-primary">
                                <span class="fa fa-download"></span> Download</a>
                            </td>
                        </tr>
                        <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</section>

<script src="<?php echo base_url() ?>assets/datatables/datatables.min.js"></script>
<script>
    $(document).ready(function () {
        $('#det_down').DataTable({
            "lengthChange": false,
            "searching": true,
            "paging": false,
            "bInfo" : false,
            "bSort" : true
        });
    });
</script>