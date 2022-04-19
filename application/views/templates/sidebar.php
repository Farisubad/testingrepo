  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
              <div class="pull-left image">
                  <img src="<?php echo base_url() ?>assets/dist/img/Daco_2174722.png" class="img-circle" alt="User Image">
              </div>
              <div class="pull-left info">
                  <p>Administrator</p>
                  <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
              </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
              <div class="input-group">
                  <input type="text" name="q" class="form-control" placeholder="Cari Disini">
                  <span class="input-group-btn">
                      <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                      </button>
                  </span>
              </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" data-widget="tree">
              <li class="header">Menu</li>
              <li class="nav-item">
                  <a href="<?php echo base_url('index.php/home') ?>" class="nav-link">
                      <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="<?php echo base_url('index.php/mhs') ?>" class="nav-link">
                      <i class="fa fa-graduation-cap"></i> <span>Mahasiswa</span>

                  </a>
              </li>
              <li class="nav-item">
                  <a href="<?php echo base_url('index.php/mhs/exportpdf') ?>" class="nav-link">
                      <i class="fa fa-print"></i> <span>Cetak Data Mahasiswa</span>

                  </a>
              </li>
              <li class="nav-item">
              <a href="<?php echo base_url('index.php/log/logout') ?>" class="nav-link">
                      <i class="fa fa-sign-out "></i> <span>Logout</span>
                  </a>
              </li>
          </ul>
      </section>
      <!-- /.sidebar -->
  </aside>