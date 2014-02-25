<?php
class User_model extends CI_Model {
	
	private $tbl_user= 'users';
	
	function __construct(){
		parent::__construct();
	}
	
	function list_all(){
		$this->db->order_by('id','asc');
		return $this->db->get($tbl_user);
	}
	
	function count_all(){
		return $this->db->count_all($this->tbl_user);
	}
	
	function get_paged_list($limit = 10, $offset = 0){
		$this->db->order_by('id','asc');
		return $this->db->get($this->tbl_user, $limit, $offset);
	}
	
	function get_by_id($idUser){
		$this->db->where('id', $idUser);
		return $this->db->get($this->tbl_user);
	}
	
	function save($user){
		$this->db->insert($this->tbl_user, $user);
		return $this->db->insert_id();
	}
	
	function update($idUser, $user){
		$this->db->where('id', $idUser);
		$this->db->update($this->tbl_user, $user);
	}
	
	function delete($idUser){
		$this->db->where('id', $idUser);
		$this->db->delete($this->tbl_user);
	}
}

/* End of file user_model.php */
/* Location: ./application/model/user_model.php */