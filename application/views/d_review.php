<?php foreach ($project as $project): ?>
    
<?php endforeach ?>

<?php foreach ($data_user as $user): ?>
    
<?php endforeach ?>

<?php 

$kode = $project['kode_project'] ;
$user = $project['user'] ;

$staf = $this->db->query("SELECT s.*,u.nama_user,u.no_telp_user,u.kode_divisi,d.nama_divisi,u.ttd FROM tb_status_project s INNER JOIN (tb_users u INNER JOIN tb_divisi d ON u.kode_divisi=d.kode_divisi) ON u.kode_user = s.kode_user WHERE s.kode_project = '".$kode."' AND u.kode_divisi = '1'");
$k3 = $this->db->query("SELECT s.*,u.nama_user,u.no_telp_user,u.kode_divisi,d.nama_divisi,u.ttd FROM tb_status_project s INNER JOIN (tb_users u INNER JOIN tb_divisi d ON u.kode_divisi=d.kode_divisi) ON u.kode_user = s.kode_user WHERE s.kode_project = '".$kode."' AND u.kode_divisi = '2'");
$spvtek = $this->db->query("SELECT s.*,u.nama_user,u.no_telp_user,u.kode_divisi,d.nama_divisi,u.ttd FROM tb_status_project s INNER JOIN (tb_users u INNER JOIN tb_divisi d ON u.kode_divisi=d.kode_divisi) ON u.kode_user = s.kode_user WHERE s.kode_project = '".$kode."' AND u.kode_divisi = '3'");
$mulp = $this->db->query("SELECT s.*,u.nama_user,u.no_telp_user,u.kode_divisi,d.nama_divisi,u.ttd FROM tb_status_project s INNER JOIN (tb_users u INNER JOIN tb_divisi d ON u.kode_divisi=d.kode_divisi) ON u.kode_user = s.kode_user WHERE s.kode_project = '".$kode."' AND u.kode_divisi = '4'");

$jml_tenaga_kerja=$this->db->query('SELECT kode_project FROM tb_det_pekerja WHERE kode_project="'.$kode.'"')->num_rows();

$ulp = $this->db->query("SELECT * FROM tb_users WHERE kode_user = '".$user."'");

$aju_tahun = substr($project['tgl_pengajuan'], 0,4);
$aju_bulan_angka = substr($project['tgl_pengajuan'], 5,2);

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
$aju_tgl = substr($project['tgl_pengajuan'], 8,2);
$tgl = $aju_tgl.' '.$aju_bulan.' '.$aju_tahun;
 ?>

<link href="<?php echo site_url(); ?>assets/css/grid.css" rel="stylesheet" />

    <div class="page b-full" style="padding: 20px; margin-bottom: 20px; ">
        
        <div class="col-sm-12 center"  style="margin-top: 40mm;">
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

    <div class="page" style="padding: 20px; margin-bottom: 20px; ">
        
        <div class="col-sm-12 b-full">
            <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 b-right p-2">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    <img src="<?php echo site_url(); ?>assets/images/logo-icon-pln.png">
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    PT PLN (Persero)<br>
                        UNIT INDUK DISTRIBUSI JAWA BARAT <br>
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
                    <td style="width: 53%" class="caps">
                        <?php 
                            foreach ($spvtek->result() as $r) {
                                echo $r->nama_user;
                            };
                         ?>
                    </td>
                </tr>
                <tr>
                    <td>JABATAN</td>
                    <td>:</td>
                    <td class="caps">
                        <?php 
                            foreach ($spvtek->result() as $r) {
                                echo $r->nama_divisi;
                            };
                         ?>
                    </td>
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
                    <td><?php echo $jml_tenaga_kerja ?> Orang</td>
                </tr>
                <tr>
                    <td>Peralatan Kerja</td>
                    <td>:</td>
                    <td><?php echo $project['peralatan_kerja'] ?></td>
                </tr>
                <tr>
                    <td class="text-top">Pelaksana</td>
                    <td class="text-top">:</td>
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
                    <td class="caps"><?php echo $project['gardu'] ?></td>
                </tr>
                <tr>
                    <td>Lokasi Padam</td>
                    <td>:</td>
                    <td class="caps"><?php echo $project['alamat_project'] ?></td>
                </tr>
                <tr>
                    <td class="text-top">Pelaksana Pembebasan</td>
                    <td class="text-top">:</td>
                    <td><?php 
                        $i=1;
                        foreach ($detail_pelaksana as $detail_pelaksana) {
                            echo $i.". ".$detail_pelaksana['nama_pelaksana'].'<br>';
                        $i++;
                        }
                         ?>
                             
                    </td>
                </tr>
            </table>


            <table class="ttd">
                <tbody>
                    <tr>
                        <td colspan="2">&nbsp;</td>
                        <td>
                        <?php 
                            foreach ($ulp->result() as $u) {
                                echo $u->ulp;
                            };
                            echo ", ";
                            echo $tgl;
                         ?>
                         </td>
                    </tr>
                    <tr>
                        <td>Menyetujui</td>
                        <td>Mengetahui</td>
                        <td>Pemohon</td>
                    </tr>
                    <tr>
                        <td>
                            <?php 
                                foreach ($mulp->result() as $r) {
                                    if ($r->status_project == "approve") {
                                        echo "<img src=".site_url()."assets/arsip/ttd/".$r->ttd.">";
                                    }else{
                                        echo "";
                                    }
                                };
                             ?>
                        </td>
                        <td>
                            <?php 
                                foreach ($spvtek->result() as $r) {
                                    if ($r->status_project == "approve") {
                                        echo "<img src=".site_url()."assets/arsip/ttd/".$r->ttd.">";
                                    }else{
                                        echo "";
                                    }
                                };
                             ?>
                        </td>
                        <td>
                            <?php 
                                foreach ($staf->result() as $r) {
                                    if ($r->status_project == "approve") {
                                        echo "<img src=".site_url()."assets/arsip/ttd/".$r->ttd.">";
                                    }else{
                                        echo "";
                                    }
                                };
                             ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?php 
                                foreach ($mulp->result() as $r) {
                                    echo "<u>".$r->nama_user."</u><br>";
                                    echo $r->nama_divisi;
                                };
                             ?>
                        </td>
                        <td>
                            <?php 
                                foreach ($spvtek->result() as $r) {
                                    echo "<u>".$r->nama_user."</u><br>";
                                    echo $r->nama_divisi;
                                };
                             ?>
                        </td>
                        <td>
                            <?php 
                                foreach ($staf->result() as $r) {
                                    echo "<u>".$r->nama_user."</u><br>";
                                    echo $r->nama_divisi;
                                };
                             ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-sm-12 b-full center " style="height: 70mm;">
            <h1 class="center">
                Gambar Terlampir<br>
                SINGLE LINE <?php echo $project['tegangan'] ?> KV<br>
                <?php echo $project['nama_sld'] ?>
            </h1>
        </div>

    </div>

    <div class="page" style="padding: 20px; margin-bottom: 20px; ">
        <?php echo $project['kode_project'] ?><br>
        <img src="<?php echo site_url(); ?>assets/arsip/sld/<?php echo $project['kode_line'] ?>.jpg" class="imgsld">
    </div>

    <div class="page b-full" style="padding: 20px; margin-bottom: 20px; ">
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
                    <td style="width: 70%" colspan="2"><?php echo $tgl; ?></td>
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
                    <?php 
                        foreach ($spvtek->result() as $r) {
                            echo "
                            <td>".$r->nama_user."</td>
                            <td>No.Telp : ".$r->no_telp_user."</td>";
                        };
                     ?>

                </tr>
                <tr>
                    <td>6</td>
                    <td>Pengawas K3</td>
                    <td>:</td>
                    <?php 
                        foreach ($k3->result() as $r) {
                            echo "
                            <td>".$r->nama_user."</td>
                            <td>No.Telp : ".$r->no_telp_user."</td>";
                        };
                     ?>
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
                        <td>
                            <?php 
                                foreach ($mulp->result() as $r) {
                                    if ($r->status_project == "approve") {
                                        echo "<img src=".site_url()."assets/arsip/ttd/".$r->ttd.">";
                                    }else{
                                        echo "";
                                    }
                                };
                             ?>
                        </td>
                        <td>
                            <?php 
                                foreach ($spvtek->result() as $r) {
                                    if ($r->status_project == "approve") {
                                        echo "<img src=".site_url()."assets/arsip/ttd/".$r->ttd.">";
                                    }else{
                                        echo "";
                                    }
                                };
                             ?>
                        </td>
                        <td>
                            <?php 
                                foreach ($k3->result() as $r) {
                                    if ($r->status_project == "approve") {
                                        echo "<img src=".site_url()."assets/arsip/ttd/".$r->ttd.">";
                                    }else{
                                        echo "";
                                    }
                                };
                             ?>
                        </td>
                        <td>
                            <?php 
                                foreach ($staf->result() as $r) {
                                    if ($r->status_project == "approve") {
                                        echo "<img src=".site_url()."assets/arsip/ttd/".$r->ttd.">";
                                    }else{
                                        echo "";
                                    }
                                };
                             ?>
                        </td>
                    </tr>
                    <tr class="caps">
                        <td>
                            <?php 
                                foreach ($mulp->result() as $r) {
                                    echo "(".$r->nama_user.")";
                                };
                             ?>
                        </td>
                        <td>
                            <?php 
                                foreach ($spvtek->result() as $r) {
                                    echo "(".$r->nama_user.")";
                                };
                             ?>
                        </td>
                        <td>
                            <?php 
                                foreach ($k3->result() as $r) {
                                    echo "(".$r->nama_user.")";
                                };
                             ?>
                        </td>
                        <td>
                            <?php 
                                foreach ($staf->result() as $r) {
                                    echo "(".$r->nama_user.")";
                                };
                             ?>
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
    <div class="page b-full" style="padding: 20px; margin-bottom: 20px; ">
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
                    <td style="width: 60%"><?php echo $tgl ?></td>
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
                    <td class="text-top">4</td>
                    <td class="text-top">Perusahaan Pelaksana Kerja</td>
                    <td class="text-top">:</td>
                    <td>
                        <?php 
                        
                        $i=1;
                        foreach ($detail_pelaksana3 as $detail_pelaksana3) {
                            echo $i.". ".$detail_pelaksana3['nama_pelaksana'].'<br>';
                        $i++;
                        }
                         ?>
                    </td>
                </tr>
                <tr >
                    <td class="text-top">5</td>
                    <td class="text-top">Pengawas Pekerjaan</td>
                    <td class="text-top">:</td>
                    <td><?php 
                                foreach ($spvtek->result() as $r) {
                                    echo $r->nama_user;
                                };
                             ?>
                        
                    </td>
                </tr>
                <tr>
                    <td class="text-top">6</td>
                    <td class="text-top">Pelaksana Pekerja</td>
                    <td class="text-top">:</td>
                    <td>
                        <div class="">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <div class="center">Nama</div><br>
                                <?php 
                                    $i=1;
                                    foreach ($detail_pekerja as $detail_pekerja) {
                                        echo $i.". ".$detail_pekerja['nama_pelaksana_pekerja'].'<br>';
                                    $i++;
                                    }
                                 ?>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <div class="center">Tanda Tangan</div><br>
                                <?php 
                                    $i=1;
                                    foreach ($ttd_pekerja as $ttd_pekerja) {
                                        echo $i.'<br>';
                                    $i++;
                                    }
                                 ?>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="bold">
                    <td>B</td>
                    <td colspan="3">PERALATAN PEKERJAAN</td>
                </tr>
                <tr>
                    <td class="text-top">1</td>
                    <td class="text-top">ALAT PELINDUNG DIRI</td>
                    <td class="text-top">:</td>
                    <td class="text-top">
                        <?php $i=1;foreach ($detail_perlindungan as $detail_perlindungan): ?>
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"><?php echo $i ?>. <?php echo $detail_perlindungan['nama_peralatan_kerja'] ?></div>    
                        <?php $i++;endforeach ?>
                    </td>
                </tr>
                <tr>
                    <td class="text-top">2</td>
                    <td class="text-top">PERLENGKAPAN KESELAMATAN & DARURAT</td>
                    <td class="text-top">:</td>
                    <td class="text-top">
                        <?php $i=1;foreach ($detail_keselamatan as $detail_keselamatan): ?>
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"><?php echo $i ?>. <?php echo $detail_keselamatan['nama_peralatan_kerja'] ?></div>    
                        <?php $i++;endforeach ?>
                    </td>
                </tr>
                <tr class="bold">
                    <td>C</td>
                    <td colspan="3">ANALISA KESELAMATAN KERJA</td>
                </tr>
            </table>

                        <img src="<?php echo site_url(); ?>assets/arsip/jsa/<?php echo $project['kode_jenis_pekerjaan'] ?>.jpg" class="imgjsa">
            <table class="ttd">
                <tbody>
                    <tr>
                        <td>DISETUJUI OLEH :</td>
                        <td>DIPERIKSA OLEH :</td>
                        <td>DIPERIKSA OLEH :</td>
                        <td>DISUSUN OLEH :</td>
                    </tr>
                    <tr>
                        <td>
                            <?php 
                                foreach ($mulp->result() as $r) {
                                    if ($r->status_project == "approve") {
                                        echo "<img src=".site_url()."assets/arsip/ttd/".$r->ttd.">";
                                    }else{
                                        echo "";
                                    }
                                };
                             ?>
                        </td>
                        <td>
                            <?php 
                                foreach ($spvtek->result() as $r) {
                                    if ($r->status_project == "approve") {
                                        echo "<img src=".site_url()."assets/arsip/ttd/".$r->ttd.">";
                                    }else{
                                        echo "";
                                    }
                                };
                             ?>
                        </td>
                        <td>
                            <?php 
                                foreach ($k3->result() as $r) {
                                    if ($r->status_project == "approve") {
                                        echo "<img src=".site_url()."assets/arsip/ttd/".$r->ttd.">";
                                    }else{
                                        echo "";
                                    }
                                };
                             ?>
                        </td>
                        <td>
                            <?php 
                                foreach ($staf->result() as $r) {
                                    if ($r->status_project == "approve") {
                                        echo "<img src=".site_url()."assets/arsip/ttd/".$r->ttd.">";
                                    }else{
                                        echo "";
                                    }
                                };
                             ?>
                        </td>
                    </tr>
                    <tr class="caps">
                        <td>
                            <?php 
                                foreach ($mulp->result() as $r) {
                                    echo "(".$r->nama_user.")";
                                };
                             ?>
                        </td>
                        <td>
                            <?php 
                                foreach ($spvtek->result() as $r) {
                                    echo "(".$r->nama_user.")";
                                };
                             ?>
                        </td>
                        <td>
                            <?php 
                                foreach ($k3->result() as $r) {
                                    echo "(".$r->nama_user.")";
                                };
                             ?>
                        </td>
                        <td>
                            <?php 
                                foreach ($staf->result() as $r) {
                                    echo "(".$r->nama_user.")";
                                };
                             ?>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
    <div class="page-l b-full" style="padding: 20px; margin-bottom: 20px; ">
        <img src="<?php echo site_url(); ?>assets/arsip/hirarc/<?php echo $project['kode_jenis_pekerjaan'] ?>.jpg" class="imghirac">

            <table class="ttd2">
                <tbody>
                    <tr>
                        <td>DISETUJUI OLEH :</td>
                        <td>DIPERIKSA OLEH :</td>
                        <td>DIPERIKSA OLEH :</td>
                        <td>DISUSUN OLEH :</td>
                    </tr>
                    <tr>
                        <td>
                            <?php 
                                foreach ($mulp->result() as $r) {
                                    if ($r->status_project == "approve") {
                                        echo "<img src=".site_url()."assets/arsip/ttd/".$r->ttd.">";
                                    }else{
                                        echo "";
                                    }
                                };
                             ?>
                        </td>
                        <td>
                            <?php 
                                foreach ($spvtek->result() as $r) {
                                    if ($r->status_project == "approve") {
                                        echo "<img src=".site_url()."assets/arsip/ttd/".$r->ttd.">";
                                    }else{
                                        echo "";
                                    }
                                };
                             ?>
                        </td>
                        <td>
                            <?php 
                                foreach ($k3->result() as $r) {
                                    if ($r->status_project == "approve") {
                                        echo "<img src=".site_url()."assets/arsip/ttd/".$r->ttd.">";
                                    }else{
                                        echo "";
                                    }
                                };
                             ?>
                        </td>
                        <td>
                            <?php 
                                foreach ($staf->result() as $r) {
                                    if ($r->status_project == "approve") {
                                        echo "<img src=".site_url()."assets/arsip/ttd/".$r->ttd.">";
                                    }else{
                                        echo "";
                                    }
                                };
                             ?>
                        </td>
                    </tr>
                    <tr class="caps">
                        <td>
                            <?php 
                                foreach ($mulp->result() as $r) {
                                    echo "(".$r->nama_user.")";
                                };
                             ?>
                        </td>
                        <td>
                            <?php 
                                foreach ($spvtek->result() as $r) {
                                    echo "(".$r->nama_user.")";
                                };
                             ?>
                        </td>
                        <td>
                            <?php 
                                foreach ($k3->result() as $r) {
                                    echo "(".$r->nama_user.")";
                                };
                             ?>
                        </td>
                        <td>
                            <?php 
                                foreach ($staf->result() as $r) {
                                    echo "(".$r->nama_user.")";
                                };
                             ?>
                        </td>
                    </tr>
                </tbody>
            </table>
    </div>
