<?php 
    //load file Layout.php vao day
$this->fileLayout = "LayoutTrangChu.php";
?>
<div class="main3">
	<div class="khuyenmai" style="font-size: 20px;margin-bottom: 15px;">KHUYẾN MÃI HÓT</div>
	<?php 
	$hotProduct = $this->modelHotProduct();
	?>
	<style type="text/css">
		.discount{
			position: absolute;
			width: 50px;
			line-height: 50px;
			text-align: center;
			background:black;
			color: white;
			border-radius: 50px;
		}
	</style>	
	<div class="row" >
		<?php foreach($hotProduct as $rows): ?>

			<div class="col-3" style="text-align: center;margin: auto;position: relative;"> 
				<!-- discount -->
				<div class="discount"><?php echo $rows->discount; ?>%</div>
				<!-- /discount -->
				<a href="#">
					<img src="assets/upload/products/<?php echo $rows->photo; ?>" style="height: 60%;width: 90%" >
				</a>
				<div class="gia" style="text-align: center;">
					<div style="border-radius: 8px 8px 8px 8px;background:#ea9d02; width: 50%;text-align: center;font-size: 13px;color: white;margin: auto;">Trả góp 0%</div>
					<a href="products/detail/<?php echo $rows->id; ?>/<?php echo $rows->name; ?>" style="font-size: 13px"><?php echo $rows->name; ?></a>
					<div style="color: red;font-size: 14px"> <strike><?php echo number_format ($rows->price); ?> đ </strike></div>
					<div style="color: red;font-size: 14px"><?php echo number_format($rows->price - ($rows->price * $rows->discount)/100); ?>đ</div>
					<p class="price-box"> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=1"><img src="assets/frontend/images/star.jpg"></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=2"><img src="assets/frontend/images/star.jpg"></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=3"><img src="assets/frontend/images/star.jpg"></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=4"><img src="assets/frontend/images/star.jpg"></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=5"><img src="assets/frontend/images/star.jpg"></a> </p>
				</div>
				<div class="" style="width: 120px;height:30px;border-radius: 10px;border: 1px solid red;font-size: 14px;text-align: center;margin: 10px auto;color:black;">
					<form>
						<a href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>" class="button">Mua ngay</a>
					</form>
				</div>
			</div>
		<?php endforeach; ?>
						<!-- <div class="col-3"> 
							<a href="#">
								<img src="assets/frontend/images/main3-img2.jpg" style="height: 70%;width: 90%">
							</a>
							<div class="gia" style="text-align: center;">
								<div style="border-radius: 8px 8px 8px 8px;background:#ea9d02; width: 50%;text-align: center;font-size: 13px;color: white;margin: auto;">Trả góp 0%</div>
								<a href="#" style="">MacBook</a>
								<div style="color: red">32.000.000 đ</div>
							</div>
						</div>
						<div class="col-3"> 
							<a href="#">
								<img src="assets/frontend/images/main3-img3.jpg" style="height: 70%;width: 90%">
							</a>
							<div class="gia" style="text-align: center;">
								<div style="border-radius: 8px 8px 8px 8px;background:#ea9d02; width: 50%;text-align: center;font-size: 13px;color: white;margin: auto;">Trả góp 0%</div>
								<a href="#" style="">MacBook</a>
								<div style="color: red">32.000.000 đ</div>
							</div>
						</div>
						<div class="col-3"> 
							<a href="#">
								<img src="assets/frontend/images/main3-img4.jpg" style="height: 70%;width: 90%">
							</a>
							<div class="gia" style="text-align: center;">
								<div style="border-radius: 8px 8px 8px 8px;background:#ea9d02; width: 50%;text-align: center;font-size: 13px;color: white;margin: auto;">Trả góp 0%</div>
								<a href="#" style="">MacBook</a>
								<div style="color: red">32.000.000 đ</div>
							</div>
						</div> -->
					</div>

				</div>
				<div class="main4">
					<a href="#">
						<img src="assets/frontend/images/main4-img.jpg">
					</a>
				</div>
				<div class="main5" >
					<?php 
					$categories = $this->modelCategories();
					?>
					<?php foreach($categories as $itemCategories): ?>
						<div style="font-size: 20px;">Điện thoại <?php echo $itemCategories->name ?> nổi bật nhất</div>
						<div class="row">
							
							<?php 
							$products = $this->modelProducts($itemCategories->id);
							?>  
							<?php foreach($products as $rows): ?>
								<div class="col-3" style="text-align: center;margin: auto;"> 
									<div class="discount"><?php echo $rows->discount; ?>%</div>
									<a href="#" class="laptop">
										<img src="assets/upload/products/<?php echo $rows->photo; ?>" style="height: 60%;width: 90%">
									</a>
									<div class="gia" style="text-align: center;">
										<div style="border-radius: 8px 8px 8px 8px;background:#ea9d02; width: 50%;text-align: center;font-size: 13px;color: white;margin: auto;"><?php echo number_format($rows->price - ($rows->price * $rows->discount)/100); ?>đ</div>
										<a href="products/detail/<?php echo $rows->id; ?>/<?php echo $rows->name; ?>" style="font-size: 15px;color: black"><?php echo $rows->name; ?></a>
										<div style="color: red"><strike><?php echo number_format ($rows->price); ?> đ</strike></div>
									</div>
									<div class="" style="width: 120px;height:30px;border-radius: 10px;border: 1px solid red;font-size: 14px;text-align: center;margin: 10px auto;color:black;">
										<form>
											<a href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>" class="button">Mua ngay</a>
										</form>
									</div>
								</div>
							<?php endforeach; ?>
							
						</div>
					<?php endforeach; ?>
				</div>
				<div class="main6">
					<a href="#">
						<img src="assets/frontend/images/main6-img1.jpg">
						<img src="assets/frontend/images/main6-img2.jpg">
					</a>
				</div>

