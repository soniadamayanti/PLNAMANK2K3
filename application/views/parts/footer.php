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
    <script src="<?php echo base_url() ?>assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/export/buttons.html5.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/export/buttons.flash.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/export/buttons.print.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/export/jszip.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/export/pdfmake.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/export/vfs_fonts.js"></script>
    <!-- ============================================================== -->
    <script>
        $(function () {
            $('#jam_selesai').datetimepicker({
                use24hours: true
            });
        });
    $(document).ready(function() {
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
            if (kode_project == '') {
                $.toast('Kode pekerjaan kosong');
            }else{
                $.ajax({
                    url:'<?php echo base_url() ?>Rencana/insert_temp_uraian_pekerjaan',
                    data:value,
                    type:'POST',
                    success:function(data){
                        var table = $('#table_temp_uraian_pekerjaan').DataTable();
                        table.ajax.reload(null,false);
                    }
                });
            }
        });
        $(document).on('click','#btnHapusDetail',function(){
            var kode_project = $(this).attr('kode_project');
            var id_other = $(this).attr('id_other');
            var status = $(this).attr('status');
            var value =  {
                kode_project:kode_project,
                id_other:id_other,
                status:status
            };
            $.ajax({
                url:'<?php echo base_url(); ?>Rencana/delete_detail',
                data:value,
                type:'POST',
                success:function(data){
                    
                    var table = $('#table_'+status).DataTable();
                    table.ajax.reload(null,false);
                }
            })
        }); 
        $(document).on('click','#btnTambahPelaksana',function(){
            var kode_project = $('#kode_project').val();
            var kode_pelaksana = $('#kode_pelaksana').val();
            var value = {
                kode_pelaksana:kode_pelaksana,
                kode_project:kode_project
            };
            if (kode_project == '') {
                alert('Kode pekerjaan kosong')
            }else if (kode_pelaksana == '') {
                alert('pelaksana tidak boleh kosong');
            }else{
                $.ajax({
                    url:'<?php echo base_url() ?>Rencana/insert_temp_pelaksana',
                    data:value,
                    type:'POST',
                    success:function(data){ 
                    var table = $('#table_temp_pelaksana').DataTable();
                    table.ajax.reload(null,false);
                    $('#tenaga_kerja').empty();
                    $('#tenaga_kerja').html(data);
                    }
                });
            }
        });
        $(document).on('click','#btnTambahPekerja',function(){
            var kode_project = $('#kode_project').val();
            var kode_pekerja = $('#kode_pekerja').val();
            var value = {
                kode_pekerja:kode_pekerja,
                kode_project:kode_project
            };
            if (kode_project == '') {
                alert('Kode pekerjaan kosong')
            }else if (kode_pekerja == '') {
                alert('pelaksana tidak boleh kosong');
            }else{
                $.ajax({
                    url:'<?php echo base_url() ?>Rencana/insert_det_pekerja',
                    data:value,
                    type:'POST',
                    success:function(data){ 
                    var table = $('#table_pekerja').DataTable();
                    table.ajax.reload(null,false);
                        
                    }
                });
            }
        });
        $(document).on('click','#btnSimpanProject',function(){
            var kode_project = $('#kode_project').val();
            var tegangan = $('#tegangan').val();
            var kode_jenis_pekerjaan = $('#kode_jenis_pekerjaan').val();
            var material = $('#material').val();
            var peralatan_kerja = $('#peralatan_kerja').val();
            var alamat_project = $('#alamat_project').val();
            var tgl_pengajuan = $('#tgl_pengajuan').val();
            var tgl_mulai = $('#tgl_mulai').val();
            var segment = $('#segment').val();
            var tgl_selesai = $('#tgl_selesai').val();
            var jam_mulai = $('#jam_mulai').val();
            var jam_selesai = $('#jam_selesai').val();
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
            var perlindungan = [];
            $.each($("input[name='perlindungan']:checked"), function(){            
                perlindungan.push($(this).val());
            });
            var keselamatan = [];
            $.each($("input[name='keselamatan']:checked"), function(){            
                keselamatan.push($(this).val());
            });
            var tenaga_kerja = [];
            $.each($("input[name='tenaga_kerja']:checked"), function(){            
                tenaga_kerja.push($(this).val());
            });
            var gardu = $('#gardu').val();
            var kode_line = $('#kode_line').val();
            var value = {
                segment:segment,
                kode_project:kode_project,
                tegangan:tegangan,
                kode_jenis_pekerjaan:kode_jenis_pekerjaan,
                material:material,
                alamat_project:alamat_project,
                tgl_pengajuan:tgl_pengajuan,
                tgl_mulai:tgl_mulai,
                tgl_selesai:tgl_selesai,
                jam_mulai:jam_mulai,
                jam_selesai:jam_selesai,
                peralatan_kerja:peralatan_kerja,
                gardu:gardu,
                kode_line:kode_line,
                lampiran_izin:lampiran_izin,
                klasifikasi:klasifikasi,
                prosedur_kerja:prosedur_kerja,
                perlindungan:perlindungan,
                keselamatan:keselamatan,
                tenaga_kerja:tenaga_kerja
            };
            $.ajax({
                url:'<?php echo base_url(); ?>Rencana/update_project',
                type:'POST',
                data:value,
                success:function(data){
                    if (data ==1) {
                        window.location='<?php echo base_url(); ?>Rencana/';
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
        $(document).on('click','#btnTambahJenisPekerjaan',function(){
            location.href = "<?php echo base_url() ?>Arsip/tambah_jenis_pekerjaan";
        });
        $('#table_selesai').DataTable({
            "order": [[ 1, "desc" ],[ 2, "desc" ]],
            "ajax": {
                url:'<?php echo base_url() ?>Rencana/get_selesai',
                "type": "POST"
            },
        });
        $('#table_rekap_bulanan').DataTable({
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'excel',
                    title: 'Rekap Bulanan',
                    messageTop: 'The information in this table is copyright to Sirius Cybernetics Corp.'
                },
                {
                    extend: 'pdf',
                    title: 'Rekap Bulanan'
                },
                {
                    extend: 'print',
                    title: 'Rekap Bulanan'
                }
            ]
        });
        $(document).on('click','#btnGenerateLaporan',function(){
            var gardu = $('#gardu').val();
            var tgl_awal = $('#tgl_awal').val();
            var tgl_akhir = $('#tgl_akhir').val();
            var value = {
                gardu:gardu,
                tgl_akhir:tgl_akhir,
                tgl_awal:tgl_awal
            };
            $('#table_rekap_bulanan').DataTable({
                dom: 'Bfrtip',
                destroy:true,
                ajax: {
                    url:'<?php echo base_url() ?>Laporan/get_laporan/',
                    "type": "POST",
                    data:{
                        gardu:gardu,
                        tgl_awal:tgl_awal,
                        tgl_akhir:tgl_akhir
                    }
                },
                buttons: [
                    {
                        extend: 'excel',
                        title: 'Rekap Bulanan',
                        messageTop: 'The information in this table is copyright to Sirius Cybernetics Corp.'
                    },
                    {
                        extend: 'pdf',
                        title: 'Rekap Bulanan'
                    },
                    {
                        extend: 'print',
                        title: 'Rekap Bulanan'
                    }
                ]
            });
            
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
        $('#table_pekerja').DataTable({
            searching: false,
            paging:   false,
            ordering: false,
            info:     false,
            "ajax": {
                url:'<?php echo base_url() ?>Rencana/get_temp_pekerja/'+type,
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

        
        var kode_project = $('#kode_project').val();
        var value = {
            kode_project:kode_project
        }
        $.ajax({
            url:'<?php echo base_url() ?>Rencana/get_checked_klasifikasi',
            data:value,
            type:'POST',
            success:function(data){
                var json = jQuery.parseJSON(data);
                for (var i = 0; i < json.length; i++) {
                    $('input.klasifikasi[value="'+json[i]+'"]').prop('checked', true);
                }

            }
        });
        $.ajax({
            url:'<?php echo base_url() ?>Rencana/get_checked_tenaga_kerja',
            data:value,
            type:'POST',
            success:function(data){
                var json = jQuery.parseJSON(data);
                for (var i = 0; i < json.length; i++) {
                    $('input.tenaga_kerja[value="'+json[i]+'"]').prop('checked', true);
                }

            }
        });
        $.ajax({
            url:'<?php echo base_url() ?>Rencana/get_checked_prosedur',
            data:value,
            type:'POST',
            success:function(data){
                var json = jQuery.parseJSON(data);
                for (var i = 0; i < json.length; i++) {
                    $('input.prosedur_kerja[value="'+json[i]+'"]').prop('checked', true);
                }

            }
        });
        $.ajax({
            url:'<?php echo base_url() ?>Rencana/get_checked_lampiran',
            data:value,
            type:'POST',
            success:function(data){
                var json = jQuery.parseJSON(data);
                for (var i = 0; i < json.length; i++) {
                    $('input.lampiran_izin[value="'+json[i]+'"]').prop('checked', true);
                }

            }
        });
        $.ajax({
            url:'<?php echo base_url() ?>Rencana/get_checked_peralatan',
            data:value,
            type:'POST',
            success:function(data){
                var json = jQuery.parseJSON(data);
                for (var i = 0; i < json.length; i++) {
                    $('input.peralatan[value="'+json[i]+'"]').prop('checked', true);
                }

            }
        });
        $(document).on('click','#btnReview',function(){
            var uniqid = $(this).attr('uniqid');
            var value = {
                uniqid:uniqid
            }
            window.location.replace("<?php echo base_url() ?>Rencana/review/"+uniqid);
        });
        $(document).on('click','#btnSetuju',function(){
            var uniqid = $(this).attr('uniqid');
            var value = {
                uniqid:uniqid
            }
            $.ajax({
                url:'<?php echo base_url() ?>Rencana/approval',
                data:value,
                type:'POST',
                success:function(data){
                    if (data == 1) {
                        location.reload();
                    }else{
                        alert(data);
                    }
                }
            });
        });
        $(document).on('click','#btnKirim',function(){
            var uniqid = $(this).attr('uniqid');
            var value = {
                uniqid:uniqid
            }
            $.ajax({
                url:'<?php echo base_url() ?>Rencana/kirim',
                data:value,
                type:'POST',
                success:function(data){
                    if (data == 1) {
                        location.reload();
                    }else{
                        alert(data);
                    }
                }
            });
        });
        $(document).on('click','#btnDenied',function(){
            var uniqid = $(this).attr('uniqid');
            var keterangan = $('#keterangantolak').val();
            var value = {
                uniqid:uniqid,
                keterangan:keterangan
            }
            $.ajax({
                url:'<?php echo base_url() ?>Rencana/tolak',
                data:value,
                type:'POST',
                success:function(data){
                    alert(data);
                }
            });
        });
        $(document).on('click','#btnFailed',function(){
            var uniqid = $(this).attr('uniqid');
            var keterangan = $('#keterangantolak').val();
            var value = {
                uniqid:uniqid,
                keterangan:keterangan
            }
            $.ajax({
                url:'<?php echo base_url() ?>Rencana/failed',
                data:value,
                type:'POST',
                success:function(data){
                    if (data == 1) {
                        location.reload();
                    }else{
                        alert(data);
                    }
                }
            });
        });
        $(document).on('click','#btnTolak',function(){
            $('#ModalTolak').modal('show');
            var uniqid = $(this).attr('uniqid');
            $('#btnDenied').attr('uniqid',uniqid);
            $('#btnFailed').attr('uniqid',uniqid);
        });
        
    </script>
    <script type="text/javascript">
        var data = [
              { y: 'Jan', a: 50, b: 90},
              { y: 'Feb', a: 65,  b: 75},
              { y: 'Mar', a: 50,  b: 50},
              { y: 'Apr', a: 75,  b: 60},
              { y: 'Mei', a: 80,  b: 65},
              { y: 'Jun', a: 90,  b: 70},
              { y: 'Jul', a: 100, b: 75},
              { y: 'Aug', a: 115, b: 75},
              { y: 'Sep', a: 120, b: 85},
              { y: 'Okt', a: 145, b: 85},
              { y: 'Nov', a: 160, b: 95},
              { y: 'Des', a: 160, b: 95}
            ],
            config = {
              data: data,
              xkey: 'y',
              ykeys: ['a', 'b'],
              labels: ['Preventif', 'Korektif'],
              fillOpacity: 0.6,
              hideHover: 'auto',
              behaveLikeLine: true,
              resize: true,
              pointFillColors:['#ffffff'],
              pointStrokeColors: ['black'],
              lineColors:['gray','red']
          };
        config.element = 'bar-chart';
        Morris.Bar(config);
        config.element = 'stacked';
        config.stacked = true;
        Morris.Bar(config);
        Morris.Donut({
          element: 'pie-chart',
          data: [
            {label: "Friends", value: 30},
            {label: "Allies", value: 15},
            {label: "Enemies", value: 45},
            {label: "Neutral", value: 10}
          ]
        });
        
    </script>
     <?php 
$this->load->view('parts/jquery');
 ?>

</body>

</html>