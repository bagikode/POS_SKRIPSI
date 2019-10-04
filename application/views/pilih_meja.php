
<div class="main-panel">
	<div class="content-wrapper">
		<div class="row">
			<?php

foreach ($data->result_array() as $i):

	$no_meja = $i['no_meja'];

// 	if ($status == 'waiting') {
	// 		$warna = "bg-danger px-4 py-2 rounded";
	// 	} elseif ($status = 'done') {
	// 	$warna = "bg-danger px-4 py-2 rounded";
	// } elseif ($status = 'finish') {
	// 	$warna = "bg-success px-4 py-2 rounded";
	// }

	?>

					<div class="col-md-6 grid-margin">
						<a href="<?php echo site_url('Kasir/bill/' . $no_meja); ?>">
							<div class="card">
								<div class="card-body">
									<h4 class="card-title mb-0"></h4>
									<div class="d-flex justify-content-between align-items-center">
										<div class="d-inline-block pt-3">
											<div class="d-flex">
												<h2 class="mb-0">NO MEJA <?php echo $no_meja ?></h2>
												<div class="d-flex align-items-center ml-2">
												</div>
											</div>
											<!-- <small class="text-gray"><?php echo $status ?></small> -->
										</div>
										<div class="d-inline-block">
											<div class="bg-success px-4 py-2 rounded">
												<i class="mdi mdi-buffer text-white icon-lg"></i>
											</div>
										</div>
									</div>
								</div>
							</a>

						</div>

					</div>

				<?php endforeach?>
		</div>
	</div>
	<!-- content-wrapper ends -->
