CREATE VIEW v_berkas_terakhir AS
SELECT b.kode_project, b.kode_user,b.divisi_tujuan,u.lokasi FROM tb_berkas_terakhir b INNER JOIN tb_users u ON b.kode_user = u.kode_user GROUP BY b.kode_project ORDER BY b.tgl DESC

KOSONGKAN DATA

TRUNCATE `tb_approval`;
TRUNCATE `tb_berkas_terakhir`;
TRUNCATE `tb_det_klasifikasi`;
TRUNCATE `tb_det_lampiran_izin_kerja`;
TRUNCATE `tb_det_pekerja`;
TRUNCATE `tb_det_pelaksana`;
TRUNCATE `tb_det_peralatan_kerja`;
TRUNCATE `tb_det_project`;
TRUNCATE `tb_det_prosedur_kerja`;
TRUNCATE `tb_det_uraian_pekerjaan`;
TRUNCATE `tb_project`;
TRUNCATE `tb_status_project`;

CREATE VIEW v_laporan as SELECT tb_project.*,tb_sld.nama_sld,tb_gardu_induk.nama_gardu FROM `tb_project` INNER JOIN tb_sld ON tb_project.kode_line = tb_sld.kode_sld INNER JOIN tb_gardu_induk ON tb_sld.kode_gardu_induk = tb_gardu_induk.kode_gardu_induk