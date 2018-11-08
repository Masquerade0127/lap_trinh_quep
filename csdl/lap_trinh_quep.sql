create database lap_trinh_quep character set utf8 collate utf8_czech_ci;
use lap_trinh_quep;

create table khoa(
	ID int auto_increment primary key,
    ten_khoa char(20) not null
);

create table nganh(
	ID int auto_increment primary key,
    ma_khoa int not null,
    ten_nganh char(50) not null,
    foreign key (ma_khoa) references khoa(ID) on delete cascade on update cascade
);

create table nien_khoa(
	ID int auto_increment primary key,
    thoi_gian_bat_dau date not null,
    thoi_gian_ket_thuc date not null,
    khoa char(5) not null
);

create table lop(
	ID int auto_increment primary key,
    ma_nganh int not null,
    ma_nien_khoa int not null,
    ten_lop char(50) not null,
    foreign key (ma_nganh) references nganh(ID) on delete cascade on update cascade,
    foreign key (ma_nien_khoa) references nien_khoa(ID) on delete cascade on update cascade
);

create table giang_vien(
	ID int auto_increment primary key,
    ma_nganh int not null,
    ten_gv varchar(50) not null,
    ngay_sinh date not null,
    dia_chi varchar(200) not null,
    sdt char(12) not null,
    email varchar(50) not null,
	foreign key (ma_nganh) references nganh(ID) on delete cascade on update cascade
);

create table mon(
	ID int auto_increment primary key,
    ma_nganh int not null,
    ten_mon varchar(50),
    foreign key (ma_nganh) references nganh(ID) on delete cascade on update cascade
);

create table user(
	ID int not null primary key,
    password char(255) not null,
    foreign key (ID) references giang_vien(ID) on delete cascade on update cascade
);

create table de_thi(
	ID int auto_increment primary key,
    ma_giang_vien int not null,
    ma_mon int not null,
    noi_dung varchar(200) not null,
    ngay_ra_de date not null,
    hoc_ky char(2) not null,
    nam_hoc char(10) not null,
    foreign key (ma_giang_vien) references giang_vien(ID) on delete cascade on update cascade,
    foreign key (ma_mon) references mon(ID) on delete cascade on update cascade
);

create table cau_hoi(
	ID int auto_increment primary key,
    id_mon_hoc int not null,
    noi_dung varchar(500) not null,
    muc_do int(3) not null,
    foreign key (id_mon_hoc) references mon(ID) on delete cascade on update cascade
);

create table dap_an(
	ID int auto_increment primary key,
    noi_dung varchar(100),
    trang_thai enum('dung', 'sai')
);

create table hinh_anh(
	ID int auto_increment primary key,
    ma_cau_hoi int not null,
    url text not null,
    foreign key (ma_cau_hoi) references cau_hoi(ID) on delete cascade on update cascade
);
create table cauhoi_dapan(
	ma_cau_hoi int not null,
    ma_dap_an int not null,
    foreign key (ma_dap_an) references dap_an(ID) on delete cascade on update cascade,
    foreign key (ma_cau_hoi) references cau_hoi(ID) on delete cascade on update cascade
);