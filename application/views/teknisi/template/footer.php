                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <script>document.write(new Date().getFullYear())</script> &copy; Helpdesk RSUD Jombang theme by <a href="">Coderthemes</a> 
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

        <!-- Vendor -->
        <script src="<?php echo base_url()?>assets/pages/libs/jquery/jquery.min.js"></script>
        <script src="<?php echo base_url()?>assets/pages/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url()?>assets/pages/libs/simplebar/simplebar.min.js"></script>
        <script src="<?php echo base_url()?>assets/pages/libs/node-waves/waves.min.js"></script>
        <script src="<?php echo base_url()?>assets/pages/libs/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="<?php echo base_url()?>assets/pages/libs/jquery.counterup/jquery.counterup.min.js"></script>
        <script src="<?php echo base_url()?>assets/pages/libs/feather-icons/feather.min.js"></script>

        <!-- knob plugin -->
        <script src="<?php echo base_url()?>assets/pages/libs/jquery-knob/jquery.knob.min.js"></script>

        <!--Morris Chart-->
        <script src="<?php echo base_url()?>assets/pages/libs/morris.js06/morris.min.js"></script>
        <script src="<?php echo base_url()?>assets/pages/libs/raphael/raphael.min.js"></script>
  
        <!-- Dashboar init js-->
        <script src="<?php echo base_url()?>assets/pages/js/pages/dashboard.init.js"></script>

        <!-- App js-->
        <script src="<?php echo base_url()?>assets/pages/js/app.min.js"></script>




            <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url()?>assets/back/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url()?>assets/back/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?=base_url()?>assets/back/vendor/bootstrap/js/bootstrap.bundle.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url()?>assets/back/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url()?>assets/back/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url()?>assets/back/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url()?>assets/back/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url()?>assets/back/js/demo/datatables-demo.js"></script>
   







        <!-- third party js -->
        <script src="<?php echo base_url()?>assets/pages/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url()?>assets/pages/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
        <script src="<?php echo base_url()?>assets/pages/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="<?php echo base_url()?>assets/pages/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
        <script src="<?php echo base_url()?>assets/pages/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="<?php echo base_url()?>assets/pages/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
        <script src="<?php echo base_url()?>assets/pages/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="<?php echo base_url()?>assets/pages/libs/datatables.net-buttons/js/buttons.flash.min.js"></script>
        <script src="<?php echo base_url()?>assets/pages/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="<?php echo base_url()?>assets/pages/libs/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
        <script src="<?php echo base_url()?>assets/pages/libs/datatables.net-select/js/dataTables.select.min.js"></script>
        <script src="<?php echo base_url()?>assets/pages/libs/pdfmake/build/pdfmake.min.js"></script>
        <script src="<?php echo base_url()?>assets/pages/libs/pdfmake/build/vfs_fonts.js"></script>
        <!-- third party js ends -->

        <!-- Datatables init -->
        <script src="<?php echo base_url()?>assets/pages/js/pages/datatables.init.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url()?>assets/pages/js/app.min.js"></script>

















<script type="text/javascript">
            $(document).ready(function() {
                $('#tabelData').DataTable();
                function filterData () {
                    $('#tabelData').DataTable().search(
                        $('.bulan').val()
                        ).draw();
                }
                $('.bulan').on('change', function () {
                    filterData();
                });
            });
        </script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#tabelData').DataTable();
                function filterData () {
                    $('#tabelData').DataTable().search(
                        $('.TANGGAL').val()
                        ).draw();
                }
                $('.TANGGAL').on('change', function () {
                    filterData();
                });
            });
        </script>

</body>

</html>