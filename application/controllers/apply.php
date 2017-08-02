<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class apply extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or 
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

	/*FORM pertama untuk apply lowongan*/

	public function form1_profil()
	{
		$uri_job = $this->uri->segment(3);
		
		$get_header				= $this->db->get_where('header', array('header_is_displayed' 			=> 'Y'));
		// $get_job 				= $this->db->get_where('job', array('jobslug' => $uri_job));
		$get_job = $this->db->get_where('job', array('job_is_listjob' => 'Y', 'jobslug' 	=> $uri_job));

		$get_footer 			= $this->db->get_where('footer', array('footer_is_displayed' 			=> 'Y'));

		$data['get_header']		= $get_header;
		$data['job']		= $get_job;
		$data['get_footer']		= $get_footer;
		$this->load->view('form1_profil', $data);
	}

	/*notifikasi setelah mengisi form1 */

	public function notif_form1()
	{
		$get_header				= $this->db->get_where('header', array('header_is_displayed' => 'Y'));
		$get_footer 			= $this->db->get_where('footer', array('footer_is_displayed' => 'Y'));

		$data['get_header']		= $get_header;
		$data['get_footer']		= $get_footer;
		$this->load->view('notif_form1', $data);
	}

	/*notifikasi untuk mengisi form 2/ setelah dipanggil untuk tes selanjutnya*/

	public function notif()
	{
		$get_header				= $this->db->get_where('header', array('header_is_displayed' => 'Y'));
		$get_footer 			= $this->db->get_where('footer', array('footer_is_displayed' => 'Y'));

		$data['get_header']		= $get_header;
		$data['get_footer']		= $get_footer;
		$this->load->view('notif', $data);
	}
	
	/*form 2 (berisi 3 step diisi setah dipanggil untuk tes selanjutnya)*/

	public function progress()
	{
		$data['user'] 			= $this->user;
    	$iduser 				= $this->user['iduser'];
    	
		$get_header 			= $this->db->get_where('header', array('header_is_displayed' => 'Y'));
		$get_footer 			= $this->db->get_where('footer', array('footer_is_displayed' => 'Y'));
		
		$namalengkap = $this->userform_model->ambilnama($iduser);
        $nama = $namalengkap->nama_lengkap;
		//print_r($nama); die;
		$data['nama']		= $nama;
		$data['get_header']		= $get_header;	
		$data['get_footer']		= $get_footer;
		$this->load->view('progress', $data);
	}
	
	/*notifikasi untuk download resume isian dari form2*/

	public function download()
	{
		$get_header 			= $this->db->get_where('header', array('header_is_displayed' => 'Y'));
		$get_footer 			= $this->db->get_where('footer', array('footer_is_displayed' => 'Y'));
		
		$data['get_header']		= $get_header;
		$data['get_footer']		= $get_footer;
		$this->load->view('download', $data);
	}

	public function applyuser(){
    	$data['user'] 			= $this->user;
    	$iduser 				= $this->user['iduser'];
    	// print_r($iduser); die;
    	$now 					= date("Y-m-d H:i:s");
    	$uri_job 				= $this->uri->segment(3);
		//print_r($urijob); die;

    	$get_id = $this->db->query("select job_id from job where job.jobslug = '".$uri_job."'")->row();
    	
    $data_masuk 				= array(
	  'iduser' 		        	=> $iduser,
      'job_id' 	          		=> $get_id->job_id,
      'tanggal_apply'     		=> $now
      );
    $this->lowongan_model->insert_data('apply',$data_masuk);
    redirect(base_url('apply/form1_profil/'.$uri_job));
    
  }

  public function preview()
 {
 	$data['user'] 			= $this->user;
    $iduser 				= $this->user['iduser'];
    $namalengkap = $this->userform_model->ambilnama($iduser);
    $emaillengkap = $this->userform_model->ambilemail($iduser);
 	$data['form2'] = $this->userform_model->ambildataform2($iduser);

 	$nama = $namalengkap->nama_lengkap;
 	$email = $emaillengkap->email;
		//print_r($nama); die;
	$data['nama']		= $nama;
	$data['email']		= $email;

  $this->load->view('preview', $data);
 }

}