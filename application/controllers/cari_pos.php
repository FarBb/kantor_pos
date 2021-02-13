<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cari_pos extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_cari_pos', 'cari');
    }

    public function index()
    {
        // $this->load->view('templates/auth_header');
        $query = $this->cari->get();
        $data['cari_pos'] = $query->result();
        $data['judul'] = 'Cari Pos Terdekat';
        $this->load->view('administator/cari_pos/cari_pos_tampil', $data);
        // $this->load->view('templates/auth_footer');
    }

    public function add()
    {
        $data['header'] = 'Tambah Kantor Pos';
        // $this->load->view('templates/auth_header');
        $this->load->view('administator/cari_pos/pos_tambah', $data);
        // $this->load->view('templates/auth_footer');
    }

    public function edit($id = null)
    {
        echo "Edit" . $id;
        $query = $this->cari->get($id);
        $data = array(
            'header' => 'Edit Kantor Pos',
            'cari' => $query->row()
        );

        // $this->load->view('templates/auth_header');
        $this->load->view('administator/cari_pos/pos_edit', $data);
        // $this->load->view('templates/auth_footer');
    }

    public function delete($id)
    {
        $this->cari->delete($id);
        redirect('cari_pos');
    }

    public function proses()
    {
        if (isset($_POST['add'])) {
            $inputan = $this->input->post(null, TRUE);
            $this->cari->add($inputan);
        } else if (isset($_POST['edit'])) {
            $inputan = $this->input->post(null, TRUE);
            $this->cari->edit($inputan);
        }
        redirect('cari_pos');
    }
}
