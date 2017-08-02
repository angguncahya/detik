<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_Model{
  function __construct(){
    parent:: __construct();
    $this->load->library('session');
    $this->load->database();
  }

  public function get_user($iduser){
    $data = $this->db->query('select * from user, user_register
    where user_register.iduser = user.iduser and user_register.iduser ='.$iduser);
      return $data->row();
  }

public function get_nama($iduser){
  $data = $this->db->query('select user.nama_lengkap from user, user_register
  where user_register.iduser = 1');
  return $data->result_array();
}
    function insert_user($tabelName,$data){
      $hasil = $this->db->insert($tabelName,$data);
      return $hasil;
    }

}
?>
