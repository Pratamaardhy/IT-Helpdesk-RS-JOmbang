<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-lg-6">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center text-wrap">
                                <img style="height:80px ;" src="<?= base_url('assets/back') ?>/img/logo.png" alt="">
                            </div>
                            <div class="text-center">
                                <p class="h4 mt-3 mb-4" style="font-weight:bold; font-family:sans-serif">Helpdesk RSUD Jombang</p>
                            </div>  
                            <hr class="sidebar-divider my-0 mb-4">
                            <div class="text-center">
                                <h4 class="text-gray-900 mb-4">Ubah Gambar Cover</h4>
                            </div>
                            
                            <?php echo $error;?>
 
                            <?php echo form_open_multipart('upload/aksi_upload');?>
                            <div class="user">
                                <div class="form-group">
                                    <label class="text-dark"><b>Masukkan File</b></label>
                                    <p class="h6 text-muted">Format jpg/jpeg/png/gif | Max size 2 MB</p>
                                    <input type="file" name="berkas" id="cover" accept="image/png, image/jpeg, image/jpg, image/gif" data-plugins="dropify" data-height="300"/>
                                </div>
                                <div class="form-group">
                                    <button type="submit" value="upload" class="btn btn-danger rounded-pill btn-block justify-item-center mt-lg-3 mb-4">Upload</button>
                                </div> 
                            </div>
                            <?php echo form_close(); ?>
                            <hr>
                            <p class="ml-3">Jika anda ingin bertanya seputar akun anda, silakan anda hubungi <b style="color:#1E90FF;">081234567890</b></p> 
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>
