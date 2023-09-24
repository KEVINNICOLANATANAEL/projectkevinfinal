<?php
class Hello extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('product_model');
    }
    public function index()
    {
        $data['product'] = $this->product_model->get_product();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('detail_view', $data);
        $this->load->view('template/footer');
    }
}
