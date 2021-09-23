<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model extends CI_Model {
    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function insertData($table,$data){
        $query = $this->db->insert($table,$data);
        if ($query) {
            return $this->db->insert_id();
        }else{
            return false;
        }
    }

    public function getSelectRowWhere($select,$table,$where){
        $this->db->select($select);
        $this->db->where($where);
        $query = $this->db->get($table);
        if ($query) {
            return $query->row();
        }else{
            return false;
        }
    }

    public function UpdateData($set,$where,$table){
        $this->db->set($set);
        $this->db->where($where);
        $query = $this->db->update($table);
        if ($query) {
            return true;
        }else{
            return false;
        }
    }

    public function getResult($table){
        $query = $this->db->get($table);
        if ($query) {
            return $query->result();
        }else{
            return false;
        }
    }

    public function getSelectWhereResult($select,$where,$table){
        $this->db->select($select);
        $this->db->where($where);
        $query = $this->db->get($table);
        if ($query) {
            return $query->result();
        }else{
            return false;
        }
    }

    public function sqlQuery($query){
        $data = $this->db->query($query);
        if($data){
            return $data->row();
        }else{
            return false;
        }
    }

    public function get_count($table) {
        return $this->db->count_all($table);
    }

   
	
}  