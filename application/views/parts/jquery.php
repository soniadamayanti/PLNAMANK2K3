<script type="text/javascript">
  
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
            var uniqid = $('#uniqid').val();
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
                    if (data == 1) {
                        window.location='<?php echo base_url(); ?>Rencana/hirarc/'+uniqid;
                    }
                }
            });
        });
      
</script>