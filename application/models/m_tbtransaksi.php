<?php
class m_tbtransaksi extends CI_Model{

	function insert($data){
		if($this->db->insert("tbtransaksi", $data)){
			return true;
		}
		return false;
	}

}
?>