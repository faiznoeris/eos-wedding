<?php
class m_tblayanan extends CI_Model{

	function select($kondisi,$id){
		$this->db->select("*");
		$this->db->from("tbLayanan");

		if($kondisi = "one-withname"){
			$this->db->like('jenisLayanan', $id);
		}else{
			$this->db->where("idLayanan", $id);
		}

		return $this->db->get();
	}

}
?>