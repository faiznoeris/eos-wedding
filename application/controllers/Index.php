<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends MY_Controller{

	function home(){

		$this->load->model(array('m_tbgalery'));

		$data["title"]			=	$GLOBALS["webname"];
		
		$data["data_foto"]		=	$this->m_tbgalery->select("foto")->result();
		$data["data_video"]		=	$this->m_tbgalery->select("video")->result();

		$this->load->view('main/v_home', $data);

	}


	function layanan(){
		$layanan = $this->uri->segment(2);

		$data["title"]			=	$GLOBALS["webname"];

		if(strpos($layanan, 'wedding')){
			$this->load->view('layanan/v_wedding', $data);
		}else if(strpos($layanan, 'pesta')){
			$this->load->view('layanan/v_pesta', $data);
		}else if(strpos($layanan, 'pengantin')){
			$this->load->view('layanan/v_pengantin', $data);
		}else if(strpos($layanan, 'wisuda')){
			$this->load->view('layanan/v_wisuda', $data);
		}
	}


	function order(){
		
		$data["title"] = $GLOBALS["webname"];

		$this->load->view('transaksi/v_order', $data);

		
	}


	function admindash(){

		$this->load->model(array('m_tbtransaksi'));
		
		$data["title"] = $GLOBALS["webname"];

		$data["data_transaksi"]	= $this->m_tbtransaksi->select()->result();

		$session = $this->session->all_userdata();

		if(!$session["admin"]){
			redirect("");
		}else{
			$this->load->view('admin/v_dashboard', $data);
		}
		
	}

	function adminlogin(){
		
		$data["title"]			=	$GLOBALS["webname"];

		if(isset($_SESSION['error'])){
			$data["error"]		=	$_SESSION['error'];
		}

		$session = $this->session->all_userdata();

		if(!$session["admin"]){
			$this->load->view('admin/v_login', $data);
		}else{
			redirect("admin/dashboard");
		}
	}


	function checkout(){
		
		$data["title"]			=	$GLOBALS["webname"];
		
		if($this->isLoggedin() == true){
			$session = $this->session->all_userdata();

			$data["loggedin"]		=	true;
			$data["name"] 			= 	$session["name"];
		}else{
			$data["loggedin"]		=	false;
		}

		if($this->cart->total_items() > 0){
			$this->load->view('transaksi/v_form_order', $data);
		}else{
			redirect('order');
		}

		

		
	}


	function login(){
		
		$data["title"]			=	$GLOBALS["webname"];

		if(isset($_SESSION['error'])){
			$data["error"]		=	$_SESSION['error'];
		}

		
		if($this->isLoggedin() == true){
			redirect("checkout");
		}else{
			$this->load->view('v_login', $data);
		}

		

		
	}


	function detail_order(){
		
		$this->load->model(array('m_tbcustomer'));

		$session = $this->session->all_userdata();

		$data["title"]			=	$GLOBALS["webname"];


		if (isset($session['name'])){
			$data["data_customer"] = $session;
			$this->load->view('transaksi/v_detail_order', $data);
		}else{
			redirect('');
		}
		

		

		
	}


}
?>
