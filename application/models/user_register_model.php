<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_register_model extends CI_Model{
  function __construct(){
    parent:: __construct();
    $this->load->database();
  }

  public function get_user_register($iduser){
    $data = $this->db->query('select email, no_telp from user_register where user_register.iduser = $iduser');
    return $data->result_array();
  }

    function insert_user($tabelName,$data){
      $hasil = $this->db->insert($tabelName,$data);
      return $hasil;
    }

    function get_data($where){
      $data = $this->db->get_where('user_register', $where);
      return $data->row();
    }
}
?>
