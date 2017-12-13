<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends MY_Controller{

	function home(){

		$data["title"]			=	$GLOBALS["webname"];
		
		if($this->isLoggedin() == true){
			$data["loggedin"]		=	true;
		}else{
			$data["loggedin"]		=	false;
		}

		$this->load->view('main/v_home', $data);

	}


	function layanan_wedding(){

		$data["title"]			=	$GLOBALS["webname"];
		
		if($this->isLoggedin() == true){
			$data["loggedin"]		=	true;
		}else{
			$data["loggedin"]		=	false;
		}

		$this->load->view('layanan/v_wedding', $data);

	}

	function layanan_pesta(){
		
		$data["title"]			=	$GLOBALS["webname"];
		
		if($this->isLoggedin() == true){
			$data["loggedin"]		=	true;
		}else{
			$data["loggedin"]		=	false;
		}

		$this->load->view('layanan/v_pesta', $data);

	}

	function layanan_pengantin(){

		$data["title"]			=	$GLOBALS["webname"];
		
		if($this->isLoggedin() == true){
			$data["loggedin"]		=	true;
		}else{
			$data["loggedin"]		=	false;
		}

		$this->load->view('layanan/v_pengantin', $data);
		
	}

	function layanan_wisuda(){

		$data["title"]			=	$GLOBALS["webname"];
		
		if($this->isLoggedin() == true){
			$data["loggedin"]		=	true;
		}else{
			$data["loggedin"]		=	false;
		}

		$this->load->view('layanan/v_wisuda', $data);

		
	}

	function order(){
		
		$data["title"] = $GLOBALS["webname"];
		$data["iconpath"] = $GLOBALS["webiconpath"]; 

		$this->load->view('transaksi/v_order', $data);

		
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
