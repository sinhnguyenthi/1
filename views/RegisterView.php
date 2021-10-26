<?php 
  //load file LayoutTrangChu.php
  $this->fileLayout = "LayoutTrangTrong.php";
 ?>
<div class="">
          <h4>Đăng ký tài khoản</h4>
          <?php if(isset($_GET["notify"])&&$_GET["notify"]=="error"): ?>
          <p style="color:red;">Đăng ký chưa thành công, bạn hãy kiểm tra lại thông tin!</p>
          <?php else: ?>
          <div style="font-size: 15px;"> Nếu bạn chưa có tài khoản, hãy đăng ký ngay để nhận thông tin ưu đãi cùng những ưu đãi từ cửa hàng.</div>
          <?php endif; ?>
          <div class="row" style="margin-top:50px;">
            <div class="col-md-6">
              <div class="" style="border: 1px solid #333;border-radius: 10px;padding: 10px;">
                <form method='post' action="index.php?controller=account&action=registerPost">
                  <p class="title" style="font-size: 16px;text-align: center;"><span>Đăng ký tài khoản</span></p>
                  <div class="row" style="margin-top:15px;">
                    <div class="col-4"><label>Họ và tên:</label></div>
                    <div class="col-8"><input type="text" name="name" class="input-control"></div>
                  </div>
                  <div class="row" style="margin-top:15px;">
                    <div class="col-4"><label>Email:<b id="req">*</b></label></div>
                    
                   <div class="col-8"> <input type="text" name="email" class="input-control" required></div>
                  </div>
                  <div class="row" style="margin-top:15px;">
                    <div class="col-4"> <label>Địa chỉ:</label></div>
                   
                    <div class="col-8"><input type="text" name="address" class="input-control"></div>
                  </div>
                  <div class="row" style="margin-top:15px;">
                    <div class="col-4"> <label>Điện thoại:</label></div>
                   
                   <div class="col-8"> <input type="text" name="phone" class="input-control"></div>
                  </div>
                  <div class="row" style="margin-top:15px;">
                    <div class="col-4"><label>Mật khẩu:<b id="req">*</b></label></div>
                   <div class="col-8"> <input type="password" name="password" class="input-control" required=""></div>
                  </div>
                  <div class="" style="text-align: center;margin-top:15px;">
                    <input type="submit" class="button" value="Đăng ký">
                  </div>
                </form>
              </div>
            </div>
            <div class="col-md-6">
              <div class=""  style="border: 1px solid #333;border-radius: 10px;padding: 10px;font-size: 13px;">
                <p class="title"><span>Đăng nhập</span></p>
                <p>Đăng nhập tài khoản nếu bạn đã có tài khoản. Đăng nhập tài khoản để theo dõi đơn đặt hàng, vận chuyển và đặt hàng được thuận lợi.</p>
                <a href="index.php?controller=account&action=login" class="button">Đăng nhập</a> </div>
            </div>
          </div>
        </div>