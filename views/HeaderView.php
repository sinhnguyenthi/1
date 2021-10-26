
<div class="header">
	<div class="timkiem" style="height: 100px;background:#cd1818;padding-top: 15px;">
		<div style="display: flex;">
			<div style="color: white;padding-left: 25px;">
				<b style="font-size: 18px;">Shop<span style="font-size: 12px">.com.vn</span><b>
				</div>	
				<div style="display: flex;margin-left: 15px;">
							<!-- <div class="input-group">
								<input type="text" placeholder="Nhập tên điện thoại, máy tính, phụ kiện cần tìm ..." name="" class="form-control" style="width: 600px;">
								<div class="input-group-append">
									<button class="btn btn-dark" type="submit" style="height: 38px;"><i class="fa fa-search"></i></button>
								</div>
							</div>	 -->
							<div style="margin-top:25px;" style="position:relative;">
								<input type="text" value="" style="width: 800px;" placeholder="Nhập từ khóa tìm kiếm..." id="key" class="input-control">
								<button style="margin-top:5px;" type="submit"> <i class="fa fa-search" id="btnSearch"></i> </button>
								<div class="smart-search">
									<ul>
										<!-- <li><img src="assets/upload/products/1629857132_dt1.jpg"> <a href="#">18 - 16 - MacBook Pro 16 Touch Bar 2.6GHz Core i7-</a></li>
										<li><img src="assets/upload/products/1629857132_dt1.jpg"> <a href="#">18 - 16 - MacBook Pro 16 Touch Bar 2.6GHz Core i7-</a></li>
										<li><img src="assets/upload/products/1629857132_dt1.jpg"> <a href="#">18 - 16 - MacBook Pro 16 Touch Bar 2.6GHz Core i7-</a></li> -->
									</ul>
								</div>
							</div>
							<style type="text/css">
								.smart-search{position: absolute; width: 100%; background: white; height: 350px;overflow: scroll; z-index: 1; display: none;}
								.smart-search ul{padding: 0px; margin: 0px; list-style: none;}
								.smart-search ul li{border-bottom: 1px solid #dddddd;}
								.smart-search img{width: 70px; margin-right: 5px;}
							</style>
							<script type="text/javascript">
        //tinh nang nay phai dung ket hop voi jquery -> phai load thu vien jquery
        //neu bai project tung ban chua co thi phai load jquery, kiem tra jquery co hoat dong hay khong bang cach them alert("ok") vao ben trong tag: $(document).ready(function(){ alert("ok"); });
        $(document).ready(function(){ 
           //bat su kien click cua id=btnSearch
           $("#btnSearch").click(function(){
           	var key = $("#key").val();
              //di chuyen den url tim kiem
              location.href = "index.php?controller=search&action=name&key="+key;
          });
           //-----------------
           $(".input-control").keyup(function(){
           	var strKey = $("#key").val();
           	if(strKey.trim() == "")
           		$(".smart-search").attr("style","display:none");
           	else{
           		$(".smart-search").attr("style","display:block");
                  //---
                  //su dung ajax de lay du lieu
                  $.get("index.php?controller=search&action=ajaxSearch&key="+strKey,function(data){
                      //clear cac the li ben trong the ul
                      $(".smart-search ul").empty();
                      //them su lieu vua lay duoc bang ajax vao the ul
                      $(".smart-search ul").append(data);
                  });
                  //---
              }
          });
           //-----------------
       });
   </script>	
   <div style="color: white;display: flex;font-size: 15px">
   	<?php if(isset($_SESSION["customer_email"])): ?>
   		<div style="margin-left: 18px;">
   			<a href="#" style="color: white">xin chào <?php echo $_SESSION["customer_email"]; ?> </a>
   		</div>
   		<div style="margin-left: 18px;">
   			<a href="index.php?controller=account&action=logout" style="color: white">Đăng xuất</a>
   		</div>
   		<?php else: ?>
   			<div style="margin-left: 18px;">
   				<a href="index.php?controller=account&action=login" style="color: white">Đăng nhập</a>
   			</div>
   			<div style="margin-left: 18px;">
   				<a href="index.php?controller=account&action=register" style="color: white">Đăng ký</a>
   			</div>
   		<?php endif; ?>

   	</div>
   </div>
</div>
</div>	
</div>		
<!--  -->
<?php 
$ProductNumberInCart = 0;
        //!isset($_SESSION['cart']) <=> $_SESSION['cart'] == false
        //isset($_SESSION['cart']) <=> $_SESSION['cart'] == true
if(isset($_SESSION['cart']))
	foreach($_SESSION['cart'] as $product)
		$ProductNumberInCart++;
	?>
	<div class="" style="margin-left: 850px">

		<div class="wrapper-mini-cart " style=""> <span class="icon"><i class="fa fa-shopping-cart"></i></span> <a href="cart" style="color: black;text-decoration: none"> <span class="mini-cart-count"> <?php echo $ProductNumberInCart; ?> </span> sản phẩm <i class="fa fa-caret-down"  onmouseleave="gioHang()"></i></a>
			<div class="content-mini-cart">
				<div class="giohang">
					<ul class="list-unstyled">
						<style type="text/css">
							.giohang{background: white; z-index:1; display: none;position: absolute;}
							.giohang {padding: 0px; margin: 0px; list-style: none;}
							.giohang li a{
								text-decoration: none;
							}
							.giohang li{
								list-style: none;
							}

      								/*.giohang{position: absolute; width: 100%; background: white; height: 350px; z-index: 1; display: none;}
      								.giohang ul{padding: 0px; margin: 0px; list-style: none;}
      								.giohang ul li{border-bottom: 1px solid #dddddd;}
      								.giohang img{width: 70px; margin-right: 5px;}*/
      							</style>
      							<script>
      								function gioHang(){

      									$(".giohang").attr("style","display:block");

      								}
      							</script>
      							<?php if(isset($_SESSION['cart'])): ?>
      								<?php foreach($_SESSION['cart'] as $product): ?>
      									<li class="" id="item-1853038">
      										<table style="width: 100%">
      											<tr><td><div class=""> <a href="index.php?controller=products&action=detail&id=<?php echo $product["id"]; ?>"> <img src="assets/upload/products/<?php echo $product["photo"]; ?>" style="width: 70px;" ></div></td>

      												<td> <div class="info">
      													<h3><a href="products/detail/<?php echo $product["id"]; ?>/<?php echo $product["name"]; ?>" style="color: black;font-size: 14px;" ><?php echo $product["name"]; ?></a></h3>
      													<span><?php echo $product["number"]; ?> x <?php echo number_format($product["price"]); ?>₫</span>
      												</div>
      												<div> <a href="index.php?controller=cart&action=delete&id=<?php echo $product["id"]; ?>"> <i class="fa fa-times"></i></a> </div>
      											</td>
      										</tr>
      									</table>
      								</li>
      							<?php endforeach; ?>
      						<?php endif; ?>
      					</ul>
      					<?php if($_SESSION['cart'] != NULL): ?>
      						<a href="index.php?controller=cart&action=checkout" class="button">Thanh toán</a> </div>
      					<?php endif; ?>
      				</div>
      			</div>
      		</div>				<!--  -->
</div>
</div>
</div>
</div>
<!-- menu -->


<style type="text/css">
	.menu li:hover{
		background: black;
	}
	.menu li{
		padding: 5px;
	}
	.menu li a{
		font-weight: normal;
	}
</style>
<div class="menu">
	<nav class="navbar navbar-expand-sm bg-dark">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link text-white" href="home">TRANG CHỦ</a>
			</li>
			<li class="nav-item ">
				<a class="nav-link text-white " style=""  onclick="sanPham()">SẢN PHẨM</a>
				<ul class="sanpham1">
					<style type="text/css">
						.sanpham1{background: white; z-index: 2; display: none;position: absolute;}
						.sanpham1 {padding: 0px; margin: 0px; list-style: none;}
						.sanpham1 li a{
							text-decoration: none;
						}
						.sanpham1 li{
							list-style: none;
							padding: 5px;
						}
					</style>
					<script>
						function sanPham(){

							$(".sanpham1").attr("style","display:block");

						}
					</script>
					<?php 
					$conn = Connection::getInstance();
					$query = $conn->query("select * from categories where parent_id = 0 order by id desc");
					$categories = $query->fetchAll();
					?>  
					<?php foreach($categories as $rows): ?>
						<li><a href="products/category/<?php echo $rows->id; ?>/<?php echo $rows->name; ?>"><?php echo $rows->name; ?></a></li>
						<?php 
						$querySub = $conn->query("select * from categories where parent_id = {$rows->id} order by id desc");
						$categoriesSub = $querySub->fetchAll();
						?>
						<?php foreach($categoriesSub as $rowsSub): ?>
							<li style="padding-left:20px;"><a href="products/category/<?php echo $rowsSub->id; ?>/<?php echo $rowsSub->name; ?>"><?php echo $rowsSub->name; ?></a></li>
						<?php endforeach; ?>
					<?php endforeach; ?>
				</ul>

			</li>
			<li class="nav-item">
				<a class="nav-link text-white" href="cart">GIỎ HÀNG</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-white" href="news">TIN TỨC</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-white" href="contact">LIÊN HỆ</a>
			</li>
		</ul>
	</nav>
</div>

<!--  -->

<!--  -->
<!-- end menu -->
				<!-- end header -->