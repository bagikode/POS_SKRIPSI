<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
           <h5 class="card-title mb-4">Kelola User</h5>

           <hr>
           <div class="table-responsive">
            <?php foreach ($x as $u) {?>
            <form action="<?php echo site_url('User/editUser'); ?>" method="post">
              <div class="form-group">
                <label for="username">Username</label>
                <input type="hidden" name="id_admin" value="<?php echo $u->id_admin ?>">
                <input type="input" class="form-control" id="username" name="username" value="<?php echo $u->username ?>" placeholder="Masukan username">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" value="<?php echo $u->password ?>" placeholder="Masukan password">
              </div>
              <div class="form-group">
                <label for="role">Role</label>
                <select class="form-control" id="role" name="role">
                  <option value="dapur">Dapur</option>
                  <option value="kasir">Kasir</option>
                  <option value="admin">Admin</option>
                </select>
              </div>
              <center><button type="submit" class="btn btn-primary">Submit</button></center>
            </form>
          <?php }?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- content-wrapper ends -->
