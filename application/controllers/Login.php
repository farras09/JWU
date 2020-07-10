<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Buku');
	}
	public function index()
	{
		$this->load->view('layouts/header');
		$this->load->view('layouts/banner');
		$this->load->view('katalog/login');
		$this->load->view('layouts/footer');
	}

	public function register()
	{
		$this->load->view('layouts/header');
		$this->load->view('layouts/banner');
		$this->load->view('katalog/register');
		$this->load->view('layouts/footer');
	}

	// function catalog()
	// {
	// 	$data['buku'] = $this->Buku->getAll();
	// 	$this->load->view('layouts/header');
	// 	$this->load->view('layouts/banner');
	// 	$this->load->view('layouts/catalogues', $data);
	// 	$this->load->view('layouts/footer');
	// }
}
