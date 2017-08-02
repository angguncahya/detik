<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {
	function __construct(){
		parent::__construct();
		//$this->load->model('userform_model');
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->model('hrd_model');
		$this->load->model('lowongan_model');
		$this->load->model('userform_model');
		$this->load->library(array('session'));
		$username = $this->session->userdata("nama");
    	$this->user = $this->userform_model->get_iduser_by_email($username);
	}

	public function index() {

	}

	public function formuser1(){
		$nmfile = slug($this->input->post('nama_lengkap'));
		//print_r($this->aku); die;
		//$iduser = $this->aku;
		$data['user'] 			= $this->user;
    	$iduser 				= $this->user['iduser'];
		$now = date("Y-m-d H:i:s");
		$info = $this->uri->segment(3);

		$config['upload_path']          = 'uploads/document';
		$config['file_name']            = $nmfile;
		$config['allowed_types']        = 'pdf|doc|docx|jpeg|jpg|png|bmp';
		$config['max_size']             = 5000; //max 5 mb
		$config['min_width']            = 128;
		$config['min_height']           = 128;

// echo SELF;
// echo "<pre>"; print_r($config);
		$this->load->library('upload');
		$this->upload->initialize($config);
		if ( ! $this->upload->do_upload('adminfile')){
			redirect(base_url("apply/form1_profil/$info"));
		}
		else{
		$gbr = $this->upload->data();
		$data_masuk = array(
			'iduser' => $iduser,
			'nama_lengkap' => $this->input->post('nama_lengkap'),
			'handphone' => $this->input->post('handphone'),
			'cv_user'     => $gbr['file_name'],
			'tanggal_upload' => $now
		);
		$this->userform_model->insert_userform('user', $data_masuk);

		redirect(base_url('apply/notif_form1'));
		}


	}

	public function formuser2(){
		$data['user'] 			= $this->user;
    	$iduser 				= $this->user['iduser'];
    	$data_masuk = array(
			'iduser' => $iduser,
			'pengalaman' => $this->input->post('pengalaman'),
			'sekolah' => $this->input->post('sekolah'),
			'kualifikasi' => $this->input->post('kualifikasi'),
			'jurusan' => $this->input->post('jurusan'),
			'tahunwisuda' => $this->input->post('tahunwisuda'),
			'noijazah' => $this->input->post('noijazah'),
			'namaperusahaan' => $this->input->post('namaperusahaan'),
			'posisi' => $this->input->post('posisi'),
			'bulanbergabung' => $this->input->post('bulanbergabung'),
			'tahunbergabung' => $this->input->post('tahunbergabung'),
			'spesialisasi' => $this->input->post('spesialisasi'),
			'bidangpekerjaan' => $this->input->post('bidangpekerjaan'),
		);
		$data_masuk2 = array(
			'nama_lengkap' => $this->input->post('nama') 
			);
		$where = array(
			'iduser' => $iduser 
			); 
    $this->userform_model->insert_userform('formuser2', $data_masuk);
    $this->userform_model->updatenama($where, $data_masuk2);

    redirect(base_url('apply/download'));
	}

}