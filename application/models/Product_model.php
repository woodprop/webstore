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

    public function get_product_by_id($id){
        $query = $this->db->get_where('product', array('id' => $id));
        return $query->result_array();
    }
}