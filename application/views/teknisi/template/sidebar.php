            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu position-fixed">

                <div class="h-100" data-simplebar>

                    <!-- User box -->
                    <div class="user-box text-center">

                        <i class="fas fa-user fa-fw text-gray-600 "></i>
                        <div class="dropdown">
                            <h6 href="#" class="user-name h5 mt-2 mb-1 d-block"><?= $this->session->userdata('nama_user'); ?></h6>
                        </div>

                        <p class="text-black left-user-info">Teknisi</p>
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul id="side-menu">

                            <li class="menu-title text-success">Navigasi</li>

                            <li>
                                <a href="<?= site_url('teknisi/dashboard') ?>">
                                    <i class="mdi mdi-view-dashboard-outline"></i>
                                    <span>Beranda</span>
                                </a>
                            </li>

                            <li class="menu-title mt-2 text-success">Tiket</li>

                            <li>
                                <a href="<?= site_url('teknisi/dashboard/datatiket') ?>">
                                    <i class="mdi mdi-ticket-account"></i>
                                    <span>Tiket Saya</span>
                                </a>
                            </li>

                            <li>
                                <a href="<?= site_url('teknisi/dashboard/tiket_selesai') ?>">
                                    <i class="mdi mdi-playlist-check"></i>
                                    <span>Tiket Selesai</span>
                                </a>
                            </li>

                            <li>
                                <a href="<?= site_url('teknisi/dashboard/daftartiket') ?>">
                                    <i class="mdi mdi-format-list-bulleted-square"></i>
                                    <span>Daftar Tiket</span>
                                </a>
                            </li>
                        </ul>
                    </div>






                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->