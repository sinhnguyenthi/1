<?php 
  //load file LayoutTrangChu.php
  $this->fileLayout = "LayoutTrangTrong.php";
 ?>
<h1>Tin tức</h1>
<div class="wrapper-blog"> 
  
  
  <div class="row">
    <!-- list news -->
    <?php foreach($data as $rows): ?>
    <div class="col-md-6 article"> <a href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>" class="image"> <img src="assets/upload/news/<?php echo $rows->photo; ?>" alt="<?php echo $rows->name; ?>" title="<?php echo $rows->name; ?>" style="width:100%; height: 350px; overflow:hidden;" class="img-responsive"> </a>
      <h3><a href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></h3>
      <p class="desc"><?php echo $rows->description; ?></p>
    </div>
    <?php endforeach; ?>
    <!-- end list news --> 
  </div>
  
  
  <ul class="pagination pull-right">
      <li class="page-item"><a href="#" class="page-link">Trang</a></li>
      <?php for($i = 1; $i <= $numPage; $i++): ?>
      <li class="page-item"><a href="index.php?controller=news&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a></li>
      <?php endfor; ?>
  </ul>
</div>