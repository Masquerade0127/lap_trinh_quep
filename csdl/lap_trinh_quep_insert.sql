

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

insert into lop(ma_nganh, ma_nien_khoa, ten_lop)
values (3, 1, 'Kỹ thuật phần mềm');

insert into giang_vien(ma_nganh, ten_gv, ngay_sinh, dia_chi, sdt, email)
values (3, N'Đặng Thị Mông Vui', '1997-01-20', N'Trà Vinh', '0906159062', 'dtmvui.ktpm0115@student.ctuet.edu.vn');

insert into mon(ma_nganh, ten_mon)
values (3, N'kiến trúc máy tính');

