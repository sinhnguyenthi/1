<!DOCTYPE html>
<html>
<head>
	<base href="http://localhost/BT_cuoikhoa/php_dienthoai/">
	<title>dienthoai</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="assets/frontend/css/dienthoai.css">
	<!-- CSS only -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<!-- JS, Popper.js, and jQuery -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
	<!--Start of Tawk.to Script-->
	<script type="text/javascript">
		var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
		(function(){
			var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
			s1.async=true;
			s1.src='https://embed.tawk.to/615a72f925797d7a890219a6/1fh4l28at';
			s1.charset='UTF-8';
			s1.setAttribute('crossorigin','*');
			s0.parentNode.insertBefore(s1,s0);
		})();
	</script>
	<!--End of Tawk.to Script-->
	<div class="container-fluid">
		<!-- header -->
		<?php include "views/HeaderView.php"; ?>
		<!-- header -->
		
		
		<!--  -->
		
		<!-- menu -->
		<!--  -->
		
		<!--  -->
		<!-- end menu -->
		<!-- end header -->
		<!-- main -->
		<div class="main-cotainer">
			<a href="home" style="font-size: 17px;font-weight: 500">TRANG CHỦ</a>
			<!-- slide -->
			<div class="slide">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img class="d-block w-100" src="assets/frontend/images/dienthoai-slide1.jpg" alt="First slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="assets/frontend/images/dienthoai-slide2.jpg" alt="Second slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="assets/frontend/images/dienthoai-slide3.jpg" alt="Third slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="assets/frontend/images/dienthoai-slide4.jpg" alt="Second slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="assets/frontend/images/dienthoai-slide5.jpg" alt="Third slide">
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>

			<!-- end slide -->
			<!-- main1 -->
			<div class="main1 row">
				<!-- main1-left -->
				<div class="main1-left col-2">
					<p>Hãng sản xuất</p>
					<div class="hangsanxuat" style="margin: auto;position: relative;margin-bottom: 100px;">
						<ul class="list-group" style="border:0px;">
							<li class="list-group-item" style="border:0px;">
								<input type="checkbox" checked>Tất cả
							</li>
							<li class="list-group-item" style="border:0px;">
								<input type="checkbox" onclick="location.href='index.php?controller=search&action=name&key=Samsung';">Samsung
							</li>
							<li class="list-group-item" style="border:0px;"><input type="checkbox" onclick="location.href='index.php?controller=search&action=name&key=iphone';">iphone
							</li>
							<li class="list-group-item" style="border:0px;"><input type="checkbox" onclick="location.href='index.php?controller=search&action=name&key=vivo';">ViVo
							</li>
							<li class="list-group-item" style="border:0px;"><input type="checkbox" onclick="location.href='index.php?controller=search&action=name&key=Nokia';">Nokia
							</li>
							<li class="list-group-item" style="border:0px;"><input type="checkbox" onclick="location.href='index.php?controller=search&action=name&key=xiaomi';">Xiaomi
							</li>
						</ul>
					</div>
					<!--  -->
					<!--  -->
					<div style="border: 1px solid black;margin: auto;position: relative;">
						<p> Tìm theo mức giá </p>
						<div class="">
							<ul class="list-group" style="border:0px;">
								<li class="list-group-item" style="border:0px;">Giá từ &nbsp;&nbsp;
									<input type="number" min="0" value="0" id="fromPrice" class="form-control" />
								</li>
								<li class="list-group-item" style="border:0px;">Đến &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="number" min="0" value="0" id="toPrice" class="form-control"/>
								</li>
								<li class="list-group-item" style="border:0px; text-align:center">
									<input type="button" class="btn btn-warning" value="Tìm mức giá" onclick="location.href = 'index.php?controller=search&action=price&fromPrice=' + document.getElementById('fromPrice').value + '&toPrice=' + document.getElementById('toPrice').value;" />
								</li>
							</ul>
						</div>
					</div>
					<!--  -->
					<p>Mức giá</p>
					<div class="mucgia">
						<ul class="list-group" style="border:0px;">
							<li class="list-group-item" style="border:0px;">
								<input type="checkbox" id="duoi2tr" onclick="location.href='index.php?controller=search&action=price&fromPrice=0&toPrice=2000000';" />Dưới 2 triệu
								<li class="list-group-item" style="border:0px;">
									<input type="checkbox" id="2trden4tr" onclick="location.href='index.php?controller=search&action=price&fromPrice=2000000&toPrice=4000000';" />Từ 2 triệu đến 4 triệu
								</li>
								<li class="list-group-item" style="border:0px;"><input type="checkbox" id="4trden8tr" onclick="location.href='index.php?controller=search&action=price&fromPrice=4000000&toPrice=8000000';"/>Từ 4 triệu đến 8 triệu
								</li>
								<li class="list-group-item" style="border:0px;"><input type="checkbox" id="4trden8tr" onclick="location.href='index.php?controller=search&action=price&fromPrice=8000000&toPrice=50000000';"/>Trên 8 triệu
								</li>
							</ul>
						</div>
						<!--  -->
						<!--  -->
						
						<!--  -->
						<!--  -->
						
						<div class="ram" style="margin-top: 50px;">
							<p>Ram</p>
							<ul class="list-group" style="border:0px;font-weight: normal;font-size: 14px;">
								<li class="list-group-item" style="border:0px;">
									<input type="checkbox" id="duoi2tr" onclick="location.href='index.php?controller=search&action=ram&toRam=1';" />1GB
								</li>
								<li class="list-group-item" style="border:0px;">
									<input type="checkbox" id="2trden4tr" onclick="location.href='index.php?controller=search&action=ram&toRam=2';" />2GB 
								</li>
								<li class="list-group-item" style="border:0px;"><input type="checkbox" id="4trden8tr" onclick="location.href='index.php?controller=search&action=ram&toRam=3';"/>3GB
								</li>
								<li class="list-group-item" style="border:0px;"><input type="checkbox" id="4trden8tr" onclick="location.href='index.php?controller=search&action=ram&toRam=4';"/>4GB
								</li>
								<li class="list-group-item" style="border:0px;"><input type="checkbox" id="4trden8tr" onclick="location.href='index.php?controller=search&action=ram&toRam=5';"/>6GB
								</li>
								<li class="list-group-item" style="border:0px;"><input type="checkbox" id="4trden8tr" onclick="location.href='index.php?controller=search&action=ram&toRam=8';"/>8GB
								</li>
								<li class="list-group-item" style="border:0px;"><input type="checkbox" id="4trden8tr" onclick="location.href='index.php?controller=search&action=ram&toRam=12';"/>12GB
								</li>
							</ul>
						</div>
						<!--  -->
						<div class="ram" style="margin-top: 50px;">
							<p>Pin</p>
							<ul class="list-group" style="border:0px;font-weight: normal;font-size: 14px;">
								<li class="list-group-item" style="border:0px;"><input type="checkbox" id="4trden8tr" onclick="location.href='index.php?controller=search&action=pin&fromPin=0&toPin=3';"/>Tất cả
								</li>
								<li class="list-group-item" style="border:0px;"><input type="checkbox" id="4trden8tr" onclick="location.href='index.php?controller=search&action=pin&&fromPin=0&toPin=3000';"/>Dưới 3000 mAh
								</li>
								<li class="list-group-item" style="border:0px;"><input type="checkbox" id="4trden8tr" onclick="location.href='index.php?controller=search&action=pin&fromPin=3001&toPin=4000';"/>Từ 3000 - 4000 mAh
								</li>
								<li class="list-group-item" style="border:0px;"><input type="checkbox" id="4trden8tr" onclick="location.href='index.php?controller=search&action=pin&fromPin=4001&toPin=1200';"/>Siêu trâu: Trên 4000 mAh
								</li>
							</ul>
						</div>
						<!--  -->
						<!--  -->
						
							
						</div>
						<!-- end main1-left -->
						<!-- main1-right -->
						<div class="main1-right col-10" style="">
							<!-- slid-hãng -->
							<div class="slide-logo">
								<div style="border-bottom: 1px solid #99a2aa;font-size:30px;font-weight: 500"></div>
								<div class="list-anh">
									<div id="box" style="">
										<div class="row">
											<div class="col-2"><a href="index.php?controller=search&action=name&key=Samsung">
												<img id="imgShow1" src="assets/frontend/images/samsung.jpg">
											</a></div>
											<div class="col-2"><a href="index.php?controller=search&action=name&key=nokia">
												<img id="imgShow2" src="assets/frontend/images/nokia.jpg">
											</a></div>
											<div class="col-2"><a href="index.php?controller=search&action=name&key=oppo">
												<img id="imgShow3" src="assets/frontend/images/oppo.jpg">
											</a></div>
											<div class="col-2"><a href="index.php?controller=search&action=name&key=vivo">
												<img id="imgShow4" src="assets/frontend/images/vivo.jpg">
											</a></div>
											<div class="col-2"><a href="index.php?controller=search&action=name&key=xiaomi">
												<img id="imgShow5" src="assets/frontend/images/xiaomi.jpg">
											</a></div>
											<!-- <div class="col-2"><a href="index.php?controller=search&action=name&key=vsmart">
												<img id="imgShow6" src="assets/frontend/images/vsmart.jpg">
											</a></div> -->
											<div class="col-2"><a href="index.php?controller=search&action=name&key=iphone">
												<img id="imgShow6" src="assets/frontend/images/iphone.jpg">
											</a></div>

										</div>
										<i class="fa fa-caret-left fa-2x" aria-hidden="true" id="prev"></i>
										<i class="fa fa-caret-right fa-2x" aria-hidden="true" id="next" ></i>
									</div>
									<style type="text/css">
										#box{width:100%; margin:auto; position: relative;}
										#box img{width: 100%;margin:8px;}
										#prev, #next{position: absolute; cursor: pointer;color:#99a2aa}
										#prev{left: 0px; top: 20px; display: none;}
										#next{right: 0px; top:20px; display: none;}
										#box:hover #prev{display: block;}
										#box:hover #next{display: block;}
									</style>
									<script type="text/javascript">
										//khai bao array chua danh sach anh
										var slide = new Array();
										slide[0] = "assets/frontend/images/samsung.jpg";
										slide[1] = "assets/frontend/images/nokia.jpg";
										slide[2] = "assets/frontend/images/oppo.jpg";
										slide[3] = "assets/frontend/images/vivo.jpg";
										slide[4] = "assets/frontend/images/xiaomi.jpg";
										// slide[5] = "assets/frontend/images/vsmart.jpg";
										slide[5] = "assets/frontend/images/iphone.jpg";
										// slide[6] = "assets/frontend/images/list-anh8.jpg";
										// slide[7] = "assets/frontend/images/list-anh9.jpg";
										// var a="";
										//khi bao bien key luu vi tri anh
										// var key = 0;
										//---
										document.getElementById('next').addEventListener('click',function(){
											var temp=slide[0];
											slide[0]=slide[5];
											// slide[7]=slide[6];
											// slide[6]=slide[5];
											// slide[6]=slide[5];
											slide[5]=slide[4];
											slide[4]=slide[3];
											slide[3]=slide[2];
											slide[2]=slide[1];
											slide[1]=temp;
											document.getElementById("imgShow1").setAttribute("src",slide[0]);
											// document.getElementById("imgShow8").setAttribute("src",slide[7]);
											// document.getElementById("imgShow7").setAttribute("src",slide[6]);
											// document.getElementById("imgShow7").setAttribute("src",slide[6]);
											document.getElementById("imgShow6").setAttribute("src",slide[5]);
											document.getElementById("imgShow5").setAttribute("src",slide[4]);
											document.getElementById("imgShow4").setAttribute("src",slide[3]);
											document.getElementById("imgShow3").setAttribute("src",slide[2]);
											document.getElementById("imgShow2").setAttribute("src",slide[1]);

											
										});
										document.getElementById('prev').addEventListener('click',function(){
											var temp=slide[5];
											slide[5]=slide[0];
											slide[0]=slide[1];
											slide[1]=slide[2];
											slide[2]=slide[3];
											slide[3]=slide[4];
											slide[4]=temp;
											// slide[6]=temp;
											// slide[5]=sl
											// var temp=slide[];
											// slide[6]=slide[0];
											// slide[0]=slide[1];
											// slide[1]=slide[2];
											// slide[2]=slide[3];
											// slide[3]=slide[4];
											// slide[4]=slide[5];
											// slide[5]=temp;
											document.getElementById("imgShow1").setAttribute("src",slide[0]);
											// document.getElementById("imgShow8").setAttribute("src",slide[7]);
											// document.getElementById("imgShow7").setAttribute("src",slide[6]);
											// document.getElementById("imgShow6").setAttribute("src",slide[6]);
											document.getElementById("imgShow6").setAttribute("src",slide[5]);
											document.getElementById("imgShow5").setAttribute("src",slide[4]);
											document.getElementById("imgShow4").setAttribute("src",slide[3]);
											document.getElementById("imgShow3").setAttribute("src",slide[2]);
											document.getElementById("imgShow2").setAttribute("src",slide[1]);		
										});
									</script>
								</div>
							</div>
							<!-- end slid-hãng -->
							<!-- main2 -->
							<div class="main2">
								<!-- <div style="display: flex;">
									<p style="font-weight: 500;margin-right: 15px;">Ưu đãi xem:</p>
									<div class="menu">
										<div class="btn-group">
											<button type="button" class="btn btn-light active" style="color: white;background: red">Bán chạy nhất</button>
											<button type="button" class="btn btn-light">trả góp 0%</button>
											<button type="button" class="btn btn-light">Giá thấp</button>
											<button type="button" class="btn btn-light">Giá cao</button>
											<button type="button" class="btn btn-light">Ưu tiên online</button>
										</div>
									</div>
								</div> -->
								<!-- sanpham -->
								<?php echo $this->view; ?>
							</div>
							<!-- end main2 -->
						</div>
						<!-- end main1-right -->
					</div>
					<!-- end main1 -->
				</div>
				<!-- end main -->
				<!-- footer -->
				<div>
					<div class="footer">
						<ul>
							<li><a href="#">Giới thiệu về công ty</a></li>
							<li><a href="#">Câu hỏi thường gặp mua hàng</a></li>
							<li><a href="#">Chính sách bảo mật</a></li>
							<li><a href="#">Quy chế hoạch động</a></li>
							<li><a href="#">Kiểm tra hóa đơn điện tử</a></li>
							<li><a href="#">Tra cứ thông tin bảo hành</a></li>
						</ul>
						<ul>
							<li><a href="#">Giới thiệu về công ty</a></li>
							<li><a href="#">Câu hỏi thường gặp mua hàng</a></li>
							<li><a href="#">Chính sách bảo mật</a></li>
							<li><a href="#">Quy chế hoạch động</a></li>
							<li><a href="#">Kiểm tra hóa đơn điện tử</a></li>
						</ul>
						<ul>
							<li><a href="#">Giới thiệu về công ty</a></li>
							<li><a href="#">Câu hỏi thường gặp mua hàng</a></li>
							<li><a href="#">Chính sách bảo mật</a></li>
							<li><a href="#">Quy chế hoạch động</a></li>
							<li><a href="#">Kiểm tra hóa đơn điện tử</a></li>
						</ul>
						<div style="margin-left: 30px;">
							<img src="assets/frontend/images/footer.png" style="width: 420px;height: 200px;">
						</div>
					</div>
					<!-- end footer -->
				</div>
			</div>
		</body>
		</html>