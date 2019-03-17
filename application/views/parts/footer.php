            <footer class="footer">
                &copy; 2019 IFD
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <script src="<?php echo site_url(); ?>assets/plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo site_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo site_url(); ?>assets/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo site_url(); ?>assets/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo site_url(); ?>assets/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="<?php echo site_url(); ?>assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo site_url(); ?>assets/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- chartist chart -->
    <script src="<?php echo site_url(); ?>assets/plugins/chartist-js/dist/chartist.min.js"></script>
    <!-- Chart JS -->
    <script src="<?php echo site_url(); ?>assets/plugins/Chart.js/Chart.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.toast.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="<?php echo site_url(); ?>assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>

    <script src="<?php echo site_url(); ?>assets/plugins/datatables.net/js/jquery.dataTables.min.js"></script>


    <script src="<?php echo base_url() ?>assets/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/export/buttons.html5.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/export/buttons.flash.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/export/buttons.print.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/export/jszip.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/export/pdfmake.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/export/vfs_fonts.js"></script>
    <script type="text/javascript">
        var pictureList = [
            "<?php echo base_url() ?>arsip/sld/S0001",
            "<?php echo base_url() ?>arsip/sld/S0002",
            "<?php echo base_url() ?>arsip/sld/S0003",
            "<?php echo base_url() ?>arsip/sld/S0004",
            "<?php echo base_url() ?>arsip/sld/S0005", ];

        $('#picDD').change(function () {
            var val = parseInt($('#picDD').val());
            $('img').attr("src",pictureList[val]);
        });
        $('#sop_pemadaman').ready(function() {
            var type = $('#type').val();  
            if (type == '') {
                $('#BuatRencanaKerja').modal('show'); 
            }
        });
        $(document).on('click','#btnModalBuatRencanaKerja',function(){
            $('#BuatRencanaKerja').modal('show');
        });
        $(document).on('click','#btnTambahUraianPekerjaan',function(){
            var kode_project = $('#kode_project').val();
            var uraian_pekerjaan = $('#uraian_pekerjaan').val();
            var jam = $('#jam').val();
            var keterangan = $('#keterangan').val();
            var value = {
                kode_project:kode_project,
                uraian_pekerjaan:uraian_pekerjaan,
                jam:jam,
                keterangan:keterangan
            };
            $.ajax({
                url:'<?php echo base_url() ?>Rencana/insert_temp_uraian_pekerjaan',
                data:value,
                type:'POST',
                success:function(data){
                    if (data == 1) {
                        var table = $('#table_temp_uraian_pekerjaan').DataTable();
                        table.ajax.reload(null,false);
                    }else{
                        alert(data);
                    }
                }
            });
        });
        $(document).on('click','#btnTambahPelaksana',function(){
            var kode_project = $('#kode_project').val();
            var kode_pelaksana = $('#kode_pelaksana').val();
            var value = {
                kode_pelaksana:kode_pelaksana,
                kode_project:kode_project
            };
            $.ajax({
                url:'<?php echo base_url() ?>Rencana/insert_temp_pelaksana',
                data:value,
                type:'POST',
                success:function(data){ 
                    if (data == 1) {
                        var table = $('#table_temp_pelaksana').DataTable();
                        table.ajax.reload(null,false);
                    }else{
                        alert(data);
                    }
                }
            });
        });
        $(document).on('click','#btnHistoryApproval',function(){
            location.href = "<?php echo base_url() ?>Rencana/history_approval";
        });
        $('#table_arsip_sld').DataTable({
            "ajax": {
                url:'<?php echo base_url() ?>arsip/dt_sld',
                "type": "POST"
            },
        });
        $('#table_arsip_jenis_pekerjaan').DataTable({
            "ajax": {
                url:'<?php echo base_url() ?>arsip/dt_jenis_pekerjaan',
                "type": "POST"
            },
        });
        $('#table_arsip_perusahaan_pelaksana').DataTable({
            "ajax": {
                url:'<?php echo base_url() ?>arsip/dt_perusahaan_pelaksana',
                "type": "POST"
            },
        });
        var type = $('#type').val();
        $('#table_temp_uraian_pekerjaan').DataTable({
            "ajax": {
                url:'<?php echo base_url() ?>Rencana/get_temp_uraian_pekerjaan/'+type,
                "type": "POST"
            },
        });
        $('#table_temp_pelaksana').DataTable({
            "ajax": {
                url:'<?php echo base_url() ?>Rencana/get_temp_pelaksaan/'+type,
                "type": "POST"
            },
        });
    </script>

</body>

</html>