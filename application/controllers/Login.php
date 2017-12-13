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

		if ($this->m_tbcustomer->get_field("username",$username)->num_rows() == 0 && $this->m_tbcustomer->get_field("email",$username)->num_rows() == 0){
			$this->session->set_flashdata('error','*Username / Email tidak terdaftar!');
			redirect('login/gagal');
		}else if($this->m_tbcustomer->checkPassword("username",$username,$password_hash)->num_rows() == 0 && $this->m_tbcustomer->checkPassword("email",$username,$password_hash)->num_rows() == 0){
			$this->session->set_flashdata('error','*Password salah');
			redirect('login/gagal');
		}

		if ($this->m_tbcustomer->update_login($username,$password_hash)){
			redirect("checkout"); //login sukses
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
