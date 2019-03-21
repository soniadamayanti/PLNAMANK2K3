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
        <div class="col-sm-12 b-lr">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 p-2">
                    <div class="center" style="padding-top: 3mm; padding-bottom: 3mm;">
                        Kewenangan untuk penyelesaian pekerjaan AMANK2K3 selesai dikerjakan dan dikembalikan tanggal <?php echo $project['tgl_selesai'] ?> 
                    </div>
            </div>
        </div>
        <div class="col-sm-12 b-full">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 p-2">
                <div class="center" style="padding-top: 3mm; padding-bottom: 3mm;">
                    Pemberitahuna penyelesaian pekerjaan
                </div>
                <p class="col-xs-11 col-sm-11 col-md-11 col-lg-11" style="height: 170mm;">
                    Jika Anda sudah menambahkan beberapa akun Instagram, Anda mungkin mendapatkan pemberitahuan otomatis dari akun yang sudah Anda nyalakan. Ini bergantung pada kapan terakhir kali Anda masuk dan jumlah perangkat yang Anda gunakan untuk masuk ke akun.

                    Untuk melihat jumlah pemberitahuan untuk setiap akun yang Anda tambahkan secara cepat, buka profil Anda dan ketuk nama pengguna di bagian atas.
                </p>
            </div>
        </div>

    </div>