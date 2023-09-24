<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-success bg-gradient sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3 text-white">COC</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0" style="background-color: black;">


            <!-- Nav Item - Dashboard -->
            <li class="nav-item ">
                <a class="nav-link " href="<?php echo base_url('product'); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Admin Menu</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider" style="background-color: black;">

            <!-- Heading -->
            <div class="sidebar-heading text-white">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('katalog_product'); ?>">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Katalog</span></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('Invoice'); ?>">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Invoice</span></a>
            </li>


            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo base_url('product/add_new'); ?>">
                    <i class="fas fa-fw fa-plus"></i>
                    <span>Add</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block" style="background-color: black;">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <!-- <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div> -->

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

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-2 mw-100 navbar-search">
                        <div class="input-group ">
                            <input type="text" class="form-control bg-light border-10 small justify-content-center" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>

                        <ul class="nav navbar-nav justify-content-center">
                            <li>
                                <?php
                                $keranjang = 'Keranjang Belanja:' . $this->cart->total_items() . 'items';
                                echo anchor('katalog_product/detail_keranjang', $keranjang);
                                ?>
                            </li>
                        </ul>


                    </form>

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
                        <ul class="na navbar-nav navbar-right">
                            <?php if ($this->session->userdata('username')) { ?>
                                <li>
                                    <div>Selamat Datang <?php echo $this->session->userdata('nama') ?></div>
                                </li>
                                <li class="ml-3"><?php echo anchor('auth/logout', 'logout') ?></li>
                            <?php } else { ?>
                                <li class="ml-3"><?php echo anchor('auth/login', 'login') ?></li>
                            <?php } ?>
                        </ul>
                </nav>


                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Profile
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>

                        Settings
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                        Activity Log
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                    </a>
                </div>
                </li>

                </ul>

                </nav>
                <!-- End of Topbar -->