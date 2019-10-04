
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
           <h5 class="card-title mb-4">Kelola Menu</h5>

           <hr>
           <div class="table-responsive">
            <?php foreach ($x as $u) {?>
            <form action="<?php echo site_url('Menu/editMenu'); ?>" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="nama_menu">Nama Menu</label>
                <input type="hidden" name="id_menu" value="<?php echo $u->id_menu ?>">
                <input type="input" class="form-control" id="nama_menu" name="nama_menu" placeholder="Masukan nama menu" value="<?php echo $u->nama_menu ?>">
              </div>
              <div class="form-group">
                <label for="jenis_menu">Jenis Menu</label>
                <select class="form-control" id="role" name="jenis_menu">
                  <option value="makanan">Makanan</option>
                  <option value="Minuman">Minuman</option>
                </select>
              </div>
              <div class="form-group">
                <label for="harga">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga" placeholder="Masukan harga" value="<?php echo $u->harga ?>">
              </div>
              <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="Masukan deskripsi"> <?php echo $u->deskripsi ?> </textarea>
              </div>
              <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="file" class="form-control" id="gambar" name="gambar" placeholder="Masukan gambar">
              </div>
              <center><button type="submit" class="btn btn-primary" value="upload">Submit</button></center>
            </form>
            <?php }?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- content-wrapper ends -->
