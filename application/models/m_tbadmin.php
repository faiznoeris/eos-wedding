<?php
class m_tbadmin extends CI_Model{

	function get_field($field,$data){
		$this->db->select($field);
		$this->db->from("tbadmin");

		$this->db->like($field, $this->db->escape_str($data));

		$this->db->limit(1);
		$res = $this->db->get();

		return $res;
	}


	function checkPassword($uname,$pass){

		$this->db->select("*");
		$this->db->from("tbadmin");
		$this->db->like("username", $uname);
		$this->db->where("pass", $pass);

		$this->db->limit(1);
		$res = $this->db->get();

		return $res;
	}


	function update_login($uname, $pwd_hash){

		$res = $this->db->query("SELECT * FROM `tbadmin` WHERE username LIKE '%".$uname."%' AND pass = '".$pwd_hash."'");
		$row = $res->row();

		$newdata = array(
			'idAdmin'				=> $row->idAdmin,
			'username' 				=> $row->username,
			'pass'					=> $row->pass,
			'admin'					=> TRUE
		);

		$this->session->set_userdata($newdata);

		return true;

	}
}
?>