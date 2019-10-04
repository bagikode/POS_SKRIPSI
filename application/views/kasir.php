
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title mb-4">Pembayaran</h5>
            <div class="table-responsive">
              <form action="<?php echo site_url('Kasir/tambah_aksi'); ?>" method="post" >
                <table class="table center-aligned-table">
                  <thead>
                    <tr>
                      <th class="border-bottom-0">Table Number</th>
                      <th class="border-bottom-0">Food Name</th>
                      <th class="border-bottom-0">Total Item</th>
                      <th class="border-bottom-0">Status</th>
                      <th class="border-bottom-0">Total Price</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php

foreach ($showbill->result_array() as $i):

	$no_meja = $i['no_meja'];
	$nama_menu = $i['nama_menu'];
	$total_harga = $i['total_harga'];
	$total_barang = $i['total_barang'];
	$status = $i['status'];
	?>
										                     <input type="hidden" name="no_meja" value="<?php echo $no_meja; ?>">
										                     <tr>
										                       <td> <?php echo $no_meja; ?> </td>
										                       <td> <?php echo $nama_menu; ?> </td>
										                       <td><?php echo $total_barang; ?> </td>
										                       <td><label class="badge badge-teal"><?php echo $status; ?></label></td>
										                       <td>Rp.<?php echo number_format($total_harga, 0, ".", "."); ?> </td>
										                     </tr>
										                   <?php endforeach?>

                 </tbody>
                 <tr>

                  <td class="card-title mb-4" colspan="2">Amount of Pay</td>
                  <td class="card-title mb-4" colspan="2"><input type="text" name="total_barang" value="<?php echo $totalbarang; ?>" ></td>
                  <td class="card-title mb-4" >Rp. <input type="text" id="jumlah_keseluruhan" name="jumlah_keseluruhan" value="<?=$jumlah_keseluruhan?>" readonly/></td>
                </tr>
                <tr>
                  <td class="card-title mb-4">Pay</td>
                  <td>Rp. <input type="number" name="bayar" id="bayar" style="color:#2fc4a6;" /></td>
                  <td class="card-title mb-4">Change</td>
                  <td>Rp. <input type="text" name="kembali" id="kembali" style="color:#2fc4a6;" readonly/></td>
                  <td><input type="submit" class="btn btn-outline-success btn-sm"  value="Submit"></td>
                </tr>
              </table>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- content-wrapper ends -->
