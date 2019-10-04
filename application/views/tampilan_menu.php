<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <td>
              <a class="btn btn-success " style="float: right;" href="<?php echo site_url('Menu/showAddMenu') ?>">Tambah Data</a>
            </td>
            <h5 class="card-title mb-4">Kelola User</h5>

            <hr>
            <div class="table-responsive">
              <table class="table center-aligned-table">
                <thead>
                  <tr>
                    <th class="border-bottom-0">ID Menu</th>
                    <th class="border-bottom-0">Nama Menu</th>
                    <th class="border-bottom-0">Jenis Menu</th>
                    <th class="border-bottom-0">Harga</th>
                    <th class="border-bottom-0">Deskripsi Menu</th>
                    <th class="border-bottom-0">Gambar</th>
                    <th class="border-bottom-0">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php

foreach ($data->result_array() as $i):

	$id_menu = $i['id_menu'];
	$nama_menu = $i['nama_menu'];
	$jenis_menu = $i['jenis_menu'];
	$harga = $i['harga'];
	$deskripsi = $i['deskripsi'];
	$gambar = $i['gambar'];
	?>
						                   <tr>
						                     <td> <?php echo $id_menu; ?> </td>
						                     <td> <?php echo $nama_menu; ?> </td>
						                     <td> <?php echo $jenis_menu; ?> </td>
						                     <td> <?php echo $harga; ?> </td>
						                     <td> <?php echo $deskripsi; ?> </td>
						                     <td> <img src="<?php echo $gambar; ?>"> </td>
						                     <td>
						                      <a class="btn btn-primary" href="<?php echo site_url('Menu/showEditMenu/' . $id_menu) ?>">Edit</a>
						                      <a class="btn btn-danger" href="<?php echo site_url('Menu/delete/' . $id_menu) ?>">Hapus</a>
						                    </td>

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
