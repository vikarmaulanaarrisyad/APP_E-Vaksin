<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="alert alert-info small" role="alert">
    <h1 class="h3 mb-0 text-gray-800"><?= $judul; ?></h1>
  </div>


  <!-- Fist Modal Box -->
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModal">
    Tambah Data Vaksin
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Form Data Vaksin</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <form action="<?php echo base_url('vaksinasi/tambah_data') ?>" method="POST">
            <div class="form-group">
              <label for="nik">Nomor NIK</label>
              <input type="number" class="form-control" id="nik" placeholder="Masukan Nomor NIK" name="nik">
              <small id="nik" class="form-text text-muted">Nomor NIK harus 18 digit.</small>
            </div>

            <div class="form-group">
              <label for="nama">Nama Lengkap</label>
              <input type="text" class="form-control" id="nama" placeholder="Masukan Nama Lengkap" name="nama">
            </div>


            <div class="form-group">
              <label for="jk">Jenis Kelamin</label>
              <select name="jk" id="jk" class="form-control">
                <option>Pilih Jenis Kelamin</option>
                <option>Laki-laki</option>
                <option>Perempuan</option>
              </select>
            </div>

            <div class="form-group">
              <label for="nama">Taggal Lahir</label>
              <input type="date" class="form-control" id="Tanggal" placeholder="Masukan Tanggal Lahir" name="tgl">
            </div>

            <div class="form-group">
              <label for="nama">Jenis Pekerjaan</label>
              <input type="text" class="form-control" id="jenis" placeholder="Masukan Jenis Pekerjaan" name="jenis_pekerjaan">
            </div>

            <div class="form-group">
              <label for="nama">Instansi Pekerjaan</label>
              <input type="text" class="form-control" id="Instansi" placeholder=" Masukan Instansi Pekerjaan" name="instansi_pekerjaan">
            </div>

            <div class="form-group">
              <label for="nama">Alamat Instansi Pekerjaan</label>
              <input type="text" class="form-control" id="Alamat" placeholder="Masukan Alamat Instansi" name="alamat_pekerjaan">
            </div>

            <div class="form-group">
              <label for="nama">Nomor HP</label>
              <input type="text" class="form-control" id="Nomor" placeholder="Masukan Nomer HP" name="nomor_hp">
            </div>

            <div class="form-group">
              <label for="nama">Kode KAB/KOTA</label>
              <input type="text" class="form-control" id="Kode" placeholder="Masukan Kode KAB/KOTA" name="kode_kab_kota">
            </div>

            <div class="form-group">
              <label for="nama">KAB/KOTA</label>
              <input type="text" class="form-control" id="KAB" placeholder="Masukan Kab/Kota" name="kota_kab">
            </div>

            <div class="form-group">
              <label for="nama">Alamat Lengkap</label>
              <input type="text" class="form-control" id="Alamat" placeholder="Masukan Alamat Lengkap" name="alamat_lengkap">
            </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
        </form>

      </div>
    </div>
  </div>
  <!-- End Modal Box -->
  <table class="table border">
    <thead class="thead-dark">
      <tr>
        <th scope="col">NO</th>
        <th scope="col">NIK</th>
        <th scope="col">NAMA</th>
        <th scope="col">JENIS KELAMIN</th>
        <th scope="col">TANGGAL LAHIR</th>
        <th scope="col">ALAMAT</th>
        <th colspan="3" class="text-center">AKSI</th>

      </tr>

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
          <td><?= anchor('vaksinasi/detail/' . $vaksin['id'], '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?>
          <td onclick="javascript: return confirm('Anda yakin hapus?')"><?= anchor('vaksinasi/hapus/' . $vaksin['id'], '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?>
          </td>
          <td><?= anchor('vaksinasi/edit/' . $vaksin['id'], '<div class="btn btn-primary btn-sm"><i class="fa fa-edit " ></i></div>') ?>
          </td>
        </tr>


      <?php endforeach; ?>

  </table>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->