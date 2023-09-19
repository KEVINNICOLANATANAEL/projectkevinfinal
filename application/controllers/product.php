<?php
class Product extends CI_Controller
{
   function __construct()
   {
      parent::__construct();
      $this->load->helper('url', 'form');
      $this->load->model('product_model');
      if ($this->session->userdata('role_id') != '1') {
         $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">Anda Belum login<button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
         redirect('auth/login');
      }
   }
   function index()
   {
      $data['product'] = $this->product_model->get_product();
      $this->load->view('template/header');
      $this->load->view('template/sidebar');
      $this->load->view('product_view', $data);
      $this->load->view('template/footer');
   }
   function add_new()
   {
      $this->load->view('template/header');
      $this->load->view('template/sidebar');
      $this->load->view('add_product_view');
      $this->load->view('template/footer');
   }
   function save()
   {
      $product_name = $this->input->post('product_name');
      $product_price = $this->input->post('product_price');
      $product_picture = $_FILES['picture']['name'];
      $config['upload_path'] = './upload/';
      $config['allowed_types'] = 'gif|jpg|png';
      $config['max_size'] = 10000;
      $this->load->library('upload', $config);
      $this->upload->initialize($config);
      if (!$this->upload->do_upload('picture')) {
         echo "Gagal Upload Gambar";
      } else {
         $this->product_model->save($product_name, $product_price, $product_picture);
         redirect('product');
      }
   }
   function delete()
   {
      $product_id = $this->uri->segment(3);
      $this->product_model->delete($product_id);
      redirect('product');
   }
   function get_edit()
   {
      $product_id = $this->uri->segment(3);
      $result = $this->product_model->get_product_id($product_id);
      if ($result->num_rows() > 0) {
         $i = $result->row_array();
         $data = array('product_id' => $i['product_id'], 'product_name' => $i['product_name'], 'product_price' => $i['product_price']);
         $this->load->view('edit_product_view', $data);
      } else {
         echo "Data Was Not Found";
      }
   }
   function update()
   {
      $product_id = $this->input->post('product_id');
      $product_name = $this->input->post('product_name');
      $product_price = $this->input->post('product_price');
      $this->product_model->update($product_id, $product_name, $product_price);
      redirect('product');
   }
}
