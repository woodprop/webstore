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
        if (empty($_SESSION['basket'])) {
            echo "Корзина пуста";
            die();
        }

        $products = $this->product_model->get_basket();

        $data['page_title'] = 'Корзина';
        $data['products'] = $products;

        $this->load->view('templates/header', $data);
        $this->load->view('basket/index', $data);
    }

    public function del($id){
        $this->product_model->del_from_basket($id);
        redirect('Basket/');
    }

}