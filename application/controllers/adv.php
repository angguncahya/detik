<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class adv extends CI_Controller {
	function __construct(){
		parent::__construct();
		//$this->load->model('userform_model');
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->model('hrd_model');
		$this->load->model('lowongan_model');
		$this->load->library(array('session'));
		$email = $this->session->userdata("email_hrd");
	  $this->aku = $this->hrd_model->get_id_by_email($email);
	}

	public function index() {

	}

// 1 --------------------------------------------------------------------------------
	public function advertisement() {
		// $data['kategori'] = $this->lowongan_model->tampil_data('lowongan_kategori')->result();
		// $data['subkategori'] = $this->lowongan_model->tampil_data('job');
		$data['time']=date("Y-m-d");
		$data['advertisement'] = $this->lowongan_model->tampil_dataadv()->result();
		$this->load->view('admin/adv/table_adv',$data);
	}
	public function form_adv() //form adv
	{
		$data['aku'] = $this->aku;
		$idhrd = $this->aku['id_hrd'];
		$data['hrd'] = $this->hrd_model->get_hrd($idhrd);
		$data['kategori'] = $this->lowongan_model->tampil_data('lowongan_kategori')->result();
		$data['subkategori'] = $this->lowongan_model->tampil_data('job')->result();
		$this->load->view('admin/adv/form_adv', $data);
	}
	public function tambahadvertisement(){
		$data['aku'] = $this->aku;
		$idhrd = $this->aku['id_hrd'];
		$now = date("Y-m-d H:i:s");
    $data_masuk = array(
			'id_tipe' => $this->input->post('nama_tipe'),
			'job_id' => $this->input->post('job_name'),
			'jobdetail_name' => $this->input->post('jobdetail_name'),
			'jobdetail_desc' => $this->input->post('jobdetail_desc'),
			'jobdetail_status' => $this->input->post('jobdetail_status'),
			'jobdetail_persyaratan' => $this->input->post('jobdetail_persyaratan'),
			'jobdetail_tugas' => $this->input->post('jobdetail_tugas'),
			'id_hrd' => $idhrd,
			'jobdetail_modiftime' => $now,
			'jobdetail_is_pagejobdetail' => $this->input->post('jobdetail_is_pagejobdetail')
		);
    $this->lowongan_model->insert_data('jobdetail', $data_masuk);
    $where = array( 'jobdetail_name' => $this->input->post('jobdetail_name') );
    $info = $this->lowongan_model->get_data($where, 'jobdetail');
    if ($info >=1){
		$this->session->set_flashdata('pesan',
			'<div id=id class="alert alert-success alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<strong>Advertisement berhasil ditambahkan</strong>
							</div>');
						redirect(base_url('adv/advertisement'));
					} else {
						echo "<script>alert('User gagal bertambah');</script>";
						$this->session->set_flashdata('pesan',
							'<div id=id class="alert alert-danger" role="alert">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<strong>Advertisement gagal ditambahkan</strong>
							</div>');
						redirect(base_url('adv/advertisement'));
					}
		// redirect(base_url('adv/advertisement'));
  }
	function hapusadvertisement(){
		$where = array('jobdetail_id' => $this->uri->segment(3));
		$this->lowongan_model->delete_data($where,'jobdetail');
		$where = array( 'jobdetail_id' => $this->uri->segment(3) );
		$info = $this->lowongan_model->get_data($where, 'jobdetail');
		if ($info == null){
			$this->session->set_flashdata('pesan',
								'<div id=id class="alert alert-success alert-dismissable">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
													<strong>Advertisement berhasil dihapus</strong>
												</div>');
											redirect(base_url('adv/advertisement'));
										} else {
											echo "<script>alert('Advertisement gagal dihapus');</script>";
											$this->session->set_flashdata('pesan',
												'<div id=id class="alert alert-danger" role="alert">
													<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
													<strong>Advertisement gagal dihapus</strong>
												</div>');
											redirect(base_url('adv/advertisement'));
										}
		// redirect(base_url('adv/advertisement'));
	}
	public function editadvertisement(){ 
		$where = array('jobdetail_id' => $this->uri->segment(3));
		$where2 = $this->uri->segment(3);
		$data['jobdetail'] = $this->lowongan_model->get_data($where,'jobdetail');
		$data['kategori'] = $this->lowongan_model->tampil_data('lowongan_kategori')->result();
		$data['subkategori'] = $this->lowongan_model->tampil_data('job')->result();
		$data['jobdetail2'] = $this->lowongan_model->get_dataadv($where2)->row();
		//print_r($where);
		$this->load->view('admin/adv/form_adv2',$data);
		// print_r($data);
	}

	public function updateadvertisement(){
		$where = array('jobdetail_id' => $this->uri->segment(3));
		$data['aku'] = $this->aku;
		$idhrd = $this->aku['id_hrd'];
		$now = date("Y-m-d H:i:s");
		$data_masuk = array(
			'id_tipe' => $this->input->post('nama_tipe'),
			'job_id' => $this->input->post('job_name'),
			'jobdetail_name' => $this->input->post('jobdetail_name'),
			'jobdetail_desc' => $this->input->post('jobdetail_desc'),
			'jobdetail_status' => $this->input->post('jobdetail_status'),
			'jobdetail_persyaratan' => $this->input->post('jobdetail_persyaratan'),
			'jobdetail_tugas' => $this->input->post('jobdetail_tugas'),
			'id_hrd' => $idhrd,
			'jobdetail_modiftime' => $now,
			'jobdetail_is_pagejobdetail' => $this->input->post('jobdetail_is_pagejobdetail')
		);
			$this->lowongan_model->update_data($where, $data_masuk, 'jobdetail');
			$info = $this->lowongan_model->get_data($where, 'jobdetail');
		if ($info >=1){
		$this->session->set_flashdata('pesan',
			'<div id=id class="alert alert-success alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<strong>Advertisement berhasil diupdate</strong>
				</div>');
			redirect(base_url('adv/advertisement'));
		} else {
			echo "<script>alert('SubKategori gagal bertambah');</script>";
			$this->session->set_flashdata('pesan',
			'<div id=id class="alert alert-danger" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<strong>Advertisement gagal diupdate</strong>
			</div>');
			redirect(base_url('adv/advertisement'));
			}
			 // redirect(base_url('adv/advertisement'));
	} //akhir fungsi advertisement

// 2 ---------------------------------------------------------------------------------
	public function kategori(){
		$data['kategori'] = $this->lowongan_model->tampil_data('lowongan_kategori')->result();
		$this->load->view('admin/adv/table_kategori',$data);
	}
	public function form_kategori() //form kategori
	{
		$this->load->view('admin/adv/form_kategori');
	}
	public function tambahkategori(){
		$this->form_validation->set_rules("nama_tipe", "Nama Kategori", "trim|required|alpha");
		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');
	if ($this->form_validation->run()) {
	    $data_masuk = array( 'nama_tipe' => $this->input->post('nama_tipe'));
	    $this->lowongan_model->insert_data('lowongan_kategori', $data_masuk);
	    $where = array( 'nama_tipe' => $this->input->post('nama_tipe') );
	    $info = $this->lowongan_model->get_data($where, 'lowongan_kategori');
		    if ($info >=1){
				$this->session->set_flashdata('pesan',
					'<div id=id class="alert alert-success alert-dismissable">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<strong>Kategori berhasil ditambahkan</strong>
									</div>');
								redirect(base_url('adv/kategori'));
			} else {
								echo "<script>alert('User gagal bertambah');</script>";
								$this->session->set_flashdata('pesan',
									'<div id=id class="alert alert-danger" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<strong>Kategori gagal ditambahkan</strong>
									</div>');
								redirect(base_url('adv/kategori'));
							}
	} else{
		$error="";
				foreach ($_POST as $key => $value) {
					$data[$key] = form_error($key);
				}
				if ($data['nama_tipe']!=null) {
					$error = "Nama Kategori hanya boleh berisi huruf !";
				}else {
					$error = $data['nama_tipe'];
				} //var_dump($error); die;
		$this->session->set_flashdata('pesan',
				'<div id=id class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<strong>'.$error.'</strong>
				</div>');
		redirect(base_url('adv/form_kategori'));
		// redirect(base_url('adv/kategori'));
	}
  }
  function hapuskategori(){
		$where = array('id_tipe' => $this->uri->segment(3));
		$info2 = $this->lowongan_model->get_data($where, 'lowongan_kategori');
		$where2 = array('id_tipe' => $info2->id_tipe);
		$info3 = $this->lowongan_model->get_data($where2, 'job');
		// print_r($info3); die;
		if($info3 != null){
			echo "<script>alert('SubKategori gagal dihapus');</script>";
											$this->session->set_flashdata('pesan',
												'<div id=id class="alert alert-danger" role="alert">
													<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
													<strong>data kategori sedang digunakan!</strong>
												</div>');
											redirect(base_url('adv/kategori'));
		}else{
			$this->lowongan_model->delete_data($where,'lowongan_kategori');
		$info = $this->lowongan_model->get_data($where, 'lowongan_kategori');
		if ($info == null){
			$this->session->set_flashdata('pesan',
								'<div id=id class="alert alert-success alert-dismissable">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
													<strong>Kategori berhasil dihapus</strong>
												</div>');
											redirect(base_url('adv/kategori'));
										} else {
											echo "<script>alert('SubKategori gagal dihapus');</script>";
											$this->session->set_flashdata('pesan',
												'<div id=id class="alert alert-danger" role="alert">
													<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
													<strong>Kategori gagal dihapus</strong>
												</div>');
											redirect(base_url('adv/kategori'));
										}
		}

		// redirect(base_url('adv/kategori'));
	}
	public function editkategori(){
		$where = array('id_tipe' => $this->uri->segment(3));
		$data['kategori'] = $this->lowongan_model->get_data($where,'lowongan_kategori');
		//print_r($where);
		$this->load->view('admin/adv/form_kategori2',$data);
		// print_r($data);
	}
  public function updatekategori(){
		$where = array('id_tipe' => $this->uri->segment(3));
    $data_masuk = array( 'nama_tipe' => $this->input->post('nama_tipe'));
       $this->lowongan_model->update_data($where, $data_masuk, 'lowongan_kategori');
		$info = $this->lowongan_model->get_data($where, 'lowongan_kategori');
		if ($info >=1){
		$this->session->set_flashdata('pesan',
			'<div id=id class="alert alert-success alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<strong>Kategori berhasil diupdate</strong>
				</div>');
			redirect(base_url('adv/kategori'));
		} else {
			echo "<script>alert('SubKategori gagal bertambah');</script>";
			$this->session->set_flashdata('pesan',
			'<div id=id class="alert alert-danger" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<strong>Kategori gagal diupdate</strong>
			</div>');
			redirect(base_url('adv/kategori'));
			}
			 //redirect(base_url('adv/kategori'));
	} //akhir fungsi kategori

// 3 --------------------------------------------------------------------------------
	public function subkategori(){
		$data['subkategori'] = $this->lowongan_model->tampil_dataSub()->result();
		$this->load->view('admin/adv/table_subkategori',$data);
	}
	public function form_subkategori() //form kategori
	{
		$data['aku'] = $this->aku;
		$idhrd = $this->aku['id_hrd'];
		$data['hrd'] = $this->hrd_model->get_hrd($idhrd);
		$data['kategori'] = $this->lowongan_model->tampil_data('lowongan_kategori')->result();
		// $data['subkategori'] = $this->lowongan_model->tampil_data('job')->result();
		$this->load->view('admin/adv/form_subkategori',$data);
	}
	public function tambahsubkategori() //jadi satu sama sub kategori
	{
		$data['aku'] = $this->aku;
		$idhrd = $this->aku['id_hrd'];
		$nmfile = slug($this->input->post('job_name')); //echo "IT Programerz Jos"

					$config['upload_path']          = 'uploads/jobimage';
					$config['file_name']            = $nmfile;
					$config['allowed_types']        = 'jpeg|jpg|png|bmp';
					$config['max_size']             = 5000; //max 5 mb
					$config['min_width']            = 128;
					$config['min_height']           = 128;
// echo SELF;
// echo "<pre>"; print_r($config);
					$this->load->library('upload');
					$this->upload->initialize($config);

					if ( ! $this->upload->do_upload('adminfile')){
							echo "<script>alert('SubKategori gagal bertambah, foto gagal masuk!');</script>";
							$this->session->set_flashdata('pesan',
								'<div id=id class="alert alert-danger" role="alert">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<strong>SubKategori gagal bertambah, foto gagal masuk!</strong>
									</div>');
							redirect(base_url('adv/subkategori'));
					}else{
						$gbr = $this->upload->data();
						$now = date("Y-m-d H:i:s");
						$data_masuk = array(
							'id_tipe' => $this->input->post('nama_tipe'),
							'job_name' => $this->input->post('job_name'),
							'job_desc' => $this->input->post('job_desc'),
							'job_file'     => $gbr['file_name'],
							'job_status' => $this->input->post('job_status'),
							'job_hrd' => $idhrd,
						 	'job_modiftime' => $now,
						 	'job_is_listjob' => $this->input->post('job_is_listjob'),
							'jobslug' => slug($this->input->post('job_name'))
						);
						$data = array('upload_data' => $this->upload->data());
						$this->lowongan_model->insert_data('job', $data_masuk);
						$where = array( 'job_name' => $this->input->post('job_name') );
					    $info = $this->lowongan_model->get_data($where, 'job');
					    if ($info >=1){
							$this->session->set_flashdata('pesan',
								'<div id=id class="alert alert-success alert-dismissable">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
													<strong>SubKategori berhasil ditambahkan</strong>
												</div>');
											redirect(base_url('adv/subkategori'));
										} else {
											echo "<script>alert('SubKategori gagal bertambah');</script>";
											$this->session->set_flashdata('pesan',
												'<div id=id class="alert alert-danger" role="alert">
													<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
													<strong>SubKategori gagal ditambahkan</strong>
												</div>');
											redirect(base_url('adv/subkategori'));
										}
						// redirect(base_url('adv/subkategori'));
						}
				}
				function hapussubkategori(){
					$where = array('job_id' => $this->uri->segment(3));
					$info2 = $this->lowongan_model->get_data($where, 'job');
					$where2 = array('job_id' => $info2->job_id);
					$info3 = $this->lowongan_model->get_data($where2, 'jobdetail');
					if($info3 != null){
										echo "<script>alert('SubKategori gagal dihapus');</script>";
											$this->session->set_flashdata('pesan',
												'<div id=id class="alert alert-danger" role="alert">
													<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
													<strong>data Subkategori sedang digunakan!</strong>
												</div>');
											redirect(base_url('adv/subkategori'));
					}else{
					$this->lowongan_model->delete_data($where,'job');
					$info = $this->lowongan_model->get_data($where, 'job');
					if ($info == null){
						$this->session->set_flashdata('pesan',
								'<div id=id class="alert alert-success alert-dismissable">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
													<strong>SubKategori berhasil dihapus</strong>
												</div>');
											redirect(base_url('adv/subkategori'));
										} else {
											echo "<script>alert('SubKategori gagal dihapus');</script>";
											$this->session->set_flashdata('pesan',
												'<div id=id class="alert alert-danger" role="alert">
													<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
													<strong>SubKategori gagal dihapus</strong>
												</div>');
											redirect(base_url('adv/subkategori'));
										}
						}
					//redirect(base_url('adv/subkategori'));
				}
				public function editsubkategori(){
					$where = array('job_id' => $this->uri->segment(3));
					$where2 = $this->uri->segment(3);
					$data['kategori'] = $this->lowongan_model->tampil_data('lowongan_kategori')->result();
					$data['subkategori2'] = $this->lowongan_model->get_datasub($where2)->row();
					$data['subkategori'] = $this->lowongan_model->get_data($where,'job');
					//print_r($where);
					$this->load->view('admin/adv/form_subkategori2',$data);
					// print_r($data);
				}
				public function updatesubkategori(){
					$this->load->library('upload');
					$now = date("Y-m-d H:i:s");
					
					$nmfile = slug($this->input->post('job_name'));
					$config['upload_path']          = 'uploads/jobimage';
					$config['file_name']            = $nmfile;
					$config['allowed_types']        = 'jpeg|jpg|png';
					$config['max_size']             = 5000; //max 5 mb
					$config['min_width']            = 128;
					$config['min_height']           = 128;
			// echo SELF;
			// echo "<pre>"; print_r($config);

					$this->upload->initialize($config);
					if ( ! $this->upload->do_upload('adminfile')){

					//echo "gagal update";
					$where = array('job_id' => $this->uri->segment(3));
					$data_masuk = array(
						'id_tipe' => $this->input->post('nama_tipe'),
						'job_name' => $this->input->post('job_name'),
						'job_desc' => $this->input->post('job_desc'),
						'job_file'     => "none",
						'job_status' => $this->input->post('job_status'),
						'job_modiftime' => $now,
						'job_is_listjob' => $this->input->post('job_is_listjob')
					);
						 $this->lowongan_model->update_data($where, $data_masuk, 'job');
						 echo "<script>alert('SubKategori gagal dihapus');</script>";
											$this->session->set_flashdata('pesan',
												'<div id=id class="alert alert-danger" role="alert">
													<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
													<strong>Foto gagal diupdate</strong>
												</div>');
											redirect(base_url('adv/subkategori'));
					 }
					 else{
						$gbr = $this->upload->data();
						$now = date("Y-m-d H:i:s");
					$where = array('job_id' => $this->uri->segment(3));
					$data_masuk = array(
						'id_tipe' => $this->input->post('nama_tipe'),
						'job_name' => $this->input->post('job_name'),
						'job_desc' => $this->input->post('job_desc'),
						'job_file'     => $gbr['file_name'],
						'job_status' => $this->input->post('job_status'),
						'job_modiftime' => $now,
						'job_is_listjob' => $this->input->post('job_is_listjob'),
						'jobslug' => slug($this->input->post('job_name'))
					);
						 $this->lowongan_model->update_data($where, $data_masuk, 'job');
						 $info = $this->lowongan_model->get_data($where, 'job');
					if ($info >= 1){
						$this->session->set_flashdata('pesan',
								'<div id=id class="alert alert-success alert-dismissable">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
													<strong>SubKategori berhasil diupdate</strong>
												</div>');
											redirect(base_url('adv/subkategori'));
										} else {
											echo "<script>alert('SubKategori gagal dihapus');</script>";
											$this->session->set_flashdata('pesan',
												'<div id=id class="alert alert-danger" role="alert">
													<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
													<strong>SubKategori gagal diupdate</strong>
												</div>');
											redirect(base_url('adv/subkategori'));
										}
						 // redirect(base_url('adv/subkategori'));
					 }
				} //akhir fungsi subkategori

}
