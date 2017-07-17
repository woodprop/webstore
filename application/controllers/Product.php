<?php

class Product extends CI_Controller{

    protected $id;
    protected $name;
    protected $brand;
    protected $price;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('product_model');
        $this->load->helper('url_helper');

        session_start();
    }

    public function index(){
        $products = $this->product_model->get_all_products();
        $data['products'] = $products;
        $data['page_title'] = 'Все товары';

        $this->load->view('templates/header', $data);
        $this->load->view('product/index', $data);
    }

    public function show_product($id = NULL){

        if ($id === NULL) {
            $this->index();     //ToDo Причесать
            die();
        }

        $product = $this->product_model->get_product($id);

        $data['product'] = $product;
        $data['page_title'] = "$product->name - описание товара";

        $this->load->view('templates/header', $data);
        $this->load->view('product/product', $data);

    }

    public function buy($id){
        $this->product_model->to_basket($id);
//        ДАЛЕЕ ИДЕТ ДЕЙСТВИЕ ПОСЛЕ ДОБАВЛЕНИЯ В КОРЗИНУ

        redirect('Basket');
    }

}