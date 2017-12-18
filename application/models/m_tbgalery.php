<?php
class m_tbgalery extends CI_Model{

	function select($kondisi){
		$this->db->select('*');
		$this->db->from('tbgalery');

		if($kondisi == "foto"){
			$this->db->like('namaGalery','foto');
		}else if($kondisi == "video"){
			$this->db->like('namaGalery','video');
		}

		return $this->db->get();
	}

}
?>