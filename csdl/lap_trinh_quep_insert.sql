

use lap_trinh_quep;
insert into khoa(ten_khoa)
values (N'công nghệ thông tin');
insert into khoa(ten_khoa)
values (N'công nghệ thực phẩm');

insert into nganh(ma_khoa, ten_nganh)
values (1, N'Khoa học máy tính');
insert into nganh(ma_khoa, ten_nganh)
values (1, N'Hệ thống thông tin');
insert into nganh(ma_khoa, ten_nganh)
values (1, N'Kỹ thuật phần mềm');

insert into nien_khoa(thoi_gian_bat_dau, thoi_gian_ket_thuc, khoa)
values ('2015-09-01', '2015-09-01', 'k3');