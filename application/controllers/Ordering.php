<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ordering extends MY_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('m_tblayanan','m_tbtransaksi','m_tbcustomer'));
	}

	// function destroycart(){
	// 	$this->cart->destroy();
	// 	redirect('');
	// }

	function addtocart(){

		$layanan = $this->uri->segment(3);

		$tblayanan = $this->m_tblayanan->select("one-withname",$layanan)->row();

		$data_cart = array(
			'id'      => 'transaksi_'.rand(0,1000),
			'qty'     => 1,
			'price'   => $tblayanan->hargaLayanan,
			'name'    => $tblayanan->jenisLayanan
		);

		$this->cart->product_name_rules = '[:print:]';

		if($this->cart->total_items() == 0){
			$this->cart->insert($data_cart);
			redirect('order');
		}else{
			redirect('order');
		}

	}

	function destroy(){
		$this->session->sess_destroy();
	}

	function removeitem(){

		$id = $this->uri->segment(3);

		$this->cart->remove($id);

		redirect('order');
	}

	function placeorder(){

		if(!empty($_POST)){
			date_default_timezone_set('Asia/Jakarta');

			$firstname = $this->input->post('firstname');
			$lastname = $this->input->post('lastname');
			$address = $this->input->post('address');
			$city = $this->input->post('city');
			$nomorhp = $this->input->post('nomorhp');
			$email = $this->input->post('email');

			$createaccount = $this->input->post('createaccount');

			if(!empty($this->input->post('info'))){
				$additionalinfo = $this->input->post('info');
			}else{
				$additionalinfo = "-";
			}

			$metodepembayaran = $this->input->post('metodepembayaran');

			$term = $this->input->post('term');

			$date = date('Y-m-d H:i:s');

			$rowidcart = $this->uri->segment(3);




			$dataitem = $this->cart->get_item($rowidcart);
			$idlayanan = $this->m_tblayanan->select("one-withname",$dataitem['name'])->row()->idLayanan;
			$datalayanan = $this->m_tblayanan->select("",$idlayanan)->row();





			if($createaccount == "on"){

				if($this->m_tbcustomer->checkRegisteredUser($firstname)->num_rows() > 0){
					redirect('login');	
				}else{
					$password = $this->input->post('password');
					$password_hash = $this->encryptPassword($password);
				}

			}else{
				$password_hash = "-";
			}


			$data_account = array(
				'username' => $firstname,
				'pass'	=>	$password_hash,
				'firstName' => $firstname,
				'lastName' => $lastname,
				'kota' => $city,
				'alamat' => $address,
				'telp' => $nomorhp,
				'email' => $email,
				'optionalInformation' => $additionalinfo
			);

			if($this->isLoggedin() != true){
				$this->m_tbcustomer->insert($data_account);	
				$idcust = $this->m_tbcustomer->getCustLastId();


				$sessiondata = array(
					'idCust' => $idcust,
					'username' => $firstname,
					'pass'	=>	$password_hash,
					'name' => $firstname." ".$lastname,
					'kota' => $city,
					'alamat' => $address,
					'telp' => $nomorhp,
					'email' => $email,
					'optionalInformation' => $additionalinfo,
					'namalayanan' => $datalayanan->jenisLayanan,
					'hargalayanan' => $datalayanan->hargaLayanan,
					'metodepembayaran' => $metodepembayaran
				);

				$this->session->set_userdata($sessiondata);
			}else{
				$session = $this->session->all_userdata();
				$idcust = $session['idCust'];

				$this->session->set_userdata('namalayanan', $datalayanan->jenisLayanan);
				$this->session->set_userdata('hargalayanan', $datalayanan->hargaLayanan);
				$this->session->set_userdata('metodepembayaran', $metodepembayaran);
			}

			$data_transaksi = array(
				'idTransaksi' => $dataitem['id'],
				'idLayanan' => $idlayanan,
				'harga'	=>	$dataitem['price'],
				'jenisBayar' => $metodepembayaran,
				'tglTransaksi' => $date,
				'idCust' => $idcust,
				'status' => 'pending'
			);

			$this->m_tbtransaksi->insert($data_transaksi);

			// $this->destroycart();
			$this->cart->destroy();

			redirect('detailorder');

		}

	}

}
?>
