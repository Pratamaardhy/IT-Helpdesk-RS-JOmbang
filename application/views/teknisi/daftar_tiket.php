            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body table-responsive">
                                        <form action="<?= base_url('user/Dashboard') ?>" method="POST">
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
                                                            <td><?= $daftartiket->status ?></td>
                                                            <td><a href="<?php echo site_url('teknisi/Tiket/ambil_tiket/' . $daftartiket->ID_TIKET) ?>"><button type="button" class="btn btn-primary">Ambil</button></a></td>
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