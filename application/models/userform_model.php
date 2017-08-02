<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Userform_model extends CI_Model{
        function __construct(){
            parent:: __construct();
            $this->load->library('session');
            $this->load->database();
        }

        function cek_login($table,$where){
      		return $this->db->get_where($table,$where);
      	}

        function ambilnama($iduser){
          $hasil = $this->db->query("SELECT nama_lengkap from user where iduser = ".$iduser);
          return $hasil->row();
        }

        function updatenama($where, $data_masuk){
          $this->db->where($where);
          $this->db->update('user', $data_masuk);
        }

        function ambilemail($iduser){
          $hasil = $this->db->query("SELECT email from user_register where iduser = ".$iduser);
          return $hasil->row();
        }

        function ambildataform2($iduser){
          $hasil = $this->db->query("SELECT * from formuser2 where iduser = ".$iduser);
          return $hasil->row();
        }


        public function get_iduser_by_email($email)
        {
          //$email = $this->db->escape($email);
          $query = $this->db->query("SELECT iduser FROM user_register WHERE email = '$email'");
          return $query->row_array();
        }

        public function insert_userform($tabelName,$data){
              $hasil = $this->db->insert($tabelName,$data);
          }

        public function lihat_userform($tabelNama, $iduser){ //bagian ini tambahain id user, biar ngesortir yg tabel yg mau d tampilin
            $hasil = $this->db->query("SELECT * from $tabelNama, user_register where user_register.iduser = ".$iduser);
            return $hasil->result_array();
        }
    }
?>
