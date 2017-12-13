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

	function select(){

	}


	function get_field($field,$field2,$data,$data2){
		$this->db->select($field);
		$this->db->from("users");

		if($field == "loggedin"){ //get loggedin value
			$this->db->like("username", $this->db->escape_str($data));
		}else{
			$this->db->like($field, $this->db->escape_str($data));
		}

		if($data2 != ""){
			$this->db->like($field, $this->db->escape_str($data));
			$this->db->like($field2, $this->db->escape_str($data2));
		}

		$this->db->limit(1);
		$res = $this->db->get();

		return $res;
	}


	function update_login($uname, $pwd_hash){

		$this->db->select("*, DATE_FORMAT(date_joined, '%d - %M - %Y') as date_joined2");
		$this->db->from("users");
		$this->db->like("username", $uname);
		$this->db->like("password", $pwd_hash);
		$this->db->limit(1);

		$res = $this->db->get();
		$row = $res->row();

		$this->db->set('loggedin', '1');
		$this->db->where('id_user', $row->id_user);

		if($this->db->update('users')){

			$newdata = array(
				'id_user'		=> $row->id_user,
				'email'			=> $row->email,
				'user_lvl'		=> $row->user_lvl,
				'username'  	=> $row->username,
				'date_joined' 	=> $row->date_joined2,
				'ava_path' 		=> $row->ava_path,
				'loggedin' 		=> TRUE
			);

			$this->session->set_userdata($newdata);

			return true;
		}

		return false;
	}
}
?>