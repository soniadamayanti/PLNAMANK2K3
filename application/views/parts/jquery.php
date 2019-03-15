<script type="text/javascript">
  
    $(document).on('click','#btnSimpanProject',fuction(){
        var tgl_pembebasan_jaringan = $('#tgl_pembebasan_jaringan').val();
        var sistem_tegangan = $('#sistem_tegangan').val();
        var keperluan = $('#keperluan').val();
        var material = $('#material').val();
        var jumlah_tenaga_kerja = $('#jumlah_tenaga_kerja').val();
        var sistem_tegangan = $('#sistem_tegangan').val();

    })
    $(document).on("click","#btnKirimRencanaKerja", function() {
       Swal({
          title: 'Print Invoice',
          text: "Klik print untuk mencetak Invoice",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Print'
        })
    });
      $(document).on('click','#btnBuatRencanaKerja',function(){
        var data = $(this).attr('data-type');
        window.location='Rencana/sop_pemadaman/'+data
      });
      
</script>