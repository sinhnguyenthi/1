<?php 
    //load file Layout.php vao day
$this->fileLayout = "LayoutTrangTrong.php";
?>
<div class="" style="width: 200px;margin-bottom: 10px;">
  <?php 
  $order = isset($_GET["order"]) ? $_GET["order"] : "";
  ?>
  <select class="form-control" onchange="location.href = 'index.php?controller=products&action=category&id=<?php echo $id; ?>&order='+this.value;">
    <option value="0">Sắp xếp</option>
    <option <?php if($order == "priceAsc"): ?> selected <?php endif; ?> value="priceAsc">Giá tăng dần</option>
    <option <?php if($order == "priceDesc"): ?> selected <?php endif; ?> value="priceDesc">Giá giảm dần</option>
    <option <?php if($order == "nameAsc"): ?> selected <?php endif; ?> value="nameAsc">Sắp xếp A-Z</option>
    <option <?php if($order == "nameDesc"): ?> selected <?php endif; ?> value="nameDesc">Sắp xếp Z-A</option>
  </select>
</div>
<style type="text/css">
  .col-3:hover{
    border-radius: 4px 4px 4px 4px;
    border: 2px solid #f4f4f4;;
  }
</style>
<div class="sanpham" >
  <!--  -->
  <?php 
  $category = $this->modelGetCategory($id);
  ?>
  <div class="row">
    
    <?php foreach($data as $rows): ?>
      
      <div class="col-3" style="text-align: center;margin: auto;position: relative;"> 
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
    
  </div>
  <!-- end row1 -->
  <!-- row2 -->
  
  <!--end row3  -->
  <!-- xem thêm -->
  
  <!-- end xem thêm -->
</div>
<style type="text/css">
  .page li{
    display:inline;
    border:1px solid #f5f5f5;
    border-radius: 2px;
    padding: 5px;
    margin-left: -5px;
  }
</style>
<ul class="page" style="margin-top:20px;">
  <li class=""><a href="#" class="">Trang</a></li>
  <?php for($i =1; $i <= $numPage; $i++): ?>
    <li class=""><a href="index.php?controller=users&p=<?php echo $i ?>" class=""><?php echo $i; ?></a></li>
  <?php endfor; ?>
</ul>