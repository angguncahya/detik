<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->helper('url');
	  $this->load->model('hrd_model');
    $this->load->library('session');
  $email = $this->session->userdata("email_hrd");
  $this->aku = $this->hrd_model->get_id_by_email($email);
  }

  function list(){
    $data['aku'] = $this->aku;
    $idhrd = $this->aku['id_hrd'];
    $masuk['info'] = $this->hrd_model->get_hrd($idhrd);
    $masuk['admin'] = $this->hrd_model->ambil_hrd()->result();
    $masuk["salah"] = 9;
    //$this->load->view('admin/validation');
    $this->load->view('admin/admin/lihat_admin', $masuk);
  }

  function formadmin(){
   $this->load->view('admin/admin/form_admin'); 
  }
  public function tambahadmin(){
	 $pass = $this->input->post('password');
	 $password = base64_encode($pass);

    $data_masuk = array(
	    'username_hrd' 	=> $this->input->post('username_hrd'),
      'email_hrd' 		=> $this->input->post('email_hrd'),
      'password_hrd' 	    => $password
    );
    $this->hrd_model->insert_hrd('hrd',$data_masuk);
    $where = array( 'username_hrd' => $this->input->post('username_hrd') );
    $info = $this->hrd_model->cek_login('hrd', $where);
    if ($info >=1){
    $this->session->set_flashdata('pesan',
      '<div id=id class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Admin berhasil ditambahkan</strong>
              </div>');
            redirect(base_url('admin/list'));
          } else {
            echo "<script>alert('User gagal bertambah');</script>";
            $this->session->set_flashdata('pesan',
              '<div id=id class="alert alert-danger" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Admin gagal ditambahkan</strong>
              </div>');
            redirect(base_url('admin/list'));
          }
    //redirect('admin/list'); //buat baliknya
  }

  public function ambiladmin(){
    $data['aku'] = $this->aku;
    $idhrd = $this->aku['id_hrd'];
	$this->hrd_model->get_hrd($idhrd);
  }

  public function deleteadmin(){
    $idhrd = $this->uri->segment(3);
    $where = array( 'id_hrd' => $idhrd );
    $this->hrd_model->delete_hrd($where, 'hrd');
    $info = $this->hrd_model->cek_login('hrd',$where);
    if ($info != null){
    $this->session->set_flashdata('pesan',
      '<div id=id class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Admin berhasil dihapus</strong>
              </div>');
            redirect(base_url('admin/list'));
          } else {
            echo "<script>alert('User gagal bertambah');</script>";
            $this->session->set_flashdata('pesan',
              '<div id=id class="alert alert-danger" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Admin gagal dihapus</strong>
              </div>');
            redirect(base_url('admin/list'));
          }
    // redirect(base_url("admin/list"));
  }

  public function editadmin(){
    
    // $data['aku'] = $this->aku;
    // $idhrd = $this->aku['id_hrd'];
    //$where = 'id_hrd' => $idhrd );

    $data["salah"]=0;
    $id_hrd = $this->uri->segment(3);
    $data['hrd'] = $this->hrd_model->get_hrd($id_hrd);
    //print_r($data);
     $this->load->view('admin/admin/form_admin2', $data);
  }
  public function update(){
    $password = $this->input->post('password');
    $password2 = $this->input->post('confirm_password');
    if($password == $password2){
    $masuk["salah"]=0;
    $data['aku'] = $this->aku;
    $idhrd = $this->aku['id_hrd'];
     $data_masuk = array(
       'password_hrd' 		=> base64_encode($password)
     );
     $where = array(
       'id_hrd' => $idhrd
     );
     $this->hrd_model->update_hrd($where, $data_masuk, 'hrd');
     redirect(base_url("admin_home"));
    }
    else{
      $masuk["salah"]=1;
      $this->load->view('admin/admin/edit_admin',$masuk);
    }
  }
  public function updateadmin(){
    $password = $this->input->post('password');
    $password2 = $this->input->post('confirm_password');
    if($password == $password2){
    $masuk["salah"]=0;
    $data_masuk = array(
       'username_hrd' => $this->input->post('username_hrd'),
        'email_hrd' => $this->input->post('email_hrd'),
       'password_hrd'     => base64_encode($password)
     );
     $where = array(
       'id_hrd' => $this->uri->segment(3)
     );
     $this->hrd_model->update_hrd($where, $data_masuk, 'hrd');
      $this->session->set_flashdata('pesan',
      '<div id=id class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Admin berhasil diupdate</strong>
        </div>');
      redirect(base_url("admin/list"));
     //print_r($where);
    }
    else{
        echo "<script>alert('SubKategori gagal bertambah');</script>";
          $this->session->set_flashdata('pesan',
          '<div id=id class="alert alert-danger" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong>Admin gagal diupdate</strong>
          </div>');
    }
  }
  public function page_admin() {
    $masuk["salah"]=5;
    $this->load->view('admin/admin/edit_admin',$masuk);
  }
}

?>