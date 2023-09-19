<?php
class Invoice extends CI_Controller
{

  public function index()
  {
    $data['invoice'] = $this->invoice_model->tampil_data();
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('invoice', $data);
    $this->load->view('template/footer');
  }




  public function detail($id_invoice)
  {
    $data['invoice'] = $this->invoice_model->ambil_id_invoice($id_invoice);
    $data['pesanan'] = $this->invoice_model->ambil_id_pesanan($id_invoice);
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('detail_invoice', $data);
    $this->load->view('template/footer');
  }
}
