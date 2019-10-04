
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <td>
              <a class="btn btn-success " style="float: right;" href="<?php echo site_url('User/showAddUser') ?>">Tambah Data</a>
            </td>
            <h5 class="card-title mb-4">Kelola User</h5>

            <hr>
            <div class="table-responsive">
              <table class="table center-aligned-table">
                <thead>
                  <tr>
                    <th class="border-bottom-0">ID Admin</th>
                    <th class="border-bottom-0">Username Admin</th>
                    <th class="border-bottom-0">Password Admin</th>
                    <th class="border-bottom-0">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php

foreach ($data->result_array() as $i):

	$id_admin = $i['id_admin'];
	$username = $i['username'];
	$password = $i['password'];
	$role = $i['role'];
	?>
					                   <tr>
					                    <td>  <?php echo $id_admin; ?>
					                    <input type="hidden" name="id_admin" value="<?php echo $id_admin ?>">
					                  </td>
					                  <td><?php echo $username; ?> </td>
					                  <td><?php echo $password; ?> </td>
					                  <td>
					                   <a class="btn btn-primary" href="<?php echo site_url('User/showEditUser/' . $id_admin) ?>">Edit</a>
					                   <a class="btn btn-danger" href="<?php echo site_url('User/delete/' . $id_admin) ?>">Hapus</a>
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
