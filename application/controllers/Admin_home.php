<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_home extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('userform_model');
		$this->load->model('hrd_model');
		$this->load->model('lowongan_model');
		$this->load->library(array('session'));
		$email = $this->session->userdata("email_hrd");
	  $this->aku = $this->hrd_model->get_id_by_email($email);
	}

	public function index() //homepage admin :)))
	{
		$data['app'] = $this->db->from("apply")->get()->num_rows();
		$data['job'] = $this->db->from("job")->get()->num_rows();
		$this->load->view('admin/index',$data);
	}

	public function job(){ //buat liat kotak2 detail job
		$data['jumlah'] = $this->lowongan_model->tampil_data('job')->result_object();
		// print_r($data); die;
		$data['app'] = $this->db->from("apply")->get()->num_rows();
		$data['job'] = $this->db->from("job")->get()->num_rows();
		$this->load->view('admin/index2',$data);
	}

	public function applicants(){ //buat liat detail kotak2 applicants
		$data['jumlah'] = $this->db->from("apply")->get()->num_rows();
		$data['unprocess'] = $this->db->get_where('apply', array('status' => "unprocess", 'job_id'))->num_rows();
		$data['shortlist'] = $this->db->get_where('apply', array('status' => "shortlist"))->num_rows();
		$data['interviewhrd'] = $this->db->get_where('apply', array('status' => "interview HRD"))->num_rows();
		$data['interviewuser'] = $this->db->get_where('apply', array('status' => "interview user"))->num_rows();
		$data['psikotest'] = $this->db->get_where('apply', array('status' => "psikotest"))->num_rows();
		$data['skilltest'] = $this->db->get_where('apply', array('status' => "skill test"))->num_rows();
		$data['accepted'] = $this->db->get_where('apply', array('status' => "accepted"))->num_rows();
		$data['blacklist'] = $this->db->get_where('apply', array('status' => "blacklist"))->num_rows();
		$this->load->view('admin/index3',$data);
	}

	public function photos()	{
		$this->load->view('admin/photos');
	}
	public function gallery()	{
		$this->load->view('admin/gallery');
	}
	function login(){
	// $this->load->view('/admin/login');
	$email = $this->input->post('email');
	$password = $this->input->post('password');
	$where = array(
		'email_hrd' => $email,
		// 'password_hrd' => md5($password)
		'password_hrd' => $password
		);
		$cek = $this->hrd_model->cek_login("hrd",$where)->num_rows();
		if($cek > 0){
			$data_session = array(
				'email_hrd' => $email,
				'status_hrd' => "login",
				);
			$this->session->set_userdata($data_session);

			$email = $this->session->userdata("email_hrd");
			$this->aku = $this->hrd_model->get_id_by_email($email);
			$data['aku'] = $this->aku;
			$idadmin = $this->aku['id_hrd'];
			 redirect(base_url('admin_home'));
		}else{
			$this->load->view('admin/page-login');
		}
	} //tutup fungsi
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('admin_home/login'));
		//$this->load->view('admin/page-login');
	} //tutup fungsi


}
