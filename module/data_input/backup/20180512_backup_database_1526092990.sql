

CREATE TABLE `tb_absen` (
  `kd_absen` int(10) NOT NULL AUTO_INCREMENT,
  `kd_guru` int(10) NOT NULL,
  `tgl` date NOT NULL,
  `keterangan` enum('hadir','sakit','alfa','izin') NOT NULL,
  PRIMARY KEY (`kd_absen`),
  KEY `kd_guru` (`kd_guru`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO tb_absen VALUES("1","1","2018-04-10","hadir");
INSERT INTO tb_absen VALUES("2","7","2018-04-10","hadir");
INSERT INTO tb_absen VALUES("3","6","2018-04-10","izin");
INSERT INTO tb_absen VALUES("4","2","2018-04-11","izin");
INSERT INTO tb_absen VALUES("7","6","2018-04-11","sakit");
INSERT INTO tb_absen VALUES("8","7","2018-04-11","alfa");
INSERT INTO tb_absen VALUES("9","7","2018-05-08","hadir");
INSERT INTO tb_absen VALUES("10","2","2018-05-08","hadir");
INSERT INTO tb_absen VALUES("11","6","2018-05-08","hadir");





CREATE TABLE `tb_guru` (
  `kd_guru` int(10) NOT NULL AUTO_INCREMENT,
  `nama_guru` varchar(50) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `status` enum('GTY','GTT') NOT NULL,
  PRIMARY KEY (`kd_guru`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO tb_guru VALUES("2","bojes junior","Kepala sekolah","GTY");
INSERT INTO tb_guru VALUES("6","peja sanjaya","guru honor","GTT");
INSERT INTO tb_guru VALUES("7","diki saputra","guru","GTY");





CREATE TABLE `tb_mapel` (
  `kd_mapel` int(10) NOT NULL AUTO_INCREMENT,
  `mapel` varchar(40) NOT NULL,
  PRIMARY KEY (`kd_mapel`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO tb_mapel VALUES("2","IPS");
INSERT INTO tb_mapel VALUES("3","Matematika");
INSERT INTO tb_mapel VALUES("4","Bahasa Indonesia");





CREATE TABLE `tb_pembayaran` (
  `kd_pembayaran` int(10) NOT NULL AUTO_INCREMENT,
  `kd_guru` int(10) NOT NULL,
  `status` enum('GTY','GTT') NOT NULL,
  `kd_mapel` int(10) NOT NULL,
  `tgl` date NOT NULL,
  `kelas` varchar(15) NOT NULL,
  `nama_ekstrakurikuler` varchar(40) NOT NULL,
  `uang_honor` int(15) NOT NULL,
  `uang_insentif_gty` int(15) NOT NULL,
  `uang_insentif_ekstra` int(15) NOT NULL,
  PRIMARY KEY (`kd_pembayaran`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO tb_pembayaran VALUES("1","2","GTY","2","2018-05-09","7-8-9","pramuka","200000","200000","200000");
INSERT INTO tb_pembayaran VALUES("2","6","GTT","3","2018-05-09","8-9","sepak bola","200000","200000","200000");
INSERT INTO tb_pembayaran VALUES("3","7","GTY","4","2018-05-09","9","-","200000","200000","0");
INSERT INTO tb_pembayaran VALUES("4","2","GTT","2","2018-05-10","9","badminton","200000","0","200000");
INSERT INTO tb_pembayaran VALUES("6","6","GTT","3","2018-05-10","8","-","200000","0","0");





CREATE TABLE `tb_user` (
  `kd_user` int(10) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `level` enum('pegawai','tu','bendahara') NOT NULL,
  PRIMARY KEY (`kd_user`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO tb_user VALUES("2","nanang","nanang","nanang","tu");
INSERT INTO tb_user VALUES("4","diki parker","dikiparker","dikiparker","bendahara");
INSERT INTO tb_user VALUES("5","diki","diki","diki","pegawai");



