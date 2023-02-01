
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/') ?>datatables/datatables.min.css">

<!-- Breadcrumb -->
<div class="breadcrumbs overlay" style="background-image:url('<?php echo base_url('assets/') ?>img/breadcrumb.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <!-- Bread Menu -->
                    <div class="bread-menu">
                        <ul>
                            <li><a href="<?php echo base_url('welcome') ?>">Home</a></li>
                            <li><a href="#">Pengumuman</a></li>
                        </ul>
                    </div>
                    <!-- Bread Title -->
                    
                    <div class="bread-title"><h2>Informasi</h2></div>
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
                        <th>Title</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                </thead>
                <tbody>
                <?php if (count($AGENDA) < 1) { ?>
                    <tr>
                        <td>Tidak Ada Data...</td>
                    </tr>
                <?php } ?>
                <?php 
                $i=1;
                foreach ($AGENDA as $row) { ?>
                        <tr>
                            <td width="5%" align="center"><?php echo $i++ ?></td>
                            <td width="85%"><?php echo $row->title ?></td>
                            <td width="85%"><?php echo $row->tgl_agenda ?></td>
                            <td width="10%" align="center">
                                <a href="<?php echo base_url('agenda/detail_agenda') ?>?info=<?php echo $row->agenda_id ?>" class="btn btn-info">
                                <span class="fa fa-eye"></span> Lihat</a>
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
    });
</script>