        <div class="content-page">
            <div class="content mt-4">
                <div class="container-fluid">
                    <form class="col row-cols-lg-auto g-4 align-items-center" method="POST" action="<?php echo site_url('teknisi/Tiket/Update') ?>">
                        <div class="form-group row mb-3">
                            <div class="col-sm-1">
                                <label class="col-form-label">Nomor Tiket</label>
                            </div>
                            <div class="col-sm-5">
                                <input id="ID_TIKET" name="ID_TIKET" type="text" class="form-control bg-transparent" value="<?php echo $tiket->ID_TIKET ?>" readonly>
                            </div>
                            <div class="col-sm-1">
                                <label class="col-form-label">Tanggal Ajuan</label>
                            </div>
                            <div class="col-sm-5">
                                <input name="TANGGAL" type="text" class="form-control bg-transparent" value=" <?php echo $tiket->TANGGAL ?> " readonly>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <div class="col-sm-1">
                                <label class="col-form-label">Nama Pengaju</label>
                            </div>
                            <div class="col-sm-5">
                                <input name="ID_USER" type="text" class="form-control bg-transparent" value=" <?php echo $tiket->nama_user ?> " readonly>
                            </div>
                            <div class="col-sm-1">
                                <label class="col-form-label">Departemen</label>
                            </div>
                            <div class="col-sm-5">
                                <input name="ID_INVENTORY" type="text" class="form-control bg-transparent" value=" <?php echo $tiket->NAMA_DEPARTEMEN ?> " readonly>
                            </div>
                        </div>


                        <div class="row mb-3 ml-12">
                            <label for="sub_masalah" class="col-sm-1 col-form-label">Tipe Masalah</label>
                            <div class="col-sm-11">
                                <input name="NAMA_TIKET" type="text" class="form-control bg-transparent" id="sub_masalah" value=" <?php echo $tiket->SUB_MASALAH ?> " readonly>
                            </div>
                        </div>

                        <div class="row mb-3 ml-12">
                            <label for="masalah" class="col-sm-1 col-form-label">Masalah</label>
                            <div class="col-sm-11">
                                <textarea name="MASALAH" rows="5" cols="5" type="text" class="form-control bg-transparent" id="masalah" readonly><?php echo $tiket->MASALAH ?></textarea>
                            </div>
                        </div>
                        <div class="row mb-3 ml-12">
                            <label for="SOLUSI" class="col-sm-1 col-form-label">Solusi</label>
                            <div class="col-sm-11">
                                <textarea name="SOLUSI" rows="5" cols="5" type="text" class="form-control" id="SOLUSI"></textarea>
                            </div>
                        </div>

                        <br>
                        <!-- button -->
                        <div class="row">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-3">
                                <button class="btn btn-primary w-100" type="submit">Selesaikan</button>
                            </div>
                            <div class="col-sm-3">
                                <a class="btn btn-danger w-100" href="<?= site_url('teknisi/dashboard/datatiket') ?>" role="button">Kembali</a>
                            </div>
                            <div class="col-sm-5"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>