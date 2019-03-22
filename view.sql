CREATE VIEW v_berkas_terakhir AS
SELECT b.kode_project, b.kode_divisi,b.parent_divisi,p.kode_user,u.lokasi FROM tb_berkas_terakhir b INNER JOIN (tb_project p INNER JOIN tb_users u ON p.kode_user = u.kode_user) ON b.kode_project = p.kode_project GROUP BY b.kode_project ORDER BY b.tgl DESC

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