
  <div class="row " style="margin-top: 20px">
  <div class="col-lg-12">
    <div class="alert alert-info alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <h4 id="message"><i class="icon fa fa-info"></i> Alert!</h4>
      Info alert preview. This alert is dismissable.
    </div>
  </div>
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3><?php if(isset($slnhaptothieukhinhap)){ echo $slnhaptothieukhinhap;} ?></h3>

          <p>số lượng thấp thiểu khi bán</p>
        </div>
        <div class="icon">
          <i class="ion ion-bag"></i>
        </div>
        <a href="#" id="slnhaptothieukhinhap" data-value="<?php echo $slnhaptothieukhinhap; ?>"  class="small-box-footer">cập nhật <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner"><h3><?php if(isset($sltontoidakhinhap)){ echo $sltontoidakhinhap;} ?></h3>

          <p>số lượng nhập tối đa khi bán</p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3><?php if(isset($sotiennotoida)){ echo $sotiennotoida;} ?></h3>

          <p>số tiền nợ tối đa</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-red">
        <div class="inner">
          <h3><?php if(isset($sltontoithieukhiban)){ echo $sltontoithieukhiban;} ?></h3>

          <p>số lượng tồn tối thiểu khi bán</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <!-- cap nhat tham so -->
    <div class="modal fade" id="updatethamso" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Cập nhật tham số</h4>
        </div>
        <div class="modal-body">
          <p>
            <input class="form-control" name="giatri" id="giatri" type="text" value="" placeholder="Default input">
            <input class="form-control" name="name" type="hidden" value="" placeholder="Default input">
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" id="capnhatthamso" class="btn btn-success">Lưu</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Thoát</button>
        </div>
      </div>
      
    </div>
  </div>
  </div>
<script type="text/javascript">
 $(document).ready(function() {
  $('#slnhaptothieukhinhap').click(function(e){
     $("#giatri").val($(this).data('value'));
    // console.log((this).attr('id'));
     //$("#name").val($("#name").val($(this).attr('id')));
     $("#updatethamso").modal('show')
  });
  /*ham cap nhat du lieu bang ajax*/
  $("#capnhatthamso").click(function(){
     var value = $('#giatri').val();
      var name = $('#name').val();
       var sendInfo = {
           value: value,
           name: name,
       };
    $.ajax({
      type: "POST",
      url:"<?php echo site_url('setting/update') ;?>",
      data : sendInfo,
      success: function(resp){
        $('#message').html(resp);
    },
     error: function(resp) { alert(JSON.stringify(resp)); }
    })
  });

});
</script>