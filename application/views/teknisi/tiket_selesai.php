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
                                                        <th>Masalah Utama</th>
                                                        <th>Keterangan Masalah</th>
                                                        <th>Solusi</th>
                                                        <th>Tanggal Ajuan</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
        
        
                                                <tbody>
                                                    <?php $no = 1;
                                                    $isi = "Tiket Masuk";
                                                    foreach ((array)$tiket as $daftartiket) {
                                                        $idstatus = $daftartiket->STATUS_TIKET;
                                                        if ($idstatus == 1) {
                                                            $css = "badge bg-primary";
                                                        } elseif ($idstatus == 2) {
                                                            $css = "badge bg-secondary";
                                                        } elseif ($idstatus == 3) {
                                                            $css = "badge bg-info";
                                                        } elseif ($idstatus == 4) {
                                                            $css = "badge bg-success";
                                                        } elseif ($idstatus == 5) {
                                                            $css = "badge bg-warning";
                                                        } elseif ($idstatus == 6) {
                                                            $css = "badge bg-light text-dark";
                                                        } elseif ($idstatus == 7) {
                                                            $css = "badge bg-light text-dark";
                                                        }
                                                    ?>
                                                    
                                                        <tr>
                                                            <td><?= $no++ ?></td>
                                                            <td><?= $daftartiket->ID_TIKET ?></td>
                                                            <td><?= $daftartiket->NAMA_DEPARTEMEN ?></td>
                                                            <td><?= $daftartiket->SUB_MASALAH ?></td>
                                                            <td><?= $daftartiket->MASALAH ?></td>
                                                            <td><?= $daftartiket->SOLUSI ?></td>
                                                            <td><?= $daftartiket->TANGGAL ?></td>
                                                            <td>
                                                                <span class="<?= $css ?>"> <?= $daftartiket->status ?></span>
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