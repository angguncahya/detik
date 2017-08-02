<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class job extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/furls.html
	 */

	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper('url','form');
		$this->load->model('userform_model');
		$this->load->model('user_register_model');
	  	$this->load->model('lowongan_model');
	  	$this->load->library('session');
    	$username = $this->session->userdata("nama");
    		$this->user = $this->userform_model->get_iduser_by_email($username);
		}
	/*DAFTAR JOB (daftar lowongan yang dibuka)*/

	public function karir()
	{
		$get_header 			= $this->db->get_where('header', array('header_is_displayed' 	=> 'Y'));
		$get_job 				= $this->db->get_where('job', array('job_is_listjob'			=> 'Y'));
		$get_footer 			= $this->db->get_where('footer', array('footer_is_displayed' 	=> 'Y'));

		$data['get_header']		= $get_header;
		$data['get_footer']		= $get_footer;
		$data['get_job']		= $get_job;
		$this->load->view('listjob', $data);
	}

	/*DESKRIPSI LOWONGAN */

	public function jobdes()
	{
		$uri_job = $this->uri->segment(3);

		$get_header				= $this->db->get_where('header', array('header_is_displayed' 			=> 'Y'));
		$get_job 				= $this->db->get_where('job', array('jobslug' 							=> $uri_job));
		$get_jobdetail 			= $this->db->get_where('jobdetail', array('jobdetail_is_pagejobdetail' 	=> 'Y'), 9, 0);
		$get_footer 			= $this->db->get_where('footer', array('footer_is_displayed' 			=> 'Y'));
		$data['job'] 			= $get_job;
		$data['get_header']		= $get_header;
		$data['get_footer']		= $get_footer;
		$data['get_jobdetail']	= $get_jobdetail;
		$this->load->view('page2_jobdes', $data);
	}
	/*DAFTAR JOB (daftar lowongan yang dibuka ketika user telah login)*/

	public function karir_profil()
	{
		$get_header 			= $this->db->get_where('header', array('header_is_displayed' 	=> 'Y'));
		$get_job 				= $this->db->get_where('job', array('job_is_listjob' 			=> 'Y'));
		$get_footer 			= $this->db->get_where('footer', array('footer_is_displayed' 	=> 'Y'));

		$data['get_header']		= $get_header;
		$data['get_footer']		= $get_footer;
		$data['get_job']		= $get_job;
		$this->load->view('listjob_profil', $data);
	}


	/*DESKRIPSI LOWONGAN */

	public function jobdes_profil()
	{
		$uri_job = $this->uri->segment(3);

		$get_header				= $this->db->get_where('header', array('header_is_displayed' 			=> 'Y'));
		$get_job 				= $this->db->get_where('job', array('jobslug' 							=> $uri_job));
		$get_jobdetail 			= $this->db->get_where('jobdetail', array('jobdetail_is_pagejobdetail' 	=> 'Y'), 9, 0);
		$get_footer 			= $this->db->get_where('footer', array('footer_is_displayed' 			=> 'Y'));
		$data['job'] 			= $get_job;
		$data['get_header']		= $get_header;
		$data['get_footer']		= $get_footer;
		$data['get_jobdetail']	= $get_jobdetail;
		$this->load->view('page2_jobdes_profil', $data);
	}

}