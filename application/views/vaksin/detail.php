<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>

    <table class="table wy-table-bordered">
        <tr>
            <th>Nomor NIK</th>
            <td><?= $detail->nik ?></td>
        </tr>
        <tr>
            <th>Nama Penduduk</th>
            <td><?= $detail->nama ?></td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td><?= $detail->jk ?></td>
        </tr>
        <tr>
            <th>Tanggal Lahir </th>
            <td><?= $detail->tgl ?></td>
        </tr>
        <tr>
            <th>Jenis Pekerjaan</th>
            <td><?= $detail->jenis_pekerjaan ?></td>
        </tr>
        <tr>
            <th>instansi Pekerjaan</th>
            <td><?= $detail->instansi_pekerjaan ?></td>
        </tr>
        <tr>
            <th>Alamat Pekerjaan</th>
            <td><?= $detail->alamat_pekerjaan ?></td>
        </tr>
        <tr>
            <th>Nomor Telfon</th>
            <td><?= $detail->nomor_hp ?></td>
        </tr>
        <tr>
            <th>Kode Kab/Kota</th>
            <td><?= $detail->kode_kab_kota ?></td>
        </tr>
        <tr>
            <th>Kab/Kota</th>
            <td><?= $detail->kota_kab ?></td>
        </tr>
        <tr>
            <th>Alamat Lengkap</th>
            <td><?= $detail->alamat_lengkap ?></td>
        </tr>


    </table>
    <a href="<?= base_url('vaksinasi'); ?>" class="btn btn-primary">Kembali</a>

</div>
<!-- /.container-fluid -->
<div class="col-lg-3 col-xs-6">
    <!-- small box -->

</div>
</div>
<!-- End of Main Content -->