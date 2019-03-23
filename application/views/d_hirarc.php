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
?>
<link href="<?php echo site_url(); ?>assets/css/grid.css" rel="stylesheet" />
    <div class="page-l">
        <img src="<?php echo site_url(); ?>assets/arsip/hirarc/H0001.jpg" class="imghirac">

            <table class="ttd2">
                <tbody>
                    <tr>
                        <td>DISETUJUI OLEH :</td>
                        <td>DIPERIKSA OLEH :</td>
                        <td>DIPERIKSA OLEH :</td>
                        <td>DISUSUN OLEH :</td>
                    </tr>
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