<?php foreach ($project as $project): ?>
    
<?php endforeach ?>

<link href="<?php echo site_url(); ?>assets/css/grid.css" rel="stylesheet" />
    
    <div class="page">
        
        <div class="col-sm-12 b-full">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 p-2">
                <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                    <img src="<?php echo site_url(); ?>assets/images/logo-icon.png">
                </div>
                <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
                    PT PLN (Persero)<br>
                        DISTRIBUSI JAWA BARAT <br>
                        UP3 CIANJUR - ULP CIANJUR KOTA
                </div>
            </div>
        </div>
        <div class="col-sm-12 b-bottom b-lr">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 p-2">
                    AMANK2K3<br>
                    <div class="center">PEMBERITAHUAN PENYELESAIAN PEKERJAAN (28-11-2018)</div>
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
                    <td><?php echo $project['alamat_project'] ?></td>
                </tr>
                <tr>
                    <td>PENYULANG</td>
                    <td>:</td>
                    <td><?php echo $project['nama_sld'] ?></td>
                </tr>
                <tr>
                    <td>ULP</td>
                    <td>:</td>
                    <td><?php echo $project['lokasi'] ?> KV</td>
                </tr>
                <tr>
                    <td>Action taken / langkah pekerjaan / perbaikan</td>
                    <td>:</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Hasil Pekerjaan / Perbaikan</td>
                    <td>:</td>
                    <td>SELESAI</td>
                </tr>
                </tbody>
            </table>
        </div>  
        <div class="col-sm-12 b-bottom b-lr">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 p-2">
                    <div class="center" style="padding-top: 3mm; padding-bottom: 3mm;">
                        Kewenangan untuk penyelesaian pekerjaan AMANK2K3 selesai dikerjakan dan dikembalikan tanggal <?php echo $project['tgl_selesai'] ?> 
                    </div>
            </div>
        </div>
        <div class="col-sm-12 b-bottom b-lr">
            <table class="ttd" style="margin-top: 10mm; margin-bottom: 10mm;">
                <tbody>
                    <tr>
                        <td>Mengetahui<br>MB JARINGAN</td>
                        <td>PELASKSANA</td>
                        <td>PENGAWAS K3</td>
                        <td>MANAGER ULP</td>
                    </tr>
                    <tr>
                        <td><img src="<?php echo site_url(); ?>assets/arsip/ttd/U0007.png"></td>
                        <td><img src="<?php echo site_url(); ?>assets/arsip/ttd/U0003.png"></td>
                        <td><img src="<?php echo site_url(); ?>assets/arsip/ttd/U0002.png"></td>
                        <td><img src="<?php echo site_url(); ?>assets/arsip/ttd/U0003.png"></td>
                    </tr>
                    <tr>
                        <td>
                            (ANDIS VERINDA P)
                        </td>
                        <td>
                            (RIKY JAPUTRA)
                        </td>
                        <td>
                            (VIRGEA KRISMANDA)
                        </td>
                        <td>
                            (AINUL YAQIN)
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-sm-12 b-lr center">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 b-right p-2">
                DOKUMENTASI HASIL KERJA
            </div>
            <div class="col-xs-pull-7 col-sm-pull-7 col-md-pull-7 col-lg-pull-7 p-2 center">
                 KETERANGAN
            </div>
        </div>
        <div class="col-sm-12 b-full center" style="height: 100mm;">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 b-right p-2 " style="height: 94mm;">
                    <img src="<?php echo site_url(); ?>assets/images/logo-icon.png">
            </div>
            <div class="col-xs-pull-7 col-sm-pull-7 col-md-pull-7 col-lg-pull-7 p-2" >
                Lancar
            </div>
        </div>

    </div>