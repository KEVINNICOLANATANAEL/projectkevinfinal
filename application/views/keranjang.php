<!-- Custom fonts for this template-->
<link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<!-- Custom styles for this template-->
<link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">
<div class="container-fluid">

  <br>
  <h4>Keranjang Belanja</h4>
  <br>
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Product Name</th>
        <th scope="col">Qty</th>
        <th scope="col">Price</th>
        <th scope="col">Sub-Total</th>
      </tr>
    </thead>

    <tbody>
      <?php
      $no = 1;
      foreach ($this->cart->contents() as $items) :
      ?>
        <tr>
          <th scope="row"><?php echo $no++ ?></th>
          <td><?php echo $items['name'] ?></td>
          <td><?php echo $items['qty'] ?></td>
          <td align="">Rp.<?php echo number_format($items['price'], 0, ',', '.') ?></td>
          <td align="">Rp. <?php echo number_format($items['subtotal'], 0, ',', '.') ?></td>
        </tr>
      <?php endforeach; ?>
      <td colspan="4" align="center">Total</td>
      <td align="">Rp. <?php echo number_format($this->cart->total(), 0, ',', '.') ?></td>
    <tbody>
  </table>
  <div align="right">
    <a href="<?php echo base_url('katalog_product/hapus_keranjang') ?>">
      <div class="btn btn-sm btn-danger">Hapus Keranjang</div>
    </a>
    <a href="<?php echo base_url('katalog_product') ?>">
      <div class="btn btn-sm btn-primary">Lanjutkan Belanja</div>
    </a>
    <a href="<?php echo base_url('katalog_product/pembayaran') ?>">
      <div class="btn btn-sm btn-success">Pembayaran</div>
    </a>
  </div>
</div>


<!-- Bootstrap core JavaScript-->
<script src="../assets/vendor/jquery/jquery.min.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="../assets/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="../assets/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="../assets/js/demo/chart-area-demo.js"></script>
<script src="../assets/js/demo/chart-pie-demo.js"></script>