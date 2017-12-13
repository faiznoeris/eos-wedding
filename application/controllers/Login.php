<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('m_tblayanan','m_tbtransaksi','m_tbcustomer'));
	}

	function login() {
		$username 						= 	$this->input->post('username');
		$password						= 	$this->input->post('password');
		$password_hash 					= 	$this->encryptPassword($password);

		if ($this->m_users->get_field("username","",$username,"")->num_rows() == 0){
			$this->session->set_flashdata('error','*Username tidak terdaftar!');
			redirect('login/gagal');
		}else if ($this->m_users->get_field("loggedin","",$username,"")->row()->loggedin == 1){
			$this->session->set_flashdata('error','*User sudah login!');
			redirect('login/gagal');
		}else if ($this->m_users->get_field("password","username",$password_hash,$username)->num_rows() == 0){
			$this->session->set_flashdata('error','*Password salah');
			redirect('login/gagal');
		}

		if ($this->m_users->update_login($username,$password_hash)){
			redirect(""); //login sukses
		}else{	
			$this->session->set_flashdata('error','*Terjadi kesalahan saat login!');
			redirect("/login/gagal");
		}
	}	


	function logout() {
		$array_items = array('id_user','email','user_lvl','username','date_joined','loggedin');
		
		$session = $this->session->all_userdata();

		$this->m_users->update_logout($session['id_user']);

		$this->session->unset_userdata($array_items);
		$this->session->sess_destroy();
		
		redirect("");
	}
	
}
?>
