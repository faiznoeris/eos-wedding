<?php
class m_tbtransaksi extends CI_Model{

	function select(){
		$this->db->select("*");
		$this->db->from("tbtransaksi");
		$this->db->join('tblayanan', 'tblayanan.idLayanan = tbtransaksi.idLayanan');

		return $this->db->get();
	}

	function insert($data){
		if($this->db->insert("tbtransaksi", $data)){
			return true;
		}
		return false;
	}

	function update($data,$id){
		$this->db->set($data);
		$this->db->where('idTransaksi', $id);
		$this->db->update('tbtransaksi');
	}
}
?>