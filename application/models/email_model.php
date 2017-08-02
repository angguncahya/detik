<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class email_model extends CI_Model{
  function __construct(){
    parent:: __construct();
    $this->load->database();
  }

  function get_template($where){
      $data = $this->db->get_where('template', $where);
      return $data->row();
    }
  
    function ambil_template(){
      $data = $this->db->query('select * from template');
      return $data;
    }

    function delete_template($where){
      $this->db->where($where);
      $this->db->delete('template');
    }

    function update_template($where, $data_masuk){
      $this->db->where($where);
      $this->db->update('template', $data_masuk);
    }

  }
?>
