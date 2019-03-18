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


    <script src="<?php echo base_url() ?>assets/plugins/dropify/dist/js/dropify.min.js"></script>

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
    <script>
    $(document).ready(function() {
        // Basic
        $('.dropify').dropify();

        // Translated
        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-déposez un fichier ici ou cliquez',
                replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                remove: 'Supprimer',
                error: 'Désolé, le fichier trop volumineux'
            }
        });

        // Used events
        var drEvent = $('#input-file-events').dropify();

        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function(event, element) {
            alert('File deleted');
        });

        drEvent.on('dropify.errors', function(event, element) {
            console.log('Has Errors');
        });

        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function(e) {
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })
    });
    </script>
    <script type="text/javascript">
        var type = $('#type').val();
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
        $(document).on('click','#btnSimpanProject',function(){
            var kode_project = $('#kode_project').val();
            var kode_jenis_pekerjaan = $('#kode_jenis_pekerjaan').val();
            var tgl_project = $('#tgl_project').val();
            var tegangan = $('#tegangan').val();
            var alamat_project = $('#alamat_project').val();
            var material = $('#material').val();
            var jml_tenaga_kerja = $('#jml_tenaga_kerja').val();
            var peralatan_kerja = $('#peralatan_kerja').val();
            var gardu = $('#gardu').val();
            var kode_line = $('#kode_line').val();
            var value = {
                kode_project:kode_project,
                kode_jenis_pekerjaan:kode_jenis_pekerjaan,
                tgl_project:tgl_project,
                tegangan:tegangan,
                alamat_project:alamat_project,
                jml_tenaga_kerja:jml_tenaga_kerja,
                peralatan_kerja:peralatan_kerja,
                gardu:gardu,
                material:material,
                kode_line:kode_line
            };
            $.ajax({
                url:'<?php echo base_url(); ?>Rencana/update_project',
                type:'POST',
                data:value,
                success:function(data){
                    if (data ==1) {
                        window.location='<?php echo base_url(); ?>Rencana/slp/'+type
                    }
                }
            });
        });
        $(document).on('click','#btnHistoryApproval',function(){
            location.href = "<?php echo base_url() ?>Rencana/history_approval";
        });
        $(document).on('click','#btnPrintRencanaKerja',function(){
            location.href = "<?php echo base_url() ?>Download/printPDF";
        });
        $(document).on('click','#btnTambahSld',function(){
            location.href = "<?php echo base_url() ?>Arsip/tambah_sld";
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
        
        $('#table_temp_uraian_pekerjaan').DataTable({
            searching: false,
            paging:   false,
            ordering: false,
            info:     false,
            "ajax": {
                url:'<?php echo base_url() ?>Rencana/get_temp_uraian_pekerjaan/'+type,
                "type": "POST"
            },
        });
        $('#table_temp_pelaksana').DataTable({
            searching: false,
            paging:   false,
            ordering: false,
            info:     false,
            "ajax": {
                url:'<?php echo base_url() ?>Rencana/get_temp_pelaksaan/'+type,
                "type": "POST"
            },
        });
        $("#btnSimpanWp").click(function(){
            var uniqid = $('#uniqid').val();
            var jam_mulai = $('#jam_mulai').val();
            var kode_project = $('#kode_project').val();
            var jam_selesai = $('#jam_selesai').val();
            var tgl_mulai = $('#tgl_mulai').val();
            var tgl_selesai = $('#tgl_selesai').val();
            var kode_project = $('#kode_project').val();
            var klasifikasi = [];
            $.each($("input[name='klasifikasi']:checked"), function(){            
                klasifikasi.push($(this).val());
            });
            var prosedur_kerja = [];
            $.each($("input[name='prosedur_kerja']:checked"), function(){            
                prosedur_kerja.push($(this).val());
            });
            var lampiran_izin = [];
            $.each($("input[name='lampiran_izin']:checked"), function(){            
                lampiran_izin.push($(this).val());
            });
            var value = {
                kode_project:kode_project,
                jam_mulai:jam_mulai,
                jam_selesai:jam_selesai,
                tgl_mulai:tgl_mulai,
                tgl_selesai:tgl_selesai,
                klasifikasi:klasifikasi,
                prosedur_kerja:prosedur_kerja,
                lampiran_izin:lampiran_izin
            };
            $.ajax({
                url:'<?php echo base_url() ?>Rencana/insert_working_permit',
                data:value,
                type:'POST',
                success:function(data){
                    if (data == 1) {
                        window.location='<?php echo base_url(); ?>Rencana/jsa/'+uniqid
                    }
                }
            });
            
        });
        $(document).on('click','#btnSimpanJsa',function(){
            var kode_project = $('#kode_project').val();
            var perlindungan = [];
            $.each($("input[name='perlindungan']:checked"), function(){            
                perlindungan.push($(this).val());
            });
            var keselamatan = [];
            $.each($("input[name='keselamatan']:checked"), function(){            
                keselamatan.push($(this).val());
            });
            var pekerja = $("input[name='nama_pekerja[]']")
              .map(function(){return $(this).val();}).get();
            var value = {
                kode_project:kode_project,
                perlindungan:perlindungan,
                keselamatan:keselamatan,
                pekerja:pekerja
            };
            $.ajax({
                url:'<?php echo base_url() ?>Rencana/insert_jsa',
                data:value,
                type:'POST',
                success:function(data){
                    alert(data);
                }
            });
        });
    </script>

</body>

</html>