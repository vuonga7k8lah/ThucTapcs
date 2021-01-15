$.ajaxSetup({cache:false});
// Thiết lập thời gian thực vòng lặp 1 giây
 setInterval(function() {$('.main-chat').load(Globol.url);}, 1000);