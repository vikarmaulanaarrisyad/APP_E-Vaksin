<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="alert alert-info small" role="alert">
        <h1 class="h3 mb-0 text-gray-800"><?= $judul; ?></h1>
    </div>


</div>
<!-- /.container-fluid -->
<div class="col-lg-3 col-xs-6">
    <!-- small box -->

    <div class="row text-white ml-5">
        <div class="card bg-gradient-info" style="width: 18rem;">
            <div class="card-body text-center">
                <h2 class="text-center"><?php echo $this->db->count_all('tb_vaksin'); ?></h2>
                <h5 class="card-title">Jumlah Vaksin </h5>
                <a href="<?php echo base_url('vaksin'); ?>" class="btn btn-primary">Lihat Detail</a>
            </div>
        </div>
    </div>


</div>
</div>
<!-- End of Main Content -->