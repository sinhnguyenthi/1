<?php 
  //load file LayoutTrangChu.php
  $this->fileLayout = "LayoutTrangTrong.php";
 ?>
<div class="">
          <h4>Đăng nhập tài khoản</h4>
          <div>Nếu bạn có tài khoản xin vui lòng đăng nhập</div>
          <div class="row" style="margin-top:50px;color: #333;">
            <div class="col-md-6">
              <div class="" style="border: 1px solid #333;border-radius: 10px;padding: 10px;">
                <form method='post' action="index.php?controller=account&action=loginPost">
                  <p class="" style="text-align: center;"><span>Đăng nhập tài khoản</span></p>
                  <div class="row" style="margin: 10px;">
                    <div class="col-4"><label>Email:<b id="req">*</b></label></div>
                     <div class="col-8"><input type="email" class="input-control" name="email" required=""></div>
                  </div>
                  <div class="row" style="margin: 10px;">
                    <div class="col-4"><label>Mật khẩu:<b id="req">*</b></label></div>
                     <div class="col-8"><input type="password" class="input-control" name="password" required=""></div>
                  </div>
                 <div style="text-align: center;margin: 10px;"> <input type="submit" class="button" value="Đăng nhập"></div>
                </form>
              </div>
            </div>
            <div class="col-md-6">
              <div class=""  style="border: 1px solid #333;border-radius: 10px; padding: 10px;font-size: 13px;">
                <p class=""><span>Tạo tài khoản mới</span></p>
                <p>Đăng ký tài khoản để mua hàng nhanh hơn. Theo dõi đơn đặt hàng, vận chuyển. Cập nhật các sự kiện và chương trình giảm giá của chúng tôi.</p>
                <a href="index.php?controller=account&action=register" class="button">Đăng ký</a> 
              </div>
            </div>
          </div>
        </div>