<?php

class Product_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_all_products(){

        $query = $this->db->get('product');
        return $query->result_array();
    }

    public function get_product($id){
        $this->db->select('*');
        $this->db->from('product');
        $this->db->join('product_image', 'id = product_id');
        $this->db->having('id', $id);
        $query = $this->db->get();
        return $query->row();
    }

}