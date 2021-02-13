<?php
defined('BASEPATH') or exit('No direct script access allowed');

class home extends CI_Controller
{
    public function index()
    {
        // $data['judul'] = 'Kantor Pos Indonesia';
        $this->load->view('templates/auth_header');
        $this->load->view('home/index');
        $this->load->view('templates/auth_footer');
    }
}
