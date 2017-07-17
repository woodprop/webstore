<?php

class Product_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_all_products(){
        $this->db->select('*');
        $this->db->from('product');
        $this->db->join('product_image', 'id = product_id');
        $query = $this->db->get();
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

    public function to_basket($id){
        $_SESSION['basket'][] = $id;
    }

    public function del_from_basket($id){
        $key = array_search($id, $_SESSION['basket']);
        unset($_SESSION['basket'][$key]);
    }

    public function get_basket(){
        foreach ($_SESSION['basket'] as $id) {
            $basket[] = $this->get_product($id);
        }
        return $basket;

    }
}