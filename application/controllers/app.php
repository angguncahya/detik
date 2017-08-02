<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class app extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->library(array('PHPExcel','PHPExcel/IOFactory'));
		$this->load->helper('url');
		$this->load->helper('download');
		$this->load->model('userform_model');
		$this->load->model('hrd_model');
		$this->load->model('lowongan_model');
		$this->load->model('download_model');
		$this->load->library('upload');
		$this->load->library(array('session'));
		$email = $this->session->userdata("email_hrd");
	  $this->aku = $this->hrd_model->get_id_by_email($email);
	}

	public function applicant()
	{
		//$data['jumlah'] = $this->db->from("apply")->get()->num_rows();
		$info = $this->lowongan_model->get_job()->row();
		$data['unprocess'] = $this->db->get_where('apply', array('status' => "shortlist", 'job_id' => $info->job_id))->num_rows();
		//print_r($data['unprocess']);

		$data['apply'] = $this->lowongan_model->get_apply()->result();
		
		 $this->load->view('admin/app/applicants',$data);
	}
	public function tambahapplicant(){

		//pengennya bisa export aja si wkwk

	}

	// public function coba(){
	// 	redirect(base_url("app/tambahapplicant/3"));
	// }
	public function unprocess()
	{
		$data['url'] = $this->uri->segment(3);
		// $status = array('job_id' => $this->input->get('id'));
		$status = 'unprocess';
		//$data['apply'] = $this->lowongan_model->get_apply()->result();
		$data['unprocess'] = $this->lowongan_model->get_process($status)->result();
		//print_r($data);
		$this->load->view('admin/app/unprocess',$data);
	}
	public function shortlist()
	{
		$data['url'] = $this->uri->segment(3);
		$status = 'shortlist';
		$data['apply'] = $this->lowongan_model->get_apply()->result();
		$data['shortlist'] = $this->lowongan_model->get_process($status)->result();
		$this->load->view('admin/app/shortlist',$data);
	}
	public function interviewhrd()
	{
		$data['url'] = $this->uri->segment(3);
		$status = 'interview HRD';
		$data['apply'] = $this->lowongan_model->get_apply()->result();
		$data['test'] = $this->lowongan_model->get_process($status)->result();
		$this->load->view('admin/app/test_interviewhrd',$data);
	}
	public function interviewuser()
	{
		$data['url'] = $this->uri->segment(3);
		$status = 'interview user';
		$data['apply'] = $this->lowongan_model->get_apply()->result();
		$data['test'] = $this->lowongan_model->get_process($status)->result();
		$this->load->view('admin/app/test_interviewuser',$data);
	}
	public function psikotest()
	{
		$data['url'] = $this->uri->segment(3);
		$status = 'psikotest';
		$data['apply'] = $this->lowongan_model->get_apply()->result();
		$data['test'] = $this->lowongan_model->get_process($status)->result();
		$this->load->view('admin/app/test_psikotest',$data);
	}
	public function skilltest()
	{
		$data['url'] = $this->uri->segment(3);
		$status = 'skill test';
		$data['apply'] = $this->lowongan_model->get_apply()->result();
		$data['test'] = $this->lowongan_model->get_process($status)->result();
		$this->load->view('admin/app/test_skill',$data);
	}
	public function accepted()
	{
		$data['url'] = $this->uri->segment(3);
		$status = 'accepted';
		$data['apply'] = $this->lowongan_model->get_apply()->result();
		$data['accepted'] = $this->lowongan_model->get_process($status)->result();
		$this->load->view('admin/app/accepted',$data);
	}
	public function blacklist()
	{
		$data['url'] = $this->uri->segment(3);
		$status = 'blacklist';
		$data['apply'] = $this->lowongan_model->get_apply()->result();
		$data['blacklist'] = $this->lowongan_model->get_process($status)->result();
		$this->load->view('admin/app/blacklist',$data);
	}
	public function download_cv(){
		$iduser = $this->uri->segment(3);
		$fileinfo = $this->download_model->get_cv($iduser);
		$info = $fileinfo->cv_user;
		$file = 'uploads/document/'.$info;
		force_download($file, NULL);
		redirect(base_url('admin/app/applicants'));
	} //tutup fungsi

  public function applyuser(){
    $data['user'] = $this->user;
    $iduser = $this->user['iduser'];
    $now = date("Y-m-d H:i:s");

    $data_masuk = array(
	    'iduser' 		  => $iduser,
      'job_id' 	          => $this->input->get('id'),
      'tanggal_apply'     => $now
      );
    $this->lowongan_model->insert_data('apply',$data_masuk);
    // redirect('User_register_controller/index'); //buat baliknya
  }
  public function prosesuser(){
    $data['aku'] = $this->aku;
	$idhrd = $this->aku['id_hrd'];
    $now = date("Y-m-d H:i:s");
    $status = $this->input->post('status');
    $idapply = $this->uri->segment(3);

    $data_masuk = array(
      'id_hrd' 		     => $idhrd,
      'status' 	       => $status,
      'admin_date'     => $now 
      );
    $where = array( 'id_apply' => $idapply );
 
    $this->lowongan_model->update_data($where,$data_masuk,'apply');
    $info = $this->lowongan_model->get_data($where,'apply');
    
    if($info >= 1){
    	redirect(base_url('email/sendemail/'.$status.'/'.$idapply));
    }
    else{
    	echo "<script>alert('User gagal bertambah');</script>";
                        $this->session->set_flashdata('pesan',
                            '<div id=id class="alert alert-danger" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <strong>Status gagal di ubah</strong>
                            </div>');
                        //redirect($this->uri->uri_string());
                        redirect(base_url('app/unprocess'));
    }
  
    // redirect(base_url('app/applicant'));
    //redirect($this->uri->uri_string());
    // if($this->input->post('status') == 'shortlist'){
    //     redirect(base_url('app/shortlist'));
    // } 
    // elseif($this->input->post('status') == 'next test') {
    //   redirect(base_url('app/test'));
    // } 
    // elseif($this->input->post('status') == 'accepted') {
    //   redirect(base_url('app/accepted'));
    // } 
    // elseif($this->input->post('status') == 'blacklist') {
    //   redirect(base_url('app/blacklist'));
    // }
  }


}
