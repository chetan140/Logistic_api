<?php

class Main_model extends CI_Model{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function login_function($username,$password){
    $this->db->select('id,name,email,contact');
    $this->db->from('tbl_user');
    $this->db->where('contact',$username);
    $this->db->or_where('email',$username);
    $this->db->where('password',$password);
    $query = $this->db->get();
    if ($query) {
        return $query->result();
    }else{
        return false;
    }
}   

 public function insert_data($table,$data){
      $this->db->insert($table,$data);
      return true;
    }

 public function get_all_where($select,$table,$where,$order_by,$limit,$like=""){

		if (!empty($order_by)) {
			$this->db->order_by('id',$order_by);
		}
		if (!empty($limit)) {
			$this->db->limit($limit);
		}
		$this->db->select($select);
		$this->db->from($table);
		$this->db->where($where);
		if(!empty($like)){
			$this->db->like($like);
		}
		$query = $this->db->get();
		if ($query) {
			return $query->result_array();
		}else{
			return false;
		}
	}

	public function wallet_amount($data,$table)
    {
        $set=$this->db->insert('tbl_wallet',$data);
    }   

   
    public function show_wallet($user_id)
    {
      
       $this->db->where('user_id',$user_id);
       $set=$this->db->get('tbl_wallet');
       return $set->result();
    }

}