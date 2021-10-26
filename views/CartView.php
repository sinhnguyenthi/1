<?php 
	//load file LayoutTrangChu.php
	$this->fileLayout = "LayoutTrangTrong.php";
 ?>
 <div class="">
          <form action="index.php?controller=cart&action=update" method="post">
            <div class="table">
              <table class="table" style="font-size: 15px;color: #333;">
                <thead>
                  <tr>
                    <th class="image">Ảnh sản phẩm</th>
                    <th class="name">Tên sản phẩm</th>
                    <th class="price">Giá bán lẻ</th>
                    <th class="quantity">Số lượng</th>
                    <th class="price">Thành tiền</th>
                    <th>Xóa</th>
                  </tr>
                </thead>
                <?php foreach($_SESSION["cart"] as $product): ?>
                <tbody>                  
                  <tr>
                    <td><img src="assets/upload/products/<?php echo $product["photo"]; ?>" class="img-responsive" style="height: 60%;width: 70%" /></td>
                    <td><a href="index.php?controller=products&action=detail&id=<?php echo $product["id"]; ?>"><?php echo $product["name"]; ?></a></td>
                    <td> <?php echo number_format($product["price"]-($product["price"]*$product["discount"])/100); ?>₫ </td>
                    <td><input type="number" id="qty" min="1" class="input-control" value="<?php echo $product["number"]; ?>" name="product_<?php echo $product["id"]; ?>" required="Không thể để trống"></td>
                    <td><p><b><?php echo number_format(($product["price"]-($product["price"]*$product["discount"])/100)*$product["number"]); ?>₫</b></p></td>
                    <td><a href="index.php?controller=cart&action=delete&id=<?php echo $product["id"]; ?>" data-id="2479395"><i class="fa fa-trash"></i></a></td>
                  </tr>
                </tbody>
            	<?php endforeach; ?>
            	<?php if($this->cartNumber() > 0): ?>
                <tfoot>
                  <tr>
                    <td colspan="6"><a href="index.php?controller=cart&action=destroy" style="border: 1px solid #77ca64;padding: 5px;background-color:#77ca64;text-decoration: none;color: white  ">Xóa toàn bộ</a> <a href="index.php" style="border: 1px solid #464646;padding: 5px;background-color:#464646;text-decoration: none;color: white  ">Tiếp tục mua hàng</a>
                      <input type="submit" class="button pull-right" value="Cập nhật" style="border: 1px solid #77ca64;padding: 5px;background-color:#77ca64;text-decoration: none;color: white  "></td>
                  </tr>
                </tfoot>
            	<?php endif; ?>
              </table>
            </div>
          </form>
          <?php if($this->cartNumber() > 0): ?>
          <div class="" style=" text-align: right;"> Tổng tiền thanh toán:
            <?php echo number_format($this->cartTotal()); ?>₫ <br>
            <a href="index.php?controller=cart&action=checkout" style="border: 1px solid #464646;padding: 5px;background-color:#464646;text-decoration: none;color: white  ">Thanh toán</a> </div>
           <?php endif; ?>
       </div>