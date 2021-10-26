<!DOCTYPE html>
<html>
<head>
	<base href="http://localhost/BT_cuoikhoa/php_dienthoai/">
	<title>Shop phụ kiện</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="assets/frontend/css/style.css">
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
	<div class="container-fluid">
		<!-- header -->
		<?php include "views/HeaderView.php"; ?>
		<!-- end header -->
		<!-- main -->
		<div class="container">
			<div class="main1" style="display:flex">
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="width: 70%">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img class="d-block w-100" src="assets/frontend/images/slide1.jpg">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="assets/frontend/images/slide2.jpg">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="assets/frontend/images/slide3.jpg">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="assets/frontend/images/slide4.jpg">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="assets/frontend/images/slide5.jpg">
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
				<div class="main1-right" style="width: 30%">
					<img src="assets/frontend/images/main1-right.jpg" style="width: 100%">
					<img src="assets/frontend/images/main2-right.jpg" style="width: 100%;margin-top: 10px;">
					<div class="thongtinnoibat">
						<p style="color:#6c757d"> Thông tin nổi bật</p>
						<div>
							<a href="#">
								<img src="assets/frontend/images/tao.png">
								<span>Đoán tóa trúng MacBooK Air</span>
							</a>
						</div>
						<div style="margin-top: 10px;">
							<a href="#">
								<img src="assets/frontend/images/tao.png">
								<span>Công nghệ giá sốc giảm 22%</span>
							</a>
						</div>

					</div>
				</div>
			</div>
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
										slide[5] = "assets/frontend/images/vsmart.jpg";
										document.getElementById('next').addEventListener('click',function(){
											var temp=slide[0];
											slide[0]=slide[5];
											// slide[7]=slide[6];
											// slide[6]=slide[5];
											slide[5]=slide[4];
											slide[4]=slide[3];
											slide[3]=slide[2];
											slide[2]=slide[1];
											slide[1]=temp;
											document.getElementById("imgShow1").setAttribute("src",slide[0]);
											// document.getElementById("imgShow8").setAttribute("src",slide[7]);
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
											document.getElementById("imgShow1").setAttribute("src",slide[0]);
											// document.getElementById("imgShow8").setAttribute("src",slide[7]);
											// document.getElementById("imgShow7").setAttribute("src",slide[6]);
											document.getElementById("imgShow6").setAttribute("src",slide[5]);
											document.getElementById("imgShow5").setAttribute("src",slide[4]);
											document.getElementById("imgShow4").setAttribute("src",slide[3]);
											document.getElementById("imgShow3").setAttribute("src",slide[2]);
											document.getElementById("imgShow2").setAttribute("src",slide[1]);		
										});
									</script>
								</div>
							</div>
							<!-- end main2 -->
							<!-- main3 -->
							<?php echo $this->view; ?> 
							<!-- end main3 -->
							<!-- main4 -->

							<!-- end main5 -->
							<!-- main6 -->
							<!-- end main6 -->
							<!-- main7 phukien -->

							<!-- end main7 -->
						</div>
						<!-- end main -->
						<!-- footer -->
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


				</body>
				</html>