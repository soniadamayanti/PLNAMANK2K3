
<div class="row">
    <!-- Column -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex no-block">
                    <h4 class="card-title">Selamat Datang Riky</h4>
                    <div class="ml-auto">
                        <select class="custom-select">
                            <option selected="">Maret   </option>
                            <option value="1">February</option>
                            <option value="2">May</option>
                            <option value="3">April</option>
                        </select>
                    </div>
                </div>
                <h6 class="card-subtitle">Data Projectmu </h6>
            </div>
            <div class="card-body bg-light">
                <div class="row">
                    <div class="col-6">
                        <h2 class="mb-0">Maret   2019</h2>
                        <h4 class="font-light mt-0">Project SOP Pemadaman</h4></div>
                    <div class="col-6 align-self-center display-6 text-info text-right"><?php echo $jml_project ?></div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-hover no-wrap">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>PENYULANG</th>
                            <th>FORM</th>
                            <th>STATUS</th>
                            <th>TANGGAL</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $i =1;
                        foreach ($data_project as $data): ?>
                        <tr>
                            <td class="text-center"><?php echo $i ?></td>
                            <td class="txt-oflo">
                                <b><?php echo $data['kode_project'] ?></b><br>
                               
                                <!-- <small><?php echo $data['nama_sld'] ?><br><?php echo $data['nama_jenis_pekerjaan'] ?></small> -->
                            </td>
                            <td>
                                <ul class="feeds">
                                    <li>
                                        <i class="fa fa-circle mr-1 <?php echo ($data['kode_jenis_pekerjaan'] == '')? 'text-secondary' : 'text-success' ?>"></i> <a href="rencana/sop_pemadaman/<?php echo $data['uniqid'] ?>">SOP Pemdaman</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-circle mr-1 <?php echo ($data['kode_line'] == '')? 'text-secondary' : 'text-success' ?>"></i> <a href="rencana/slp/<?php echo $data['uniqid'] ?>">SLP Penyulang</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-circle mr-1 text-success"></i> <a href="rencana/working_permit/<?php echo $data['uniqid'] ?>">Working Permit</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-circle mr-1 text-secondary"></i> <a href="rencana/jsa/<?php echo $data['uniqid'] ?>">JSA</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-circle mr-1 text-secondary"></i> <a href="rencana/hirarc/<?php echo $data['uniqid'] ?>">HIRARC</a>
                                    </li>
                                </ul>
                            </td>
                            <td class="txt-oflo">
                            <span class="label label-warning">Belum Selesai</span></td>
                            <td class="txt-oflo"><?php echo $data['tgl_project'] ?></td>
                            <td class="txt-oflo">
                                <?php 
                                if ($this->session->userdata('kode_divisi') == 1) {
                                    # code...
                                
                                 ?>
                                 <button type="button" class="btn btn-success" name="btnKirimRencanaKerja" id="btnKirimRencanaKerja" uniqid="<?php echo $data['uniqid'] ?>">Kirim Rencan Kerja</button>
                                 <?php 
                                    }else{

                                        echo anchor('Rencana/approval/'.$data['uniqid'],'Setuju','class="btn btn-info"'); 
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
<!-- ============================================================== -->
<!-- End PAge Content