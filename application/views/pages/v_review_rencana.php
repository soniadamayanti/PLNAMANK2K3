<?php 
$a = array();
foreach ($kode_project as $data) {
    $a[] = $data;
}
$kode = $a[0]['kode_project'];
foreach ($detail_project as $data_project) {
}
?>
    
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor mb-0 mt-0">
            Rencana Kerja
        </h3>
    </div>
    <div class="col-md-6 col-4 align-self-center">
        
            <button class="btn float-right hidden-sm-down btn-info" uniqid="'.$data['uniqid'].'" id="btnKirim">Kirim & TTD</button>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card card-outline-info">
            <div class="card-header">
                <h4 class="mb-0 text-white"><?php echo $kode; ?></h4>
            </div>
            <div class="card-body">
                <iframe src="<?php echo base_url() ?>download/page_review/<?php echo $uniqid; ?>" style="border:none; width: 100%; height: 500px;"></iframe>
            </div>
        </div>
    </div>
</div>
<!-- Row -->
<!-- ============================================================== -->
<!-- End PAge Content -->