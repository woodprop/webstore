<?php
class Basket extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('product_model');
        $this->load->helper('url_helper');

        session_start();
    }

    public function index(){
        $products = $this->product_model->get_basket();

        $data['page_title'] = 'Корзина';
        $data['products'] = $products;

        $this->load->view('templates/header', $data);
        $this->load->view('basket/index', $data);
    }


}