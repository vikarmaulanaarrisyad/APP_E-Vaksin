<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="alert alert-info small" role="alert">
        <h1 class="h3 mb-0 text-gray-800"><?= $judul; ?></h1>
    </div>



  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">NO</th>
        <th scope="col">NIK</th>
        <th scope="col">NAMA</th>
        <th scope="col">JENIS KELAMIN</th>
        <th scope="col">TANGGAL LAHIR</th>
        <th scope="col">ALAMAT</th>

        <?php

        $no = 1;
        foreach ($vaksin as $vaksin) : ?>
      <tr>
        <td><?= $no++ ?></td>
        <td><?php echo $vaksin['nik']; ?></td>
        <td><?php echo $vaksin['nama']; ?></td>
        <td><?php echo $vaksin['jk']; ?></td>
        <td><?php echo $vaksin['tgl']; ?></td>
        <td><?php echo $vaksin['alamat_lengkap']; ?></td>

      </tr>


    <?php endforeach; ?>

  </table>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->