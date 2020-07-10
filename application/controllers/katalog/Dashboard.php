<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    /**
     * Index Page for Jurnal.
     */


    public function index()
    {
        $this->load->view('layouts/header');
        $this->load->view('katalog/nav');
        $this->load->view('katalog/leftsidebar');
        $this->load->view('katalog/content');
        $this->load->view('katalog/rightsidebar');
        // $this->load->view('layouts/footer');
    }
}
