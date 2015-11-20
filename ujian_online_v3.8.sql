/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     11/20/2015 10:20:44 PM                       */
/*==============================================================*/


drop table if exists ADMIN;

drop table if exists GURU;

drop table if exists GURU_TO_KELAS_MAPPING;

drop table if exists GURU_TO_MAPEL_MAPPING;

drop table if exists GURU_TO_UJIAN_MAPPING;

drop table if exists JADWAL_UJIAN;

drop table if exists JURUSAN_MASTER;

drop table if exists KELAS_MASTER;

drop table if exists MAPEL_MASTER;

drop table if exists MAPEL_TO_JURUSAN_MAPPING;

drop table if exists PILIHAN_JAWABAN;

drop table if exists PILIHAN_JAWABAN_MASTER;

drop table if exists PROSES_UJIAN;

drop table if exists ROMBEL_MASTER;

drop table if exists RUANGAN_MASTER;

drop table if exists SISWA;

drop table if exists SISWA_TO_KELAS_MAPPING;

drop table if exists SISWA_TO_ROMBEL_MAPPING;

drop table if exists SOAL;

drop table if exists STATUS_GURU_TO_KELAS;

drop table if exists STATUS_GURU_TO_UJIAN;

drop table if exists UJIAN;

/*==============================================================*/
/* Table: ADMIN                                                 */
/*==============================================================*/
create table ADMIN
(
   ID                   int not null AUTO_INCREMENT,
   USER_NAME            varchar(100) not null,
   PASSWORD             varchar(100) not null,
   primary key (ID)
);

/*==============================================================*/
/* Table: GURU                                                  */
/*==============================================================*/
create table GURU
(
   NIP                  varchar(50) not null,
   NUPTK                varchar(50),
   NAMA                 varchar(100) not null,
   JENIS_KELAMIN        varchar(1) not null,
   TEMPAT_LAHIR         varchar(100),
   TANGGAL_LAHIR        date,
   ALAMAT               varchar(100),
   NO_TELEPON           varchar(30),
   IS_ACTIVE            bool not null,
   USERNAME             varchar(100) not null,
   PASSWORD             varchar(100) not null,
   NAMA_FILE_FOTO       varchar(100),
   primary key (NIP)
);

/*==============================================================*/
/* Table: GURU_TO_KELAS_MAPPING                                 */
/*==============================================================*/
create table GURU_TO_KELAS_MAPPING
(
   ID_GURU_TO_KELAS     int not null AUTO_INCREMENT,
   NIP                  varchar(50) not null,
   KD_KELAS             varchar(20) not null,
   ID_STATUS            smallint,
   START_DATE           date not null,
   END_DATE             date,
   primary key (ID_GURU_TO_KELAS)
);

alter table GURU_TO_KELAS_MAPPING comment 'relasi yang menyatakan hubungan antara guru dan kelas 
                                          -&#&';

/*==============================================================*/
/* Table: GURU_TO_MAPEL_MAPPING                                 */
/*==============================================================*/
create table GURU_TO_MAPEL_MAPPING
(
   ID_GURU_TO_MAPEL     int not null AUTO_INCREMENT,
   ID_MAPEL             int not null,
   NIP                  varchar(50),
   START_DATE           date not null,
   END_DATE             date,
   primary key (ID_GURU_TO_MAPEL)
);

/*==============================================================*/
/* Table: GURU_TO_UJIAN_MAPPING                                 */
/*==============================================================*/
create table GURU_TO_UJIAN_MAPPING
(
   ID_GURU_TO_UJIAN     int not null AUTO_INCREMENT,
   NIP                  varchar(50) not null,
   KD_UJIAN             varchar(100) not null,
   ID_STATUS            int,
   primary key (ID_GURU_TO_UJIAN)
);

/*==============================================================*/
/* Table: JADWAL_UJIAN                                          */
/*==============================================================*/
create table JADWAL_UJIAN
(
   ID_JADWAL_UJIAN      int not null AUTO_INCREMENT,
   KD_UJIAN             varchar(100) not null,
   KD_ROMBEL            varchar(20) not null,
   KD_RUANGAN           varchar(50),
   START_DATETIME       datetime,
   END_DATETIME         datetime,
   IS_ACTIVE            bool not null,
   primary key (ID_JADWAL_UJIAN)
);

/*==============================================================*/
/* Table: JURUSAN_MASTER                                        */
/*==============================================================*/
create table JURUSAN_MASTER
(
   KD_JURUSAN           varchar(50) not null,
   NAMA_JURUSAN         varchar(100) not null,
   DESKRIPSI            varchar(255),
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
   NAMA_MAPEL           varchar(100) not null,
   primary key (KD_MAPEL)
);

/*==============================================================*/
/* Table: MAPEL_TO_JURUSAN_MAPPING                              */
/*==============================================================*/
create table MAPEL_TO_JURUSAN_MAPPING
(
   ID_MAPEL             int not null AUTO_INCREMENT,
   NAMA                 varchar(100) not null,
   KD_JURUSAN           varchar(50) not null,
   KD_MAPEL             varchar(50) not null,
   KETERANGAN           varchar(255),
   ISVISIBLE            bool not null,
   primary key (ID_MAPEL)
);

/*==============================================================*/
/* Table: PILIHAN_JAWABAN                                       */
/*==============================================================*/
create table PILIHAN_JAWABAN
(
   ID_PILIHAN_JAWABAN   int not null AUTO_INCREMENT,
   KD_UJIAN             varchar(100) not null,
   ID_SOAL              int not null,
   KD_PILIHAN           varchar(1) not null,
   PILIHAN_JAWABAN      text not null,
   primary key (ID_PILIHAN_JAWABAN)
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
/* Table: PROSES_UJIAN                                          */
/*==============================================================*/
create table PROSES_UJIAN
(
   ID_PROSES_UJIAN      int not null AUTO_INCREMENT,
   NOMOR_INDUK          varchar(50) not null,
   KD_UJIAN             varchar(100) not null,
   NILAI                smallint,
   JAWABAN_SISWA        varchar(255),
   JAWABAN_BENAR        smallint,
   JUMLAH_MENJAWAB      smallint,
   primary key (ID_PROSES_UJIAN)
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
/* Table: RUANGAN_MASTER                                        */
/*==============================================================*/
create table RUANGAN_MASTER
(
   KD_RUANGAN           varchar(50) not null,
   NAMA_RUANGAN         varchar(100) not null,
   primary key (KD_RUANGAN)
);

/*==============================================================*/
/* Table: SISWA                                                 */
/*==============================================================*/
create table SISWA
(
   NOMOR_INDUK          varchar(50) not null,
   KD_JURUSAN           varchar(50) not null,
   NISN                 varchar(50),
   NAMA                 varchar(100) not null,
   JENIS_KELAMIN        varchar(1) not null,
   TEMPAT_LAHIR         varchar(100),
   TANGGAL_LAHIR        date,
   ALAMAT               varchar(100),
   NO_TELEPON           varchar(30),
   IS_ACTIVE            bool not null,
   USERNAME             varchar(100) not null,
   PASSWORD             varchar(100) not null,
   NAMA_FILE_FOTO       varchar(100),
   primary key (NOMOR_INDUK)
);

/*==============================================================*/
/* Table: SISWA_TO_KELAS_MAPPING                                */
/*==============================================================*/
create table SISWA_TO_KELAS_MAPPING
(
   ID_SISWA_TO_KELAS    int not null AUTO_INCREMENT,
   NOMOR_INDUK          varchar(50) not null,
   KD_KELAS             varchar(20) not null,
   START_DATE           date not null,
   END_DATE             date,
   primary key (ID_SISWA_TO_KELAS)
);

/*==============================================================*/
/* Table: SISWA_TO_ROMBEL_MAPPING                               */
/*==============================================================*/
create table SISWA_TO_ROMBEL_MAPPING
(
   ID_SISWA_TO_ROMBEL   int not null AUTO_INCREMENT,
   KD_ROMBEL            varchar(20) not null,
   NOMOR_INDUK          varchar(50) not null,
   START_DATE           date not null,
   END_DATE             date,
   primary key (ID_SISWA_TO_ROMBEL)
);

/*==============================================================*/
/* Table: SOAL                                                  */
/*==============================================================*/
create table SOAL
(
   ID_SOAL              int not null AUTO_INCREMENT,
   KD_UJIAN             varchar(100) not null,
   NOMOR                smallint not null,
   SOAL                 text not null,
   POINT                smallint not null,
   KUNCI_JAWABAN        varchar(1),
   primary key (ID_SOAL)
);

/*==============================================================*/
/* Table: STATUS_GURU_TO_KELAS                                  */
/*==============================================================*/
create table STATUS_GURU_TO_KELAS
(
   ID_STATUS            smallint not null AUTO_INCREMENT,
   NAMA_STATUS          varchar(50) not null,
   KETERANGAN           varchar(255),
   primary key (ID_STATUS)
);

/*==============================================================*/
/* Table: STATUS_GURU_TO_UJIAN                                  */
/*==============================================================*/
create table STATUS_GURU_TO_UJIAN
(
   ID_STATUS            int not null AUTO_INCREMENT,
   NAMA_STATUS          varchar(50) not null,
   KETERANGAN           varchar(50),
   primary key (ID_STATUS)
);

/*==============================================================*/
/* Table: UJIAN                                                 */
/*==============================================================*/
create table UJIAN
(
   KD_UJIAN             varchar(100) not null,
   ID_MAPEL             int,
   NAMA_UJIAN           varchar(100),
   JUMLAH_SOAL          smallint,
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

alter table GURU_TO_KELAS_MAPPING add constraint FK_GURUTOKELASMAPPING foreign key (NIP)
      references GURU (NIP) on delete restrict on update restrict;

alter table GURU_TO_KELAS_MAPPING add constraint FK_GURUTOKELASMAPPING2 foreign key (KD_KELAS)
      references KELAS_MASTER (KD_KELAS) on delete restrict on update restrict;

alter table GURU_TO_KELAS_MAPPING add constraint FK_RELATIONSHIP_26 foreign key (ID_STATUS)
      references STATUS_GURU_TO_KELAS (ID_STATUS) on delete restrict on update restrict;

alter table GURU_TO_MAPEL_MAPPING add constraint FK_GURUTOMAPELMAPPING foreign key (NIP)
      references GURU (NIP) on delete restrict on update restrict;

alter table GURU_TO_MAPEL_MAPPING add constraint FK_RELATIONSHIP_33 foreign key (ID_MAPEL)
      references MAPEL_TO_JURUSAN_MAPPING (ID_MAPEL) on delete restrict on update restrict;

alter table GURU_TO_UJIAN_MAPPING add constraint FK_GURUTOUJIANMAPPING foreign key (NIP)
      references GURU (NIP) on delete restrict on update restrict;

alter table GURU_TO_UJIAN_MAPPING add constraint FK_GURUTOUJIANMAPPING2 foreign key (KD_UJIAN)
      references UJIAN (KD_UJIAN) on delete restrict on update restrict;

alter table GURU_TO_UJIAN_MAPPING add constraint FK_RELATIONSHIP_29 foreign key (ID_STATUS)
      references STATUS_GURU_TO_UJIAN (ID_STATUS) on delete restrict on update restrict;

alter table JADWAL_UJIAN add constraint FK_RELATIONSHIP_27 foreign key (KD_UJIAN)
      references UJIAN (KD_UJIAN) on delete restrict on update restrict;

alter table JADWAL_UJIAN add constraint FK_RELATIONSHIP_28 foreign key (KD_ROMBEL)
      references ROMBEL_MASTER (KD_ROMBEL) on delete restrict on update restrict;

alter table JADWAL_UJIAN add constraint FK_RELATIONSHIP_31 foreign key (KD_RUANGAN)
      references RUANGAN_MASTER (KD_RUANGAN) on delete restrict on update restrict;

alter table MAPEL_TO_JURUSAN_MAPPING add constraint FK_RELATIONSHIP_25 foreign key (KD_MAPEL)
      references MAPEL_MASTER (KD_MAPEL) on delete restrict on update restrict;

alter table MAPEL_TO_JURUSAN_MAPPING add constraint FK_RELATIONSHIP_32 foreign key (KD_JURUSAN)
      references JURUSAN_MASTER (KD_JURUSAN) on delete restrict on update restrict;

alter table PILIHAN_JAWABAN add constraint FK_RELATIONSHIP_14 foreign key (KD_UJIAN)
      references UJIAN (KD_UJIAN) on delete restrict on update restrict;

alter table PILIHAN_JAWABAN add constraint FK_RELATIONSHIP_15 foreign key (ID_SOAL)
      references SOAL (ID_SOAL) on delete restrict on update restrict;

alter table PILIHAN_JAWABAN add constraint FK_RELATIONSHIP_24 foreign key (KD_PILIHAN)
      references PILIHAN_JAWABAN_MASTER (KD_PILIHAN) on delete restrict on update restrict;

alter table PROSES_UJIAN add constraint FK_SISWATONILAI foreign key (NOMOR_INDUK)
      references SISWA (NOMOR_INDUK) on delete restrict on update restrict;

alter table PROSES_UJIAN add constraint FK_UJIANTONILAI foreign key (KD_UJIAN)
      references UJIAN (KD_UJIAN) on delete restrict on update restrict;

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

alter table UJIAN add constraint FK_RELATIONSHIP_34 foreign key (ID_MAPEL)
      references MAPEL_TO_JURUSAN_MAPPING (ID_MAPEL) on delete restrict on update restrict;

