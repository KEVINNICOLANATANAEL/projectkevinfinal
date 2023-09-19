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
        <th scope="col">Nama Pemesan</th>
        <th scope="col">Alamat</th>
        <th scope="col">Tanggal Pemesanan</th>
        <th scope="col">Batas Pembayaran</th>
        <th scope="col">Aksi</th>

      </tr>
    </thead>

    <tbody>
      <?php
      $no = 1;
      foreach ($invoice as $inv) :
      ?>
        <tr>
          <th scope="row"><?php echo $no++ ?></th>
          <td><?php echo $inv->nama ?></td>
          <td><?php echo $inv->alamat ?></td>
          <td><?php echo $inv->tanggal_pesan ?></td>
          <td><?php echo $inv->batas_bayar ?></td>
          <td><?php echo anchor('invoice/detail/' . $inv->id_invoice, '<div class="btn btn-sm btn-primary">detail</div>') ?></td>
        </tr>
      <?php endforeach; ?>
    <tbody>
  </table>

</div>