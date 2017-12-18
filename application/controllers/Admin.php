<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('m_tbtransaksi','m_tbadmin'));
	}

	function updatestatus(){

		$id = $this->uri->segment(3);
		$status = $this->uri->segment(4);

		$data = array(
			'status'    => $status
		);

		$this->m_tbtransaksi->update($data,$id);

		redirect("admin/dashboard");

	}


	function login() {
		$username 						= 	$this->input->post('username');
		$password						= 	$this->input->post('password');
		$password_hash 					= 	$this->encryptPassword($password);

		if ($this->m_tbadmin->get_field("username",$username)->num_rows() == 0){
			$this->session->set_flashdata('error','*Username tidak terdaftar!');
			redirect('login/gagal');
		}else if($this->m_tbadmin->checkPassword($username,$password_hash)->num_rows() == 0){
			$this->session->set_flashdata('error','*Password salah');
			redirect('login/gagal');
		}

		if ($this->m_tbadmin->update_login($username,$password_hash)){
			redirect("admin/dashboard"); //login sukses
		}else{	
			$this->session->set_flashdata('error','*Terjadi kesalahan saat login!');
			redirect("login/gagal");
		}
		// echo $password_hash;
	}	


	function logout() {
		$array_items = array('name','loggedin');
		
		$session = $this->session->all_userdata();

		$this->session->unset_userdata($array_items);
		$this->session->sess_destroy();
		
		redirect("");
	}

	

}
?>
