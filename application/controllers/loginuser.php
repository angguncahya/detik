<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class loginuser extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->helper('url','form');
		$this->load->model('userform_model');
		$this->load->model('user_register_model');
	  	$this->load->model('lowongan_model');
	  	$this->load->library('session');
    	$username = $this->session->userdata("nama");
    		$this->user = $this->userform_model->get_iduser_by_email($username);
		}
	/*LOGIN*/

	public function login()
	{
		$email 					= $this->input->post('email');
		$password 				= $this->input->post('password');
		$where 					= array(
								'email' 	=> $email,
								'password'	=> base64_encode($password)
								//'password'	=> $password
								);
		$cek 					= $this->userform_model->cek_login("user_register",$where)->num_rows();
		if($cek > 0){
			$data_session 		= array(
								'nama' 		=> $email,
								'status' 	=> "login"
								);
			$this->session->set_userdata($data_session);

			$username 			= $this->session->userdata("nama");
			$this->aku 			= $this->userform_model->get_iduser_by_email($username);
			$data['aku'] 		= $this->aku;
			$iduser 			= $this->aku['iduser'];

			redirect(base_url('home/homepage_profil'));
			
		}else{
			$this->load->view('login');
		}
	}

	/*LOGIN FORM (login ketika masuk ke form tahap dua/ link yang dikirim lewat email)*/

	public function loginform()
	{
		$url = $this->input->post('url'); 
		$data = $this->input->post('data');
		
		$email 					= $this->input->post('email');
		$password 				= $this->input->post('password');
		$where 					= array(
								'email' 	=> $email,
								'password' 	=> base64_encode($password)
								// 'password' => $password
								);
		$cek 					= $this->userform_model->cek_login("user_register",$where)->num_rows();
		if($cek > 0){
			$data_session 		= array(
								'nama' 		=> $email,
								'status' 	=> "login"
								);
			$this->session->set_userdata($data_session);

			$username 			= $this->session->userdata("nama");
			$this->aku 			= $this->userform_model->get_iduser_by_email($username);
			$iduser 			= $this->aku;
			//$iduser 			= $this->user['iduser'];

			// print_r($data); die;
			if($data == 1){
				redirect(base_url("job/jobdes_profil/$url"));
			} elseif($data == 2){
				redirect(base_url('apply/progress'));
			}else{
				echo "lalala";
			}
			
		}else{
			redirect(base_url("job/jobdes/$url"));
		}
	}
	/*REGISTER USER*/

	public function register()
	{
		$this->load->view('register');
	}
	public function tambahuser(){
	 $pass 						= $this->input->post('password');
	 $password 					= base64_encode($pass);
     $data_masuk 				= array(
	  'username' 				=> $this->input->post('username'),
      'email' 					=> $this->input->post('email'),
      'password' 				=> $password
    );
    $this->user_register_model->insert_user('user_register',$data_masuk);
    $where = array( 'email' => $this->input->post('email') );
    $info = $this->user_register_model->get_data($where);
    //print_r($info); die;
    if($info >= 1){	
    $this->session->set_flashdata('pesan',
			'<div class="modal fade" role="dialog">
    <div class="modal-dialog " style="width: 400px; padding: auto;">
    
      
      <div class="modal-content">

        <div class="login" style="width: 100%;">
        <div class="modal-header" style="background-color: #2288dd;">
          <h2 class="login-header" >Log in</h2>
        </div>
        <div class="modal-body" style="background-color: #ebebeb;">
          <form class="login-container" method="post" action="base_url("loginuser/login")">
          <p><input name="email" type="email" placeholder="Email"></p>
          <p><input type="password" name="password" placeholder="Password"></p>
        </div>
          <div class="modal-footer" style="background-color: #ebebeb;">
            <p><input type="submit" value="Log in"></p>
          </form>
          </div>
</div>
      
      </div>
      
    </div>
  </div>');
    	redirect(base_url(''));
    	} else{
    		$this->session->set_flashdata('pesan',
			'<div id=id class="alert alert-success alert-dismissable">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<strong>Advertisement berhasil ditambahkan</strong>
			</div>');
    	redirect(base_url('loginuser/login'));
    	}
  	}

  	/*LOGOUT USER*/

	public	function logout(){
		$this->session->sess_destroy();
		redirect(base_url(''));
	}

}