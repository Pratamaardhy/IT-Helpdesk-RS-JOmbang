            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body table-responsive">
                                        <form action="<?= base_url('teknisi/Dashboard') ?>" method="POST">
                                            <table id="responsive-datatable" class="table table-hover dt-responsive  w-100">
                                                <thead>
                                                    <tr bgcolor="#38d678">
                                                        <th>No.</th>
                                                        <th>No. Tiket</th>
                                                        <th>Departemen</th>
                                                        <th>Tipe Masalah</th>
                                                        <th>Keterangan Masalah</th>
                                                        <th>Tanggal Ajuan</th>
                                                        <th>Status</th>
                                                        <th>Opsi</th>
                                                    </tr>
                                                </thead>
        
        
                                                <tbody>
                                                    <?php $no = 1;
                                                    $isi = "Tiket Masuk";
                                                    foreach ((array)$tiket as $daftartiket) {
                                                    ?>
                                                        <tr>
                                                            <td><?= $no++ ?></td>
                                                            <td><?= $daftartiket->ID_TIKET ?></td>
                                                            <td><?= $daftartiket->NAMA_DEPARTEMEN ?></td>
                                                            <td><?= $daftartiket->SUB_MASALAH ?></td>
                                                            <td><?= $daftartiket->MASALAH ?></td>
                                                            <td><?= $daftartiket->TANGGAL ?></td>
                                                            <td>
                                                                <b><?= $daftartiket->status ?></b>
                                                            </td>
                                                            <td>
                                                                <?php if ($daftartiket->STATUS_TIKET == 3) { ?>
                                                                    <a href="<?php echo site_url('teknisi/Tiket/ganti_teknisi/' . $daftartiket->ID_TIKET) ?>">
                                                                        <button type="button" class="btn btn-secondary">
                                                                            Ganti Teknisi
                                                                        </button>
                                                                    </a>
                                                                    <br><br>
                                                                    <a class="collapse-item" href="<?= site_url('teknisi/Tiket/tiket_selesai/' . $daftartiket->ID_TIKET) ?>">
                                                                        <button type="button" class="btn btn-success">
                                                                            Selesai
                                                                        </button>
                                                                    </a>
                                                                <?php
                                                                } elseif ($daftartiket->STATUS_TIKET == 2) { ?>
                                                                    <a href="<?php echo site_url('teknisi/Tiket/prosess/' . $daftartiket->ID_TIKET) ?>">
                                                                        <button type="button" class="btn btn-primary">
                                                                            Proses
                                                                        </button>
                                                                    </a>
                                                                <?php
                                                                } elseif ($daftartiket->STATUS_TIKET == 5) { ?>
                                                                    <a href="<?php echo site_url('teknisi/Tiket/ganti_teknisi/' . $daftartiket->ID_TIKET) ?>">
                                                                        <button type="button" class="btn btn-secondary">
                                                                            Ganti Teknisi
                                                                        </button>
                                                                    </a> <br><br>
                                                                    <a href="<?php echo site_url('teknisi/Tiket/prosess/' . $daftartiket->ID_TIKET) ?>">
                                                                        <button type="button" class="btn btn-primary">
                                                                            Lanjutkan Proses
                                                                        </button>
                                                                    </a>
                                                                <?php } else { ?>

                                                                    <button disabled="disabled" type="button" class="btn btn-danger">
                                                                        Menunggu...
                                                                    </button>
                                                                    <br> <br>
                                                                    <a href="<?php echo site_url('teknisi/Tiket/prosess/' . $daftartiket->ID_TIKET) ?>">
                                                                        <button type="button" class="btn btn-primary">
                                                                            Lanjutkan Proses
                                                                        </button>
                                                                    </a>

                                                                <?php } ?>
                                                            </td>
                                                        </tr>
                                                    <?php
                                                    } ?>
                                                </tbody>
                                            </table>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end row -->
                    </div> <!-- container-fluid -->
                </div> <!-- content -->
            </div>