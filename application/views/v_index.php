<div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <!-- <h3 class="text-themecolor mb-0 mt-0"><?php 
                        echo $judul;
                         ?></h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0)"><?php echo anchor('Index','Home','class="breadcrumb-item"'); ?></a></li>
                            <li class="breadcrumb-item active">
                                <?php 
                                    if ($this->uri->segment(2) == '') {
                                        echo "";
                                    }else
                                    echo
                                    anchor('Index/'.$this->uri->segment(2),
                                    strtoupper(str_replace('_', ' ', $this->uri->segment(2))),'class="breadcrumb-item active"');
                                ?> 
                            </li>
                        </ol> -->
                    </div>
                    <div class="col-md-6 col-4 align-self-center">
                        <?php 
                        echo $new;
                         ?>
                        
                        <div class="dropdown float-right mr-2 hidden-sm-down">
                            <button class="btn btn-secondary" type="button" aria-haspopup="true" aria-expanded="false"> <?php echo date('d F Y');?> </button>
                        </div>
                    </div>
                </div>
                    
                <div id="BuatRencanaKerja" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Buat Rencana Kerja</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <?php echo anchor('Rencana/insert_project/Preventif','Preventif','class="btn btn-block btn-lg btn-info"') ?>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <?php echo anchor('Rencana/insert_project/Korektif','Korektif','class="btn btn-block btn-lg btn-success"') ?>
                                </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>

<!-- Start Page Content -->
<!-- ============================================================== -->

<div class="row">
<div class="col-md-8">
<div class="row">
    <!-- Column -->
    <div class="col-md-3 col-lg-3 col-xlg-3">
        <a href="<?php echo site_url(); ?>rencana">
        <div class="card card-inverse card-inverse">
            <div class="box bg-primary text-center">
                <h1 class="font-light text-white"><?php echo $pending; ?></h1>
                <h6 class="text-white">Pending</h6>
            </div>
        </div>
        </a>
    </div>
    <!-- Column -->
    <div class="col-md-3 col-lg-3 col-xlg-3">
        <a href="<?php echo site_url(); ?>rencana">
        <div class="card card-info card-info">
            <div class="box text-center">
                <h1 class="font-light text-white"><?php echo $berjalan; ?></h1>
                <h6 class="text-white">Berjalan</h6>
            </div>
        </div>
        </a>
    </div>
    <!-- Column -->
    <div class="col-md-3 col-lg-3 col-xlg-3">
        <a href="<?php echo site_url(); ?>rencana/selesai">
        <div class="card card-inverse card-success">
            <div class="box text-center">
                <h1 class="font-light text-white"><?php echo $selesai; ?></h1>
                <h6 class="text-white">Selesai</h6>
            </div>
        </div>
        </a>
    </div>
    <!-- Column -->
    <div class="col-md-3 col-lg-3 col-xlg-3">
        <a href="<?php echo site_url(); ?>rencana">
        <div class="card card-inverse card-warning">
            <div class="box text-center">
                <h1 class="font-light text-white"><?php echo $revisi; ?></h1>
                <h6 class="text-white">Revisi</h6>
            </div>
        </div>
        </a>
    </div>

    <!-- Column -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <h2 class="mb-0"><?php echo date('F Y');?></h2>
                        <h4 class="font-light mt-0">Project SOP Pemadaman</h4></div>
                    <div class="col-6 align-self-center display-6 text-info text-right"><?php echo $jml_project; ?></div>
                </div>
            </div>
            <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover no-wrap">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>KODE PEKERJAAN</th>
                            <th>APPROVAL</th>
                            <th>STATUS</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php 
                        $i =1;
                        foreach ($data_project as $data): ?>
                        <tr>

                            <td class="text-center"><?php echo $i; ?></td>
                            <td class="txt-oflo"><?php echo $data['kode_project'] ?>
                                <br> <small>Tanggal : <?php echo substr($data['tgl_project'], 0, 10)  ?></small>
                                
                            </td>
                            <td>

                                <?php 
                                    $kode = $data['kode_project'] ;
                                    $sql = "SELECT s.*,u.nama_user,u.kode_divisi,d.nama_divisi FROM tb_status_project s INNER JOIN (tb_users u INNER JOIN tb_divisi d ON u.kode_divisi=d.kode_divisi) ON u.kode_user = s.kode_user WHERE kode_project = '$kode' ORDER BY kode_divisi ASC";
                                    $result = $this->db->query($sql);
                                    foreach ($result->result() as $r) {
                                        echo '

                                        <span class="mytooltip tooltip-effect-5">
                                            <span class="tooltip-item">';
                                            if ($r->status_project == 'approve') {
                                                echo '<i class="fa fa-circle mr-1 text-success"></i>';
                                            }elseif($r->status_project == 'pending') {
                                                echo '<i class="fa fa-circle mr-1 text-secondary"></i>';
                                            }elseif($r->status_project == 'denied') {
                                                echo '<i class="fa fa-circle mr-1 text-warning"></i>';
                                            }elseif($r->status_project == 'failed') {
                                                echo '<i class="fa fa-circle mr-1 text-danger"></i>';
                                            }
                                            echo '
                                            </span>
                                            <span class="tooltip-content clearfix">
                                              <span class="tooltip-text">'.$r->nama_user.'<br>('.$r->nama_divisi.')</span>
                                            </span>
                                        </span>
                                        ';
                                    }
                                ?>
                            </td>
                            <td class="txt-oflo">
                                <?php
                                        if( $data['status'] == 'new'){
                                            echo '
                                            <span class="label label-light-warning">
                                            Belum Selesai
                                            </span>';
                                        }elseif($data['status'] == 'pending'){
                                            echo '
                                            <span class="label label-light-primary">
                                            Pending
                                            </span>';
                                        }elseif($data['status'] == 'final'){
                                            echo '
                                            <span class="label label-light-primary">
                                            Penyelesaian
                                            </span>';
                                        }elseif($data['status'] == 'success'){
                                            echo '
                                            <span class="label label-light-success">
                                            Selesai
                                            </span>';
                                        }elseif($data['status'] == 'revisi'){
                                            echo '
                                            <span class="label label-light-success">
                                            Revisi
                                            </span>';
                                        }elseif($data['status'] == 'cancel'){
                                            echo '
                                            <span class="label label-light-success">
                                            Dibatalkan
                                            </span>';
                                        }
                                ?>
                                    
                                </td>
                        
                        </tr>    
                        <?php 
                        $i++;
                        endforeach ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </div>
</div>
</div>

    <!-- Column -->
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">History Approval</h4>
            </div>
            <div class="comment-widgets" style="margin-left: 20px;">
                
                <ul class="timelinemini">
                    <li class="timelinemini-inverted">
                        <div class="timelinemini-badge info"><?php echo $berkas_staff; ?></div>
                        <div class="timelinemini-panel">
                            <div class="timelinemini-heading">
                                <h5 class="timelinemini-title"><b>Staff Teknisi ULP</b></h5>
                            </div>
                        </div>
                    </li>
                    <li class="timelinemini-inverted">
                        <div class="timelinemini-badge info"><?php echo $berkas_k3; ?></div>
                        <div class="timelinemini-panel">
                            <div class="timelinemini-heading">
                                <h5 class="timelinemini-title"><b>PPK3U ULP</b></h5>
                            </div>
                        </div>
                    </li>
                    <li class="timelinemini-inverted">
                        <div class="timelinemini-badge info"><?php echo $berkas_spvulp; ?></div>
                        <div class="timelinemini-panel">
                            <div class="timelinemini-heading">
                                <h5 class="timelinemini-title"><b>SPV. ULP</b></h5>
                            </div>
                        </div>
                    </li>
                    <li class="timelinemini-inverted">
                        <div class="timelinemini-badge info"><?php echo $berkas_mulp; ?></div>
                        <div class="timelinemini-panel">
                            <div class="timelinemini-heading">
                                <h5 class="timelinemini-title"><b>MULP</b></h5>
                            </div>
                        </div>
                    </li>
                    <li class="timelinemini-inverted">
                        <div class="timelinemini-badge info"><?php echo $berkas_harjar; ?></div>
                        <div class="timelinemini-panel">
                            <div class="timelinemini-heading">
                                <h5 class="timelinemini-title"><b>SPV.HARJAR</b></h5>
                            </div>
                        </div>
                    </li>
                    <li class="timelinemini-inverted">
                        <div class="timelinemini-badge info"><?php echo $berkas_opoist; ?></div>
                        <div class="timelinemini-panel">
                            <div class="timelinemini-heading">
                                <h5 class="timelinemini-title"><b>SPV.OPOIST</b></h5>
                            </div>
                        </div>
                    </li>
                    <li class="timelinemini-inverted">
                        <div class="timelinemini-badge info"><?php echo $berkas_mbjaringan; ?></div>
                        <div class="timelinemini-panel">
                            <div class="timelinemini-heading">
                                <h5 class="timelinemini-title"><b>MB.JARINGAN</b></h5>
                            </div>
                        </div>
                    </li>   
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Row -->
<div class="row">
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->