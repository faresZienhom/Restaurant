<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset ("admin") }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset ("admin") }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
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

               <li class="nav-item">
                <a href="/dashboard" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Dashboard

                    <span class="right badge badge-danger"></span>
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="/slider" class="nav-link">
                  <i class="fa fa-check
                  "></i>
                  <p>
                     Sliders
                    <span class="right badge badge-danger"></span>
                  </p>
                </a>
              </li>
              <li class="nav-item">
               <a href="/banner" class="nav-link">
                 <i class="fa fa-folder"></i>
                 <p>
                   Banners

                   <span class="right badge badge-danger"></span>
                 </p>
               </a>
             </li>
             <li class="nav-item">
              <a href="/categories" class="nav-link">
                <i class="fa fa-bars"></i>
                <p>
                  Categories

                  <span class="right badge badge-danger"></span>
                </p>
              </a>
            </li>
            <li class="nav-item">
             <a href="/products" class="nav-link">
               <i class="fa fa-calendar"></i>
               <p>
                 Products

                 <span class="right badge badge-danger"></span>
               </p>
             </a>
           </li>
           <li class="nav-item">
            <a href="/wishlist" class="nav-link">
              <i class="fa fa-heartbeat"></i>
              <p>
                Wishlists

                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>



          <li class="nav-item ">
            <a href="contacts" class="nav-link">
              <i class="fa fa-phone	"></i>
              <p>
                CoutactUs
                <i class="right badge badge-danger"></i>
              </p>
            </a>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
