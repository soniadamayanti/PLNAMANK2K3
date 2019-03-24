<script type="text/javascript">
        $('#table_arsip_jenis_pekerjaan').DataTable({
            "ajax": {
                url:'<?php echo base_url() ?>arsip/dt_jenis_pekerjaan',
                "type": "POST"
            },
        });
        $('#table_arsip_perusahaan_pelaksana').DataTable({
            "order": [[ 1, "desc" ],[ 0, "asc" ]],
            "pageLength" : 10,
            lengthChange: false,
            autoWidth: false,
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'excel',
                    title: 'Perusahaan Pelaksana',
                    exportOptions: {
                        columns: [ 0, 1 ]
                    }
                },
                {
                    extend: 'pdf',
                    title: 'Perusahaan Pelaksana',
                    exportOptions: {
                        columns: [ 0, 1 ]
                    }
                },
                {
                    extend: 'print',
                    title: 'Perusahaan Pelaksana',
                    exportOptions: {
                        columns: [ 0, 1 ]
                    }
                }
            ],
            "ajax": {
                url:'<?php echo base_url() ?>arsip/dt_perusahaan_pelaksana',
                "type": "POST"
            },
        });
        
        $('#table_arsip_sld').DataTable({
            "ajax": {
                url:'<?php echo base_url() ?>arsip/dt_sld',
                "type": "POST"
            },
        });
        $('#table_arsip_gardu_induk').DataTable({
            "order": [[ 0, "asc" ]],
            "pageLength" : 10,
            lengthChange: false,
            autoWidth: false,
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'excel',
                    title: 'Gardu Induk',
                    exportOptions: {
                        columns: [ 0, 1 ]
                    }
                },
                {
                    extend: 'pdf',
                    title: 'Gardu Induk',
                    exportOptions: {
                        columns: [ 0, 1 ]
                    }
                },
                {
                    extend: 'print',
                    title: 'Gardu Induk',
                    exportOptions: {
                        columns: [ 0, 1 ]
                    }
                }
            ],
            "ajax": {
                url:'<?php echo base_url() ?>arsip/dt_gardu_induk',
                "type": "POST"
            },
        });
        $('#table_arsip_pelaksana_pekerjaan').DataTable({
            "order": [[ 2, "desc" ],[ 1, "asc" ]],
            "pageLength" : 10,
            lengthChange: false,
            autoWidth: false,
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'excel',
                    title: 'Gardu Induk',
                    exportOptions: {
                        columns: [ 0, 1, 2 ]
                    }
                },
                {
                    extend: 'pdf',
                    title: 'Gardu Induk',
                    exportOptions: {
                        columns: [ 0, 1, 2 ]
                    }
                },
                {
                    extend: 'print',
                    title: 'Gardu Induk',
                    exportOptions: {
                        columns: [ 0, 1, 2 ]
                    }
                }
            ],
            "ajax": {
                url:'<?php echo base_url() ?>arsip/dt_pelaksana_pekerjaan',
                "type": "POST"
            },
        });
            
        $(document).on('click','#btnCancelGarduInduk',function(){
            var status = 'insert';
            $('#a_kode_gardu').val('');
            $('#a_gardu_induk').val('');
            $('#a_alamat_gardu').val('');
            $('#btnTambahGarduInduk').attr("status",status);
            $('#ModalTambahGardu').modal('toggle');
        });

        $(document).on('click','#btnTambahGarduInduk',function(){
            var kode_gardu = $('#a_kode_gardu').val();
            var gardu_induk = $('#a_gardu_induk').val();
            var alamat = $('#a_alamat_gardu').val();
            var status = $(this).attr("status");
            var statusinsert = 'insert';
            var value = {
                kode_gardu:kode_gardu,
                gardu_induk:gardu_induk,
                alamat:alamat
            };
            if (gardu_induk == '', alamat == '') {
                alert('Nama Gardu atau alamat tidak boleh kosong');
            }else{
                if (status == 'insert') {
                    $.ajax({
                        url:'<?php echo base_url() ?>Arsip/tambah_gardu',
                        data:value,
                        type:'POST',
                        success:function(data){ 
                        var table = $('#table_arsip_gardu_induk').DataTable();
                        table.ajax.reload(null,false);
                        $('#ModalTambahGardu').modal('toggle');
                        $('#a_gardu_induk').val('');
                        $('#a_kode_gardu').val('');
                        $('#a_alamat_gardu').val('');
                        }
                    });
                }else if (status == 'update') {
                   $.ajax({
                        url:'<?php echo base_url() ?>Arsip/update_gardu',
                        data:value,
                        type:'POST',
                        success:function(data){ 
                        var table = $('#table_arsip_gardu_induk').DataTable();
                        table.ajax.reload(null,false);
                        $('#ModalTambahGardu').modal('toggle');
                        $('#a_kode_gardu').val('');
                        $('#a_gardu_induk').val('');
                        $('#a_alamat_gardu').val('');
                        $('#btnTambahGarduInduk').attr("status",statusinsert);
                        }
                    });
                }
            }
        });

        $(document).on('click','#getUpdateGardu',function(){
            var kode_gardu_induk = $(this).attr("data-kode");
            var nama_gardu = $(this).attr("data-nama");
            var alamat = $(this).attr("data-alamat");
            var status = 'update';
            $('#ModalTambahGardu').modal('show');
            $('#a_kode_gardu').val(kode_gardu_induk);
            $('#a_gardu_induk').val(nama_gardu);
            $('#a_alamat_gardu').val(alamat);
            $('#btnTambahGarduInduk').attr("status",status);
        });

        $(document).on( "click","#btnHapusGardu", function() {
        var kode_gardu_induk = $(this).attr("data-kode");
        var value = {
            kode_gardu_induk: kode_gardu_induk
          };
          $.ajax(
          {
            url:'<?php echo base_url() ?>Arsip/delete_gardu',
            type: "POST",
            data : value,
            success: function(data, textStatus, jqXHR)
            {
                var table = $('#table_arsip_gardu_induk').DataTable();
                table.ajax.reload(null,false);
            },
            error: function(jqXHR, textStatus, errorThrown)
            {
                alert(textStatus);
            }
        });
        });


        $(document).on('click','#btnCancelPerusahaanPelaksana',function(){
            var status = 'insert';
            $('#a_kode_pelaksana').val('');
            $('#a_nama_pelaksana').val('');
            $('#btnTambahPerusahaanPelaksana').attr("status",status);
            $('#ModalTambahPerusahaan').modal('toggle');
        });

        $(document).on('click','#btnTambahPerusahaanPelaksana',function(){
            var kode_pelaksana = $('#a_kode_pelaksana').val();
            var nama_pelaksana = $('#a_nama_pelaksana').val();
            var status = $(this).attr("status");
            var statusinsert = 'insert';
            var value = {
                kode_pelaksana:kode_pelaksana,
                nama_pelaksana:nama_pelaksana
            };
            if (nama_pelaksana == '') {
                alert('Nama Gardu tidak boleh kosong');
            }else{
                if (status == 'insert') {
                    $.ajax({
                        url:'<?php echo base_url() ?>Arsip/tambah_pelaksana',
                        data:value,
                        type:'POST',
                        success:function(data){ 
                        var table = $('#table_arsip_perusahaan_pelaksana').DataTable();
                        table.ajax.reload(null,false);
                        $('#ModalTambahPerusahaan').modal('toggle');
                        $('#a_nama_pelaksana').val('');
                        $('#a_kode_pelaksana').val('');
                        }
                    });
                }else if (status == 'update') {
                   $.ajax({
                        url:'<?php echo base_url() ?>Arsip/update_pelaksana',
                        data:value,
                        type:'POST',
                        success:function(data){ 
                        var table = $('#table_arsip_perusahaan_pelaksana').DataTable();
                        table.ajax.reload(null,false);
                        $('#ModalTambahPerusahaan').modal('toggle');
                        $('#a_kode_pelaksana').val('');
                        $('#a_nama_pelaksana').val('');
                        $('#btnTambahPerusahaanPelaksana').attr("status",statusinsert);
                        }
                    });
                }
            }
        });

        $(document).on('click','#getUpdatePelaksana',function(){
            var kode_pelaksana = $(this).attr("data-kode");
            var nama_pelaksana = $(this).attr("data-nama");
            var status = 'update';
            $('#ModalTambahPerusahaan').modal('show');
            $('#a_kode_pelaksana').val(kode_pelaksana);
            $('#a_nama_pelaksana').val(nama_pelaksana);
            $('#btnTambahPerusahaanPelaksana').attr("status",status);
        });
        
        $(document).on( "click","#btnHapusPelaksana", function() {
        var kode_pelaksana = $(this).attr("data-kode");
        var value = {
            kode_pelaksana: kode_pelaksana
          };
          $.ajax(
          {
            url:'<?php echo base_url() ?>Arsip/delete_pelaksana',
            type: "POST",
            data : value,
            success: function(data, textStatus, jqXHR)
            {
                var table = $('#table_arsip_perusahaan_pelaksana').DataTable();
                table.ajax.reload(null,false);
            },
            error: function(jqXHR, textStatus, errorThrown)
            {
                alert(textStatus);
            }
        });
        });



        $(document).on('click','#btnCancelPekerja',function(){
            var status = 'insert';
            $('#a_kode_pekerja').val('');
            $('#a_nama_pekerja').val('');
            $('#btnTambahPekerja').attr("status",status);
            $('#ModalTambahPekerja').modal('toggle');
        });

        $(document).on('click','#btnTambahPekerja',function(){
            var kode_perusahaan = $('#a_kode_perusahaan').val();
            var kode_pekerja = $('#a_kode_pekerja').val();
            var nama_pekerja = $('#a_nama_pekerja').val();
            var status = $(this).attr("status");
            var statusinsert = 'insert';
            var value = {
                kode_perusahaan:kode_perusahaan,
                kode_pekerja:kode_pekerja,
                nama_pekerja:nama_pekerja
            };
            if (kode_perusahaan == '') {
                alert('Silahkan pilih Perusahaan');
            }
            else if (nama_pekerja == '') {
                alert('Nama Pekerja tidak boleh kosong');
            }else{
                if (status == 'insert') {
                    $.ajax({
                        url:'<?php echo base_url() ?>Arsip/tambah_pekerja',
                        data:value,
                        type:'POST',
                        success:function(data){ 
                        var table = $('#table_arsip_pelaksana_pekerjaan').DataTable();
                        table.ajax.reload(null,false);
                        $('#ModalTambahPekerja').modal('toggle');
                        $('#a_nama_pekerja').val('');
                        $('#a_kode_pekerja').val('');
                        }
                    });
                }else if (status == 'update') {
                   $.ajax({
                        url:'<?php echo base_url() ?>Arsip/update_pekerja',
                        data:value,
                        type:'POST',
                        success:function(data){ 
                        var table = $('#table_arsip_pelaksana_pekerjaan').DataTable();
                        table.ajax.reload(null,false);
                        $('#ModalTambahPekerja').modal('toggle');
                        $('#a_kode_pekerja').val('');
                        $('#a_nama_pekerja').val('');
                        $('#btnTambahPekerja').attr("status",statusinsert);
                        }
                    });
                }
            }
        });

        $(document).on('click','#getUpdatePekerja',function(){
            var kode_pekerja = $(this).attr("data-kode");
            var nama_pekerja = $(this).attr("data-nama");
            var kode_perusahaan = $(this).attr("data-perusahaan");
            var status = 'update';
            $('#ModalTambahPekerja').modal('show');
            $('#a_kode_pekerja').val(kode_pekerja);
            $('#a_nama_pekerja').val(nama_pekerja);
            $('#a_kode_perusahaan').val(kode_perusahaan);
            $('#btnTambahPekerja').attr("status",status);
        });
        
        $(document).on( "click","#btnHapusPekerja", function() {
        var kode_pekerja = $(this).attr("data-kode");
        var value = {
            kode_pekerja: kode_pekerja
          };
          $.ajax(
          {
            url:'<?php echo base_url() ?>Arsip/delete_pekerja',
            type: "POST",
            data : value,
            success: function(data, textStatus, jqXHR)
            {
                var table = $('#table_arsip_pelaksana_pekerjaan').DataTable();
                table.ajax.reload(null,false);
            },
            error: function(jqXHR, textStatus, errorThrown)
            {
                alert(textStatus);
            }
        });
        });
      
</script>