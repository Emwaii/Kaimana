<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->model('M_Pemilihan');
	}

	public function index()
	{
		
		$data["all"] = $this->M_Pemilihan->getAlldata();
		$this->load->view('index',$data);
	}

	
}
