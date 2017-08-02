<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Download_model extends CI_Model{
  function __construct(){
    parent:: __construct();
    $this->load->library('session');
    $this->load->database();
  }

  public function get_cv($iduser){
    $data = $this->db->query('select * from user where iduser = '.$iduser);
    return $data->row();
  }
  public function get_foto($iduser){
    $data = $this->db->query('select * from user_formlog where iduser = '.$iduser);
    return $data->row();
  }

    function insert_user($tabelName,$data){
      $hasil = $this->db->insert($tabelName,$data);
      return $hasil;
    }

}
?>
