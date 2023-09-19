<?php
class Katalog_product extends CI_Controller
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
        $this->load->view('katalog_view', $data);
        $this->load->view('template/footer');
    }
    public function tambah_ke_keranjang($id)
    {
        $barang = $this->product_model->find($id);
        $data = array(
            'id'      => $barang->product_id,
            'qty'     => 1,
            'price'   => $barang->product_price,
            'name'    => $barang->product_name,
        );

        $this->cart->insert($data);
        redirect('katalog_product');
    }
    public function detail_keranjang()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('keranjang');
        $this->load->view('template/footer');
    }
    public function hapus_keranjang()
    {
        $this->cart->destroy();
        redirect('katalog_product');
    }
    public function pembayaran()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('pembayaran');
        $this->load->view('template/footer');
    }
    public function proses_pesanan()
    {
        $di_proses = $this->invoice_model->index();
        if ($di_proses) {
            $this->cart->destroy();
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('proses_pesanan');
            $this->load->view('template/footer');
        } else {
            echo "Maaf, Pesanan anda gagal diproses";
        }
    }
}
