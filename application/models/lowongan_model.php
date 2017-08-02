<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Lowongan_model extends CI_Model{
  function __construct(){
    parent:: __construct();
    $this->load->database();
  }

  // public function get_lowongan($idlowongan){
  //   $data = $this->db->query('select * from lowongan_detail where lowongan_detail.id_lowongan = '.$idlowongan);
  //   return $data->result_array();
  // }
  function tampil_data($tabelName){
    $data = $this->db->get($tabelName);
    return $data;
  }

  function tampil_dataSub(){
    $data = $this->db->query('SELECT *, (SELECT nama_tipe FROM lowongan_kategori A WHERE job.id_tipe = A.id_tipe limit 0,1) AS nama_tipe FROM job');
    return $data;
  }

  function get_datasub($where){
    $data = $this->db->query('SELECT nama_tipe FROM lowongan_kategori, job where lowongan_kategori.id_tipe = job.id_tipe and job.job_id =  '.$where.' ');
    return $data;
  }

  function tampil_dataadv(){
    $data = $this->db->query('SELECT *, (SELECT nama_tipe FROM lowongan_kategori A WHERE jobdetail.id_tipe = A.id_tipe limit 0,1) AS nama_tipe, (SELECT job_name FROM job B WHERE jobdetail.job_id = B.job_id limit 0,1) AS job_name  FROM jobdetail');
    return $data;
  }

  function get_dataadv($where){
    $data = $this->db->query('SELECT nama_tipe, job_name FROM lowongan_kategori A, job B, jobdetail C where A.id_tipe = C.id_tipe and B.job_id = C.job_id and C.jobdetail_id = '.$where.' ');
    return $data;
  }

    function insert_data($tabelName,$data){
      $hasil = $this->db->insert($tabelName,$data);
      return $hasil;
    }
    function get_apply(){
      $data = $this->db->query('SELECT *, (SELECT job_name FROM job C WHERE A.job_id = C.job_id limit 0,1)  AS nama_job , (SELECT email_hrd FROM hrd D WHERE A.id_hrd = D.id_hrd limit 0,1)  AS email_update, (SELECT nama_lengkap FROM user B WHERE A.iduser = B.iduser limit 0,1)  AS nama_applicant FROM apply A');
      return $data;
    }
    function get_process($status){
      $data = $this->db->query("SELECT *, (SELECT job_name FROM job C WHERE A.job_id = C.job_id limit 0,1)  AS nama_job, (SELECT email_hrd FROM hrd D WHERE A.id_hrd = D.id_hrd limit 0,1)  AS email_update, (SELECT nama_lengkap FROM user B WHERE A.iduser = B.iduser limit 0,1)  AS nama_applicant FROM apply A WHERE A.status = '$status' ");
      return $data;
    }
    function get_job(){
      $data = $this->db->query("SELECT job_id FROM `apply` GROUP by job_id");
      return $data;
    }

    function get_data($where, $table){
      $data = $this->db->get_where($table, $where);
      return $data->row();
    }

    function delete_data($where, $table){
      $this->db->where($where);
      $this->db->delete($table);
    }

    public function update_data($where, $data_masuk, $table){
      $this->db->where($where);
      $this->db->update($table, $data_masuk);
    }

}
?>
