$(document).ready(function () {
    $('#MaSV').change(function () {
        const MaSV = $(this).val().toUpperCase();
        if ((MaSV.length === 6) && (MaSV.slice(0, 2) === 'CT' || MaSV.slice(0, 2) === 'DT' || MaSV.slice(0, 2) === 'AT')) {
            $.ajax({
                type: "post",
                url: "http://127.0.0.1/ThucTap/checkMaSV",
                data: "MaSV=" + MaSV,
                success: function (response) {
                    const oResponse = JSON.parse(response);
                    const msgStyle = oResponse.isValid === 'yes' ? 'color: deepskyblue' : 'color: red';
                    $('#available').html('<span style="' + msgStyle + '">' + oResponse.msg + '</span>');
                }
            });
        } else {
            alert('Mã Sinh Viên Phải Gồm 6 Ký Tự Và 2 ký tự Bắt Đầu Là AT,CT,DT');
        }
    });
    $('#SDT').change(function () {
        const SDT = $(this).val();
        if (SDT.length === 10) {
            $('#availableSDT').html('<span style="color: deepskyblue">Số Điện Thoại Đúng Định Dạng</span>');
        } else {
            alert('Số Điện Thoại Phải Gồm 10 Số');
        }
    });
    $('#MaDT').change(function () {
        const MaDT = $(this).val().toUpperCase();
        if ((MaDT.length === 6) && (MaDT.slice(0, 2) === 'DT')) {
            $.ajax({
                type: "post",
                url: "http://127.0.0.1/ThucTap/checkMaDT",
                data: "MaDT=" + MaDT,
                success: function (response) {
                    const oResponse = JSON.parse(response);
                    const msgStyle = oResponse.isValid === 'yes' ? 'color: deepskyblue' : 'color: red';
                    $('#availableMaDT').html('<span style="' + msgStyle + '">' + oResponse.msg + '</span>');
                }
            });
        } else {
            alert('Mã Đề Tài Phải Gồm 6 Ký Tự Và 2 Ký Tự Bắt Đầu Là DT');
        }
    });
    $('#MaGV').change(function () {
        const MaGV = $(this).val().toUpperCase();
        if ((MaGV.length === 6) && (MaGV.slice(0, 2) === 'GV')) {
            $.ajax({
                type: "post",
                url: "http://127.0.0.1/ThucTap/checkMaGV",
                data: "MaGV=" + MaGV,
                success: function (response) {
                    const oResponse = JSON.parse(response);
                    const msgStyle = oResponse.isValid === 'yes' ? 'color: deepskyblue' : 'color: red';
                    $('#availableMaGV').html('<span style="' + msgStyle + '">' + oResponse.msg + '</span>');
                }
            });
        } else {
            alert('Mã Giảng Viên Phải Gồm 6 Ký Tự Và 2 ký tự Bắt Đầu Là GV');
        }
    });
})