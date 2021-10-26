<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
      <!-- <link rel="stylesheet"  href="../assets/admin/css/Admin.css"> -->
      <script type="text/javascript" src="../assets/admin/ckeditor/ckeditor.js"></script>
      <style type="text/css">
          
          .box{
            background-color: #f5f5f5;
          }
          .main-header .col-3{
            height: 50px;
            /*color: #fff;*/
          }
          .header-right {
            color: #656a76;
            font-size: 16px;
          }
          .main{
           /* background-color: #fff;*/
          }
          .main-left{
           /* color: #6e768e;*/
           /* height: 100%;*/
            /*background-color: #f5f5f5;*/
          }
          .box1{
           
            height: 100%;
            background-color: #fff;

          }
          .box1 ul{
            padding: 0px;
            margin: 0px; 
            list-style: none;
            margin-top:10px;
            }
          .box1 ul li{
                margin-left: 15px;
                height: 30px;
            }
          .box1 ul li a{
           color: #8196b6;
          }
          .box1 ul li:hover{
             background-color: #f5f5f5;
          }
          .box1 ul li a:hover{
            text-decoration: none;
            color: #5b9fd4;
          }
          .main-right{
             /*height: 520px;*/
             margin-left: -10px;
            
          }
          .box2{
            background-color: #fff;
            height: 100%;
            padding: 10px;
          }
      </style>
</head>
<body style="">
<div class="box container">
    <header class="main-header row">
        <!-- Logo -->
        <div class="col-3">
            <a href="#" class="logo" style="color: #343a40;font-size: 20px;">
              Shop Di Động
            </a>
        </div>
        <div class="col-7"></div>
        <div class="header-right col-2">
            <img src="../assets/admin/images/a1.jpg" style="border-radius:50%;width: 50px; height: 50px;">
            <span>Your Name</span>
        </div>
    </header>
    <div class="main row">
        <div class="main-left col-3">
            <div class="box1">
                <div style="color: #656a76; font-size: 18px;">
                <img src="../assets/admin/images/a1.jpg" style="border-radius:50%;width: 50px; height: 50px;margin-top:5px;">
                    <span>Your Name</span>
                </div>
                <!-- <div style="text-align: center;">Danh mục</div> -->
                  <ul >
                    <li>Danh mục</li>
                    <li>
                        <a href="index.php?controller=categories">
                            <i class="fa fa-th"></i> <span>Danh mục loại sản phẩm</span>
                        </a>
                    </li>
                    <li>
                        <a href="index.php?controller=products">
                            <i class="fa fa-th"></i> <span>Danh sách sản phẩm</span>
                        </a>
                    </li>
                    <li>
                        <a href="index.php?controller=users">
                            <i class="fa fa-user"></i> <span>Quản lý user</span>
                            <span class="pull-right-container">
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="index.php?controller=orders">
                            <i class="fa fa-code"></i> <span>Đơn hàng</span>
                        </a>
                    </li>
                    <li>
                        <a href="index.php?controller=news">
                            <i class="fa fa-code"></i> <span>Tin tức</span>
                        </a>
                    </li>
                    <li>
                        <a href="index.php?controller=login&action=logout">
                            <i class="fa fa-code"></i> <span>Đăng xuất</span>
                        </a>
                    </li>
                  </ul>
            </div>
        </div>
        <div class="main-right col-9">
            <div class="box2">
                  <?php echo $this->view; ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>
