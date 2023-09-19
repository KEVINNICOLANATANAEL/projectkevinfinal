<!-- Custom styles for this template-->
<link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">

<div class="container-fluid">
  <div class="col-md-2"></div>
  <div class="col-md-8">
    <div class="btn btn-sm btn-success">
      <?php
      $grand_total = 0;
      if ($keranjang = $this->cart->contents()) {
        foreach ($keranjang as $item) {
          $grand_total = $grand_total + $item['subtotal'];
        }
        echo "<h4>Total Belanja Anda: Rp." . number_format($grand_total, 0, ',', '.');

      ?>

    </div>
    <h3>Input Alamat Pengiriamn dan Pembayaran</h3>
    <form method="post" action="<?php echo base_url('') ?>katalog_product/proses_pesanan">
      <div class="form-group">
        <label for="exampleFormControlInput1">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Nama Lengkap</label>
        <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="Nama Lengkap">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Nomor Hp</label>
        <input type="text" name="no_hp" class="form-control" id="exampleFormControlInput1" placeholder="No Hp">
      </div>

      <div class="form-group">
        <label for="exampleFormControlSelect1">Jasa Pengiriman</label>
        <select class="form-control" name="jasa" id="exampleFormControlSelect1">
          <option>Tiki</option>
          <option>POS</option>
          <option>JNE</option>
        </select>
      </div>

      <div class="form-group">
        <label for="exampleFormControlSelect1">Metode pembayaran</label>
        <select class="form-control" name="jasa" id="exampleFormControlSelect1">
          <option>bank BRI-xxxxxx</option>
          <option>Gopay</option>
          <option>OVO</option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Alamat Lengkap</label>
        <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-sm btn-primary">Proses Pesanan</button>
    </form>

  <?php
      } else {
        echo "Keranjang Belanja anda masih kosong";
      }
  ?>
  </div>
  <div class="col-md-2"></div>
</div>