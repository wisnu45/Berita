<!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin') ;?>">
        <div class="sidebar-brand-icon pt-2">
          <h2>KB</h2>
        </div>
        <div class="sidebar-brand-text mx-3">Kaba Bukittinggi</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('admin') ;?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Menu
      </div>

      <?php foreach ($tMenu as $tm): ?>
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#<?= $tm['targetDropdown'] ;?>" aria-expanded="true" aria-controls="tarBerita">
            <i class="<?= $tm['iconMenu'] ;?>"></i>
            <span><?= $tm['namaMenu'] ;?></span>
          </a>
          <div id="<?= $tm['targetDropdown'] ;?>" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header"><?= $tm['nameHeadSubMenu'] ;?></h6>
              <?php 
                $idMenu = $tm['idMenu'];
                $subMenu = $this->db->select('*')->from('t_submenu_backend')->where(['menuId' => $idMenu, 'statusSubmenu' => 'aktif'])->get()->result_array();
                /*$query = "SELECT *
                          FROM `t_submenu_backend` 
                          WHERE `menuId` = $idMenu
                         ";
                $subMenu = $this->db->query($query)->result_array();*/
              ?>

              <?php foreach ($subMenu as $tsm): ?>
                <a class="collapse-item" href="<?= base_url($tsm['urlSubMenu']) ;?>"><?= $tsm['judulSubMenu'] ;?></a>
              <?php endforeach ?>
            </div>
          </div>
        </li>
      <?php endforeach ?>

      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('saran/tampilSaran') ;?>">
          <i class="fas fa-fw fa-pager"></i>
          <span>Saran</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('about/tampilAbout') ;?>">
          <i class="fas fa-fw fa-pager"></i>
          <span>About</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user/user/tampilBerita') ;?>">
          <i class="fas fa-fw fa-pager"></i>
          <span>Home</span></a>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
     <!--  <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#tarBerita" aria-expanded="true" aria-controls="tarBerita">
          <i class="far fa-fw fa-newspaper"></i>
          <span>Berita</span>
        </a>
        <div id="tarBerita" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Pilih Berita:</h6>
            <a class="collapse-item" href="<?= base_url('admin/tampilBerita') ;?>">Tabel Berita</a>
            <a class="collapse-item" href="<?= base_url('kategori') ;?>">Tabel Kategori Berita</a>
            <a class="collapse-item" href="<?= base_url('komentar') ;?>">Tabel Komentar</a>
          </div>
        </div>
      </li> -->

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#tarUser" aria-expanded="true" aria-controls="tarUser">
          <i class="far fa-fw fa-user"></i>
          <span>User</span>
        </a>
        <div id="tarUser" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Pilih Pengguna:</h6>
            <a class="collapse-item" href="<?= base_url('pengguna/profile') ;?>">Profile</a>
            <a class="collapse-item" href="<?= base_url('pengguna/pengaturan/') . $this->session->userdata('idUser') ;?>">Pengaturan</a>
          </div>
        </div>
      </li> -->

      <!-- Nav Item - Tables -->
      <!-- <li class="nav-item">
        <a class="nav-link" href="<?= base_url('contact') ;?>">
          <i class="fas fa-fw fa-pager"></i>
          <span>Page</span></a>
      </li> -->

      <!-- Nav Item - Tables -->
      <!-- <li class="nav-item">
        <a class="nav-link" href="<?= base_url('contact') ;?>">
          <i class="fas fa-fw fa-id-card"></i>
          <span>Contact</span></a>
      </li> -->

      <!-- Nav Item - Tables -->
     <!--  <li class="nav-item">
        <a class="nav-link" href="<?= base_url('contact') ;?>">
          <i class="fas fa-fw fa-comments"></i>
          <span>Comments</span></a>
      </li> -->

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= ucfirst($this->session->userdata('namaUser')) ?></span>
                <img class="img-profile rounded-circle" src="<?= base_url('assets/uploads/medium/users/') . $this->session->userdata('fotoUser'); ?>">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?= base_url('pengguna/profile')?>">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="<?= base_url('pengguna/pengaturan/') . $this->session->userdata('idUser');?>">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?= base_url('login/logout') ;?>" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">