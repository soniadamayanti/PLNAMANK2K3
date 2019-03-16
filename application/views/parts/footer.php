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
    <script type="text/javascript">
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
                    alert(data);
                }
            });
        });
        $(document).on('click','#btnSimpanTempPelaksana',function(){
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
                    get_temp_pelaksana(kode_project);   
                }
            });
        });
        function get_temp_uraian(kode_project){
            var data = {
                kode_project:kode_project
            };
            $.ajax({
                url:'<?php echo base_url() ?>Rencana/get_temp_uraian_pekerjaan',
                data:value,
                type:'POST',
                success:function(data){
                    var json = jQuery.parseJSON(data);
                    $('tbody temp_pelaksana').html('<td>'+json.uraian_pekerjaan+'</td><td>'+json.jam+'</td><td>'+json.keterangan+'</td>');
                }
            });
        }
        function get_temp_plaksana(kode_project){
            var data = {
                kode_project:kode_project
            };
            $.ajax({
                url:'<?php echo base_url() ?>Rencana/get_temp_pelaksaan',
                data:value,
                type:'POST',
                success:function(data){
                    var json = jQuery.parseJSON(data);
                    $('body_pelaksana').html('<td>'+json.uraian_pekerjaan+'</td><td>'+json.jam+'</td><td>'+json.keterangan+'</td>');
                }
            });
        }
    </script>
</body>

</html>