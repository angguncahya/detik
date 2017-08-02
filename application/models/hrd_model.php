<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class hrd_model extends CI_Model{
  function __construct(){
    parent:: __construct();
    $this->load->database();
  }

  public function get_hrd($idhrd){
    $data = $this->db->query('select * from hrd where hrd.id_hrd = '.$idhrd);
    //return $data->result_array();
    return $data->row();
  }
  
    function insert_hrd($tabelName,$data){
      $hasil = $this->db->insert($tabelName,$data);
      return $hasil;
    }

    function ambil_hrd(){
      $data = $this->db->query('select * from hrd');
      return $data;
    }

    function delete_hrd($where, $table){
      $this->db->where($where);
      $this->db->delete($table);
    }

    function update_hrd($where, $data_masuk, $table){
      $this->db->where($where);
      $this->db->update($table, $data_masuk);
    }

    function cek_login($table,$where){
      return $this->db->get_where($table,$where);
    }

    public function get_id_by_email($email)
    {
      $username = $this->db->escape($email);

      $query = $this->db->query("SELECT id_hrd FROM hrd WHERE email_hrd = '$email'");
      return $query->row_array();
    }

}
?>
