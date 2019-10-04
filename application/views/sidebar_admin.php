<!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="profile-image"> <img src="<?php echo base_url('assets/images/faces/dapur.jpg') ?>" alt="image"/> <span class="online-status online"></span> </div>
              <div class="profile-name">
                <p class="name"><?php echo $this->session->userdata('nama') ?></p>
                <p class="designation">Admin</p>
                <div class="badge badge-teal mx-auto mt-3">Online</div>
              </div>
            </div>
          </li>
          <li class="nav-item"> <a class="nav-link" href="<?php echo site_url('Tagihan/index'); ?>"> <img class="menu-icon" src="<?php echo base_url('assets/images/menu_icons/01.png') ?>" alt="menu icon"> <span class="menu-title">Print Bill</span></a> </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts"> <img class="menu-icon" src="<?php echo base_url('assets/images/menu_icons/28.png') ?>" alt="menu icon"> <span class="menu-title">Kelola Managemen</span><i class="menu-arrow"></i></a>
            <div class="collapse" id="page-layouts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo site_url('Menu/index'); ?>">Kelola Menu</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo site_url('User/index'); ?>">Kelola User</a></li>
              </ul>
            </div>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts"> <img class="menu-icon" src="images/menu_icons/28.png" alt="menu icon"> <span class="menu-title">Page Layouts</span><i class="menu-arrow"></i></a>
            <div class="collapse" id="page-layouts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/layout/boxed-layout.html">Boxed</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/layout/rtl-layout.html">RTL</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/layout/horizontal-menu.html">Horizontal Menu</a></li>
              </ul>
            </div>
          </li> -->
        </ul>
      </nav>
      <!-- partial -->