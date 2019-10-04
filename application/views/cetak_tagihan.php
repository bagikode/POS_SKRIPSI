
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title mb-4">Print Bill</h5>
            <hr>
            <div class="table-responsive">
              <table class="table center-aligned-table">
                <thead>
                  <tr>
                    <th class="border-bottom-0">ID Order</th>
                    <th class="border-bottom-0">Table Number</th>
                    <th class="border-bottom-0">Total Item</th>
                    <th class="border-bottom-0">Total Price</th>
                    <th class="border-bottom-0">Amount of Pay</th>
                    <th class="border-bottom-0">Change</th>
                    <th class="border-bottom-0">Date</th>
                    <th class="border-bottom-0">Print Bill</th>
                    <th class="border-bottom-0"></th>
                  </tr>
                </thead>
                <tbody>
                  <?php

foreach ($tagihankasir->result_array() as $i):

	$id_order = $i['id_order'];
	$no_meja = $i['no_meja'];
	$total_barang = $i['total_barang'];
	$total_harga = $i['total'];
	$bayar = $i['bayar'];
	$kembali = $i['kembali'];
	$tanggal_kasir = $i['tanggal_kasir'];
	?>
						                   <tr>
						                    <td> <?php echo $id_order; ?> </td>
						                    <td> <?php echo $no_meja; ?> </td>
						                    <td> <?php echo $total_barang; ?> </td>
						                    <td> <?php echo $total_harga; ?> </td>
						                    <td> <?php echo $bayar; ?> </td>
						                    <td> <?php echo $kembali; ?> </td>
						                    <td> <?php echo $tanggal_kasir; ?></td>
						                    <td>
						                     <a class="btn btn-success" href="<?php echo site_url('Tagihan/cetakInvoice/' . $id_order) ?>" target="_blank">Print</a></td>

						                   </tr>
						                 <?php endforeach?>

               </tbody>
             </table>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
 <!-- content-wrapper ends -->
