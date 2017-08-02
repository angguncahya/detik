<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class content extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->library('pagination');
		$this->load->model('userform_model');
		$this->load->helper('url');
		$this->load->model('hrd_model');
		$this->load->model('lowongan_model');
		$this->load->library(array('session'));
		$email = $this->session->userdata("email_hrd");
	  $this->aku = $this->hrd_model->get_id_by_email($email);
	}

	public function index()
	{

	}
	public function photos()	{
		$this->load->view('admin/photos');
	}
	public function gallery()	{
		$this->load->view('admin/gallery');
	}


}
