CREATE VIEW v_berkas_terakhir AS
SELECT p.kode_project, b.kode_divisi,b.parent_divisi,p.kode_user,u.lokasi FROM tb_berkas_terakhir b INNER JOIN (tb_project p INNER JOIN tb_users u ON p.kode_user = u.kode_user) ON b.kode_project = p.kode_project WHERE b.parent_divisi="1"