

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
values (3, 1, N'Kỹ thuật phần mềm');
insert into lop(ma_nganh, ma_nien_khoa, ten_lop)
values (3, 1, N'Khoa học máy tính');
insert into lop(ma_nganh, ma_nien_khoa, ten_lop)
values (3, 1, N'Hệ thống thông tin');

insert into giang_vien(ma_nganh, ten_gv, ngay_sinh, dia_chi, sdt, email)
values (3, N'Đặng Thị Mông Vui', '1997-01-20', N'Trà Vinh', '0906159062', 'dtmvui.ktpm0115@student.ctuet.edu.vn');

insert into mon(ma_nganh, ten_mon)
values (3, N'kiến trúc máy tính');
insert into mon(ma_nganh, ten_mon)
values (3, N'kỹ thuật lập trình');
insert into mon(ma_nganh, ten_mon)
values (3, N'toán rời rạc');

insert into cau_hoi(ma_mon_hoc, noi_dung, muc_do)
values (1, N'Ram là gì', '0');
insert into cau_hoi(ma_mon_hoc, noi_dung, muc_do)
values (1, N'có bao nhiêu loại ổ cứng', '2');
insert into cau_hoi(ma_mon_hoc, noi_dung, muc_do)
values (1, N'mainboard', '2');
insert into cau_hoi(ma_mon_hoc, noi_dung, muc_do)
values (1, N'VRAM', '0');
insert into cau_hoi(ma_mon_hoc, noi_dung, muc_do)
values (1, N'quy trình truyền dữ liệu', '1');

/*======================begin insert dap an====================*/
insert into dap_an(noi_dung, trang_thai)
values (N'là hệ quản trị csdl jkajkjdak', 'sai');
insert into dap_an(noi_dung, trang_thai)
values (N'phần cứng', 'sai');
insert into dap_an(noi_dung, trang_thai)
values (N'là hệ quản trị csdlasddddddddddddddddddd', 'sai');
insert into dap_an(noi_dung, trang_thai)
values (N'phần cứng', 'dung');

insert into dap_an(noi_dung, trang_thai)
values (N'feed back001', 'sai');
insert into dap_an(noi_dung, trang_thai)
values (N'phần mềm', 'sai');
insert into dap_an(noi_dung, trang_thai)
values (N'quản trị csdl', 'sai');
insert into dap_an(noi_dung, trang_thai)
values (N'đại học', 'dung');

insert into dap_an(noi_dung, trang_thai)
values (N'feed back001', 'sai');
insert into dap_an(noi_dung, trang_thai)
values (N'phần mềm', 'sai');
insert into dap_an(noi_dung, trang_thai)
values (N'quản trị csdl', 'sai');
insert into dap_an(noi_dung, trang_thai)
values (N'đại học', 'dung');

insert into dap_an(noi_dung, trang_thai)
values (N'feed back001', 'sai');
insert into dap_an(noi_dung, trang_thai)
values (N'phần mềm', 'dung');
insert into dap_an(noi_dung, trang_thai)
values (N'quản trị csdl', 'sai');
insert into dap_an(noi_dung, trang_thai)
values (N'đại học', 'sai');

insert into dap_an(noi_dung, trang_thai)
values (N'http', 'sai');
insert into dap_an(noi_dung, trang_thai)
values (N'chả biết', 'dung');
insert into dap_an(noi_dung, trang_thai)
values (N'chắc là qua router', 'sai');
insert into dap_an(noi_dung, trang_thai)
values (N'đại học', 'sai');
/*===================end insert dap an==================*/

insert into cauhoi_dapan(ma_dap_an, ma_cau_hoi)
values (1, 1);
insert into cauhoi_dapan(ma_dap_an, ma_cau_hoi)
values (2, 1);
insert into cauhoi_dapan(ma_dap_an, ma_cau_hoi)
values (3, 1);
insert into cauhoi_dapan(ma_dap_an, ma_cau_hoi)
values (4, 1);

insert into cauhoi_dapan(ma_dap_an, ma_cau_hoi)
values (5, 2);
insert into cauhoi_dapan(ma_dap_an, ma_cau_hoi)
values (6, 2);
insert into cauhoi_dapan(ma_dap_an, ma_cau_hoi)
values (7, 2);
insert into cauhoi_dapan(ma_dap_an, ma_cau_hoi)
values (8, 2);

insert into cauhoi_dapan(ma_dap_an, ma_cau_hoi)
values (9, 3);
insert into cauhoi_dapan(ma_dap_an, ma_cau_hoi)
values (10, 3);
insert into cauhoi_dapan(ma_dap_an, ma_cau_hoi)
values (11, 3);
insert into cauhoi_dapan(ma_dap_an, ma_cau_hoi)
values (12, 3);

insert into cauhoi_dapan(ma_dap_an, ma_cau_hoi)
values (13, 4);
insert into cauhoi_dapan(ma_dap_an, ma_cau_hoi)
values (14, 4);
insert into cauhoi_dapan(ma_dap_an, ma_cau_hoi)
values (15, 4);
insert into cauhoi_dapan(ma_dap_an, ma_cau_hoi)
values (16, 4);

insert into cauhoi_dapan(ma_dap_an, ma_cau_hoi)
values (17, 5);
insert into cauhoi_dapan(ma_dap_an, ma_cau_hoi)
values (18, 5);
insert into cauhoi_dapan(ma_dap_an, ma_cau_hoi)
values (19, 5);
insert into cauhoi_dapan(ma_dap_an, ma_cau_hoi)
values (20, 5);