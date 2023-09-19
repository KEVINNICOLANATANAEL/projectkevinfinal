<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body>

  <div class="container-fluid">

    <br>
    <h4>Detail Invoice</h4>
    <br>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Produk</th>
          <th scope="col">Jumlah Pesanan</th>
          <th scope="col">Harga Satuan</th>
          <th scope="col">Sub_total</th>

        </tr>
      </thead>

      <tbody>
        <?php
        $no = 1;
        $total = 0;
        foreach ($pesanan as $psn) :
        ?>
          <tr>
            <th scope="row"><?php echo $no++ ?></th>
            <td><?php echo $psn->nama_brg ?></td>
            <td><?php echo $psn->jumlah ?></td>
            <td align="">Rp.<?php echo number_format($psn->harga, 0, ',', '.') ?></td>
            <td align=" ">Rp. <?php echo number_format($psn->jumlah * $psn->harga, 0, ',', '.') ?></td>
          </tr>
        <?php $total += $psn->harga * $psn->jumlah;
        endforeach; ?>
        <td colspan="4" align="right">Total</td>
        <td>Rp. <?php echo number_format($total, 0, ',', '.') ?></td>
      <tbody>
    </table>

  </div>

  <script src=" <?php echo
                base_url('assets/js/jquery.min.js'); ?>">
  </script>
  <!-- load bootstrap js file -->
  <script src="<?php echo
                base_url('assets/js/bootstrap.min.js'); ?>"></script>
  <!-- load sweetalert -->
  <script src="<?= base_url(); ?>assets/js/sweetalert2.all.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/myscript.js"></script>
</body>

</html>