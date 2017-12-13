<?php
class m_tbcustomer extends CI_Model{
	public $cust_lastId = "";

	function setCustLastId($id){
		$this->cust_lastId = $id;
	}

	function getCustLastId(){
		return $this->cust_lastId;
	}

	function insert($data){
		if($this->db->insert("tbcustomer", $data)){
			$insert_id = $this->db->insert_id();
			$this->setCustLastId($insert_id);
			return true;
		}
		return false;
	}

	function checkRegisteredUser($username){

		return $this->db->query("SELECT * FROM `tbcustomer` WHERE username LIKE '%".$username."%' AND NOT pass = '-'");

	}


	// function getCustData($idcust){
	// 	$this->db->select('*');
	// 	$this->db->from('tbcustomer');
	// 	$this->db->where('idCust',$idcust);

	// 	return $this->db->get();
	// }

	//login

	function get_field($field,$data){
		$this->db->select($field);
		$this->db->from("tbcustomer");

		$this->db->like($field, $this->db->escape_str($data));

		$this->db->limit(1);
		$res = $this->db->get();

		return $res;
	}


	function checkPassword($field,$uname,$pass){

		$this->db->select("*");
		$this->db->from("tbcustomer");
		if($field == "username"){
			$this->db->like("username", $uname);
		}else if($field == "email"){
			$this->db->where("email", $uname);
		}
		$this->db->where("pass", $pass);

		$this->db->limit(1);
		$res = $this->db->get();

		return $res;
	}


	function update_login($uname, $pwd_hash){

		$res = $this->db->query("SELECT * FROM `tbcustomer` WHERE (username LIKE '%".$uname."%' OR email = '".$uname."') AND pass = '".$pwd_hash."' AND NOT pass = '-'");
		$row = $res->row();

		$newdata = array(
			'idCust'				=> $row->idCust,
			'name'  				=> $row->firstName." ".$row->lastName,
			'username' 				=> $row->username,
			'pass'					=> $row->pass,
			'kota' 					=> $row->kota,
			'alamat' 				=> $row->alamat,
			'telp' 					=> $row->telp,
			'email' 				=> $row->email,
			'optionalInformation' 	=> $row->optionalInformation,
			'loggedin' 		=> TRUE
		);

		$this->session->set_userdata($newdata);

		return true;

	}
}
?>