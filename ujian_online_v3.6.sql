/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     11/5/2015 1:44:45 PM                         */
/*==============================================================*/


drop table if exists GURU;

drop table if exists GURU_TO_KELAS_MAPPING;

drop table if exists GURU_TO_MAPEL_MAPPING;

drop table if exists GURU_TO_UJIAN_MAPPING;

drop table if exists JAWABAN_SISWA;

drop table if exists JURUSAN_MASTER;

drop table if exists KELAS_MASTER;

drop table if exists MAPEL_MASTER;

drop table if exists NILAI;

drop table if exists PILIHAN_JAWABAN;

drop table if exists PILIHAN_JAWABAN_MASTER;

drop table if exists ROMBEL_MASTER;

drop table if exists SISWA;

drop table if exists SISWA_TO_KELAS_MAPPING;

drop table if exists SISWA_TO_ROMBEL_MAPPING;

drop table if exists SOAL;

drop table if exists UJIAN;

drop table if exists UJITAN_TO_ROMBEL_MAPPING;

drop table if exists WALI_KELAS_MAPPING;

/*==============================================================*/
/* Table: GURU                                                  */
/*==============================================================*/
create table GURU
(
   NIP                  varchar(50) not null,
   NUPTK                varchar(50) not null,
   NAMA                 varchar(100) not null,
   TEMPAT_TGL_LAHIR     varchar(100) not null,
   JENIS_KELAMIN        varchar(1) not null,
   ALAMAT               varchar(100) not null,
   NO_TELEPON           varchar(30) not null,
   IS_ACTIVE            bool not null,
   USERNAME             varchar(100) not null,
   PASSWORD             varchar(100) not null,
   primary key (NIP)
);

/*==============================================================*/
/* Table: GURU_TO_KELAS_MAPPING                                 */
/*==============================================================*/
create table GURU_TO_KELAS_MAPPING
(
   ID                   int not null AUTO_INCREMENT,
   NIP                  varchar(50) not null,
   KD_KELAS             varchar(20) not null,
   START_DATE           date not null,
   END_DATE             date,
   primary key (ID)
);

alter table GURU_TO_KELAS_MAPPING comment 'relasi yang menyatakan hubungan antara guru dan kelas 
                                          -&#&';

/*==============================================================*/
/* Table: GURU_TO_MAPEL_MAPPING                                 */
/*==============================================================*/
create table GURU_TO_MAPEL_MAPPING
(
   ID                   int not null AUTO_INCREMENT,
   NIP                  varchar(50) not null,
   KD_MAPEL             varchar(50) not null,
   START_DATE           date not null,
   END_DATE             date,
   primary key (ID)
);

/*==============================================================*/
/* Table: GURU_TO_UJIAN_MAPPING                                 */
/*==============================================================*/
create table GURU_TO_UJIAN_MAPPING
(
   ID                   int not null AUTO_INCREMENT,
   NIP                  varchar(50) not null,
   KD_UJIAN             varchar(100) not null,
   primary key (ID)
);

/*==============================================================*/
/* Table: JAWABAN_SISWA                                         */
/*==============================================================*/
create table JAWABAN_SISWA
(
   ID                   int not null AUTO_INCREMENT,
   NOMOR_INDUK          varchar(50) not null,
   KD_UJIAN             varchar(100) not null,
   JAWABAN              varchar(255),
   primary key (ID)
);

/*==============================================================*/
/* Table: JURUSAN_MASTER                                        */
/*==============================================================*/
create table JURUSAN_MASTER
(
   KD_JURUSAN           varchar(50) not null,
   NAMA_JURUSAN         varchar(100) not null,
   DESKRIPISI           varchar(255),
   primary key (KD_JURUSAN)
);

/*==============================================================*/
/* Table: KELAS_MASTER                                          */
/*==============================================================*/
create table KELAS_MASTER
(
   KD_KELAS             varchar(20) not null,
   NAMA                 varchar(100) not null,
   IS_VISIBLE           bool not null,
   TINGKAT              smallint not null,
   primary key (KD_KELAS)
);

/*==============================================================*/
/* Table: MAPEL_MASTER                                          */
/*==============================================================*/
create table MAPEL_MASTER
(
   KD_MAPEL             varchar(50) not null,
   KD_JURUSAN           varchar(50) not null,
   NAMA_MAPEL           varchar(100) not null,
   primary key (KD_MAPEL)
);

/*==============================================================*/
/* Table: NILAI                                                 */
/*==============================================================*/
create table NILAI
(
   ID                   int not null AUTO_INCREMENT,
   NOMOR_INDUK          varchar(50) not null,
   KD_MAPEL             varchar(50) not null,
   KD_UJIAN             varchar(100) not null,
   NILAI                smallint not null,
   primary key (ID)
);

/*==============================================================*/
/* Table: PILIHAN_JAWABAN                                       */
/*==============================================================*/
create table PILIHAN_JAWABAN
(
   ID                   int not null AUTO_INCREMENT,
   KD_UJIAN             varchar(100) not null,
   ID_SOAL              int not null,
   KD_PILIHAN           varchar(1) not null,
   PILIHAN_JAWABAN      text not null,
   primary key (ID)
);

/*==============================================================*/
/* Table: PILIHAN_JAWABAN_MASTER                                */
/*==============================================================*/
create table PILIHAN_JAWABAN_MASTER
(
   KD_PILIHAN           varchar(1) not null,
   NAMA_PILIHAN         varchar(1) not null,
   primary key (KD_PILIHAN)
);

/*==============================================================*/
/* Table: ROMBEL_MASTER                                         */
/*==============================================================*/
create table ROMBEL_MASTER
(
   KD_ROMBEL            varchar(20) not null,
   NAMA_ROMBEL          varchar(100) not null,
   IS_ACTIVE            bool not null,
   primary key (KD_ROMBEL)
);

/*==============================================================*/
/* Table: SISWA                                                 */
/*==============================================================*/
create table SISWA
(
   NOMOR_INDUK          varchar(50) not null,
   KD_JURUSAN           varchar(50),
   NISN                 varchar(50),
   NAMA                 varchar(100) not null,
   TEMPAT_TGL_LAHIR     varchar(100) not null,
   JENIS_KELAMIN        varchar(1) not null,
   ALAMAT               varchar(100) not null,
   NO_TELEPON           varchar(30) not null,
   IS_ACTIVE            bool not null,
   USERNAME             varchar(100) not null,
   PASSWORD             varchar(100) not null,
   primary key (NOMOR_INDUK)
);

/*==============================================================*/
/* Table: SISWA_TO_KELAS_MAPPING                                */
/*==============================================================*/
create table SISWA_TO_KELAS_MAPPING
(
   ID                   int not null AUTO_INCREMENT,
   NOMOR_INDUK          varchar(50) not null,
   KD_KELAS             varchar(20) not null,
   START_DATE           date not null,
   END_DATE             date,
   primary key (ID)
);

/*==============================================================*/
/* Table: SISWA_TO_ROMBEL_MAPPING                               */
/*==============================================================*/
create table SISWA_TO_ROMBEL_MAPPING
(
   ID                   int not null AUTO_INCREMENT,
   KD_ROMBEL            varchar(20) not null,
   NOMOR_INDUK          varchar(50) not null,
   START_DATE           date not null,
   END_DATE             date,
   primary key (ID)
);

/*==============================================================*/
/* Table: SOAL                                                  */
/*==============================================================*/
create table SOAL
(
   ID_SOAL              int not null AUTO_INCREMENT,
   KD_UJIAN             varchar(100) not null,
   NOMOR                smallint not null,
   NO_URUT              smallint not null,
   POINT                smallint not null,
   primary key (ID_SOAL)
);

/*==============================================================*/
/* Table: UJIAN                                                 */
/*==============================================================*/
create table UJIAN
(
   KD_UJIAN             varchar(100) not null,
   KD_MAPEL             varchar(50),
   NAMA_UJIAN           varchar(100),
   KUNCI_JAWABAN        varchar(100),
   IS_ACTIVE            bool not null,
   SEMESTER             smallint,
   KETERANGAN           varchar(255),
   START_DATETIME       datetime not null,
   END_DATETIME         datetime not null,
   LIST_RANDOM          varchar(255),
   JUMLAH_PILIHAN       smallint not null,
   primary key (KD_UJIAN)
);

/*==============================================================*/
/* Table: UJITAN_TO_ROMBEL_MAPPING                              */
/*==============================================================*/
create table UJITAN_TO_ROMBEL_MAPPING
(
   ID                   int not null AUTO_INCREMENT,
   KD_ROMBEL            varchar(20) not null,
   KD_UJIAN             varchar(100) not null,
   START_DATETIME       datetime not null,
   END_DATETIME         datetime not null,
   primary key (ID)
);

/*==============================================================*/
/* Table: WALI_KELAS_MAPPING                                    */
/*==============================================================*/
create table WALI_KELAS_MAPPING
(
   ID                   int not null AUTO_INCREMENT,
   KD_KELAS             varchar(20) not null,
   NIP                  varchar(50) not null,
   START_DATE           date not null,
   END_DATE             date,
   primary key (ID)
);

alter table GURU_TO_KELAS_MAPPING add constraint FK_GURUTOKELASMAPPING foreign key (NIP)
      references GURU (NIP) on delete restrict on update restrict;

alter table GURU_TO_KELAS_MAPPING add constraint FK_GURUTOKELASMAPPING2 foreign key (KD_KELAS)
      references KELAS_MASTER (KD_KELAS) on delete restrict on update restrict;

alter table GURU_TO_MAPEL_MAPPING add constraint FK_GURUTOMAPELMAPPING foreign key (NIP)
      references GURU (NIP) on delete restrict on update restrict;

alter table GURU_TO_MAPEL_MAPPING add constraint FK_GURUTOMAPELMAPPING2 foreign key (KD_MAPEL)
      references MAPEL_MASTER (KD_MAPEL) on delete restrict on update restrict;

alter table GURU_TO_UJIAN_MAPPING add constraint FK_GURUTOUJIANMAPPING foreign key (NIP)
      references GURU (NIP) on delete restrict on update restrict;

alter table GURU_TO_UJIAN_MAPPING add constraint FK_GURUTOUJIANMAPPING2 foreign key (KD_UJIAN)
      references UJIAN (KD_UJIAN) on delete restrict on update restrict;

alter table JAWABAN_SISWA add constraint FK_RELATIONSHIP_25 foreign key (NOMOR_INDUK)
      references SISWA (NOMOR_INDUK) on delete restrict on update restrict;

alter table JAWABAN_SISWA add constraint FK_RELATIONSHIP_26 foreign key (KD_UJIAN)
      references UJIAN (KD_UJIAN) on delete restrict on update restrict;

alter table MAPEL_MASTER add constraint FK_RELATIONSHIP_10 foreign key (KD_JURUSAN)
      references JURUSAN_MASTER (KD_JURUSAN) on delete restrict on update restrict;

alter table NILAI add constraint FK_MATAPELAJARANTONILAI foreign key (KD_MAPEL)
      references MAPEL_MASTER (KD_MAPEL) on delete restrict on update restrict;

alter table NILAI add constraint FK_SISWATONILAI foreign key (NOMOR_INDUK)
      references SISWA (NOMOR_INDUK) on delete restrict on update restrict;

alter table NILAI add constraint FK_UJIANTONILAI foreign key (KD_UJIAN)
      references UJIAN (KD_UJIAN) on delete restrict on update restrict;

alter table PILIHAN_JAWABAN add constraint FK_RELATIONSHIP_14 foreign key (KD_UJIAN)
      references UJIAN (KD_UJIAN) on delete restrict on update restrict;

alter table PILIHAN_JAWABAN add constraint FK_RELATIONSHIP_15 foreign key (ID_SOAL)
      references SOAL (ID_SOAL) on delete restrict on update restrict;

alter table PILIHAN_JAWABAN add constraint FK_RELATIONSHIP_24 foreign key (KD_PILIHAN)
      references PILIHAN_JAWABAN_MASTER (KD_PILIHAN) on delete restrict on update restrict;

alter table SISWA add constraint FK_RELATIONSHIP_11 foreign key (KD_JURUSAN)
      references JURUSAN_MASTER (KD_JURUSAN) on delete restrict on update restrict;

alter table SISWA_TO_KELAS_MAPPING add constraint FK_SISWATOKELASMAPPING foreign key (NOMOR_INDUK)
      references SISWA (NOMOR_INDUK) on delete restrict on update restrict;

alter table SISWA_TO_KELAS_MAPPING add constraint FK_SISWATOKELASMAPPING2 foreign key (KD_KELAS)
      references KELAS_MASTER (KD_KELAS) on delete restrict on update restrict;

alter table SISWA_TO_ROMBEL_MAPPING add constraint FK_RELATIONSHIP_17 foreign key (KD_ROMBEL)
      references ROMBEL_MASTER (KD_ROMBEL) on delete restrict on update restrict;

alter table SISWA_TO_ROMBEL_MAPPING add constraint FK_RELATIONSHIP_19 foreign key (NOMOR_INDUK)
      references SISWA (NOMOR_INDUK) on delete restrict on update restrict;

alter table SOAL add constraint FK_UJIANTOSOALMAPPING foreign key (KD_UJIAN)
      references UJIAN (KD_UJIAN) on delete restrict on update restrict;

alter table UJIAN add constraint FK_RELATIONSHIP_7 foreign key (KD_MAPEL)
      references MAPEL_MASTER (KD_MAPEL) on delete restrict on update restrict;

alter table UJITAN_TO_ROMBEL_MAPPING add constraint FK_RELATIONSHIP_16 foreign key (KD_ROMBEL)
      references ROMBEL_MASTER (KD_ROMBEL) on delete restrict on update restrict;

alter table UJITAN_TO_ROMBEL_MAPPING add constraint FK_RELATIONSHIP_18 foreign key (KD_UJIAN)
      references UJIAN (KD_UJIAN) on delete restrict on update restrict;

alter table WALI_KELAS_MAPPING add constraint FK_WALIKELASMAPPING foreign key (KD_KELAS)
      references KELAS_MASTER (KD_KELAS) on delete restrict on update restrict;

alter table WALI_KELAS_MAPPING add constraint FK_WALIKELASMAPPING2 foreign key (NIP)
      references GURU (NIP) on delete restrict on update restrict;

