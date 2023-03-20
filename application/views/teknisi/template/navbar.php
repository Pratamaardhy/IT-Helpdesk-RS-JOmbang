            <!-- Topbar Start -->
            <div class="navbar-custom">
                <ul class="list-unstyled topnav-menu float-end mb-0">
                    <li class="dropdown notification-list topbar-dropdown">
                        <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" id="userDropdown" <?= base_url('asset/'); ?>>
                            <i class=" fas fa-user fa-sm fa-fw mr-2 text-gray-600 "></i>
                            <span class="pro-user-name ms-1">
                                <?= $this->session->userdata('nama_user'); ?><i class="mdi mdi-chevron-down"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end profile-dropdown" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal" <?= site_url('login/logout'); ?>>
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Keluar
                            </a>

                        </div>
                    </li>
                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="<?= site_url('teknisi/dashboard') ?>" class="logo text-center">
                        <span class="logo-sm">
                            <img src="<?= base_url() ?>assets/pages/images/logo-rsud.png" alt="" height="40">
                        </span>
                        <span class="logo-lg">
                            <img src="<?= base_url() ?>assets/pages/images/logo-rsud-jombang.png" alt="" height="50">
                        </span>
                    </a>
                </div>

                <ul class="list-unstyled topnav-menu topnav-menu-left mb-0">
                    <li>
                        <h4 class="page-title-main"><?php echo $page_title?></h4>
                    </li>
                    <li>
                        <a class="button-menu-mobile waves-effect text-center" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <i class="fe-menu"></i>
                        </a>
                    </li>

                </ul>

                <div class="clearfix"></div>

            </div>
            <!-- end Topbar -->