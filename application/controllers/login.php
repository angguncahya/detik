<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class login extends CI_Controller {
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

	public function index(){
		$masuk['salah']=0;
		$this->load->view('admin/page-login',$masuk);
	}

	public function login_admin(){
	// $this->load->view('/admin/login');
	$email = $this->input->post('email');
	$password = base64_encode($this->input->post('password'));
	$where = array(
		'email_hrd' => $email
		);
	$where2 = array(
		'password_hrd' => $password
		);
		$cek = $this->hrd_model->cek_login("hrd",$where)->num_rows();
		$cek2 = $this->hrd_model->cek_login("hrd",$where2)->num_rows();
		if($cek > 0){
			if($cek2 > 0){
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
				$masuk['salah'] = 2;
				$this->load->view('admin/page-login',$masuk);
			}
		}elseif(empty($email)&&empty($password)){
			$masuk['salah'] = 1;
			$this->load->view('admin/page-login',$masuk);
		}elseif(empty($password)){
			$masuk['salah'] = 3;
			$this->load->view('admin/page-login',$masuk);
		}else{
			$masuk['salah'] = 4;
			$this->load->view('admin/page-login',$masuk);
		}
	} //tutup fungsi
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
		//$this->load->view('admin/page-login');
	} //tutup fungsi


}
