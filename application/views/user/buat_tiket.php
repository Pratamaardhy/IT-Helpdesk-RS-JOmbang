        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

          <!-- Main Content -->
          <div id="content">
            <!-- Topbar -->
            <?php $this->load->view('user/template/navbar'); ?>

            <!-- End of Topbar -->
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

              <!-- Main Content -->
              <div id="content">
                <h3 class="container-fluid"><b><?= $title ?></b></h3>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                  <!-- Page Heading -->
                  <div class="bg-white py-lg-5">
                    <form method="POST" action="<?= site_url('user/Dashboard/buat_tiket_action'); ?>">
                      <!--  -->
                      <div class="form-group row ml-5 mr-5">
                        <label for="id" class="col-sm-2 col-form-label">Departemen<sup style="color: red;">*</sup></label>
                        <div class="col-sm-10">
                          <div class="input-group ">

                            <select class="form-control" id="id_inventory" name="id_inventory">
                              <option disabled selected>Pilih Departemen</option>
                              <?php
                              foreach ((array)$inventory as $nama) { ?>
                                <option value="<?= $nama->ID_INVENTORY ?>"><?= $nama->DEPARTEMEN ?>
                                </option>
                              <?php } ?>
                            </select>
                          </div>
                        </div>
                      </div>
                      
                      <!--  -->
                      <div class="form-group row ml-5 mr-5" hidden>
                        <label for="id" class="col-sm-2 col-form-label">ID Tiket</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="id_tiket" name="id_tiket">
                        </div>
                      </div>
                      <div class="form-group row ml-5 mr-5">
                        <label for="tiket" class="col-sm-2 col-form-label">Tipe Masalah<sup style="color: red;">*</sup></label>
                        <div class="col-sm-10">
                          <select class="form-control" id="SUB_MASALAH" name="SUB_MASALAH">
                          <option disabled selected>Pilih Tipe Masalah</option>
                            <option value="Software">Software</option>
                            <option value="Hardware">Hardware</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row ml-5 mr-5">
                        <label for="id" class="col-sm-2 col-form-label">Nama Perangkat<sup style="color: red;">*</sup></label>
                        <div class="col-sm-10">
                          <div class="input-group mb-3">

                            <select class="form-control" id="id_inventory" name="id_inventory">
                              <option disabled selected>Pilih Perangkat</option>
                              <?php
                              foreach ((array)$inventory as $nama) { ?>
                                <option value="<?= $nama->ID_INVENTORY ?>"><?= $nama->NAMA_INVENTORY ?>
                                </option>
                              <?php } ?>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row ml-5 mr-5">
                        <label for="masalah" class="col-sm-2 col-form-label">Masalah<sup style="color: red;">*</sup></label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="masalah" name="masalah" value=""></textarea>
                          <?=form_error('masalah','<small class="text-danger pl-3">','</small>')?>
                        </div>
                      </div>
                      <input hidden type="text" name="id_user" id="id_user" value="<?= $user['id_user'] ?>"></input>


                      <div class="form-group row justify-content-end ml-5">
                        <div class="col-sm-10">
                          <button type="submit" class="btn btn-primary">Ajukan</button>
                          <button type="reset" class="btn btn-danger">Batal</button>
                        </div>
                      </div>
                    </form>
                  </div>

                </div>
                <!-- /.container-fluid -->

              </div>
              <!-- End of Main Content -->



            </div>
            <!-- End of Content Wrapper -->

          </div>
          <!-- End of Page Wrapper -->

          <!-- Scroll to Top Button-->
          <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
          </a>