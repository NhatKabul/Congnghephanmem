$(document ).ready(function() {
        $('.btnfilter').click(function() {
        alert('hello');
       alert('ahihi');
        e.preventDefault();
        var param = $(this).attr("href").replace("#","");
        var concept = $(this).text();
        $('.search-panel span#search_concept').text(concept);
        $('.input-group #search_param').val(param);
});

  /*check all */
  $('#chkCheckAll').click(function () {    
     $('input:checkbox').prop('checked', this.checked);    
 });
  $('#btnxoasach').click(function(){
    alert('hihi');
  });
});
/*
    $(".chitietsach").click(function(){
      console.log($(this).data('id'));
      $.ajax({
        type: "POST",
        dataType: 'json',
        url:"<?php echo site_url('sach/chitiet') ;?>",
        data : {
          id:$(this).data('id')
        },
        success: function(resp){
         // alert("vv");
        // console.log(resp);
        $('#txtMaSach').val(resp.data_info[0].masach);
        $('#txtTenSach').val(resp.data_info[0].tensach);
        $('#txtNgayNhap').val(resp.data_info[0].ngaynhap);
        $('#txtSoLuong').val(resp.data_info[0].soluong);
        $('#txtGiaBan').val(resp.data_info[0].giaban);
        $('#txtTacGia').val(resp.data_info[0].tacgia);
        $('#txtTheLoai').val(resp.data_info[0].theloai);
        $('#txtNXB').val(resp.data_info[0].nhaxuatban);
        $('#txtNCC').val(resp.data_info[0].mancc);
        var hinh="<?php echo base_url().'public/'; ?>dist/img/"+resp.data_info[0].hinhanh;
        $("#imgHinhSach").attr("src",hinh);
      },
      error: function(resp) { alert(JSON.stringify(resp)); }
    });
    });

    $("#btnCapNhat").click(function()
    {
      var dataform = $("#frmSach").serialize();
     // console.log(dataform);

     $.ajax({
      type: "POST",
      dataType: 'json',
      url:"<?php echo site_url('sach/capnhat') ;?>",
      data : dataform,
      success: function(resp){
        console.log(resp.message);
       //alert(resp.status);
     //  alert("ccc");
     $("#message").text(resp.message);

     setTimeout(window.location.reload(), 2000);
   },
   error: function(resp) { alert(JSON.stringify(resp)); }
 });
     return false;    
   });



    $(".xoasach").click(function()
    {
     // alert($(this).data('id'));
     // console.log($(this).data('id'));
      //console.log($(this).data('id'));
      $.ajax({
        type: "POST",
        dataType: 'json',
        url:"<?php echo site_url('sach/xoasach') ;?>",
        data : {
          id:$(this).data('id')
        },
        success: function(resp){
          alert("Xóa sách thành công");
          //alert(resp.message);
         // console.log(resp.message);
         setTimeout(window.location.reload());
       },
       error: function(resp) { alert(JSON.stringify(resp)); }
     });
      return false;    
    });


*/
