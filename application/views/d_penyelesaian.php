<?php foreach ($project as $project): ?>
    
<?php endforeach ?>

<?php 

$kode = $project['kode_project'] ;
$user = $project['user'] ;


$ulp = $this->db->query("SELECT * FROM tb_users WHERE kode_user = '".$user."'");
$aju_tahun = substr($project['tgl_selesai'], 0,4);
$aju_bulan_angka = substr($project['tgl_selesai'], 5,2);

if ($aju_bulan_angka == '01') {
    $aju_bulan = 'Januari';
}else if ($aju_bulan_angka == '02') {
    $aju_bulan = 'Februari';
}else if ($aju_bulan_angka == '03') {
    $aju_bulan = 'Maret';
}else if ($aju_bulan_angka == '04') {
    $aju_bulan = 'April';
}else if ($aju_bulan_angka == '05') {
    $aju_bulan = 'Mei';
}else if ($aju_bulan_angka == '06') {
    $aju_bulan = 'Juni';
}else if ($aju_bulan_angka == '07') {
    $aju_bulan = 'Juli';
}else if ($aju_bulan_angka == '08') {
    $aju_bulan = 'Agustus';
}else if ($aju_bulan_angka == '09') {
    $aju_bulan = 'September';
}else if ($aju_bulan_angka == '10') {
    $aju_bulan = 'Oktober';
}else if ($aju_bulan_angka == '11') {
    $aju_bulan = 'November';
}else if ($aju_bulan_angka == '12') {
    $aju_bulan = 'Desember';
}
$aju_tgl = substr($project['tgl_selesai'], 8,2);
$tgl = $aju_tgl.' '.$aju_bulan.' '.$aju_tahun;

 ?>
<link href="<?php echo site_url(); ?>assets/css/grid.css" rel="stylesheet" />
    
    <div class="page">
        
        <div class="col-sm-12 b-full">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 p-2">
                <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                    <img src="<?php echo site_url(); ?>assets/images/logo-icon-pln.png">
                </div>
                <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
                    PT PLN (Persero)<br>
                        UNIT INDUK DISTRIBUSI JAWA BARAT <br>
                        UP3 CIANJUR - ULP CIANJUR KOTA
                </div>
            </div>
        </div>
        <div class="col-sm-12 b-bottom b-lr">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 p-2">
                    AMANK2K3<br>
                    <div class="center">PEMBERITAHUAN PENYELESAIAN PEKERJAAN (<?php echo $tgl; ?>)</div>
            </div>
        </div>
        <div class="col-md-12 b-bottom b-lr ">
            <table class="col-xs-12 col-sm-12 col-md-12 col-lg-12 p-2">
                <tbody>
                <tr>
                    <td style="width: 44%">Kode</td>
                    <td style="width: 3%">:</td>
                    <td style="width: 53%"><?php echo $project['kode_project'] ?></td>
                </tr>
                <tr>
                    <td style="width: 44%">NAMA PEKERJAAN</td>
                    <td style="width: 3%">:</td>
                    <td style="width: 53%"><?php echo $project['nama_jenis_pekerjaan'] ?></td>
                </tr>
                <tr>
                    <td>LOKASI</td>
                    <td>:</td>
                    <td class="caps"><?php echo $project['alamat_project'] ?></td>
                </tr>
                <tr>
                    <td>PENYULANG</td>
                    <td>:</td>
                    <td><?php echo $project['nama_sld'] ?></td>
                </tr>
                <tr>
                    <td>ULP</td>
                    <td>:</td>
                    <td ><?php 
                            foreach ($ulp->result() as $u) {
                                echo $u->ulp;
                            };
                         ?>  
                    </td>
                </tr>
                <tr>
                    <td>Action taken / langkah pekerjaan / perbaikan</td>
                    <td>:</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Hasil Pekerjaan / Perbaikan</td>
                    <td>:</td>
                    <td>SELESAI (ZERO ACCIDENT)</td>
                </tr>
                </tbody>
            </table>
        </div>  
        <div class="col-sm-12 b-lr">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 p-2">
                    <div class="center" style="padding-top: 3mm; padding-bottom: 3mm;">
                        Kewenangan untuk penyelesaian pekerjaan AMANK2K3 selesai dikerjakan dan dikembalikan tanggal <?php echo $tgl; ?> 
                    </div>
            </div>
        </div>
        <div class="col-sm-12 b-full">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 p-2">
                <p class="col-xs-11 col-sm-11 col-md-11 col-lg-11" style="height: 130mm;">
                    <?php echo $project['keterangan'] ?>
                </p>
            </div>
        </div>

    </div>