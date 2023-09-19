<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Product List</title>
  <!-- load bootstrap css file -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <h1>
      <center>Product List</center>
    </h1>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Product Name</th>
          <th scope="col">Price</th>
          <th width="200">Action</th>
          <th><a href="<?php echo
                        site_url('product/add_new/'); ?>" class="btn btn-sm btn-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
              </svg></a></th>
        </tr>
      </thead>
      <?php
      $count = 0;
      foreach ($product->result() as $row) :
        $count++;
      ?>
        <tr>
          <th scope="row"><?php echo $count; ?></th>
          <td><?php echo $row->product_name; ?></td>
          <td><?php echo number_format($row->product_price); ?></td>
          <td>
            <a href="<?php echo site_url('product/get_edit/' . $row->product_id); ?>" class="btn btn-sm btn-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z" />
                <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z" />
              </svg></a>
            <a href="<?php echo
                      site_url('product/delete/' . $row->product_id); ?>" class="btn btn-sm btn-danger" onclick="return confirm('yakin?');"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
              </svg></a>
          <td>
        </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  <!-- load jquery js file -->
  <script src="<?php echo
                base_url('assets/js/jquery.min.js'); ?>"></script>
  <!-- load bootstrap js file -->
  <script src="<?php echo
                base_url('assets/js/bootstrap.min.js'); ?>"></script>
  <!-- load sweetalert -->
  <script src="<?= base_url(); ?>assets/js/sweetalert2.all.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/myscript.js"></script>
</body>

</html>