<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!-- BOOTSTRAP 3.3.7  -->
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- JQUERY BOOTSTRAP -->
	<title>Phiếu bán hàng</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-md-6 col-xs-6 " style="float: none;; margin: 0 auto;border: 1px solid #EFEFEF;">
				<div class="row text-center" style=" min-height: 100px; padding-top: 10px;">
					<div class="col-md-6 col-sm-6 col-xs-6">
						<img class="img-responsive" src="<?php echo  base_url('public/web/images'); ?>/logo.png" style="height: 70px;">
						<!-- <strong style="color: red; font-size: 25px;">SKTN BOOKSTORE</strong><br> -->
						<span>Địa chỉ: 277 nguyễn văn cừ street</span><br>
						<span>ĐT: 01649528472</span>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-6" style="margin-top: 40px;">
						<span>Số HD: <?php $data_phieunhap[0]['maphieunhap']; ?></span><br>
						<span>Ngày lập: <?php echo $data_phieunhap[0]['ngaynhap']; ?></span><br>
						<span>Nhân viên lập: <?php echo $data_phieunhap[0]['tennhanvien']; ?></span><br>
					</div>
				</div>
				<div class="row" style="border-top: 1px solid #EFEFEF;border-bottom: 1px solid #EFEFEF; margin-top: 20px; padding-top: 10px; ">
					<div class="col-sm-12 col-md-12 col-xs-12" style="margin-bottom:10px;">
						<div class="col-sm-4 col-md-4 col-xs-4">
							<strong>NHÀ CUNG CẤP:</strong>
						</div>
						<div class="col-sm-8 col-md-8 col-xs-8">
							<span><?php echo $data_phieunhap[0]['tennhacungcap']; ?></span>
						</div>
					</div>
					<div class="col-sm-12 col-md-12 col-xs-12" style="margin-bottom: 10px;">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>STT</th>
									
									<th>Tên HH</th>
									<th>SL</th>
									<th>Đơn giá</th>
									<th>Thành tiền</th>
								</tr>
							</thead>
							<tbody>
							  <?php $stt =1; ?>
							 <?php foreach ($data_phieunhap as $key => $value) { ?>
								<tr>
									<td><?php echo $stt++; ?></td>
									<td><?php echo $value['tensach']; ?></td>
									<td><?php echo $value['soluong']; ?></td>
									<td><?php echo $value['giaban']; ?></td>
									<td><?php echo $value['thanhtien']; ?></td>
								</tr>
								
								<?php } ?>
							</tbody>
						</table>
						<div class="col-sm-12 col-md-12 col-xs-12 text-right">
						<span>Tổng tiền:</span>
						<strong style="color: red"><?php echo $data_phieunhap[0]['tongtien'] ?></strong>
						</div>
					</div>
				</div>
				<div class="row text-center" style="min-height: 10px; padding-top:10px; padding-bottom: 10px;"><i>Cảm ơn và hẹn gặp lại!</i></div>
				<div class="row" style="background: green; min-height: 5px;"></div>
			</div>
		</div>

	</div>
</body>
<script type="text/javascript">
	window.print();
</script>
</html>