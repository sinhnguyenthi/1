<?php 
    //load file Layout.php vao day
    $this->fileLayout = "Layout.php";
 ?>
<div class="col-md-12">
    <div class="">
        <div class="">List Orders</div>
        <div class="">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>Ho va ten</th>
                    <th>Dia chi</th>
                    <th>Dien thoai</th>
                    <th >Ngay mua</th>
                    <th >Gia</th>
                     <th style="">Trang thai</th>
                    <th style=""></th>
                </tr>
                <?php foreach ($data as $rows): ?>
                    <?php 
                        $customer = $this->modelGetCustomer($rows->customer_id);
                    ?>
                <tr>
                    <td><?php echo isset($customer->name)?$customer->name:""; ?>
                        
                    </td>
                    <td>
                        <?php echo isset($customer->address)?$customer->address:""; ?>
                        
                    </td>
                    <td><?php echo isset($customer->phone)?$customer->phone:""; ?></td>
                    <td><?php echo date("d/m/Y",strtotime( $rows->date)); ?></td>
                    <td><?php echo number_format($rows->price); ?>VND</td>
                    <td>
                        <?php if($rows->status == 1): ?>
                             <div class=""> da giao hang</div>
                        <?php else: ?>
                            <div class=""> Chua giao hang</div>
                        <?php endif; ?>
                    </td>
                    <td style="text-align:center;">
                        <?php if($rows->status == 0): ?>
                        <a href="index.php?controller=orders&action=delivery&id=<?php echo $rows->id; ?>"  class=""> giao hang</a>&nbsp;
                    <?php endif; ?>
                        <a href="index.php?controller=orders&action=detail&id=<?php echo $rows->id; ?>"  class="">Chi tiet</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <style type="text/css">
                .pagination{padding:0px; margin:0px;}
            </style>
            <ul class="pagination">
                <li class="page-item"><a href="#" class="page-link">Trang</a></li>
                <?php for($i = 1; $i <= $numPage; $i++): ?>
                <li class="page-item"><a href="index.php?controller=orders&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a></li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
</div>