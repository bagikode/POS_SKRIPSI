<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>FOODO Restaurant</title>

  <style>
  .invoice-box {
    max-width: 800px;
    margin: auto;
    padding: 30px;
    border: 1px solid #eee;
    box-shadow: 0 0 10px rgba(0, 0, 0, .15);
    font-size: 16px;
    line-height: 24px;
    font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    color: #555;
  }

  .invoice-box table {
    width: 100%;
    line-height: inherit;
    text-align: left;
  }

  .invoice-box table td {
    padding: 5px;
    vertical-align: top;
  }

  .invoice-box table tr td:nth-child(2) {
    text-align: right;
  }

  .invoice-box table tr.top table td {
    padding-bottom: 20px;
  }

  .invoice-box table tr.top table td.title {
    font-size: 45px;
    line-height: 45px;
    color: #333;
  }

  .invoice-box table tr.information table td {
    padding-bottom: 40px;
  }

  .invoice-box table tr.heading td {
    background: #eee;
    border-bottom: 1px solid #ddd;
    font-weight: bold;
  }

  .invoice-box table tr.details td {
    padding-bottom: 20px;
  }

  .invoice-box table tr.item td{
    border-bottom: 1px solid #eee;
  }

  .invoice-box table tr.item.last td {
    border-bottom: none;
  }

  .invoice-box table tr.total td:nth-child(2) {
    border-top: 2px solid #eee;
    font-weight: bold;
  }

  @media only screen and (max-width: 600px) {
    .invoice-box table tr.top table td {
      width: 100%;
      display: block;
      text-align: center;
    }

    .invoice-box table tr.information table td {
      width: 100%;
      display: block;
      text-align: center;
    }
  }

  /** RTL **/
  .rtl {
    direction: rtl;
    font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
  }

  .rtl table {
    text-align: right;
  }

  .rtl table tr td:nth-child(2) {
    text-align: left;
  }
</style>
</head>

<body>


		   <div class="invoice-box">
		     <table cellpadding="0" cellspacing="0">
		       <tr class="top">
		         <td colspan="2">
		           <table>
		             <tr>
		               <td class="title">
		                 <img src="<?php echo base_url('assets/images/foodo_logo.png') ?>" style="width:100%; max-width:100px;">
		               </td>

		               <td>
		                Date of Checkout : <?php
$tgl = $invoiceprint->result_array();
echo $tgl[0]['tanggal_kasir']?><br>
		                 Table Number : 1
		               </td>
		             </tr>
		           </table>
		         </td>
		       </tr>

		       <tr class="heading">
		         <td>
		           ID ORDER
		         </td>

		         <td>
		          <?php echo $tgl[0]['id_order'] ?>
		        </td>
		      </tr>

		      <tr class="heading">
		       <td>
		         Food Name

		       </td>

		       <td>
		         Total Item & Price
		       </td>
		     </tr>
<?php

foreach ($invoiceprint->result_array() as $i):

	$nama_menu = $i['nama_menu'];
	$total_barang = $i['total_barang'];
	$total_harga = $i['total_harga'];
	?>
																								     <tr class="item">
																								       <td>
																								         <?php echo $nama_menu; ?>
																								       </td>

																								       <td>
																								         ( <?php echo $total_barang; ?> ) Rp. <?php echo number_format($total_harga, 0, ".", "."); ?>
																								       </td>
																								     </tr>
																	                 <?php endforeach?>
							     <tr class="total">
							       <td></td>

							       <td>
							        Total: Rp. <?php echo number_format($tgl[0]['total'], 0, ".", "."); ?>
							      </td>
							    </tr>

							    <tr class="heading">
							     <td>
							       Pay
							     </td>

							     <td>
							       Rp. <?php echo number_format($tgl[0]['bayar'], 0, ".", "."); ?>
							     </td>
							   </tr>

							   <tr class="heading">
							     <td>
							       Change
							     </td>

							     <td>
							       Rp. <?php echo number_format($tgl[0]['kembali'], 0, ".", "."); ?>
							     </td>
							   </tr>

						 </table>
						</div>

</body>
</html>