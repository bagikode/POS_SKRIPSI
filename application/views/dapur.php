
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title mb-4">Order</h5>
            <hr>
            <div class="table-responsive">
                <table class="table center-aligned-table">
                  <thead>
                    <tr>
                      <th class="border-bottom-0">Table Number</th>
                      <th class="border-bottom-0">Food Name</th>
                      <th class="border-bottom-0">Type of Menu</th>
                      <th class="border-bottom-0">Quantity</th>
                      <th class="border-bottom-0">Order Time</th>
                      <th class="border-bottom-0">Status</th>
                      <th class="border-bottom-0"></th>
                      <th class="border-bottom-0"></th>
                      <th class="border-bottom-0"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php

foreach ($data->result_array() as $i):

	$id_keranjang = $i['id_keranjang'];
	$no_meja = $i['no_meja'];
	$nama_menu = $i['nama_menu'];
	$jenis_menu = $i['jenis_menu'];
	$total_barang = $i['total_barang'];
	$tanggal = $i['tanggal'];
	$status = $i['status'];
	?>
										                     <tr>
										                       <td>  <?php echo $no_meja; ?>
										                       <input type="hidden" name="id_keranjang" value="<?php echo $id_keranjang ?>">
										                     </td>
										                     <td><?php echo $nama_menu; ?> </td>
										                     <td><?php echo $jenis_menu; ?> </td>
										                     <td><?php echo $total_barang; ?> </td>
										                     <td><?php echo $tanggal; ?> </td>
										                     <td><label class="badge badge-warning"><?php echo $status; ?> </label></td>
										                     <td>
				                                  <a class="btn btn-success" href="<?php echo site_url('dapur/update/' . $id_keranjang) ?>">Submit</a></td>

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
