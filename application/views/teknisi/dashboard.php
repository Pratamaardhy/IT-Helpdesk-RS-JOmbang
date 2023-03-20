<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row">

                <div class="col-xl-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mt-0 mb-4 text-success">Tiket Masuk</h4>

                            <div class="widget-chart-1">
                                <div class="widget-chart-box-1 float-start" dir="ltr">
                                    <i class="fas fa-download fa-2x text-success"></i>
                                </div>

                                <div class="widget-detail-1 text-end">
                                    <h2 class="fw-normal"> <?= $tiket_masuk ?> </h2>
                                    <!-- <p class="text-muted mb-1">Revenue today</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col-xl-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mt-0 mb-4 text-danger">Baru Saja Diambil</h4>

                            <div class="widget-chart-1">
                                <div class="widget-chart-box-1 float-start" dir="ltr">
                                    <i class="fas fa-user-clock fa-2x text-danger"></i>
                                </div>
                                <div class="widget-detail-1 text-end">
                                    <h2 class="fw-normal"> <?= $diajukan ?> </h2>
                                    <!-- <p class="text-muted mb-1">Revenue today</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col-xl-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mt-0 mb-4 text-warning">Dalam Proses</h4>

                            <div class="widget-chart-1">
                                <div class="widget-chart-box-1 float-start" dir="ltr">
                                    <i class="fas fa-chart-line fa-2x text-warning"></i>
                                </div>
                                <div class="widget-detail-1 text-end">
                                    <h2 class="fw-normal"> <?= $dalam_proses ?> </h2>
                                    <!-- <p class="text-muted mb-1">Revenue today</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col-xl-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mt-0 mb-4 text-info">Sudah Ditangani</h4>

                            <div class="widget-chart-1">
                                <div class="widget-chart-box-1 float-start" dir="ltr">
                                    <i class="fas fa-check-square fa-2x text-info"></i>
                                </div>
                                <div class="widget-detail-1 text-end">
                                    <h2 class="fw-normal"> <?= $sudah_ditangani ?> </h2>
                                    <!-- <p class="text-muted mb-1">Revenue today</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->


                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body taskboard-box">
                            <h4 class="header-title mt-0 mb-3 text-primary">Tiket Masuk</h4>

                            <ul class="sortable-list list-unstyled taskList" id="upcoming">
                                <?php 
                                $Count = 0;
                                foreach ($tiket_diajukan as $tiketpen) { ?>
                                <li>
                                    <div class="kanban-box">
                                        <div class="float-start mr-3">
                                            <div style="padding-right: 20px;">
                                                <a href="<?php echo site_url('teknisi/Tiket/ambil_tiket/' . $tiketpen->ID_TIKET) ?>" class="btn btn-primary waves-effect waves-light" data-animation="fadein">
                                                    Ambil
                                                </a>
                                            </div>
                                        </div>

                                        <div class="kanban-detail">
                                            <span class="badge bg-primary bg-gradient float-end"><?= $tiketpen->TANGGAL ?></span>
                                            <h4><p class="text-dark"><?= $tiketpen->nama_user ?></p> </h4>
                                            <h5><p class="text-dark" style="font-weight:normal;"><?= $tiketpen->NAMA_DEPARTEMEN ?></p></h5>
                                            <ul class="list-inline" style="margin-left: 53px;">
                                                <li class="list-inline-item">
                                                    <h5><i><?= $tiketpen->SUB_MASALAH ?></i></h5>
                                                </li>
                                                <li class="list-inline-item">
                                                    <h5 style="font-weight:normal;"><?= $tiketpen->MASALAH ?></h5>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <?php 
                                    $Count++;
                                    if ($Count == 3){
                                        break; 
                                    }
                                } 
                                ?>
                            </ul>
                            <div class="text-center pt-2">
                                <a href="<?php echo base_url()?>teknisi/dashboard/daftartiket" class="btn btn-link">
                                    <u>Selengkapnya</u>
                                </a>
                            </div>
                        </div>
                    </div>

                </div><!-- end col -->


                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body taskboard-box">
                            <h4 class="header-title mt-0 mb-3 text-success">Tiket Selesai</h4>

                            <ul class="sortable-list list-unstyled taskList" id="inprogress">
                                <?php
                                $Count = 0;
                                foreach ($tiket_selesai as $tiketpen) {
                                ?>
                                <li>
                                    <div class="kanban-box">
                                        <div class="kanban-detail" style="margin-left: 0;">
                                            <span class="badge bg-secondary bg-gradient float-end"><?= $tiketpen->ID_TIKET ?></span>
                                            <h4 class="mt-1.5 text-dark"><?= $tiketpen->nama_user ?></h4>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <h5><i><?= $tiketpen->SUB_MASALAH ?></i></h5>
                                                </li>
                                                <li class="list-inline-item">
                                                    <h5 style="font-weight:normal;"><?= $tiketpen->MASALAH ?></h5>
                                                </li>
                                            </ul>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <span class="badge bg-success">SOLUSI</span>
                                                </li>
                                                <li class="list-inline-item">
                                                    <h5 style="font-weight:normal;"><?= $tiketpen->MASALAH ?></h5>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <?php 
                                    $Count++;
                                    if ($Count == 3){
                                        break; 
                                    }
                                } 
                                ?>
                            </ul>
                            <div class="text-center pt-2">
                                <a href="<?php echo base_url()?>teknisi/dashboard/tiket_selesai" class="btn btn-link">
                                    <u>Selengkapnya</u>
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->
            </div>
        </div>
    </div>
</div>