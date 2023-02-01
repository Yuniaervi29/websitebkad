
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo base_url('assets/admin/') ?>dist/img/favicon.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">BKAD Sul-Sel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url('assets/admin/') ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $this->session->userdata('nama'); ?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item menu-open">
                    <a href="<?php echo base_url('admin/welcome') ?>" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                    </p>
                    </a>
                </li>
            <?php
                // data main menu
                $uid = $this->session->userdata('id');
                $main_menu = $this->db->query("SELECT a.* FROM dyn_menu a INNER JOIN dyn_user b ON a.id=b.menu_id WHERE b.status='1' AND a.show_menu='1' AND id_user='$uid' order by a.position");
                
                foreach ($main_menu->result() as $main) {
                    // Query untuk mencari data sub menu
                    $sub_menu = $this->db->get_where('dyn_menu', array('is_main_menu' => $main->id,'show_menu'=>1));
                    // periksa apakah ada sub menu
                    if ($sub_menu->num_rows() > 0) {
                        // main menu dengan sub menu

                            echo "<li class='nav-item'>";?>
                            
                            <a href="<?php echo base_url().$main->link ?>" class="nav-link">

                            <i class="nav-icon fas <?php echo $main->icon?>"></i>
                            <p>
                            <?php echo $main->title?>
                                <i class='right fas fa-angle-left'></i>
                            </p>
                            </a>
                            <?php echo "<ul class='nav nav-treeview'>";
                            ?>
                            <?php foreach ($sub_menu->result() as $sub) { ?>
                            <li class="nav-item">
                                <a href="<?php echo base_url().$sub->link ?>" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p><?php echo $sub->title ?></p>
                                </a>
                            </li>
                           
                        <?php
                     }
                       echo " </ul>
                       </li>";
                    } else { ?>
                        <!-- // main menu tanpa sub menu -->
                      
                        <li class="nav-item">
                        <a href="<?php echo base_url().$main->link ?>" class="nav-link">
                          <i class="nav-icon fas <?php echo $main->icon ?>"></i>
                          <p>
                            <?php echo $main->title ?>
                          </p>
                        </a>
                      </li>
                      <?php
                    }
                }
                ?>
                
                <li class="nav-item menu">
                    <a href="https://bkad.sulselprov.go.id" target="_blank" class="nav-link active">
                    <i class="nav-icon fas fa-globe"></i>
                    <p>
                        Go To Website
                    </p>
                    </a>
                </li>
        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>