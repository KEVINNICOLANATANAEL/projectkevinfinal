<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Add New Product</title>
  <!-- load bootstrap css file -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/sb-admin-2.min.css" rel="stylesheet" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <h1>
      <center>Add Product</center>
    </h1>
    <!--Update enctype=multipart/form-data pada form -->
    <form action="<?php echo site_url('product/save'); ?>" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="formGroupExampleInput">Nama Barang</label>
        <input type="text" name="product_name" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput2">Harga Barang</label>
        <input type="text" name="product_price" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
      </div>
      <!-- Update untuk menyisipkan gambar -->
      <div class="form-group">
        <label for="formGroupExampleInput2">Foto/Gambar</label>
        <input type="file" name="picture" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
      </div>
      <!-- sampai sini untuk menyisipkan gambar -->
      <div class="form-group">
        <label for="formGroupExampleInput2">Deskripsi</label>
        <input type="text" name="product_description" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
      </div>
      <button type="submit class btn-primary">Submit</button>
    </form>
  </div>
  <!-- load jquery js file -->
  <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
  <!-- load bootstrap js file -->
  <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
</body>

</html>