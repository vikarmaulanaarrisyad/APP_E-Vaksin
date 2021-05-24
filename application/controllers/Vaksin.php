<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Vaksin extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Vaksin';
        $data['vaksin'] = $this->M_vaksin->tampil_data();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('vaksin/index', $data);
        $this->load->view('templates/footer');
    }
    
    
}
