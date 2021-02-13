<?php
defined('BASEPATH') or exit('No direct script access allowed');

class auth extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/auth_header');
        $this->load->view('auth/login');
        $this->load->view('templates/auth_footer');
    }

    public function registation()
    {
        $this->load->view('templates/auth_header');
        $this->load->view('auth/registation');
        $this->load->view('templates/auth_footer');
    }
}
