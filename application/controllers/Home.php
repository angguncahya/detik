<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

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

	/*INDEX*/

	public function index()
	{ 
	
		$get_gallery 			= $this->db->get_where('gallery', array('gallery_is_home' 		=> 'Y'), 6, 0);
		$get_video 				= $this->db->get_where('video', array('video_is_home' 			=> 'Y'));
		$get_video2 			= $this->db->get_where('video', array('video_is_header' 		=> 'Y'));
		$get_footer 			= $this->db->get_where('footer', array('footer_is_displayed' 	=> 'Y'));

		
		$data['get_gallery']	= $get_gallery;
		$data['get_video'] 		= $get_video;
		$data['get_video2'] 	= $get_video2;
		$data['get_footer']		= $get_footer;

		$this->load->view('homepage', $data);
	}

	/*HOMEPAGE PROFIL (view home ketika user sudah login)*/

	public function homepage_profil()
	{
		$get_gallery 			= $this->db->get_where('gallery', array('gallery_is_home' 		=> 'Y'), 6, 0);
		$get_video 				= $this->db->get_where('video', array('video_is_home' 			=> 'Y'));
		$get_video2 			= $this->db->get_where('video', array('video_is_header' 		=> 'Y'));
		$get_footer 			= $this->db->get_where('footer', array('footer_is_displayed' 	=> 'Y'));

		
		$data['get_gallery']	= $get_gallery;
		$data['get_video'] 		= $get_video;
		$data['get_video2'] 	= $get_video2;
		$data['get_footer']		= $get_footer;

		$this->load->view('homepage_profil', $data);
	}

	/*Gallery foto */

	public function gallery()
	{
		$get_gallery 			= $this->db->get_where('gallery', array('gallery_is_home' 		=> 'Y'), 9, 0);
		$get_footer 			= $this->db->get_where('footer', array('footer_is_displayed' 	=> 'Y'));

		$data['get_footer']		= $get_footer;
		$data['get_gallery']	= $get_gallery;
		$this->load->view('gallery', $data);
	}

	/*Gallery foto ketika user sudah login*/

	public function gallery_profil()
	{
		$get_footer 			= $this->db->get_where('footer', array('footer_is_displayed' 	=> 'Y'));

		$data['get_footer']		= $get_footer;
		$get_gallery 			= $this->db->get_where('gallery', array('gallery_is_home' 		=> 'Y'), 9, 0);

		$data['get_gallery']	= $get_gallery;
		$this->load->view('gallery_profil', $data);
	}

	/*footer	*/

	public function footer()
	{
		$get_footer 			= $this->db->get_where('footer', array('footer_is_displayed' => 'Y'));

		$data['get_footer']	= $get_footer;
		$this->load->view('footer', $data);
	}

}
/* End of file home.php */
/* Location: ./application/controllers/home.php */