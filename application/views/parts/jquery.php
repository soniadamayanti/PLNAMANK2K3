<script type="text/javascript">
  
            
        $(document).on('click','#btnTambahPerusahaanPelaksana',function(){
            var nama_pelaksana = $('#a_nama_perusahaan').val();
            var value = {
                nama_pelaksana:nama_pelaksana
            };
            if (nama_pelaksana == '') {
                alert('Nama Pelaksana tidak boleh kosong');
            }else{
                $.ajax({
                    url:'<?php echo base_url() ?>Arsip/tambah_pelaksana',
                    data:value,
                    type:'POST',
                    success:function(data){ 
                    var table = $('#table_arsip_perusahaan_pelaksana').DataTable();
                    table.ajax.reload(null,false);
                    $('#ModalTambahPerusahaan').modal('toggle');
                    }
                });
            }
        });

        $('#table_arsip_gardu_induk').DataTable({
            "ajax": {
                url:'<?php echo base_url() ?>arsip/dt_gardu_induk',
                "type": "POST"
            },
        });
      
</script>