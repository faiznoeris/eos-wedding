<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends MY_Controller{

	function submitmessage(){

		if(!empty($_POST)){

			$nama = $this->input->post('nama');
			$email = $this->input->post('email');
			$nomorhp = $this->input->post('nomorhp');
			$judulpesan = $this->input->post('judulpesan');
			$pesan = $this->input->post('pesan');

			$msg = "<b>Nama:</b> ".$nama."<br><b>Email:</b> ".$email."<br><b>Nomor HP:</b> ".$nomorhp."<br><br><b>Isi Pesan:</b> <br>".$pesan;
			$subject = "[EOS - Kontak Kami] ".$judulpesan;

			if($this->sendMail($email,$msg,$subject)){
				redirect("#kontak");
			}else{
				redirect("#kontak");
			}

			

		}else{
			redirect('#kontak');
		}

		


	}





}
?>
