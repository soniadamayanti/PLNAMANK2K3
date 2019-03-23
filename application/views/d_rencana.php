<?php foreach ($project as $project): ?>
    
<?php endforeach ?>

<link href="<?php echo site_url(); ?>assets/css/grid.css" rel="stylesheet" />

    <div class="page">
        
        <div class="col-sm-12 center "  style="margin-top: 40mm;">
            <b class="font-21">AMANK2K3 AREA CIANJUR</b>
            <hr>
            <span><?php echo $project['kode_project'] ?></span>
        </div>
        <div class="col-sm-12" style="margin-top: 10mm;">
            <table>
                <tr>
                    <td>NAMA PEKERJAAN</td>
                    <td>:</td>
                    <td><?php echo $project['nama_jenis_pekerjaan'] ?></td>
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
                    <td><?php echo $project['lokasi'] ?></td>
                </tr>
            </table>
        </div>
    </div>

    <div class="page">
        
        <div class="col-sm-12 b-full">
            <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 b-right p-2">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    <img src="<?php echo site_url(); ?>assets/images/logo-icon-pln.png">
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    PT PLN (Persero)<br>
                        DISTRIBUSI JAWA BARAT <br>
                        UP3 CIANJUR - ULP CIANJUR KOTA
                </div>
            </div>
            <div class="col-xs-pull-7 col-sm-pull-7 col-md-pull-7 col-lg-pull-7 p-2 center">
                    SURAT PERMOHONAN<br>
                    PEMBEBASAN TEGANGAN
            </div>
        </div>
        <div class="col-md-12 b-lr">

            
            <table class="rencana">
                <tbody>
                <tr>
                    <td style="width: 44%">Kode</td>
                    <td style="width: 3%">:</td>
                    <td style="width: 53%"><?php echo $project['kode_project'] ?></td>
                </tr>
                <tr>
                    <td style="width: 44%">PENGAWAS</td>
                    <td style="width: 3%">:</td>
                    <td style="width: 53%">AINUL YAQIN</td>
                </tr>
                <tr>
                    <td>JABATAN</td>
                    <td>:</td>
                    <td>AE PENGENDALIAN KOSNTRUKSI</td>
                </tr>
                <tr>
                    <td>PEMBEBASAN JARINGAN HARI/TANGGAL</td>
                    <td>:</td>
                    <td><?php echo $project['tgl_pelaksanaan'] ?></td>
                </tr>
                <tr>
                    <td>SISTEM TEGANGAN</td>
                    <td>:</td>
                    <td><?php echo $project['tegangan'] ?> KV</td>
                </tr>
                <tr>
                    <td>UNTUK KEPERLUAN</td>
                    <td>:</td>
                    <td><?php echo $project['nama_jenis_pekerjaan'] ?></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>KESIAPAN PEMBOROANG</td>
                </tr>
                <tr>
                    <td>Material</td>
                    <td>:</td>
                    <td><?php echo $project['material'] ?></td>
                </tr>
                <tr>
                    <td>Jumlah Tenaga Kerja</td>
                    <td>:</td>
                    <td><?php echo $project['jml_tenaga_kerja'] ?> Orang</td>
                </tr>
                <tr>
                    <td>Peralatan Kerja</td>
                    <td>:</td>
                    <td><?php echo $project['peralatan_kerja'] ?></td>
                </tr>
                <tr>
                    <td>Pelaksana</td>
                    <td>:</td>
                    <td>
                        <?php 
                        $i=1;
                        foreach ($detail_pelaksana2 as $detail_pelaksana2) {
                            echo $i.". ".$detail_pelaksana2['nama_pelaksana'].'<br>';
                        $i++;
                        }
                         ?>
                    </td>
                </tr>
                </tbody>
            </table>

            <table class="rencanajadwal">
                <thead>
                    <tr>
                        <td class="center">Uraian Jadwal Pekerjaan</td>
                        <td class="center">Rencana Jam</td>
                        <td class="center">Keterangan</td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($uraian_pekerjaan as $uraian_pekerjaan): ?>
                        <tr>
                            <td><?php echo $uraian_pekerjaan['uraian_pekerjaan'] ?></td>
                            <td class="center"> <?php echo $uraian_pekerjaan['jam'] ?></td>
                            <td><?php echo $uraian_pekerjaan['keterangan'] ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>


            <table class="rencana">
                <tr>
                    <td colspan="3">DI ISI PT PLN (PERSERO) CABANG CIANJUR</td>
                </tr>
                <tr>
                    <td style="width: 44%">Nama Penyulang</td>
                    <td style="width: 3%">:</td>
                    <td style="width: 53%"><?php echo $project['nama_sld'] ?></td>
                </tr>
                <tr>
                    <td>Gardu Padam</td>
                    <td>:</td>
                    <td><?php echo $project['gardu'] ?></td>
                </tr>
                <tr>
                    <td>Lokasi Padam</td>
                    <td>:</td>
                    <td><?php echo $project['alamat_project'] ?></td>
                </tr>
                <tr>
                    <td>Pelaksana Pembebasan</td>
                    <td>:</td>
                    <td><?php 
                        $i=1;
                        foreach ($detail_pelaksana as $detail_pelaksana) {
                            echo $i.". ".$detail_pelaksana['nama_pelaksana'].'<br>';
                        $i++;
                        }
                         ?></td>
                </tr>
            </table>


            <table class="ttd">
                <tbody>
                    <tr>
                        <td colspan="2">&nbsp;</td>
                        <td><?php  
                        $awal =strpos($project['kode_project'], '/',14);
                        $akhir = strpos($project['kode_project'], '/',15);
                        $len = strlen($project['kode_project']);
                        $panjang = ($len-$awal)-($len-$akhir); 
                        echo substr($project['kode_project'], $awal+1,$panjang-1);
                        ?>, <?php echo $project['tgl_approval'] ?></td>
                    </tr>
                    <tr>
                        <td>Menyetujui</td>
                        <td>Mengetahui</td>
                        <td>Pemohon</td>
                    </tr>
                    <tr>
                        <td><img src="<?php echo site_url(); ?>assets/arsip/ttd/U0001.png"></td>
                        <td><img src="<?php echo site_url(); ?>assets/arsip/ttd/U0002.png"></td>
                        <td><img src="<?php echo site_url(); ?>assets/arsip/ttd/U0004.png"></td>
                    </tr>
                    <tr>
                        <td>
                            <u>ANDIS VP</u><br>
                            Manager ULP Cianjur Kota
                        </td>
                        <td>
                            <u>ANDIS VP</u><br>
                            Manager ULP Cianjur Kota
                        </td>
                        <td>
                            <u>ANDIS VP</u><br>
                            Manager ULP Cianjur Kota
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-sm-12 b-full center " style="height: 70mm;">
            <h1>
                Gambar Terlampir<br>
                SINGLE LINE <?php echo $project['tegangan'] ?> KV<br>
                <?php echo $project['nama_sld'] ?>
            </h1>
        </div>

    </div>

    <div class="page">
        <?php echo $project['kode_project'] ?><br>
        <img src="<?php echo site_url(); ?>assets/arsip/sld/<?php echo $project['kode_line'] ?>.jpg" style>
    </div>

    <div class="page">
        <div class="col-md-12 center">
            <span class="font-20 bold underline">WORKING PERMIT</span><br>
            <b class="font-16">IJIN BEKERJA</b>
        </div>
        <div class="col-md-12">

            <table class="working b-full">
                <tr>
                    <td colspan="5" class="bold">A. INFORMASI PEKERJAAN</td>
                </tr>
                <tr>
                    <td style="width: 3%">#</td>
                    <td style="width: 29%">Kode Pekerjaan</td>
                    <td style="width: 3%">:</td>
                    <td style="width: 70%" colspan="2"><?php echo $project['kode_project'] ?></td>
                </tr>
                <tr>
                    <td style="width: 3%">1.</td>
                    <td style="width: 29%">Tanggal Pengajuan</td>
                    <td style="width: 3%">:</td>
                    <td style="width: 70%" colspan="2"><?php echo $project['tgl_project'] ?></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Jenis Pekerjaan</td>
                    <td>:</td>
                    <td colspan="2"><?php echo $project['nama_jenis_pekerjaan'] ?></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Detail Pekerjaan</td>
                    <td>:</td>
                    <td colspan="2"><?php echo $project['nama_jenis_pekerjaan'] ?></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Lokasi Pekerjaan</td>
                    <td>:</td>
                    <td colspan="2"><?php echo $project['nama_sld'] ?></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Pengawas Pekerjaan</td>
                    <td>:</td>
                    <td>Ainul Yaqin</td>
                    <td>No.Telp : 089503800600</td>

                </tr>
                <tr>
                    <td>6</td>
                    <td>Pengawas K3</td>
                    <td>:</td>
                    <td>Virgea Krismanda</td>
                    <td>No.Telp : 089503800600</td>
                </tr>


                <tr class="b-top">
                    <td colspan="5" class="bold">B. DURASI PEKERJAAN</td>
                </tr>
                <tr class="bc-full">
                    <td colspan="2" rowspan="2">Durasi Kerja</td>
                    <td colspan="2">Tanggal Mulai : <?php echo $project['tgl_pelaksanaan'] ?></td>
                    <td>Jam Mulai : <?php echo $project['jam_pelaksanaan'] ?></td>
                </tr>
                <tr class="bc-full">
                    <td colspan="2">Tanggal Selesai : <?php echo $project['tgl_selesai'] ?></td>
                    <td>Jam Selasa : <?php echo $project['jam_selesai'] ?></td>
                </tr>
                <tr class="b-top">
                    <td colspan="5" class="bold">C. KLASIFIKASI PEKERJAAN</td>
                </tr>

                <tr>
                    <td colspan="5" class="tampilcekbox">

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <?php 
                            $i =1;
                            foreach ($detail_klasifikasi as $detail_klasifikasi) {
                                echo '<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">'.$i.'. '.$detail_klasifikasi['nama_klasifikasi_kerja'].'</div>';
                            $i++;
                            }
                             ?>
                        </div>
                        </td>
                </tr>

                <tr class="b-top">
                    <td colspan="5" class="bold">D. PROSEDUR PEKERJAAN YANG TELAH DIJELASKAN KEPADA PEKERJA</td>
                </tr>

                <tr>
                    <td colspan="5" class="tampilcekbox">
                    <?php 
                            $i =1;
                            foreach ($detail_prosedur_kerja as $detail_prosedur_kerja) {
                                echo '<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">'.$i.'. '.$detail_prosedur_kerja['nama_prosedur_kerja'].'</div>';
                            $i++;
                            }
                             ?>
                    </td>
                </tr>


                <tr class="b-top">
                    <td colspan="5" class="bold">E. LAMPIRAN IZIN KERJA (WAJIB DILAMPIRKAN)</td>
                </tr>

                <tr>
                    <td colspan="5" class="tampilcekbox">
                        <?php $i=1;foreach ($detail_lampiran_izin_kerja as $detail_lampiran_izin_kerja): ?>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><?php echo $i ?>. <?php echo $detail_lampiran_izin_kerja['nama_lampiran_izin_kerja'] ?></div>        
                        <?php $i++;endforeach ?>
                    
                    </td>
                </tr>

            </table>
            <p>Keterangan : Form Izin kerja tidak dapat disetujui jika salah satu lampiran tidak ada</p>
            <br><p class="font-15 center bold">PENGESAHAN IJIN KERJA</p>
            <table class="ttd">
                <tbody>
                    <tr>
                        <td>DISETUJUI OLEH :</td>
                        <td>DIPERIKSA OLEH :</td>
                        <td>DIPERIKSA OLEH :</td>
                        <td>DISUSUN OLEH :</td>
                    </tr>
                    <tr>
                        <td><img src="<?php echo site_url(); ?>assets/arsip/ttd/U0001.png"></td>
                        <td><img src="<?php echo site_url(); ?>assets/arsip/ttd/U0002.png"></td>
                        <td><img src="<?php echo site_url(); ?>assets/arsip/ttd/U0003.png"></td>
                        <td><img src="<?php echo site_url(); ?>assets/arsip/ttd/<?php echo $this->session->userdata('ttd') ?>"></td>
                    </tr>
                    <tr>
                        <td>
                            (ANDIS VERINDA P)
                        </td>
                        <td>
                            (AINUL YAQIN)
                        </td>
                        <td>
                            (VIRGEA KRISMANDA)
                        </td>
                        <td>
                            (<?php echo strtoupper($this->session->userdata('nama_user')) ?>)
                        </td>
                    </tr>
                </tbody>
            </table>
            <br>
            <div class="font-10">
                KETERANGAN : <br>
                1. PADA UNIT INDUK UNTUK KOLOM PERSETUJUAN DITANDATANGANI OLEH MANAGER TERKAIT <br>
                2. PADA SUB UNIT PELAKSANA ATAU RAYON UNTUK KOLOM PERSETUJUAN DITANDATANGANI OLEH MANAGER SUB UNIT PELAKSANA / MANAJER RAYON
            </div>
        </div>
    </div>
    <div class="page">
        <div class="col-md-12 center">
            <span class="font-20 bold underline">JOB SAFETY ANALYSIS (JSA)</span><br>
            <b class="font-16">ANALISIS KESELAMATAN KERJA</b>
        </div>
        <div class="col-md-12">

            <table class="jsa">
                <tr class="bold">
                    <td>A</td>
                    <td colspan="3">INFORMASI PEKERJAAN</td>
                </tr>
                <tr>
                    <td style="width: 3%">1</td>
                    <td style="width: 24%">Tanggal</td>
                    <td style="width: 3%">:</td>
                    <td style="width: 60%"><?php echo $project['tgl_project'] ?></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Jenis Pekerjaan</td>
                    <td>:</td>
                    <td><?php echo $project['nama_jenis_pekerjaan'] ?></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Lokasi</td>
                    <td>:</td>
                    <td><?php echo $project['nama_sld'] ?></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Perusahaan Pelaksana Kerja</td>
                    <td>:</td>
                    <td>
                        <?php 
                        $i=1;
                        foreach ($detail_pelaksana3 as $detail_pelaksana3) {
                            echo $detail_pelaksana3['nama_pelaksana'].', ';
                        $i++;
                        }
                         ?>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Pengawas Pekerjaan</td>
                    <td>:</td>
                    <td>Ainul Yaqin</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Pelaksana Pekerja</td>
                    <td>:</td>
                    <td>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <span class="center">Nama</span><br>
                                1. <br>
                                2. <br>
                                3. <br>
                                4. <br>
                                5. <br>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <span class="center">Tanda Tangan</span><br>
                                1. <br>
                                2. <br>
                                3. <br>
                                4. <br>
                                5. <br>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="bold">
                    <td>B</td>
                    <td colspan="3">PERALATAN PEKERJAAN</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>ALAT PELINDUNG DIRI</td>
                    <td>:</td>
                    <td>
                        <?php $i=1;foreach ($detail_perlindungan as $detail_perlindungan): ?>
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"><?php echo $i ?>. <?php echo $detail_perlindungan['nama_peralatan_kerja'] ?></div>    
                        <?php $i++;endforeach ?>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>PERLENGKAPAN KESELAMATAN & DARURAT</td>
                    <td>:</td>
                    <td>
                        <?php $i=1;foreach ($detail_keselamatan as $detail_keselamatan): ?>
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"><?php echo $i ?>. <?php echo $detail_keselamatan['nama_peralatan_kerja'] ?></div>    
                        <?php $i++;endforeach ?>
                    </td>
                </tr>
                <tr class="bold">
                    <td>C</td>
                    <td colspan="3">ANALISA KESELAMATAN KERJA</td>
                </tr>
                <tr>
                    <td colspan="4">
                        <img src="<?php echo site_url(); ?>assets/arsip/jsa/H0001.jpg" class="imgjsa">
                    </td>
                </tr>
            </table>

            <table class="ttd">
                <tbody>
                    <tr>
                        <td>DISETUJUI OLEH :</td>
                        <td>DIPERIKSA OLEH :</td>
                        <td>DIPERIKSA OLEH :</td>
                        <td>DISUSUN OLEH :</td>
                    </tr>
                    <tr>
                        <td><img src="<?php echo site_url(); ?>assets/arsip/ttd/U0001.png"></td>
                        <td><img src="<?php echo site_url(); ?>assets/arsip/ttd/U0002.png"></td>
                        <td><img src="<?php echo site_url(); ?>assets/arsip/ttd/U0003.png"></td>
                        <td><img src="<?php echo site_url(); ?>assets/arsip/ttd/U0004.png"></td>
                    </tr>
                    <tr>
                        <td>
                            (ANDIS VERINDA P)
                        </td>
                        <td>
                            (AINUL YAQIN)
                        </td>
                        <td>
                            (VIRGEA KRISMANDA)
                        </td>
                        <td>
                            (RIKY JAPUTRA)
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
