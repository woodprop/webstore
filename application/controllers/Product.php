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
//        $this->load->helper('url_helper');

    }

    public function index(){
        echo "Hello from product class!";
    }

    public function product_show(){





        //Вот это - тестовая хрень

//        $data['products'] = $this->product_model->get_all_products();

        if (isset($_GET['id'])) {
            $data['products'] = $this->product_model->get_product_by_id($_GET['id']);
        }
        else {
            $data['products'] = $this->product_model->get_all_products();
        }


        // Конец теста



        $data['page_title'] = "Yeah, MotherFucker!";
//        $data['product_name'] = $this->name;

        $this->load->view('templates/header', $data);
        $this->load->view('product/product', $data);

    }


}