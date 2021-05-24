<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Vaksinasi extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Vaksin';
        $data['vaksin'] = $this->M_vaksin->tampil_data();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('vaksin/vaksinasi', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_data()
    {
        //menangkap inputan dari user

        $nik = $this->input->post('nik');
        $nama = $this->input->post('nama');
        $jk = $this->input->post('jk');
        $tgl = $this->input->post('tgl');
        $jenispekerjaan = $this->input->post('jenis_pekerjaan');
        $instansipekerjaan = $this->input->post('instansi_pekerjaan');
        $alamatpekerjaan = $this->input->post('alamat_pekerjaan');
        $nomorhp = $this->input->post('nomor_hp');
        $kodekabkota = $this->input->post('kode_kab_kota');
        $kotakab = $this->input->post('kota_kab');
        $alamat = $this->input->post('alamat_lengkap');

        $data = array(
            'nik' => $nik,
            'nama' => $nama,
            'jk' => $jk,
            'tgl' => $tgl,
            'jenis_pekerjaan' => $jenispekerjaan,
            'instansi_pekerjaan' => $instansipekerjaan,
            'alamat_pekerjaan' => $alamatpekerjaan,
            'nomor_hp' => $nomorhp,
            'kode_kab_kota' => $kodekabkota,
            'kota_kab' => $kotakab,
            'alamat_lengkap' => $alamat,
        );

        $this->M_vaksin->input_data($data, 'tb_vaksin');
        redirect('vaksinasi');
    }

    public function detail($id)
    {
        $detail = $this->M_vaksin->detail_data($id);
        $data['judul'] = 'Detail Penduduk';
        $data['detail'] = $detail;


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('vaksin/detail', $data);
        $this->load->view('templates/footer');
    }



    public function hapus($id)
    {
        //mengambil id pada tb mahasiswa
        $where = array('id' => $id);
        //mengarahkan ke M_vaksin dengan mengirimkan $id
        $this->M_vaksin->hapus_data($where, 'tb_vaksin');
        //jika delete berhasil akan di tampilkan ke dalam controller mahasiswa method index
        redirect('vaksinasi');
    }
}
